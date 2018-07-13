<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datatahun_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}
	//Fungsi insert tahun
	public function Tambahtahun($data, $table) {
		return $this->db->insert($table, $data);
	}
	// Tampil data PPK di LOV
	public function datatahun($id_ppk) {
		$this->db->select('*');
		$this->db->from('tbl_tahun');
		$this->db->where('id_ppk', $id_ppk);
		$query = $this->db->get();
		return $query->result_array();
	}
	//Cek Tahun
	public function cektahun($tahun) {
		$this->db->select('*');
		$this->db->from('tbl_paket');
		$this->db->where('id_tahun', $tahun);
		$query = $this->db->get();
		return $query->row();
	}

}

?>