<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home_model extends App_Controller {

    private $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }


    public function get_gallery_photos()
    {
        $data               = [];
        $where              = [];


        # URL & PAGINATION DATA
        $limit              = 16;
        $offset             = (isset($_GET['page']) && is_numeric($_GET['page'])) ? ($limit * trim($_GET['page']) - $limit) : 0;
        $page_url           = base_url("gallery");


        # TOTAL ROWS
        $this->ci->db->from('gallery_photos');
        $this->ci->db->where($where);

        $data['total_results']   = $this->ci->db->get()->num_rows();



        # ALL RESULTS QUERY
        $this->ci->db->select("*");
        $this->ci->db->from('gallery_photos');
        $this->ci->db->order_by("id", 'desc');
        $this->ci->db->where($where);
        $this->ci->db->limit($limit, $offset);

        $data['photos']   = $this->ci->db->get();


        # EXPORT OTHER DATA

        $data['limit']              = $limit;
        $data['offset']             = $offset;
        $data['page_url']           = $page_url;
        // $data['get_status']         = $get_status;

        return $data;
    }



}
