<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function getAll(){
        return $this->db->get('barang')->result();
	}
	
	function add($data){
		$this->db->insert('barang', $data);
	}

	function delete($id){
		$this->db->where('id', $id);
		$this->db->delete('barang');
	}

	function editPoints($id, $point){
		$this->db->set('point', $point);
		$this->db->where('id', $id);
		$this->db->update('barang');
	}
}

/* End of file Barang_model.php */

?>
