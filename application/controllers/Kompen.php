<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Kompen extends CI_Controller {

	public function index()
	{
		$data['title'] = "Check Kompen";
		if ($this->session->userdata('isLogin') == false) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('templates/noLogin');
			$this->load->view('templates/footer');			
		} else {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('Point/index');
			$this->load->view('templates/footer');
		}
	}

}

/* End of file Denda.php */

?>
