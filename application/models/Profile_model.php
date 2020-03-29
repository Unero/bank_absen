<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
	public function getUser($username){
		$this->db->select('username, nama, alamat');
		$this->db->from('user');
		$this->db->where('username', $username);
		return $this->db->get()->result_array();
	}
}

/* End of file Profile.php */

?>
