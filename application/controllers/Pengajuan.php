<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pengajuan_model', 'pengajuan');
		$this->load->model('Pemohon_model', 'pemohon');
		$this->load->model('Alatbantu_model', 'alatbantu');
		$this->auth->cek();
		
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->pengajuan->tabel()->result(),
			'content'		=> 'pengajuan/v_content',
			'ajax'	 		=> 'pengajuan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'pengajuan/v_add',
			'pemohon' 		=> $this->pemohon->tabel()->result(),
			'alatbantu' 	=> $this->alatbantu->tabel()->result(),
			'ajax'	 		=> 'pengajuan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'tgl_pengajuan'		    => $this->input->post('tgl_pengajuan'),
			'id_pemohon'		    => $this->input->post('id_pemohon'),
			'id_alatbantu'	     	=> $this->input->post('id_alatbantu'),
			'keterangan_pengajuan'	=> $this->input->post('keterangan_pengajuan'),
			'status_pengajuan'		=> 'Proses'
			
		
		);

		$q = $this->pengajuan->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');
		redirect(base_url('pengajuan'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->pengajuan->detail($id)->row_array(),
			'pemohon' 		=> $this->pemohon->tabel()->result(),
			'alatbantu' 		=> $this->alatbantu->tabel()->result(),
			'content'		=> 'pengajuan/v_edit',
			'ajax'	 		=> 'pengajuan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_pengajuan'			=> $this->input->post('id_pengajuan'),
			'tgl_pengajuan'		    => $this->input->post('tgl_pengajuan'),
			'id_pemohon'		    => $this->input->post('id_pemohon'),
			'id_alatbantu'	     	=> $this->input->post('id_alatbantu'),
			'keterangan_pengajuan'	=> $this->input->post('keterangan_pengajuan'),
			'status_pengajuan'		=> $this->input->post('status_pengajuan')
			
		);

		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');	
		$this->pengajuan->update($data);
		redirect(base_url('pengajuan'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_pengajuan'	=> $id
		);
		
		$this->pengajuan->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('pengajuan'),'refresh');

	}



}


