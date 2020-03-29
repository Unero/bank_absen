<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Barang_model extends CI_Model {

    public function getAll(){
        return $this->db->get('barang', limit, offset);
    }

}

/* End of file Barang_model.php */

?>