<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['title'] = "Selamat datang di Bank-Absen";
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('index');
		$this->load->view('templates/footer');
		
	}
}

/* End of file Home.php */

?>
