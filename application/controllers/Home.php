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
				

		$viewData->viewFolder   = "home_v";
		$viewData->frontViewFolder = "front";

		$this->load->view("front/home_v");


	}

	


	}
	
	