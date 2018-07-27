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
	public function Updatedocutama3($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
		return $res;
	}
	public function Updatedocutama4($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
		return $res;
	}
	public function Updatedocutama5($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
		return $res;
	}
	public function Updatedocutama6($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
		return $res;
	}
	public function Updatedocutama7($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
		return $res;
	}
	public function updatedocpend($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
		return $res;
	}
	public function kontraktual($id_tahun)
	{
		$this->db->select('*');
		$this->db->from('tbl_paket');
		$this->db->where('jenis','kontraktual');
		$this->db->where('id_tahun', $id_tahun);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function validasipaket($nama_paket)
	{
		$this->db->select('*');
        $this->db->from('tbl_paket');
        $this->db->where('nama_paket',$nama_paket);
        $query = $this->db->get();
        return $query->num_rows();
	}
	public function suakelola($id_tahun)
	{
		$this->db->select('*');
		$this->db->from('tbl_paket');
		$this->db->where('jenis','suakelola');
		$this->db->where('id_tahun', $id_tahun);
		$query = $this->db->get();
		return $query->result_array();
	}
	public function lihatpendukung($id_paket)
	{
		$sql = " SELECT c.nama_tahun, b.id_tahun,b.nama_paket, a.* FROM tbl_pendukung a , tbl_paket b, tbl_tahun c WHERE a.id_paket =b.id_paket AND b.id_tahun = c.id_tahun AND a.id_paket = '$id_paket' ";
		$query = $this->db->query($sql);
		return $query->result_array();
	}
}
?>