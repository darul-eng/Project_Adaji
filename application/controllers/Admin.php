<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function index(){
        $data['title'] = 'Dashboard';
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/index');
        $this->load->view('admin/templates/footer');
    }
}