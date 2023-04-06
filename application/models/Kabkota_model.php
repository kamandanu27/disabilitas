<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kabkota_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_kabkota');
			$this->db->join('tbl_provinsi','tbl_kabkota.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_kabkota');
			$this->db->join('tbl_provinsi','tbl_kabkota.id_provinsi = tbl_provinsi.id_provinsi','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_kabkota)
	{
		$this->db->select('*');
		$this->db->from('tbl_kabkota');
		$this->db->join('tbl_provinsi','tbl_kabkota.id_provinsi = tbl_provinsi.id_provinsi','inner');
		$this->db->where('id_kabkota', $id_kabkota);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_kabkota', $data);
	}

	public function update($data)
	{
		$this->db->where('id_kabkota', $data['id_kabkota']);
		$this->db->update('tbl_kabkota', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kabkota', $data['id_kabkota']);
		$this->db->delete('tbl_kabkota');
	}



}