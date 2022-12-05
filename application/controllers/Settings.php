<?php

class Settings extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "settings_v";

        $this->load->model("settings_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();

        $item = $this->settings_model->get();

        $viewData->item = $item;
        $viewData->subViewFolder = "update";
        $viewData->frontViewFolder = "admin";
        $viewData->viewFolder = $this->viewFolder;

        $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
    }


    public function update_form($id){

        $viewData = new stdClass();

        $item = $this->settings_model->get(
            array(
                "id"    => $id,
            )
        );
        
        $viewData->item = $item;
        $viewData->subViewFolder = "update";
        $viewData->frontViewFolder = "admin";
        $viewData->viewFolder = $this->viewFolder;

        $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);


    }

    public function update($id){

        $this->load->library("form_validation");

        $this->form_validation->set_rules("company_name", "Şirket Adı", "required|trim");
        $this->form_validation->set_rules("phone_1", "Telefon 1", "required|trim");
        $this->form_validation->set_rules("email", "E-posta Adresi", "required|trim|valid_email");

        $this->form_validation->set_message(
            array(
                "required"  => "<b>{field}</b> alanı doldurulmalıdır",
                "valid_email"  => "Lütfen geçerli bir <b>{field}</b> giriniz"
            )
        );

        $validate = $this->form_validation->run();

        if($validate){


            $data = array(
                "company_name"     => $this->input->post("company_name"),
                "phone_1"          => $this->input->post("phone_1"),
                "phone_2"          => $this->input->post("phone_2"),
                "whatsapp"         => $this->input->post("whatsapp"),
                "footer_title"     => $this->input->post("footer_title"),
                "address"          => $this->input->post("address"),
				"about_us"         => $this->input->post("about_uss"),
                "about_ush2"       => $this->input->post("about_ush2"),
                "about_footer"     => $this->input->post("about_footer"),
                "slogan"           => $this->input->post("slogan"),
                "email"            => $this->input->post("email"),
                "facebook"         => $this->input->post("facebook"),
                "youtube"          => $this->input->post("youtube"),
                "instagram"        => $this->input->post("instagram"),
                "linkedin"         => $this->input->post("linkedin"),
                "updatedAt"        => date("Y-m-d H:i:s")
            );

            if($_FILES["about_img_url"]["name"] !== "") {

                $file_name = convertToSEO($this->input->post("company_name")) . "." . pathinfo($_FILES["about_img_url"]["name"], PATHINFO_EXTENSION);

                $image_830x700 = upload_picture($_FILES["about_img_url"]["tmp_name"], "uploads/admin/$this->viewFolder",830,700, $file_name);

                if($image_830x700){

                    $data["about_img_url"] = $file_name;

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "Hakkımızda görseli yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("settings/update_form/$id"));

                    die();

                }

            }

            if($_FILES["logo"]["name"] !== "") {

                $file_name = convertToSEO($this->input->post("company_name")) . "." . pathinfo($_FILES["logo"]["name"], PATHINFO_EXTENSION);

                $image_263x126 = upload_picture($_FILES["logo"]["tmp_name"], "uploads/admin/$this->viewFolder",263,126, $file_name);

                if($image_263x126){

                    $data["logo"] = $file_name;

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "Masaüstü görseli yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("settings/update_form/$id"));

                    die();

                }

            }

            if($_FILES["favicon"]["name"] !== "") {

                $file_name = convertToSEO($this->input->post("company_name")) . "." . pathinfo($_FILES["favicon"]["name"], PATHINFO_EXTENSION);

                $image_32x32 = upload_picture($_FILES["favicon"]["tmp_name"], "uploads/admin/$this->viewFolder",32,32, $file_name);

                if($image_32x32){

                    $data["favicon"] = $file_name;

                } else {

                    $alert = array(
                        "title" => "İşlem Başarısız",
                        "text"  => "Favicon görseli yüklenirken bir problem oluştu",
                        "type"  => "error"
                    );

                    $this->session->set_flashdata("alert", $alert);

                    redirect(base_url("settings/update_form/$id"));

                    die();

                }

            }

            $update = $this->settings_model->update(array("id" => $id), $data);

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

            $settings = $this->settings_model->get();
            $this->session->set_userdata("settings", $settings);
			
            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings"));

        } else {

            $viewData = new stdClass();

            $viewData->viewFolder = $this->viewFolder;
            $viewData->subViewFolder = "update";
            $viewData->frontViewFolder = "admin";
            $viewData->form_error = true;

            $viewData->item = $this->settings_model->get(
                array(
                    "id"    => $id,
                )
            );

            $this->load->view("{$viewData->frontViewFolder}/{$viewData->viewFolder}/{$viewData->subViewFolder}/index", $viewData);
        }

    }

}
