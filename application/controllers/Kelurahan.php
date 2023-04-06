<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kelurahan_model', 'kelurahan');
		$this->load->model('Kecamatan_model', 'kecamatan');
		$this->auth->cek();
		
	}

	public function index()
	{
		//echo 'ini adalah sofyan';
		$data = array(
			'tabel' 		=> $this->kelurahan->tabel()->result(),
			'content'		=> 'kelurahan/v_content',
			'ajax'	 		=> 'kelurahan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function add()
	{
		//echo 'ini adalah add';
		$data = array(
			'content'		=> 'kelurahan/v_add',
			'kecamatan' 		=> $this->kecamatan->tabel()->result(),
			'ajax'	 		=> 'kelurahan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}

	public function insert()
	{
		$data = array(
			'nama_kelurahan'		=> $this->input->post('nama_kelurahan'),
			'id_kecamatan'		  	=> $this->input->post('id_kecamatan')
			
			
		);

		$q = $this->kelurahan->insert($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Tambah data berhasil');

		redirect(base_url('kelurahan'),'refresh');
	}

	public function edit($id)
	{

		$data = array(
			'detail' 		=> 	$this->kelurahan->detail($id)->row_array(),
			'kecamatan' 		=> $this->kecamatan->tabel()->result(),
			'content'		=> 'kelurahan/v_edit',
			'ajax'	 		=> 'kelurahan/v_ajax'
		);
		$this->load->view('layout/v_wrapper', $data, FALSE);
		
	
	}

	public function update()
	{

		$data = array(
			'id_kelurahan'			=> $this->input->post('id_kelurahan'),
			'nama_kelurahan'		    => $this->input->post('nama_kelurahan'),
			'id_kecamatan'		 	=> $this->input->post('id_kecamatan')
			
		);
		
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Ubah data berhasil');
		$this->kelurahan->update($data);
		redirect(base_url('kelurahan'),'refresh');
	
	}

	public function delete($id)
	{
		$data = array(
			'id_kelurahan'	=> $id
		);
		
		$this->kelurahan->delete($data);
		$this->session->set_flashdata('success', '<i class="fa fa-check"></i> Selamat, Hapus data berhasil');
		redirect(base_url('kelurahan'),'refresh');

	}

	public function getkelurahan()
	{
		$id_kecamatan = $this->input->post('id');
		$data = $this->kelurahan->tabel('tbl_kelurahan.id_kecamatan = '.$id_kecamatan.'')->result();
		echo "
				<option value=''>Pilih</option>
			";
		foreach($data as $row){
			echo "
				<option value='".$row->id_kelurahan."'>$row->nama_kelurahan</option>
			";
		}
		
	}



}
