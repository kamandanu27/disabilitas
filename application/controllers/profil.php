<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {


	public function __construct()
	{
		// load Session Library 
		parent::__construct();
        $this->load->library('session');
		$this->load->model('Pemohon_model', 'pemohon');
		$this->load->model('User_model', 'user');
		$this->load->model('Kecamatan_model', 'kecamatan');
		$this->load->model('Kelurahan_model', 'kelurahan');
		
		
	}

	public function index()
	{
		if($this->session->userdata('level') == 'Admin'){
			$data = array(
				'detail' 		=> $this->user->detail($this->session->userdata('id'))->row_array(),
				'content'		=> 'profil/v_user',
				'ajax'	 		=> 'profil/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}else{
			$data = array(
				'detail' 		=> $this->pemohon->detail($this->session->userdata('id'))->row_array(),
				'kecamatan' 	=> $this->kecamatan->tabel()->result(),
				'kelurahan' 	=> $this->kelurahan->tabel()->result(),
				'content'		=> 'profil/v_pemohon',
				'ajax'	 		=> 'profil/v_ajax'
			);
			$this->load->view('layout/v_wrapper', $data, FALSE);
		}
		
	}

	public function updatepemohon()
	{
		if($_FILES["foto_pemohon"]['name'] !== ""){
			$image								= time().str_replace(" ","",$_FILES["foto_pemohon"]['name']);
			$config['upload_path'] 				= './public/image/upload/pemohon/';
			$config['allowed_types'] 			= 'gif|jpg|png|jpeg';
			$config['max_size']  				= '2500';
			$config['file_name']  				= $image;

			$this->load->library('upload', $config);
			$this->upload->do_upload('foto_pemohon');

			$data = array(
				'id_pemohon'			=> $this->input->post('id_pemohon'),
				'foto_pemohon'			=> $image
			);
			$this->pemohon->update($data);

			$arraydata = [
				'foto'				=> $image,
			];
			$this->session->set_userdata($arraydata);
		}

		$data = array(
			'id_pemohon'			=> $this->input->post('id_pemohon'),
			'nik_pemohon'		    => $this->input->post('nik_pemohon'),
			'nama_pemohon'		    => $this->input->post('nama_pemohon'),
			'alamat_pemohon'		=> $this->input->post('alamat_pemohon'),
			'id_kelurahan'	     	=> $this->input->post('id_kelurahan'),
			'notlp_pemohon'		    => $this->input->post('notlp_pemohon'),
			'jeniskelamin_pemohon'	=> $this->input->post('jeniskelamin_pemohon'),
			'tempatlahir_pemohon'	=> $this->input->post('tempatlahir_pemohon'),
			'tgllahir_pemohon'		=> $this->input->post('tgllahir_pemohon'),
			'email_pemohon'		    => $this->input->post('email_pemohon'),
			'password_pemohon'		=> $this->input->post('password_pemohon'),
			'nik_pendamping'		=> $this->input->post('nik_pendamping'),
			'nama_pendamping'		=> $this->input->post('nama_pendamping'),
			'hubungan_pendamping'	=> $this->input->post('hubungan_pendamping')
			
		);

		$this->pemohon->update($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		redirect(base_url('profil'),'refresh');
	
	}

	public function updateuser()
	{
		if($_FILES["foto_user"]['name'] !== ""){
			$image								= time().str_replace(" ","",$_FILES["foto_user"]['name']);
			$config['upload_path'] 				= './public/image/upload/';
			$config['allowed_types'] 			= 'gif|jpg|png|jpeg';
			$config['max_size']  				= '2500';
			$config['file_name']  				= $image;

			$this->load->library('upload', $config);
			$this->upload->do_upload('foto_user');

			$data = array(
				'id_user'		=> $this->session->userdata('id'),
				'foto_user'		=> $image,
			);
			$this->user->update($data);

			$arraydata = [
				'foto'				=> $image,
			];
			$this->session->set_userdata($arraydata);
		}

		$data = array(
			'id_user'			=> $this->session->userdata('id'),
			'nama_user'		    => $this->input->post('nama_user'),
			'email_user'		=> $this->input->post('email_user'),
			'password_user'		=> $this->input->post('password_user')
			
		);
		$this->user->update($data);


		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		redirect(base_url('profil'),'refresh');
	
	}



}


