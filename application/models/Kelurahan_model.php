<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelurahan_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_kelurahan');
			$this->db->join('tbl_kecamatan','tbl_kelurahan.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_kelurahan');
			$this->db->join('tbl_kecamatan','tbl_kelurahan.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_kelurahan)
	{
		$this->db->select('*');
		$this->db->from('tbl_kelurahan');
		$this->db->join('tbl_kecamatan','tbl_kelurahan.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
		$this->db->where('id_kelurahan', $id_kelurahan);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_kelurahan', $data);
	}

	public function update($data)
	{
		$this->db->where('id_kelurahan', $data['id_kelurahan']);
		$this->db->update('tbl_kelurahan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kelurahan', $data['id_kelurahan']);
		$this->db->delete('tbl_kelurahan');
	}



}
