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

	//fotoğrafları getir, fotoğraf yoksa error (default) fotoğraf
	function get_picture($path = "", $picture = "", $resolution = "50x50"){

		if($picture != ""){

			if(file_exists(FCPATH . "uploads/$path/$resolution/$picture")){
				$picture = base_url("uploads/$path/$resolution/$picture");
			} else {
				$picture = base_url("assets/admin/images/default_image.png");
			}
		} else {
			$picture = base_url("assets/admin/images/default_image.png");
		}
		return $picture;
	}

	//resim isimlendirme
	function convertToSEO($text){

		$turkce = array("ç", "Ç", "ğ", "Ğ", "ü", "Ü", "ö", "Ö", "ı", "İ", "ş", "Ş", ".", ",", "!", "'", "\"", " ", "?", "*", "_", "|", "=", "(", ")", "[", "]", "{", "}");
		$convert = array("c", "c", "g", "g", "u", "u", "o", "o", "i", "i", "s", "s", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-", "-");

		return strtolower(str_replace($turkce, $convert, $text));

	}

	//resim yükleme
	function upload_picture($file, $uploadPath, $width, $height, $name){

		$t = &get_instance();
		$t->load->library("simpleimagelib");


		if(!is_dir("{$uploadPath}/{$width}x{$height}")){
			mkdir("{$uploadPath}/{$width}x{$height}");
		}

		$upload_error = false;
		try{

			$simpleImage = $t->simpleimagelib->get_simple_image_instance();

			$simpleImage
			->fromFile($file)
			->thumbnail($width,$height,'center')
			->toFile("{$uploadPath}/{$width}x{$height}/$name", null, 75);
		
		}catch(Exception $err){
			
			$error =  $err->getMessage();
			$upload_error = true;
		}

		if($upload_error){
			echo $error;
		} else {
			return true;
		}

	}
	
?>