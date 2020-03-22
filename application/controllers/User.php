<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login(){
		$this->load->view('User/login');
	}

	public function logout(){
		echo "ini halaman logout";
	}

	public function register(){
		echo "ini halaman register";
	}

	public function profile(){
		echo "ini halaman profile";
	}

}

/* End of file User.php */

?>
