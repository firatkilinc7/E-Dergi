<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    public $viewFolder = "";

    public function __construct()
    {
        parent::__construct();

        $this->viewFolder = "dashboard_v";
		
		$this->load->model("blogs_model");
		$this->load->model("user_model");
		
        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index()
	{
		$blog_array_active = array();
		$blog_array_deactive = array();
		
		if(get_user_permission() < 3){
			
			$blog_array_active = array(
				"isActive"  => 1,
				"author"    => get_user_name()
			);
			
			$blog_array_deactive = array(
				"isActive"  => 0,
				"author"    => get_user_name()
			);
		}else{
			
			$blog_array_active = array(
				"isActive"  => 1,
			);
			
			$blog_array_deactive = array(
				"isActive"  => 0,
			);
		}
		
		$num_blogs_active = $this->blogs_model->get_count($blog_array_active);
		
		$num_blogs_deactive = $this->blogs_model->get_count($blog_array_deactive);
		
		$num_admin = $this->user_model->get_count(
			
			array(
				"type"  => 'admin'
			)
		);
		
		$num_author = $this->user_model->get_count(
			
			array(
				"type"  => 'author'
			)
		);
		
		$num_editor = $this->user_model->get_count(
			
			array(
				"type"  => 'editor'
			)
		);
		
		$num_anon = $this->user_model->get_count(
			
			array(
				"type"  => 'anon'
			)
		);
		
		$viewData = new stdClass();
        $viewData->viewFolder      = $this->viewFolder;
        $viewData->frontViewFolder = "admin";
		
        $viewData->num_blogs_active    = $num_blogs_active;
        $viewData->num_blogs_deactive  = $num_blogs_deactive;
        $viewData->num_admin           = $num_admin;
        $viewData->num_author          = $num_author;
        $viewData->num_editor  		   = $num_editor;
        $viewData->num_anon   		   = $num_anon;
		
		
		$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/index", $viewData);
		
	}
}
