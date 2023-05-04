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
			$this->db->join('tbl_kelurahan','tbl_pemohon.id_kelurahan = tbl_kelurahan.id_kelurahan','inner');
			$this->db->join('tbl_kecamatan','tbl_kelurahan.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
			$query = $this->db->get();
		}else{
			$this->db->select('*');
			$this->db->from('tbl_pemohon');
			$this->db->join('tbl_kelurahan','tbl_pemohon.id_kelurahan = tbl_kelurahan.id_kelurahan','inner');
			$this->db->join('tbl_kecamatan','tbl_kelurahan.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
			$this->db->where($where);
			$query = $this->db->get();
		}
		
		return $query;
	}


	public function detail($id_pemohon)
	{
		$this->db->select('*');
		$this->db->from('tbl_pemohon');
		$this->db->join('tbl_kelurahan','tbl_pemohon.id_kelurahan = tbl_kelurahan.id_kelurahan','inner');
		$this->db->join('tbl_kecamatan','tbl_kelurahan.id_kecamatan = tbl_kecamatan.id_kecamatan','inner');
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

	public function login($username,$enpass)
	{
		$username = $this->db->escape_str($username);
		$password = $this->db->escape_str($enpass);
		$this->db->select('*');
		$this->db->from('tbl_pemohon');
		$this->db->where(array(
			'email_pemohon' => $username,
			'password_pemohon' => $password
		));
		$query = $this->db->get();
		return $query->row();
	}



}
