<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

	public function index()
	{
		$data['title'] = "Keranjang Belanja";
		$this->load->view('templates/header', $data);
		if ($this->session->userdata('isLogin') == false) {
			$this->load->view('templates/navbar');
			$this->load->view('templates/noLogin');
		} else {
			$this->load->view('templates/navbar_af_login');
			$this->load->view('Keranjang/index');
		}
		$this->load->view('templates/footer');
	}

	function add(){
		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => $this->input->post('jumlah'),
			'price'   => (int)$this->input->post('jumlah')* (int)$this->input->post('point'),
			'name'    => $this->input->post('nama')
		);
	
		$this->cart->insert($data);
		
		redirect('Keranjang','refresh');
	}

	function update(){
		$data = array(
			'rowid' => $this->input->post('rowid'),
			'qty'   => $this->input->post('qty')
		);

		$this->cart->update($data);
		redirect('Keranjang','refresh');
	}

	function bayar($total){
		$this->load->model('Point_model');
		$user_point = $this->Point_model->getPoint($this->session->userdata('user'));
		$total_point = (int)$user_point - (int)$total;
		if ($total_point < 0) {
			$message = "Point anda tidak mencukupi";
			echo "<script type='text/javascript'>alert('$message');</script>";
			redirect('Keranjang','refresh');
		} else {
			$this->Point_model->insertPoint($this->session->userdata('user'), $total_point);
			redirect('Point','refresh');
			$message = "Pembelian Sukses";
			echo "<script type='text/javascript'>alert('$message');</script>";
		}
	}

}

/* End of file Keranjang.php */

?>
