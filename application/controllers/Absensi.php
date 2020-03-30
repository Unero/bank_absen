<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

    function __construct() {
        parent::__construct();		
	}
	
	function index(){
		$this->load->model('Absensi_model');
		$data['title'] = "Absensi";
		
		if ($this->session->userdata('isLogin') == false) {
			$data['dataAbsen'] = $this->Absensi_model->tampil();
		
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('Absensi/list',$data);
			$this->load->view('templates/footer');
		} else {
			$data['pointable'] = $this->Absensi_model->tampilByUser($this->session->userdata('nim'));
			$data['dataAbsen'] = $this->Absensi_model->nonPoint($this->session->userdata('nim'));
	
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar_af_login');
			$this->load->view('Absensi/toPoint',$data);
			$this->load->view('templates/footer');
		}
	}
}

/* End of file Absensi.php */

?>
