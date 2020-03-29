<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->API="http://absensi.tugas-ti-2b.com/Api/";
        $this->load->library('curl');
	}

	public function index()
	{
		$data['title'] = "User Page";
		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/navbar_admin');
		$this->load->view('templates/footer');
	}

	public function absensi()
	{
		$data['title'] = "Absensi Page";
		$data['absensi'] = json_decode($this->curl->simple_get($this->API.'Absensi'));

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/navbar_admin');
		$this->load->view('Admin/absensi', $data);
		$this->load->view('templates/footer');
	}

	public function mahasiswa()
	{
		$data['title'] = "Mahasiswa Page";
		$data['mahasiswa'] = json_decode($this->curl->simple_get($this->API.'Mahasiswa'));

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/navbar_admin');
		$this->load->view('Admin/mahasiswa', $data);
		$this->load->view('templates/footer');
	}

	public function barang()
	{
		$this->load->model('Barang_model');

		$data['title'] = "Barang Page";
		$data['barang'] = $this->Barang_model->getAll();

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/navbar_admin');
		$this->load->view('Admin/barang', $data);
		$this->load->view('templates/footer');
	}
}

/* End of file Admin.php */

?>
