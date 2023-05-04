<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Pemohon_model', 'pemohon');
		$this->load->model('Pengajuan_model', 'pengajuan');
		
		
	}

	public function index()
	{
		if($this->session->userdata('level') == 'Admin'){
			$data = array(
				'jumlah_pengajuan' 		=> $this->pengajuan->tabel()->num_rows(),
				'jumlah_proses' 		=> $this->pengajuan->tabel('tbl_pengajuan.status_pengajuan = "Proses"')->num_rows(),
				'jumlah_diterima' 		=> $this->pengajuan->tabel('tbl_pengajuan.status_pengajuan = "Diterima"')->num_rows(),
				'jumlah_ditolak' 		=> $this->pengajuan->tabel('tbl_pengajuan.status_pengajuan = "Ditolak"')->num_rows(),
				'content'				=> 'dashboard/v_content',
				'ajax'	 				=> 'dashboard/v_ajax'
			);
		}else{
			$data = array(
				'jumlah_pengajuan' 		=> $this->pengajuan->tabel(' tbl_pengajuan.id_pemohon = '.$this->session->userdata('id').'')->num_rows(),
				'jumlah_proses' 		=> $this->pengajuan->tabel('tbl_pengajuan.status_pengajuan = "Proses" and tbl_pengajuan.id_pemohon = '.$this->session->userdata('id').'')->num_rows(),
				'jumlah_diterima' 		=> $this->pengajuan->tabel('tbl_pengajuan.status_pengajuan = "Diterima" and tbl_pengajuan.id_pemohon = '.$this->session->userdata('id').'')->num_rows(),
				'jumlah_ditolak' 		=> $this->pengajuan->tabel('tbl_pengajuan.status_pengajuan = "Ditolak" and tbl_pengajuan.id_pemohon = '.$this->session->userdata('id').'')->num_rows(),
				'content'				=> 'dashboard/v_content',
				'ajax'	 				=> 'dashboard/v_ajax'
			);
		}
		$this->load->view('layout/v_wrapper', $data, FALSE);
	}





}
