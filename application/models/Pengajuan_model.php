<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajuan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_pengajuan');
			$this->db->join('tbl_pemohon','tbl_pengajuan.id_pemohon = tbl_pemohon.id_pemohon','inner');
			$this->db->join('tbl_alatbantu','tbl_pengajuan.id_alatbantu = tbl_alatbantu.id_alatbantu','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pengajuan');
			$this->db->join('tbl_pemohon','tbl_pengajuan.id_pemohon = tbl_pemohon.id_pemohon','inner');
			$this->db->join('tbl_alatbantu','tbl_pengajuan.id_alatbantu = tbl_alatbantu.id_alatbantu','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_pengajuan)
	{
		$this->db->select('*');
		$this->db->from('tbl_pengajuan');
		$this->db->join('tbl_pemohon','tbl_pengajuan.id_pemohon = tbl_pemohon.id_pemohon','inner');
		$this->db->join('tbl_alatbantu','tbl_pengajuan.id_alatbantu = tbl_alatbantu.id_alatbantu','inner');
		$this->db->where('id_pengajuan', $id_pengajuan);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_pengajuan', $data);
	}

	public function update($data)
	{
		$this->db->where('id_pengajuan', $data['id_pengajuan']);
		$this->db->update('tbl_pengajuan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pengajuan', $data['id_pengajuan']);
		$this->db->delete('tbl_pengajuan');
	}



}
