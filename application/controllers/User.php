<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login(){
		$this->load->view('templates/header');
		$this->load->view('User/login');
		$this->load->view('templates/footer');
	}

	public function login_proses(){
		redirect('User/profile','refresh');
	}

	public function logout(){
		redirect('User/login','refresh');
	}

	public function register(){
		$this->load->view('templates/header');
		$this->load->view('User/register');
		$this->load->view('templates/footer');
	}

	public function profile(){
		$this->load->view('templates/header');
		$this->load->view('templates/navbar');
		$this->load->view('templates/footer');
	}

}

/* End of file User.php */

?>
