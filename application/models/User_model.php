<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function getUser(){
		$this->db->where('type !=', '2');
		return $this->db->get('user')->result();
	}

	public function activateUser($id){
		$this->db->set('status', 'active');
		$this->db->where('id', $id);
		$this->db->update('user');	
	}

	public function disableUser($id){
		$this->db->set('status', 'disabled');
		$this->db->where('id', $id);
		$this->db->update('user');	
	}
}

/* End of file User_model.php */

?>
