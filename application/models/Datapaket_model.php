<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Datapaket_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	public function Tambahpaket($data, $table) {
		return $this->db->insert($table, $data);
	}

	public function cekjenis($jenis, $tahun, $id_ppk) {
		$this->db->select('*');
		$this->db->from('tbl_paket');
		$this->db->where('jenis', $jenis);
		$this->db->where('id_tahun', $tahun);
		$this->db->where('id_ppk', $id_ppk);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function showidpkt($table, $id_paket) {
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->result_array();
	}
	public function insertdoc1($table, $data) {
		return $this->db->insert($table, $data);
	}
	public function insertdoc2($table, $data) {
		return $this->db->insert($table, $data);
	}
	public function insertdoc3($table, $data) {
		return $this->db->insert($table, $data);
	}
	public function insertdoc4($table, $data) {
		return $this->db->insert($table, $data);
	}
	public function insertdoc5($table, $data) {
		return $this->db->insert($table, $data);
	}
	public function insertdoc6($table, $data) {
		return $this->db->insert($table, $data);
	}
	public function showdata1($table, $id_paket) {
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->row();
	}
	public function showdata2($table, $id_paket) {
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->row();
	}
	public function showdata3($table, $id_paket) {
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->row();
	}
	public function showdata4($table, $id_paket) {
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->row();
	}
	public function showdata5($table, $id_paket) {
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->row();
	}
	public function showdata6($table, $id_paket) {
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->row();
	}
	public function showdata7($table, $id_paket) {
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->row();
	}
	public function insertpend($table, $data) {
		return $this->db->insert($table, $data);
	}
	public function showpendukung($table,$id_paket)
	{
		$this->db->where('id_paket', $id_paket);
		$id = $this->db->get($table);
		return $id->row();
	}
	public function Updatedocutama ($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
		return $res;
	}
	public function Updatedocutama2($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
		return $res;
	}
}
?>