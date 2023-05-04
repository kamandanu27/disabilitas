<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemohon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pemohon_model', 'pemohon');
		$this->load->model('Kecamatan_model', 'kecamatan');
		$this->load->model('Kelurahan_model', 'kelurahan');
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->pemohon->tabel()->result(),
			'content'		=> 'pemohon/v_content',
			'ajax'	 		=> 'pemohon/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'pemohon/v_add',
			'kecamatan' 		=> $this->kecamatan->tabel()->result(),
			'kelurahan' 		=> $this->kelurahan->tabel()->result(),
			'ajax'	 		=> 'pemohon/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$image								= time().str_replace(" ","",$_FILES["foto_pemohon"]['name']);
		$config['upload_path'] 				= './public/image/upload/pemohon/';
		$config['allowed_types'] 			= 'gif|jpg|png|jpeg';
		$config['max_size']  				= '2500';
		$config['file_name']  				= $image;

		$this->load->library('upload', $config);
		$this->upload->do_upload('foto_pemohon');

		$data = array(
			'nik_pemohon'		    => $this->input->post('nik_pemohon'),
			'nama_pemohon'		    => $this->input->post('nama_pemohon'),
			'alamat_pemohon'		=> $this->input->post('alamat_pemohon'),
			'id_kelurahan'	     	=> $this->input->post('id_kelurahan'),
			'notlp_pemohon'		    => $this->input->post('notlp_pemohon'),
			'jeniskelamin_pemohon'	=> $this->input->post('jeniskelamin_pemohon'),
			'tempatlahir_pemohon'	=> $this->input->post('tempatlahir_pemohon'),
			'tgllahir_pemohon'		=> $this->input->post('tgllahir_pemohon'),
			'foto_pemohon'			=> $image,
			'email_pemohon'		    => $this->input->post('email_pemohon'),
			'password_pemohon'		=> $this->input->post('password_pemohon'),
			'nik_pendamping'		=> $this->input->post('nik_pendamping'),
			'nama_pendamping'		=> $this->input->post('nama_pendamping'),
			'hubungan_pendamping'	=> $this->input->post('hubungan_pendamping')
			
		
		);

		$q = $this->pemohon->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Akun anda berhasil didaftarkan');
		redirect(base_url('login'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->pemohon->detail($id)->row_array(),
			'kecamatan' 		=> $this->kecamatan->tabel()->result(),
			'kelurahan' 		=> $this->kelurahan->tabel()->result(),
			'content'		=> 'pemohon/v_edit',
			'ajax'	 		=> 'pemohon/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
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
				'foto_pemohon'			=> $image,
			);
			$this->pemohon->update($data);
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
		redirect(base_url('pemohon'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_pemohon'	=> $id
		);
		
		$this->pemohon->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('pemohon'),'refresh');

	}



}


