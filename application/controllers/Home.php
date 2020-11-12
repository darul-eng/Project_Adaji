<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	 public function __construct() {
        parent::__construct();
        date_default_timezone_set('Asia/Makassar');
        // if($this->session->userdata('active') != "active"){//Belum Login
        //     redirect('Home');
        // }
        //  // RT
        // $this->load->library('form_validation');
        // // end RT
    }
	public function index()
	{
		// $where = 'id_toko' => $this->session->userdata('id_toko')];
  //       $data['toko'] = $this->db->get_where('toko',$where)->row_array();
        $where = ['id_toko' => $this->session->userdata('id_toko')];
        $data['toko'] = $this->db->get_where('toko', $where)->result_array();
		$data['title'] = 'Masuk Ke Toko';
        $this->load->view('member/templates/header', $data);
        $this->load->view('member/dashboardtoko', $data);
        $this->load->view('member/templates/footer');
	}
}