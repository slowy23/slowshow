<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cdn extends App_Controller {

    public function __construct()
    {
        parent:: __construct();

        $this->load->model('content/cdn_model');
    }

    
    // iStock
    public function export_image()
    {
        // MANAGE IMAGE
        $get_image = $this->uri->segment(2);

        
        // MANAGE SIZE
        $size = isset($_GET["size"]) ? $_GET["size"] : null;

        $sizes = [
            "xs"     => "90x90",
            "sm"     => "120x120",
            "md"     => "320x320",
            "lg"     => "450x450",
            "xl"     => "600x600",
            "full"   => "full",
        ];

        $get_size = array_key_exists($size, $sizes) ? $sizes[$size] : $sizes["sm"];

        


        // MANAGE DIRECTORY
        // MANAGE FILE TYPE
        $type = isset($_GET["type"]) ? $_GET["type"] : null;

        $types = [
            "profile"   => "users",
            "client"    => "testimonials",
            "gallery"   => "gallery",
        ];
        
        $get_type = array_key_exists($type, $types) ? $types[$type] : null;


        // DEFAULT PLACEHOLDER
        $placeholder    = CDN_DIR. DS . "placeholder.jpg";

        if(in_array($type, ["profile", "client"])){
            $placeholder    = CDN_DIR. DS . "avatar.png";
        }


        // FILE PATH
        $file_path      = $placeholder;

        

        // MANAGE FILE DIRECTORY
        if($get_type !== null && $get_image)
        {
            $file_path = CDN_DIR . DS . $get_type . DS . $get_image;

            if(!$this->cdn_model->is_file_exist($file_path))
            {   
                $file_path =  $placeholder;
            }
        }


        // PREVIEW
        return $this->cdn_model->preview($file_path, $get_size);

    }



}
