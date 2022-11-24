<?php 
	//admin panelde ayarlanan ayarlarının front tarafında kullanılması
	function get_settings(){

		$t = &get_instance();
		$t->load->model("settings_model");
		$settings = $t->settings_model->get();
		$t->session->set_userdata("settings", $settings);

		return $settings;
	}
	
	//user login olup olmadığını denetle
	function get_active_user(){

		$t = &get_instance();
		$user = $t->session->userdata("user");
		if($user){
			return $user;
		}else{
			return false;
		}
	}



?>