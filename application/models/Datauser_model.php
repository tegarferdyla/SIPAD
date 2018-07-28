<?php 
  defined('BASEPATH') OR exit('No direct script access allowed');

  /**
   * 
   */
  class Datauser_model extends CI_Model
  {
  	
  	function __construct()
  	{
  		parent::__construct();
  	}
    // Tampil data user
    public function datauser()
    {
      $query = $this->db->query("select a.NIP, a.nama, b.nama as divisi, a.email, a.username, a.id_user from user a , ppk b WHERE a.id_ppk = b.id_ppk");
      return $query->result();    
    }
    public function databmn()
    {
      $query = $this->db->query("select id_user, NIP , nama , bagian as divisi , email , username from user where bagian = 'BMN' ");
      return $query->result();  
    }
    public function datakeuangan()
    {
      $query = $this->db->query("select id_user, NIP , nama , bagian as divisi , email , username from user where bagian = 'Keuangan' ");
      return $query->result();  
    }
    public function databendahara()
    {
      $query = $this->db->query("select id_user, NIP , nama , bagian as divisi , email , username from user where bagian = 'Bendahara' ");
      return $query->result();  
    }
     public function datapokja()
    {
      $query = $this->db->query("select id_user, NIP , nama , bagian as divisi , email , username from user where bagian = 'Pokja' ");
      return $query->result();  
    }
    //Model hitung jumlah user
    public function JumlahUser ()
    {
        $this->db->select('*');
        $this->db->from('user');
        $query = $this->db->get();
        return $query->num_rows();
    }
    //Model untuk daftar user
    public function Tambahuser ($data , $table)
    {
        return $this->db->insert($table, $data);
    }
    //Model Cek NIP User
    public function ceknipuser ($nip)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('nip',$nip);
        $query = $this->db->get();
        return $query->num_rows();
    }
    // Fungsi ambil & edit USER
    public function GetWhereUser($id_user){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('id_user',$id_user);
        $query = $this->db->get();
        return $query->row_array();
      }
      // Fungsi Update PPK
    public function UpdateDataUser ($data_update,$id_user)
      {
          $this->db->where('id_user',$id_user);
          return $this->db->update('user',$data_update);
      }
      public function hapususer($where, $table)
      {
          $this->db->where($where);
          $this->db->delete($table);
      }

  }
 ?>