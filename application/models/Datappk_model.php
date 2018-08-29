<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Datappk_model extends CI_Model
{
	
	function __construct()
	{
		parent::__construct();	
	}
	//Model Cek NIP User
    public function cekppk ($nama)
    {
        $this->db->select('*');
        $this->db->from('ppk');
        $this->db->where('nama',$nama);
        $query = $this->db->get();
        return $query->num_rows();
    }
	//Fungsi insert ppk
	public function Tambahppk ($data , $table)
    {
        return $this->db->insert($table, $data);
    }
    // Tampil data PPK di LOV
	public function datappk()
	{
		$this->db->select('*');
		$this->db->from('ppk');
		$query = $this->db->get();
		return $query->result_array();
	}

	// result array $user['id_nama'];
	// result  $user->id_nama
	// Fungsi ambil & edit PPK
	public function ambilnama ($id_ppk)
	{
		$this->db->select('nama');
		$this->db->from('ppk');
		$query = $this->db->get();
		return $query->result_array();
	}
	public function GetWherePPK($where=""){
      $res=$this->db->query("SELECT * FROM ppk ".$where);
        return $res->result_array();
      }

    // Fungsi Update PPK
	public function UpdateDataPPK ($tableName,$data_update,$where)
	{
		$res=$this->db->update($tableName,$data_update,$where);
        return $res;
	}

	// Model Hapus PPK
	public function hapusppk($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	// Fungsi Hitung jumlah ppk
	public function JumlahPPK ()
    {
        $this->db->select('*');
        $this->db->from('ppk');
        $query = $this->db->get();
        return $query->num_rows();
    }
}

 ?>