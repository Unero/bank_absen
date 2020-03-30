<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model {

	public function checkNama($name){
		$this->db->where('nama_mhs', $name);
		return $this->db->get('mahasiswa')->num_rows();
	}

	public function checkId($id){
		$this->db->where('id', $id);
		return $this->db->get('absensi')->num_rows();
	}

	public function mhs($data){
		$this->db->insert('mahasiswa', $data);
	}

	public function abs($data){
		$this->db->insert('absensi', $data);
	}

}

/* End of file Admin_model.php */

?>
