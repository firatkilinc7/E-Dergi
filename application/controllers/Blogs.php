<?php

class Blogs extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "blogs_v";

        $this->load->model("blogs_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();

        $items = $this->blogs_model->get_all(
            array(), "rank ASC"
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->frontViewFolder = "admin";
        $viewData->items = $items;

        $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
	
	public function rankSetter(){


		$data = $this->input->post("data");

		parse_str($data, $order);

		$items = $order["ord"];

		foreach ($items as $rank => $id){

			$this->blogs_model->update(
				array(
					"id"        => $id,
					"rank !="   => $rank
				),
				array(
					"rank"      => $rank
				)
			);
		}
	}

	
	public function isActiveSetter($id){

		if($id){

			$isActive = ($this->input->post("data") === "true") ? 1 : 0;

			$this->blogs_model->update(
				array(
					"id"    => $id
				),
				array(
					"isActive"  => $isActive
				)
			);
		}
	}

}
