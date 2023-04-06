<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alatbantu extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Alatbantu_model', 'alatbantu');
		$this->auth->cek();
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->alatbantu->tabel()->result(),
			'content'		=> 'alatbantu/v_content',
			'ajax'	 		=> 'alatbantu/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'alatbantu/v_add',
			'ajax'	 		=> 'alatbantu/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_alatbantu'		=> $this->input->post('nama_alatbantu')
			
			
		);

		$q = $this->alatbantu->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('alatbantu'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->alatbantu->detail($id)->row_array(),
			'content'		=> 'alatbantu/v_edit',
			'ajax'	 		=> 'alatbantu/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_alatbantu'			=> $this->input->post('id_alatbantu'),
			'nama_alatbantu'		    => $this->input->post('nama_alatbantu')
			
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->alatbantu->update($data);
		redirect(base_url('alatbantu'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_alatbantu'	=> $id
		);
		
		$this->alatbantu->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('alatbantu'),'refresh');

	}



}
