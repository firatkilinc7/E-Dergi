<?php

class Email extends CI_Controller
{
    public $viewFolder = "";

    public function __construct()
    {

        parent::__construct();

        $this->viewFolder = "email_settings_v";

        $this->load->model("email_model");

        if(!get_active_user()){
            redirect(base_url("login"));
        }

    }

    public function index(){

        $viewData = new stdClass();

        $items = $this->email_model->get_all(
            array()
        );

        $viewData->viewFolder = $this->viewFolder;
        $viewData->subViewFolder = "list";
        $viewData->frontViewFolder = "admin";
        $viewData->items = $items;

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

        $this->form_validation->set_rules("protocol", "Protokol Numarası", "required|trim");
        $this->form_validation->set_rules("host", "E-posta Sunucusu", "required|trim");
        $this->form_validation->set_rules("port", "Port Numarası", "required|numeric|trim");
        $this->form_validation->set_rules("user_name", "Kullanıcı Adı", "required|trim");
        $this->form_validation->set_rules("user", "E-posta (User)", "required|trim|valid_email");
        $this->form_validation->set_rules("from", "Kimden Gidecek (from)", "required|trim|valid_email");
        $this->form_validation->set_rules("to", "Kime Gidecek (to)", "required|trim|valid_email");
        $this->form_validation->set_rules("password", "Şifre", "required|trim");

        $this->form_validation->set_message(
            array(
                "required"    => "<b>{field}</b> alanı doldurulmalıdır",
                "valid_email" => "Lütfen geçerli bir e-posta adresi giriniz",
                "numeric" => "<b>{field}</b>, sayısal değer içermelidir.",
            )
        );

        $validate = $this->form_validation->run();

        if($validate){

            $insert = $this->email_model->add(
                array(
                    "protocol"      => $this->input->post("protocol"),
                    "host"          => $this->input->post("host"),
                    "port"          => $this->input->post("port"),
                    "user_name"     => $this->input->post("user_name"),
                    "user"          => $this->input->post("user"),
                    "from"          => $this->input->post("from"),
                    "to"            => $this->input->post("to"),
                    "password"      => $this->input->post("password"),
                    "isActive"      => 1,
                    "createdAt"     => date("Y-m-d H:i:s")
                )
            );

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

            $this->session->set_flashdata("alert", $alert);

            redirect(base_url("settings/email"));

            die();

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

        $delete = $this->email_model->delete(
            array(
                "id"    => $id
            )
        );

        
        if($delete){

            $alert = array(
                "title" => "İşlem Başarılı",
                "text" => "Kayıt başarılı bir şekilde silindi",
                "type"  => "success"
            );

        } else {

            $alert = array(
                "title" => "İşlem Başarısız",
                "text" => "Kayıt silme sırasında bir problem oluştu",
                "type"  => "error"
            );


        }

        $this->session->set_flashdata("alert", $alert);
        redirect(base_url("settings/email"));


    }

    public function isActiveSetter($id){
		
        if($id){

            $isActive = ($this->input->post("data") === "true") ? 1 : 0;

            $this->email_model->update(
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
