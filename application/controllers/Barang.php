<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this->load->model('Barang_model');
	}
	
	function add(){
		$data = array(
			'nama' => $this->input->post('nama'),
			'deskripsi' => $this->input->post('deskripsi'),
			'point' => $this->input->post('point'),
			'stock' => $this->input->post('stock')
		);
		$this->Barang_model->add($data);
		redirect('Admin/barang','refresh');		
	}

	function delete($id){
		$this->Barang_model->delete($id);
		redirect('Admin/barang','refresh');
	}

	function addStock($id){
		$stock = $this->input->post('stock_awal') + $this->input->post('stock');
		$this->Barang_model->addStock($id, $stock);
		redirect('Admin/barang','refresh');
	}
}

/* End of file Barang.php */

?>
