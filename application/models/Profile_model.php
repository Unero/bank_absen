<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
	public function getUser($username){
		$this->db->select('nim, nama, kelas');
		$this->db->from('user');
		$this->db->where('username', $username);
		return $this->db->get()->result();
	}
}

/* End of file Profile.php */

?>
