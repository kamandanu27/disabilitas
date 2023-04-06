<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemohon_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_pemohon');
			$this->db->join('tbl_kabkota','tbl_pemohon.id_kabkota = tbl_kabkota.id_kabkota','inner');
			$this->db->join('tbl_provinsi','tbl_kabkota.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pemohon');
			$this->db->join('tbl_kabkota','tbl_pemohon.id_kabkota = tbl_kabkota.id_kabkota','inner');
			$this->db->join('tbl_provinsi','tbl_kabkota.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_pemohon)
	{
		$this->db->select('*');
		$this->db->from('tbl_pemohon');
		$this->db->join('tbl_kabkota','tbl_pemohon.id_kabkota = tbl_kabkota.id_kabkota','inner');
		$this->db->join('tbl_provinsi','tbl_kabkota.id_provinsi = tbl_provinsi.id_provinsi','inner');
		$this->db->where('id_pemohon', $id_pemohon);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_pemohon', $data);
	}

	public function update($data)
	{
		$this->db->where('id_pemohon', $data['id_pemohon']);
		$this->db->update('tbl_pemohon', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_pemohon', $data['id_pemohon']);
		$this->db->delete('tbl_pemohon');
	}



}
