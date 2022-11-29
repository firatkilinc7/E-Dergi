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
	
	/*
	 *
	 * USER YETKİSİNİ GETİR
	 * Return Değerleri;
	 * 1-> Anon
	 * 2-> Editör
	 * 3-> Admin
	 *
	 */
	
	function get_user_permission(){
		
		$t = &get_instance();
		
		$user = $t->session->userdata('user');
		if($user->type==="anon"){
			return '1';
		}else if($user->type==="editor"){
			return '2';
		}else if($user->type==="admin"){
			return '3';
		}else{
			return null;
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
	
	//email gönderme servisi
	function send_email($toEmail = "", $subject = "26-40-62 SOFT", $message = ""){

    $t = &get_instance();

    $t->load->model("email_model");

    $email_settings = $t->email_model->get(
        array(
            "isActive"  => 1
        )
    );

    if(empty($toEmail))
        $toEmail = $email_settings->to;

     $config = array(

        "protocol"   => $email_settings->protocol,
        "smtp_host"  => $email_settings->host,
        "smtp_port"  => $email_settings->port,
        "smtp_user"  => $email_settings->user,
        "smtp_pass"  => $email_settings->password,
        "starttls"   => true,
        "charset"    => "utf-8",
        "mailtype"   => "html",
        "wordwrap"   => true,
        "newline"    => "\r\n"
    );

    $t->load->library("email", $config);

    $t->email->from($email_settings->from, $email_settings->user_name);
    $t->email->to($toEmail);
    $t->email->subject($subject);
    $t->email->message($message);

    return $t->email->send();
    
}
?>