<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

	public function index()
	{
		$data['title'] = "History Page";
		$data['users'] = $this->History_model->getAll();

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/navbar_admin');
		$this->load->view('Admin/history', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file History.php */

?>
