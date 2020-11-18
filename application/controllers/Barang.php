<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Barang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('BarangAdmin_model');
    }
    public function index()
    {
        $data['title'] = 'Daftar Barang';
        $data['barang'] = $this->BarangAdmin_model->getAll();
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/barang/index', $data);
        $this->load->view('admin/templates/footer');
    }
    public function show($id)
    {
        $data['title'] = 'Detail Barang';
        $data['barang'] = $this->BarangAdmin_model->getById($id);
        $this->load->view('admin/templates/header', $data);
        $this->load->view('admin/templates/navbar');
        $this->load->view('admin/templates/sidebar');
        $this->load->view('admin/barang/show', $data);
        $this->load->view('admin/templates/footer');
    }
    public function destroy($id)
    {
        $this->BarangAdmin_model->destroy($id);
        redirect('barang');
    }
}
