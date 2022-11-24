<?php 
	
	function get_settings(){

    $t = &get_instance();

    $t->load->model("settings_model");

    $settings = $t->settings_model->get();

    $t->session->set_userdata("settings", $settings);

    return $settings;
}




?>