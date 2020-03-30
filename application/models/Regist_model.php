<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Regist_model extends CI_Model {

	function getNIM(){
		$this->db->distinct();
		$this->db->select('nim');
		$this->db->from('mahasiswa');
		return $this->db->get()->result_array();
	}

	function getKelas(){
		$this->db->distinct();
		$this->db->select('kelas');
		$this->db->from('mahasiswa');
		return $this->db->get()->result_array();
	}

	public function createUser($data){
		$this->db->insert('user', $data);
		return $this->db->insert_id();
	}

	public function getUsername($username){
		$this->db->select('username');
		$this->db->from('user');
		$this->db->where('username', $username);
		return $this->db->get()->num_rows();
	}
}

/* End of file Regist_model.php */

?>
