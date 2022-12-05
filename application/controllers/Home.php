<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public $viewFolder = "";


	public function __construct()
	{
		parent::__construct();

		$this->viewFolder = "homepage";
		$this->load->helper("text");

	}

	public function index(){

		$viewData = new stdClass();
		
		$this->load->model("our_teams_model");
		$this->load->model("settings_model");
		$this->load->model("blogs_model");
		
		$our_teams = $this->our_teams_model->get_all(
			array(
				"isActive"  => 1,
			), "rank ASC"
		);
		
		$settings = $this->settings_model->get();
		
		$articles = $this->blogs_model->get_all(
			array(
				"isActive"  => 1,
			),
		);
		
		$viewData->frontViewFolder = "front";
		$viewData->viewFolder      = "home_v";
		
		$viewData->articles        = $articles;
		$viewData->settings        = $settings;
		$viewData->our_teams       = $our_teams;
		
		$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}", $viewData);

	}
	
	public function error_page(){

		$viewData = new stdClass();
		$viewData->viewFolder = "page_404";
		$viewData->frontViewFolder = "front";


		$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}", $viewData);

	}
	

	public function blog_detail($url = ""){

		$viewData = new stdClass();
		$viewData->viewFolder = "blog_v";
		$viewData->frontViewFolder = "front";
		

		$this->load->model("blogs_model");

		$viewData->blog = $this->blogs_model->get(
			array(
				"isActive"  => 1,
				"url"       => $url
			)
		);
		
		if ( empty( $viewData->blog ) === true ){
			$viewData = new stdClass();
			$viewData->viewFolder = "page_404";
			$viewData->frontViewFolder = "front";
			
			$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}", $viewData);
		}
		
		$items = $this->blogs_model->get_all(
            array(), "createdAt desc"
        );
		
		$viewData->items = $items;


		$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}", $viewData);

	}

}
	
	