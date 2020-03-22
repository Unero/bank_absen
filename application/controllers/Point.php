<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Point extends CI_Controller {

    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/navbar');
		$this->load->view('Point/index');
		$this->load->view('templates/footer');
    }

}

/* End of file Point.php */

?>