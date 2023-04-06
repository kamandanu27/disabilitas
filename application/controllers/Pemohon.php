<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemohon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pemohon_model', 'pemohon');
		$this->load->model('Kecamatan_model', 'kecamatan');
		$this->load->model('Kelurahan_model', 'kelurahan');
		$this->auth->cek();
		
		
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
		$data = array(
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

		$q = $this->pemohon->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('pemohon'),'refresh');
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

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->pemohon->update($data);
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


