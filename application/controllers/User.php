<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function login(){

		if ($this->session->userdata('isLogin')) {
			redirect('Home','refresh');
		} else {
			$data['title'] = "Login";
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('User/login');
			$this->load->view('templates/footer');
		}
	}

	public function register()
	{
		if ($this->session->userdata('isLogin')) {
			redirect('Home','refresh');
		} else {
			$this->load->model('Regist_model');
			
			$data['title'] = "Halaman Register";
			$data['nim'] = $this->Regist_model->getNIM();
			$data['kelas'] = $this->Regist_model->getKelas();
			
			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar');
			$this->load->view('User/register', $data);
			$this->load->view('templates/footer');
		}
	}

	public function register_ps(){
		$this->load->model('Regist_model');
		
		if ($this->input->post()) {
			$data['username'] = htmlspecialchars($this->input->post('username'));
			$data['password'] = htmlspecialchars($this->input->post('password'));
			$data['nim'] = htmlspecialchars($this->input->post('nim'));
			$data['nama'] = htmlspecialchars($this->input->post('nama'));
			$data['kelas'] = htmlspecialchars($this->input->post('kelas'));
			
			if ($this->Regist_model->getUsername($data['username']) >= 1) {
				$data['pesan'] = "Akun sudah ada";
				$data['title'] = "Register";
				$this->load->view('templates/header', $data);
				$this->load->view('User/register', $data);
				$this->load->view('templates/footer');
			} else {
				$createUser = $this->Regist_model->createUser($data);
				if ($createUser) {
					redirect('User/login','refresh');
				}
			}

		} else {
			redirect('User/register','refresh');
		}
	}


	public function login_proses(){
		if ($this->session->userdata('isLogin')) {
			redirect('Home','refresh');
		} else {
			$this->load->model('Login_model');
			$username = htmlspecialchars($this->input->post('username'));
			$password = htmlspecialchars($this->input->post('password'));
			$ceklogin = $this->Login_model->login($username, $password);
			
			if ($ceklogin) {
				foreach ($ceklogin as $row);
				$this->session->set_userdata('user', $row->username);
				$this->session->set_userdata('type', $row->type);
				$this->session->set_userdata('nim', $row->nim);
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
	}

	public function logout(){
		if ($this->session->userdata('isLogin') == false) {
			redirect('User/login','refresh');
		} else {
			$this->session->sess_destroy();
			redirect('User/login','refresh');
		}
	}

	public function profile(){
		if ($this->session->userdata('isLogin') == false) {
			redirect('User/login','refresh');
		}
		
		$this->load->model('Profile_model');
		$data['profile']=$this->Profile_model->getUser($this->session->userdata('user'));
		$data['title'] = "Profile Page";

		$this->load->view('templates/header', $data);
		if ($this->session->userdata('isLogin') == false) {
			$this->load->view('templates/navbar');
		} else {
			$this->load->view('templates/navbar_af_login');
		}
		$this->load->view('User/profile', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file User.php */

?>
