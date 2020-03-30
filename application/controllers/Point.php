<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Point extends CI_Controller {

    public function index()
    {
		$this->load->model('Barang_model');
		$data['title'] = "Penukaran Point";
		$this->load->view('templates/header', $data);
		if ($this->session->userdata('isLogin') == false) {
			$this->load->view('templates/navbar');
			$this->load->view('templates/noLogin');
		} else {
			$this->load->model('Point_model');

			$data['barang'] = $this->Barang_model->getAll();
			$data['point'] = $this->Point_model->getPoint($this->session->userdata('user'));

			$this->load->view('templates/header', $data);
			$this->load->view('templates/navbar_af_login');
			$this->load->view('Point/index', $data);
		}
		$this->load->view('templates/footer');
	}
	
	function all(){
		$this->load->model('Absensi_model');
		$this->load->model('Point_model');
		$data = $this->Absensi_model->tampilByUser($this->session->userdata('nim'));
		$point_before = $this->Point_model->getPoint($this->session->userdata('user'));
		$point_before = $point_before[0]->point;
		$point = 0;

		foreach ($data as $data) {
			if ($data->point_received == 'success') {
				continue;
			} else {
				$point += 15;
				$this->Absensi_model->updatePoint($data->id);
			}
		}
		$total_point = (int)$point_before + $point;
		$this->Point_model->insertPoint($this->session->userdata('user'), $total_point);
		
		redirect('Point','refresh');
		
	}

}

/* End of file Point.php */

?>
