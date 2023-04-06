<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabkota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kabkota_model', 'kabkota');
		$this->load->model('Provinsi_model', 'provinsi');
		$this->auth->cek();
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->kabkota->tabel()->result(),
			'content'		=> 'kabkota/v_content',
			'ajax'	 		=> 'kabkota/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'kabkota/v_add',
			'provinsi' 		=> $this->provinsi->tabel()->result(),
			'ajax'	 		=> 'kabkota/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_kabkota'		=> $this->input->post('nama_kabkota'),
			'id_provinsi'		  	=> $this->input->post('id_provinsi')
			
			
		);

		$q = $this->kabkota->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('kabkota'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->kabkota->detail($id)->row_array(),
			'provinsi' 		=> $this->provinsi->tabel()->result(),
			'content'		=> 'kabkota/v_edit',
			'ajax'	 		=> 'kabkota/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_kabkota'			=> $this->input->post('id_kabkota'),
			'nama_kabkota'		    => $this->input->post('nama_kabkota'),
			'id_provinsi'		 	=> $this->input->post('id_provinsi')
			
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->kabkota->update($data);
		redirect(base_url('kabkota'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_kabkota'	=> $id
		);
		
		$this->kabkota->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('kabkota'),'refresh');

	}

	public function getkabkota()
	{
		$id_provinsi = $this->input->post('id');
		$data = $this->kabkota->tabel('tbl_kabkota.id_provinsi = '.$id_provinsi.'')->result();
		echo "
				<option value=''>Pilih</option>
			";
		foreach($data as $row){
			echo "
				<option value='".$row->id_kabkota."'>$row->nama_kabkota</option>
			";
		}
		
	}



}
