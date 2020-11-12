<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$data['title'] = 'Selamat Datang';
		$this->load->view('templates/header', $data);
		$this->load->view('index');
		$this->load->view('templates/footer');
    }
    public function barang()
    {
        $data['title'] = 'Daftar Barang';
		$this->load->view('templates/header', $data);
		$this->load->view('barang');
        $this->load->view('templates/footer');
	}
	public function toko()
    {
        $data['title'] = 'Daftar Toko';
		$this->load->view('templates/header', $data);
		$this->load->view('toko');
        $this->load->view('templates/footer');
	}
	public function blog()
    {
        $data['title'] = 'Blog';
		$this->load->view('templates/header', $data);
		$this->load->view('blog');
        $this->load->view('templates/footer');
	}
	public function kontak()
    {
        $data['title'] = 'Kontak';
		$this->load->view('templates/header', $data);
		$this->load->view('kontak');
        $this->load->view('templates/footer');
	}
}
