<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login(){
		$data['title'] = "Login";
		$this->load->view('templates/header', $data);
		$this->load->view('User/login');
		$this->load->view('templates/footer');
	}

	public function login_proses(){
		$this->load->model('Login_model');
		$username = htmlspecialchars($this->input->post('username'));
		$password = htmlspecialchars($this->input->post('password'));
		$ceklogin = $this->Login_model->login($username, $password);
		
		if ($ceklogin) {
			foreach ($ceklogin as $row);
			$this->session->set_userdata('user', $row->username);
			$this->session->set_userdata('type', $row->type);
			$this->session->set_userdata('isLogin', true);

			if ($this->session->userdata('type') == "1") {
				redirect('User/profile');
			} elseif ($this->session->userdata('type') == "2") {
				redirect('Admin');
			}
		} else {
			$data['pesan'] = "Username dan Password anda salah / akun sedang dinonaktifkan";
			$data['title'] = "Login";
			$this->load->view('templates/header', $data);
			$this->load->view('User/login', $data);
			$this->load->view('templates/footer');	
		}
	}

	public function logout(){
		if ($this->session->userdata('isLogin') == false) {
			redirect('User/login','refresh');
		}
		
		$this->session->sess_destroy();
		redirect('User/login','refresh');
	}

	public function register(){
		$this->load->view('templates/header');
		$this->load->view('User/register');
		$this->load->view('templates/footer');
	}

	public function profile(){
		if ($this->session->userdata('isLogin') == false) {
			redirect('User/login','refresh');
		}
		
		$this->load->model('Profile_model');
		$data['profile']=$this->Profile_model->getUser($this->session->userdata('user'));
		$data['title'] = "Profile Page";

		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('User/profile', $data);
		$this->load->view('templates/footer');
	}

}

/* End of file User.php */

?>
