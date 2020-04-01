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
			'stock' => $this->input->post('stock')
		);
		$this->Barang_model->add($data);
		redirect('Admin/barang','refresh');		
	}

	function delete($id){
		$this->Barang_model->delete($id);
		redirect('Admin/barang','refresh');
	}

	function editPoint($id){
		$this->Barang_model->editPoints($id, $this->input->post('point'));
		redirect('Admin/barang','refresh');
	}
}

/* End of file Barang.php */

?>
