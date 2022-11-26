<?php

class Teams extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "teams_v";

        $this->load->model("our_teams_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }


    public function index(){

        $viewData = new stdClass();

        $teams = $this->our_teams_model->get_all(
            array(), "rank ASC"
        );
		
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->frontViewFolder = "admin";
        $viewData->teams = $teams;

        $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }
	
	
	public function new_form(){

        $viewData = new stdClass();

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "add";
        $viewData->frontViewFolder = "admin";


        $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }
	
	
	public function save(){

        $this->load->library("form_validation");
		
        if($_FILES["img_url"]["name"] == ""){

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Lütfen bir görsel seçiniz",
                "type"  => "error"
            );

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("teams/add"));
            die();
        }
		
		
        $this->form_validation->set_rules("name", "Ad Soyad", "required|trim");
        $this->form_validation->set_rules("role", "Rol", "required|trim");
        $this->form_validation->set_rules("rank", "Rank", "required|numeric|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır.",
                "numeric"  => "<b>{field}</b> alanı sayısal değer içermelidir."
            )
        );

        $validate = $this->form_validation->run();
		
        if($validate){
			
			
            $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

            $image_900x600 = upload_picture($_FILES["img_url"]["tmp_name"], "uploads/admin/$this->viewFolder",900,600, $file_name);

            if($image_900x600){

                $insert = $this->our_teams_model->add(
                    array(
                        "name"      => $this->input->post("name"),
                        "role"   	=> $this->input->post("role"),
                        "img_url"   => $file_name,
                        "rank"      => $this->input->post("rank"),
                        "isActive"  => 1,
                        "createdAt" => date("Y-m-d H:i:s")
                    )
                );

                // TODO Alert sistemi eklenecek...
                if($insert){

                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Kayıt başarılı bir şekilde eklendi",
                        "type"  => "success"
                    );

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Kayıt Ekleme sırasında bir problem oluştu",
                        "type"  => "error"
                    );
                }

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Görsel yüklenirken bir problem oluştu",
                    "type"  => "error"
                );

                $this->session->set_flashdata("alert", $alert);

                redirect(base_url("teams/add"));

                die();

            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("teams"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->frontViewFolder = "admin";
            $viewData->form_error = false;
			
            $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }
	

	public function delete($id){

       $fileName = $this->our_teams_model->get(
			array(
				"id"    => $id
			)
		);

       $delete = $this->our_teams_model->delete(
			array(
				"id"    => $id
			)
		);

        
		if($delete){

			unlink("uploads/admin/{$this->viewFolder}/900x600/$fileName->img_url");


			$alert = array(
				"title" => "İşlem Başarılı",
				"text" => "Kayıt başarılı bir şekilde silindi",
				"type"  => "success"
			);

		} else {

			$alert = array(
				"title" => "İşlem Başarılı",
				"text" => "Kayıt silme sırasında bir problem oluştu",
				"type"  => "error"
			);
		}

		$this->session->set_flashdata("alert", $alert);
		redirect(base_url("teams"));

	}

	
	public function update_form($id){

        $viewData = new stdClass();
		
        $item = $this->our_teams_model->get(
            array(
                "id"    => $id,
            )
        );
        
        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "update";
        $viewData->frontViewFolder = "admin";

        $viewData->item = $item;
        $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

    }
	
	
	public function update($id){

        $this->load->library("form_validation");

        $oldFileName = $this->our_teams_model->get(
            array(
                "id"    => $id
            )
        );

        $this->form_validation->set_rules("name", "Ad Soyad", "required|trim");
        $this->form_validation->set_rules("role", "Rol", "required|trim");
        $this->form_validation->set_rules("rank", "Rank", "required|numeric|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır.",
                "numeric"  => "<b>{field}</b> alanı sayısal değer içermelidir."
            )
        );

        $validate = $this->form_validation->run();

        if($validate){


            if($_FILES["img_url"]["name"] !== "") {

                $file_name = convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

                $image_900x600 = upload_picture($_FILES["img_url"]["tmp_name"], "uploads/back/$this->viewFolder",900,600, $file_name);


                if($image_900x600){

                    unlink("uploads/back/{$this->viewFolder}/900x600/$oldFileName->img_url");

                    $data = array(
						 "name"     => $this->input->post("name"),
						 "role"     => $this->input->post("role"),
						 "img_url"  => $file_name,
						 "rank"     => $this->input->post("rank"),
					);

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text" => "Görsel yüklenirken bir problem oluştus",
                        "type" => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("teams/update_form/$id"));

                    die();

                }

            } else {

				$data = array(
                   "name"   => $this->input->post("name"),
                   "role"   => $this->input->post("role"),
                   "rank"   => $this->input->post("rank"),
				);

            }

            $update = $this->our_teams_model->update(array("id" => $id), $data);

            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text" => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text" => "Kayıt Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }


            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("teams"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->frontViewFolder = "admin";


            $viewData->item = $this->our_teams_model->get(
                array(
                    "id"    => $id,
                )
            );
            $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

        }

    }















}
