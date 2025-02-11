<?php defined('BASEPATH') OR exit('No direct script access allowed');

Class Paging {

    private $ci;

    function __construct()
    {
        $this->ci = &get_instance();
    }
    
    public function helper($url, $total_row, $per_page)
    {
        $this->ci->load->library('pagination');

        $config['base_url']         = $url;
        $config['total_rows']       = $total_row;
        $config['per_page']         = $per_page;
        
        //$config['num_links']      = 5;
       
        $config['page_query_string']= TRUE;
        $config['query_string_segment'] = 'page';
        
        $config['use_page_numbers'] = TRUE;

        $config['full_tag_open']    = '<ul class="pagination">';
        $config['full_tag_close']   = '</ul>'; 
        $config['prev_link']        = '&laquo;';
        $config['prev_tag_open']    = '<li>';
        $config['prev_tag_close']   = '</li>';
        $config['next_link']        = '&raquo;';
        $config['next_tag_open']    = '<li>';
        $config['next_tag_close']   = '</li>';
        $config['cur_tag_open']     = '<li class="active"><a href="javascript:void(0)">';
        $config['cur_tag_close']    = '</a></li>';
        $config['num_tag_open']     = '<li>';
        $config['num_tag_close']    = '</li>';
        $config['first_link']       = FALSE;
        $config['last_link']        = FALSE;

        $this->ci->pagination->initialize($config);

    }

}
