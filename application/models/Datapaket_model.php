<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	/**
	 * 
	 */
	class Datapaket_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function Tambahpaket($data, $table) 
		{
		return $this->db->insert($table, $data);
		}

		public function cekjenis($jenis,$tahun,$id_ppk)
		{
			$this->db->select('*');
			$this->db->from('tbl_paket');
			$this->db->where('jenis',$jenis);
			$this->db->where('id_tahun',$tahun);
			$this->db->where('id_ppk',$id_ppk);
			$query = $this->db->get();
			return $query->result_array();
		}
	}
 ?>