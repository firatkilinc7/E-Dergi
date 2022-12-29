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
		
		//YAZILARIN COOKIE YARDIMIYLA GORUNTULENMESI
		$post_id = $viewData->blog->id;
		$post_view = $viewData->blog->viewCount;
		
		if(isset($_COOKIE['read_articles'])) {

			$read_articles = json_decode($_COOKIE['read_articles'], true);
			if(isset($read_articles[$post_id]) AND $read_articles[$post_id] == 1) {
				//zaten okunmus
			} else {
				
				$post_view++;
				$read_articles[$post_id] = 1;

				setcookie("read_articles",json_encode($read_articles),time()+60*60*24);  

			}

		} else {
			
			$post_view++;

			$read_articles = Array(); 
			$read_articles[$post_id] = 1;
			setcookie("read_articles",json_encode($read_articles),time()+60*60*24);      

		}
		
		$data_count = array(
			"viewCount"   => $post_view
        );
		$update = $this->blogs_model->update(array("id" => $post_id), $data_count);
		
		if ( empty( $viewData->blog ) === true ){
			$viewData = new stdClass();
			$viewData->viewFolder = "page_404";
			$viewData->frontViewFolder = "front";
			
			$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}", $viewData);
		}
		
		$items = $this->blogs_model->get_all(
            array(
			
				"isActive" => 1,
			
			), "createdAt desc"
        );
		
		$viewData->items = $items;


		$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}", $viewData);

	}

	public function about_us(){

			$this->load->model("our_teams_model");
			$our_teams = $this->our_teams_model->get_all(
				array(
					"isActive"  => 1, "rank ASC"
				),
			);
			
			$viewData = new stdClass();
			$viewData->viewFolder = "about_us_v";
			$viewData->frontViewFolder = "front";

			$viewData->our_teams = $our_teams;

			$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}", $viewData);

		}
	
	public function blogs(){
		
		$this->load->model("blogs_model");
		
		$blogs = $this->blogs_model->get_all(
            array(
				
				"isActive" => 1,
				
			), "createdAt DESC"
        );
		
		$items = $this->blogs_model->get_all(
            array(
			
				"isActive" => 1,
			
			), "createdAt desc"
        );
		
		
		
		$viewData = new stdClass();
		$viewData->viewFolder = "blog_list_v";
		$viewData->frontViewFolder = "front";
		$viewData->items = $items;
		$viewData->blogs = $blogs;

		$this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}", $viewData);
		
	}
	
	public function party_mode($mode){

		$this->load->model("settings_model");
		
			
			$data = array(
                "party_mode"  => $mode ? "0" : "1",
            );
			$update = $this->settings_model->update(array("id" => "4"), $data);
		
	}
	
}
	
	