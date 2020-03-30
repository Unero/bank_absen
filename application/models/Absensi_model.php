<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi_model extends CI_Model {

	public function tampil(){
		return $this->db->get('absensi')->result();
	}

	public function tampilByUser($nim){
		$this->db->where('mahasiswa', $nim);
		$this->db->where('status', 'Masuk');
		return $this->db->get('absensi')->result();
	}

	public function nonPoint($nim){
		$this->db->where('mahasiswa', $nim);
		$this->db->where('status !=', 'Masuk');
		return $this->db->get('absensi')->result();
	}

	function updatePoint($id){
		$this->db->set('point_received', 'success');
		$this->db->where('id', $id);
		$this->db->update('absensi');
	}
}

/* End of file Absensi_model.php */

?>
