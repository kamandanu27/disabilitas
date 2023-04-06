<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alatbantu_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}	

	public function tabel($where = null)
	{
		if($where == null){
			$this->db->select('*');
			$this->db->from('tbl_alatbantu');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_alatbantu');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_alatbantu)
	{
		$this->db->select('*');
		$this->db->from('tbl_alatbantu');
		$this->db->where('id_alatbantu', $id_alatbantu);
		$query = $this->db->get();
		return $query;
	}

	public function insert($data)
	{
		$this->db->insert('tbl_alatbantu', $data);
	}

	public function update($data)
	{
		$this->db->where('id_alatbantu', $data['id_alatbantu']);
		$this->db->update('tbl_alatbantu', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_alatbantu', $data['id_alatbantu']);
		$this->db->delete('tbl_alatbantu');
	}



}
