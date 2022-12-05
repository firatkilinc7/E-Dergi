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
		
		$our_teams = $this->our_teams_model->get_all(
			array(
				"isActive"  => 1,
			), "rank ASC"
		);
		
		$settings = $this->settings_model->get();
		
		$viewData->frontViewFolder = "front";
		$viewData->viewFolder      = "home_v";
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
	


	}
	
	