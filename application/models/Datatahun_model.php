<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatahun_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	//Fungsi insert tahun
	public function Tambahtahun($data, $table) 
	{
		return $this->db->insert($table, $data);
	}
	
	public function datatahun($id_ppk) 
	{
		$this->db->select('*');
		$this->db->from('tbl_tahun');
		$this->db->where('id_ppk', $id_ppk);
		$this->db->order_by('nama_tahun', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function dapatkantahun($id_tahun)
	{
		$this->db->select('*');
		$this->db->from('tbl_tahun');
		$this->db->where('id_tahun', $id_tahun);
		$this->db->order_by('nama_tahun', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function GetWhereTahun($where="")
	{
     	$res=$this->db->query("SELECT * FROM tbl_tahun ".$where);
        return $res->result_array();
     }
     public function UpdateDataTahun($tableName,$data_update,$where)
     {
     	$res=$this->db->update($tableName,$data_update,$where);
        return $res;
     }

	//Cek Tahun
	public function cektahun($tahun) {
		$this->db->select('*');
		$this->db->from('tbl_tahun');
		$this->db->where('id_tahun', $tahun);
		$query = $this->db->get();
		return $query->row();
	}
	public function validasitahun($tahun,$id_ppk)
	{
		$this->db->select('*');
        $this->db->from('tbl_tahun');
        $this->db->where('nama_tahun',$tahun);
        $this->db->where('id_ppk',$id_ppk);
        $query = $this->db->get();
        return $query->num_rows();
	}
	public function hapustahun($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function cektahunppk($tahun,$id_ppk)
	{
		$this->db->select('*');
		$this->db->from('tbl_tahun');
		$this->db->where('nama_tahun',$tahun);
		$this->db->where('id_ppk',$id_ppk);
		$query = $this->db->get();
		return $query->row();
	}
}

?>