<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');

		// if($this->session->userdata('emailtoko'))
		// {
		// 	redirect('Auth');
		// }
	}
	public function masuktoko()
	{
		$data['title'] = 'Masuk Ke Toko';
		$this->load->view('member/templates/header', $data);
		$this->load->view('member/masuktoko');
		$this->load->view('member/templates/footer');
	}
	public function cekmasuktoko()
	{
		$input = $this->input->post(NULL, TRUE);
		$pass_encrypt = md5($input['katasandi']);
		$where = array(
          'email' => $input['emailtoko']
        );
		$toko = $this->db->get_where('toko', $where)->row_array();	
		$query = $this->db->get_where('toko', $where);

		$this->form_validation->set_rules('emailtoko', 'Email Toko', 'required|trim',['required' => 'Email Toko tidak boleh kosong']);
		$this->form_validation->set_rules('katasandi', 'Kata Sandi', 'required|trim',['required' => 'Kata Sandi tidak boleh kosong']);
		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Masuk Toko';
			$this->load->view('member/templates/header', $data);
			$this->load->view('member/masuktoko');
			$this->load->view('member/templates/footer');
		} 
		else
		{
			if($input['emailtoko'] == $toko['email'])
		{
			if($pass_encrypt == $toko['password']) {
				if($query->num_rows() > 0){//Kalau Ada Datanya
	            foreach($query->result() as $dataToko){
	                $sess = array(//Variabel Untuk Membuat Session
	                    'active' => 'active',
	                    'id_toko' => $dataToko->id_toko,
	                    'email' => $dataToko->email,
	                    'password' => $dataToko->password,
	                    'nama_toko' => $dataToko->nama_toko,
	                    'alamat_toko' => $dataToko->alamat_toko,
	                    'kontak' => $dataToko->kontak,
	                    'foto' => $dataToko->foto
	                );
	                $this->session->set_userdata($sess);
           			redirect('Home');
		             } 
		          }
	              else
	              {
	              	$alertDanger = '
		            <center>
		                <div class="alert alert-danger alert-dismissible fade show" style=" width:500px; background-color:#c9a632;color:white;">
		                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                        <span aria-hidden="true">&times;</span>
		                    </button>  
		                    <strong>Login gagal, silahkan coba kembali</strong>
		                </div>
		            </center>
		            ';
		            $this->session->set_flashdata('info', $alertDanger);
		            redirect('Auth/masuktoko');
	              }
			}
			else
			{
			$alertDanger = '
            <center>
                <div class="alert alert-danger alert-dismissible fade show" style=" width:500px; background-color:#c9a632;color:white;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>  
                    <strong>Kata sandi salah</strong>
                </div>
            </center>
            ';
            $this->session->set_flashdata('info', $alertDanger);
            redirect('Auth/masuktoko');
			}
		}
		else
		{
			 $alertDanger = '
            <center>
                <div class="alert alert-danger alert-dismissible fade show" style=" width:500px; background-color:#c9a632;color:white;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>  
                    <strong>Email belum terdaftar</strong>
                </div>
            </center>
            ';
            $this->session->set_flashdata('info', $alertDanger);
            redirect('Auth/masuktoko');
		}
		}
	}
	public function daftartoko()
	{
		$data['title'] = 'Daftarkan Toko';
		$this->load->view('member/templates/header', $data);
		$this->load->view('member/daftartoko');
		$this->load->view('member/templates/footer');
	}
	public function cekdaftartoko()
	{
		$this->form_validation->set_rules('namatoko', 'Nama Toko', 'required|trim',['required' => 'Nama Toko tidak boleh kosong']);
		$this->form_validation->set_rules('emailtoko', 'Email Toko', 'required|trim|is_unique[toko.email]',['is_unique' => 'Email Toko telah terdafar', 'required' => 'Nama Toko tidak boleh kosong']);
		$this->form_validation->set_rules('alamattoko', 'Alamat Toko', 'required|trim',['required' => 'Alamat Toko tidak boleh kosong']);
		$this->form_validation->set_rules('kontaktoko', 'Kontak Toko', 'required|trim',['required' => 'Kontak Toko tidak boleh kosong']);
		$this->form_validation->set_rules('katasandi1', 'Kata Sandi', 'required|trim|min_length[9]|matches[katasandi2]',[
			'matches'=>"Kata Sandi tidak sama",
			'min_length'=>'Kata Sandi terlalu pendek'
		]);
		$this->form_validation->set_rules('katasandi2', 'Konfirmasi Kata Sandi', 'required|trim|matches[katasandi2]');

		if($this->form_validation->run() == false)
		{
			$data['title'] = 'Daftarkan Toko';
			$this->load->view('member/templates/header', $data);
			$this->load->view('member/daftartoko');
			$this->load->view('member/templates/footer');
		} 
		else
		{
			$input = $this->input->post(NULL, TRUE);
			$gambar = $_FILES['gambartoko']['name'];
			if($gambar == ''){//Redirect Ulang
            $warning = '
                 <div class="alert alert-danger alert-dismissible fade show" style="background-color:#c9a632;">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>Gambar tidak ditemukan!</strong> silahkan masukkan gambar.
                </div>
            ';
            $this->session->set_flashdata('info', $warning);
            redirect('Auth/daftartoko');
        	}else{//Ada Gambar
            $config['allowed_types'] = 'jpg|png|jpeg';
            $config['max_size'] = '2048';
            $config['upload_path'] = './assets/img/toko';
            $this->load->library('upload', $config);

            if(!$this->upload->do_upload('gambartoko')){//Kalo Nda Jalan
                $warning = '
                     <div class="alert alert-danger alert-dismissible fade show" style="background-color:#c9a632;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Upload Reject!</strong> Please Repeat.
                    </div>
                ';
                $this->session->set_flashdata('info', $warning);
            redirect('Auth/daftartoko');
             }else{//Ini Jalan
             	$pass_encrypt = md5($input['katasandi1']);
             	$data =[
				'email' => htmlspecialchars($input['emailtoko']),
				'password' => htmlspecialchars($pass_encrypt),
				'nama_toko' => htmlspecialchars($input['namatoko']),
				'alamat_toko' => htmlspecialchars($input['alamattoko']),
				'kontak' => htmlspecialchars($input['kontaktoko']),
				'foto' => $gambar
				];
				$this->db->insert('toko',$data);
				$warning = '
                     <div class="alert alert-success alert-dismissible fade show" style="background-color:#c9a632;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Daftar toko berhasil</strong> Silahkan login.
                    </div>
                ';
                $this->session->set_flashdata('info', $warning);
	            redirect('Auth/masuktoko');
				}
	        }

		}
	}
}