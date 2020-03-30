<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->API="http://absensi.tugas-ti-2b.com/Api/";
		$this->load->library('curl');
		$this->load->model('Admin_model');
		$this->load->model('User_model');
	}

	public function index()
	{
		$data['title'] = "User Page";
		$data['users'] = $this->User_model->getUser();

		$this->load->view('templates/header_admin', $data);
		$this->load->view('templates/navbar_admin');
		$this->load->view('Admin/user', $data);
		$this->load->view('templates/footer');
	}

	public function activate($id){
		$this->User_model->activateUser($id);
		redirect('Admin','refresh');
	}

	public function disable($id){
		$this->User_model->disableUser($id);
		redirect('Admin','refresh');
	}

	public function absensi()
	{
		$data['title'] = "Absensi Page";
		$data['absensi'] = json_decode($this->curl->simple_get($this->API.'Absensi'));
		print_r($this->Admin_model->checkId('22') == 1);

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

	public function save($target_table){
		if ($target_table == 'mahasiswa') {
			$data = json_decode($this->curl->simple_get($this->API.'Mahasiswa'));
			foreach ($data as $data) {
				if ($this->Admin_model->checkNama($data->nama_mhs) == 1) {
					$message = $data->nama_mhs." sudah ada";
					echo "<script type='text/javascript'>alert('$message');</script>";
					continue;
				} else {
					$insert_data = array(
						'nim' => $data->nim,
						'nama_mhs' => $data->nama_mhs,
						'kelas' => $data->kelas,
						'jurusan' => $data->jurusan,
					);
					$this->Admin_model->mhs($insert_data);
				}
			}
			redirect('Admin/mahasiswa','refresh');
		} elseif ($target_table == 'absensi') {
			$data = json_decode($this->curl->simple_get($this->API.'Absensi'));
			foreach ($data as $data) {
				if ($this->Admin_model->checkId($data->id) == 1) {
					$message = "Id ".$data->id." sudah ada";
					echo "<script type='text/javascript'>alert('$message');</script>";
					continue;
				} else {
					$insert_data = array(
						'id' => $data->id,
						'matkul' => $data->matkul,
						'dosen' => $data->dosen,
						'mahasiswa' => $data->mahasiswa,
						'status' => $data->status,
						'tanggal' => $data->tanggal
					);
					$this->Admin_model->abs($insert_data);
				}
			}
			redirect('Admin/absensi','refresh');
		}
	}
}

/* End of file Admin.php */

?>
