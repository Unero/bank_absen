<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Point_model extends CI_Model {

	function getPoint($user){
		$this->db->select('point');
		$this->db->from('point');
		$this->db->where('username', $user);
		return $this->db->get()->result();
	}

	function insertPoint($user, $point){
		$this->db->set('point', $point);
		$this->db->where('username', $user);
		$this->db->update('point');
	}

}

/* End of file Point_model.php */

?>
