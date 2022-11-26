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


}
