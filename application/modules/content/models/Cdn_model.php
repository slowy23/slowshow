<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cdn_model extends App_Controller {

    private $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }


    /*
    * Crop photo
    */
    public function crop($imgSrc, $thumbnail_width, $thumbnail_height)
    {
        //$imgSrc is a FILE - Returns an image resource.
        //getting the image dimensions
        list($width_orig, $height_orig) = getimagesize($imgSrc);

        $what = getimagesize($imgSrc);
        switch(strtolower($what['mime']))
        {
            case 'image/png':
                $myImage = imagecreatefrompng($imgSrc);
                break;
            case 'image/jpeg':
                $myImage = imagecreatefromjpeg($imgSrc);
                break;
            case 'image/gif':
                $myImage = imagecreatefromgif($imgSrc);
                break;
            default: $myImage = imagecreatefrompng($imgSrc);
        }


        $ratio_orig = $width_orig/$height_orig;

        if($thumbnail_width/$thumbnail_height > $ratio_orig) {
           $new_height = $thumbnail_width/$ratio_orig;
           $new_width = $thumbnail_width;
        }else{
           $new_width = $thumbnail_height*$ratio_orig;
           $new_height = $thumbnail_height;
        }

        $x_mid = $new_width/2;  //horizontal middle
        $y_mid = $new_height/2; //vertical middle

        $process = imagecreatetruecolor(round($new_width), round($new_height));

        imagecopyresampled($process, $myImage, 0, 0, 0, 0, $new_width, $new_height, $width_orig, $height_orig);
        $thumb = imagecreatetruecolor($thumbnail_width, $thumbnail_height);
        imagecopyresampled($thumb, $process, 0, 0, ($x_mid-($thumbnail_width/2)), ($y_mid-($thumbnail_height/2)), $thumbnail_width, $thumbnail_height, $thumbnail_width, $thumbnail_height);


        imagedestroy($process);
        imagedestroy($myImage);
        return $thumb;
    }



    /*
    * Preview photo
    */
    public function preview($file_path, $get_size)
    {
        header('Content-type: image/webp');

        if($get_size == 'full')
        {
            echo file_get_contents($file_path);
        }
        else
        {
            $newThumb = $this->crop(
                $file_path,
                $this->get_size($get_size)->width,
                $this->get_size($get_size)->height
            );

            imagejpeg($newThumb);
        }
    }



    public function is_file_exist($file_dir)
    {
        return file_exists($file_dir);
    }



    public function get_size($size)
    {
        $size  = explode('x', $size);

        if(is_array($size) && array_key_exists(0, $size) && array_key_exists(1, $size))
        {
            return json_decode(json_encode(array('height' => $size[0], 'width' => $size[1])));
        }
        else { return 'full'; }
    }



}
