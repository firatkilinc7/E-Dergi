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

    public function index($parametr=""){

        $viewData = new stdClass();
		
		
		if(get_user_permission() < 3){
			
			$items = $this->blogs_model->get_all(
				array(
					"author"    => get_user_name()
				)
			);	
		}else{

			if($parametr == ""){
			
				$items = $this->blogs_model->get_all(
					array(), "rank ASC"
				);		
			}else{
				
				if($parametr == 0 or $parametr == 1){
					$items = $this->blogs_model->get_all(
						array(
							"isActive"  => $parametr
						)
					);
				}else{
				
					$items = $this->blogs_model->get_all(
						array(
							"author"  => $parametr
						)
					);
				}
			}
		
		
		}

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->frontViewFolder = "admin";
		$viewData->parametr = $parametr;
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
                "text"  => "Lütfen bir görsel seçiniz",
                "type"  => "error"
            );

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("blogs/new_form"));

            die();
        }

        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        $validate = $this->form_validation->run();

        if($validate){

            $benzersizsayi1=rand(20000,32000);
            $benzersizsayi2=rand(20000,32000);
            $benzersizad=$benzersizsayi1.$benzersizsayi2;

            $file_name = $benzersizad.".".convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

            $image_1920x1080 = upload_picture($_FILES["img_url"]["tmp_name"], "uploads/admin/$this->viewFolder",1920,1080, $file_name);
          
			
			
            if($image_1920x1080 ){

                $insert = $this->blogs_model->add(
                    array(
                        "title"         => $this->input->post("title"),
                        "description"   => $this->input->post("description"),
                        "url"           => rtrim(convertToSEO($this->input->post("title"))),
                        "img_url"       => $file_name,
                        "rank"          => 0,
                        "isActive"      => get_user_permission() == 1 ? 0: 1,
                        "createdAt"     => date("Y-m-d H:i:s"),
                        "author"        => $this->session->userdata('user')->user_name
                    )
                );

                if($insert){

                    $alert = array(
                        "title" => "İşlem Başarılı",
                        "text" => "Kayıt başarılı bir şekilde eklendi",
                        "type"  => "success"
                    );
					
					if(get_user_permission() == 1){
						
						$message = "\"<b>".get_user_name()."</b>\" adlı kullanıcı \"<b>".$this->input->post("title")."</b>\" adında yeni bir yazı ekledi ve onay bekliyor. Bilgilerinize sunar, iyi günler dilerim.";
					
						send_telegram_message($message);
						
					}

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

                redirect(base_url("blogs/new_form"));

                die();

            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("blogs"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "add";
            $viewData->frontViewFolder = "admin";
            $viewData->form_error = true;

            $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }
	
	
	public function delete($id){

		$fileName = $this->blogs_model->get(
			array(
				"id"    => $id
			)
		);
		
		if(get_user_permission() < 3 and get_user_name() != $fileName->author){
			
			$alert = array(
					"title" => "İşlem Başarısız",
					"text"  => "Sadece Kendi Yazılarınızı Silebilirsiniz.",
					"type"  => "error"
			);
			
			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("blogs"));
		}
		
		
		$delete = $this->blogs_model->delete(
			array(
				"id"    => $id
			)
		);

		if($delete){

			unlink("uploads/admin/{$this->viewFolder}/1920x1080/$fileName->img_url");

			$alert = array(
				"title" => "İşlem Başarılı",
				"text"  => "Kayıt başarılı bir şekilde silindi",
				"type"  => "success"
			);

		} else {

			$alert = array(
				"title" => "İşlem Başarısız",
				"text"  => "Kayıt silme sırasında bir problem oluştu",
				"type"  => "error"
			);
		}
	
		$this->session->set_flashdata("alert", $alert);
		redirect(base_url("blogs"));
	
	}
	
	
	public function update_form($id){

        $viewData = new stdClass();

        $item = $this->blogs_model->get(
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

        $oldFileName = $this->blogs_model->get(
            array(
                "id"    => $id
            )
        );
		
		
		if(get_user_permission() < 3 and get_user_name() != $oldFileName->author){
			
			$alert = array(
					"title" => "İşlem Başarısız",
					"text"  => "Sadece Kendi Yazılarınızı Düzenleyebilirsiniz.",
					"type"  => "error"
			);
			
			$this->session->set_flashdata("alert", $alert);
			redirect(base_url("blogs"));
		}
			
        $this->form_validation->set_rules("title", "Başlık", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır"
            )
        );

        $validate = $this->form_validation->run();

        if($validate){

            if($_FILES["img_url"]["name"] !== "") {

                $benzersizsayi1=rand(20000,32000);
                $benzersizsayi2=rand(20000,32000);
                $benzersizad=$benzersizsayi1.$benzersizsayi2;

                $file_name = $benzersizad.".".convertToSEO(pathinfo($_FILES["img_url"]["name"], PATHINFO_FILENAME)) . "." . pathinfo($_FILES["img_url"]["name"], PATHINFO_EXTENSION);

				$image_1920x1080 = upload_picture($_FILES["img_url"]["tmp_name"], "uploads/admin/$this->viewFolder",1920,1080, $file_name);
               
                if($image_1920x1080){

                    unlink("uploads/admin/{$this->viewFolder}/1920x1080/$oldFileName->img_url");

                    $data = array(
                        "title" => $this->input->post("title"),
                        "description" => $this->input->post("description"),
                        "url" => rtrim(convertToSEO($this->input->post("title"))),
                        "img_url" => $file_name,
                    );

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "Görsel yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("blogs/update_form/$id"));

                    die();
                }

            } else {

                $data = array(
                    "title" 	  => $this->input->post("title"),
                    "description" => $this->input->post("description"),
                    "url"         => rtrim(convertToSEO($this->input->post("title"))),
                );
            }

            $update = $this->blogs_model->update(array("id" => $id), $data);

            if($update){

                $alert = array(
                    "title" => "İşlem Başarılı",
                    "text"  => "Kayıt başarılı bir şekilde güncellendi",
                    "type"  => "success"
                );

            } else {

                $alert = array(
                    "title" => "İşlem Başarısız",
                    "text"  => "Kayıt Güncelleme sırasında bir problem oluştu",
                    "type"  => "error"
                );
            }

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("blogs"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->form_error = true;
            $viewData->frontViewFolder = "admin";

            $viewData->item = $this->blogs_model->get(
                array(
                    "id"    => $id,
                )
            );
            $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);

        }

    }
	
	
}
