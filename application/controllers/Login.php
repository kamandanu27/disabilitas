<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user');
		$this->load->model('Kecamatan_model', 'kecamatan');
		$this->load->model('Kelurahan_model', 'kelurahan');
		ob_start();
	}

	public function index()
	{

		$data = array(
			'kecamatan' 		=> $this->kecamatan->tabel()->result(),
			'kelurahan' 		=> $this->kelurahan->tabel()->result(),
		);
		$this->load->view('login', $data, FALSE);
	}

	public function login()
	{

			$username    = $this->input->post('username');
			$password    = $this->input->post('password');

			$cekk = $this->auth->login_user($username,$password);
			$cek_pemohon = $this->auth->login_pemohon($username,$password);
			
			if($cekk == 0){
				$this->session->set_flashdata('danger', '<i class="fa fa-warning"></i>
				Maaf, Username dan password tidak sesuai.');
				redirect(base_url('login'),'refresh');
			}elseif($cek_pemohon == 0){
				$this->session->set_flashdata('danger', '<i class="fa fa-warning"></i>
				Maaf, Username dan password tidak sesuai.');
				redirect(base_url('login'),'refresh');
			}else{
				redirect(base_url('user'),'refresh');
			}
			
	
	}
	

	public function logout()
	{
		$this->auth->logout();
	}
	

}

/* End of file Login.php */
/* Location: ./application/controllers/user/Login.php */