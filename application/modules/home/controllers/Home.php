<?php defined('BASEPATH') or exit('No direct script access allowed');

class Home extends App_Controller
{
	public function __construct()
	{
		parent::__construct();

        $this->load->model("home/home_model");
	}




	// HOME AND BASIC PAGES
	public function index()
	{

        // $data = $this->app->data();
        // debug($data);


        // $data  = $this->glob('web_settings', 'overview', []);

        $this->load->view("home/index");
	}

	public function education()
	{
		$this->load->view("home/education");
	}

	public function experiences()
	{
		$this->load->view("home/experiences");
	}

	public function smt_event_experiences()
	{
		$this->load->view("home/smt_event_experiences");
	}

	public function air_bnb_experiences()
	{
		$this->load->view("home/air_bnb_experiences");
	}

	public function events()
	{
        $this->load->library('paging');

        $data = $this->home_model->get_gallery_photos();

        $this->paging->helper($data['page_url'], $data['total_results'], $data['limit']);

        // debug($data["photos"]->result());

        // $this->load->view("web/gallery_photos", $data);

		$this->load->view("home/events", $data);
	}


    


}
