<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {

	protected $CI;

	public function __construct()
	{
		$this->CI =& get_instance();

		$this->CI->load->model('User_model','user');
		$this->CI->load->model('Pemohon_model','pemohon');
	}

	public function login_user($username,$password)
	{
		$check = $this->CI->user->login($username,$password);
		if ($check)
		{
			$data = [
				'id'				=> $check->id_user,
				'nama'				=> $check->nama_user,
				'foto'				=> $check->foto_user,
				'level'				=> 'Admin',
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('dashboard'),'refresh');
		}
		else{
			return 0;
		}
	}

	public function login_pemohon($username,$password)
	{
		$check = $this->CI->pemohon->login($username,$password);
		if ($check)
		{
			$data = [
				'id'				=> $check->id_pemohon,
				'nama'				=> $check->nama_pemohon,
				'foto'				=> $check->foto_pemohon,
				'level'				=> 'Pemohon',
				'login'				=> true
			];
			
			$this->CI->session->set_userdata($data);
			redirect(base_url('dashboard'),'refresh');
		}
		else{
			return 0;
		}
	}


	public function cek()
	{
		if ($this->CI->session->userdata('login') == '') {
			redirect(base_url('login'),'refresh');
		}
	}

	public function logout()
	{
		$data = array(
			'id',
			'nama',
			'login'
		);
		$this->CI->session->unset_userdata($data);
		$this->CI->session->set_flashdata('sukses', '<i class="fa fa-info-circle"></i> Anda berhasil logout!');
		redirect(base_url('login'),'refresh');
	}

}