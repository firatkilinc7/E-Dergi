<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

	public function __construct()
	{
		parent::__construct();


		$dil=$this->session->userdata('lang');	
		
		if (!$dil) {
			$dil=$this->session->set_userdata('lang','tr');
			$this->lang->load('tr','tr');
		} else{
			$this->lang->load($dil,$dil);
		}	

	}



}

/* End of file MY_Controller.php */
/* Location: ./application/core/MY_Controller.php */ ?>