<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Absensi extends CI_Controller {

    var $API ="";

    function __construct() {
        parent::__construct();
        $this->API="http://absensi.tugas-ti-2b.com/Api/";
        $this->load->library('curl');
	}
	
	function index(){
        $data['title'] = "Absensi";
        $data['dataAbsen'] = json_decode($this->curl->simple_get($this->API.'Absensi'));
		$this->load->view('templates/header', $data);
		$this->load->view('templates/navbar');
		$this->load->view('Absensi/list',$data);
		$this->load->view('templates/footer');
	}
	
	function delete($id){
        if(empty($id)){
            redirect('Absensi');
        }else{
            $delete =  $this->curl->simple_delete($this->API.'Absensi', array('id'=>$id), array(CURLOPT_BUFFERSIZE => 10)); 
            if($delete)
            {
                $this->session->set_flashdata('hasil','Delete Data Berhasil');
            }else
            {
               $this->session->set_flashdata('hasil','Delete Data Gagal');
            }
            redirect('Absensi');
        }
    }

}

/* End of file Absensi.php */

?>
