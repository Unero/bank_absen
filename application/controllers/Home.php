<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title'] = "Selamat datang di Bank-Absen";
		
		$this->load->view('templates/header', $data);
		if ($this->session->userdata('isLogin') == false) {
			$this->load->view('templates/navbar');
		} else {
			$this->load->view('templates/navbar_af_login');
		}
		$this->load->view('index');
		$this->load->view('templates/footer');
		
	}
}

/* End of file Home.php */

?>
