<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('TokoAdmin_model');
    }
    public function index()
    {
        $data['title'] = 'Daftar Toko';
        $data['toko'] = $this->TokoAdmin_model->getAll();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/toko/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function show($id)
    {
        $data['title'] = 'Daftar Toko';
        $data['toko'] = $this->TokoAdmin_model->getById($id);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/toko/show', $data);
        $this->load->view('admin/templates/footer');
    }
    public function destroy($id)
    {
        $this->TokoAdmin_model->destroy($id);
        redirect('toko');
    }
}
