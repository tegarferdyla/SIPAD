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
	public function lihatpaket($id_tahun)
	{
		$this->db->select('*');
		$this->db->from('tbl_paket');
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
	public function showidthn($tahun)
	{
		$this->db->select('*');
		$this->db->from('tbl_tahun');
		$this->db->where('nama_tahun', $tahun);
		$query = $this->db->get();
		return $query->result();
	}
	public function chart()
    {
    	$sql = $this->db->query("SELECT a.nama, COUNT(b.nama_paket) jumlah_paket FROM ppk a, tbl_paket b WHERE a.id_ppk = b.id_ppk GROUP BY b.id_ppk");
    	return $sql->result();
    }
    public function countonme($id_tahun)
    {
    	$query = $this->db->query("SELECT id_paket, sum(hasil) hasil from (
    		select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'surat_md' file, a.surat_md value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') a
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'surat_mh' file, a.surat_mh value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') b
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'surat_kl' file, a.surat_kl value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') c
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'kesepakatan_bersama' file, a.kesepakatan_bersama value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') d
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'perjanjian_kerjasama' file, a.perjanjian_kerjasama value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') e
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'sppbj' file, a.sppbj value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') f
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'spmk' file, a.spmk value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') g
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'naskah_kontrak' file, a.naskah_kontrak value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') h
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'rencana_mk' file, a.rencana_mk value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') i
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bcp' file, a.bcp value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') j
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'mc0_dd' file, a.mc0_dd value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') k
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'mc0_bal' file, a.mc0_bal value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') l
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'mc0_jdst' file, a.mc0_jdst value
			from tbl_doc1 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') m
			)n
			GROUP by id_paket");
    	return $query->result();
    }
    public function countdoc2($id_tahun)
    {
    	$query = $this->db->query("SELECT id_paket, sum(hasil) hasil from (
    		select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'laporan_harian1' file, a.laporan_harian1 value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') a
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'laporan_mingguan1' file, a.laporan_mingguan1 value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') b
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bulanan_kontraktor' file, a.bulanan_kontraktor value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') c
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'sertifikat_pembayaran' file, a.sertifikat_pembayaran value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') d
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'laporan_harian2' file, a.laporan_harian2 value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') e
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'laporan_mingguan2' file, a.laporan_mingguan2 value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') f
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bulanan_konsultan' file, a.bulanan_konsultan value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') g
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'berita_apm' file, a.berita_apm value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') h
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'berita_ascm' file, a.berita_ascm value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') i
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'provisional_sp' file, a.provisional_sp value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') j
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'provisional_bafv' file, a.provisional_bafv value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') k
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'provisional_basv' file, a.provisional_basv value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') l
			union
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'provisional_bastp' file, a.provisional_bastp value
			from tbl_doc2 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') m
			)n
			GROUP by id_paket");
    	return $query->result();
    }
    public function countdoc3($id_tahun)
    {
    	$query = $this->db->query("SELECT id_paket, sum(hasil) hasil from (
    		select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'final_sp' file, a.final_sp value
			from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') a
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'final_bafv' file, a.final_bafv value
			from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') b
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'final_basv' file, a.final_basv value
			from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') c
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'final_bastp' file, a.final_bastp value
			from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') d
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'final_dokumentasi' file, a.final_dokumentasi value
			from tbl_doc3 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') e
			)n
			GROUP by id_paket");
    	return $query->result();
    }
    public function countdoc4($id_tahun)
    {
    	$query = $this->db->query("SELECT id_paket, sum(hasil) hasil from (
    		select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addii_bal' file, a.addii_bal value
			from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') a
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addii_boq' file, a.addii_boq value
			from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') b
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addii_jdst' file, a.addii_jdst value
			from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') c
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addii_slp' file, a.addii_slp value
			from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') d
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addii_kurva' file, a.addii_kurva value
			from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') e
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addii_shop' file, a.addii_shop value
			from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') f
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addii_bakln' file, a.addii_bakln value
			from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') g
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addii_naii' file, a.addii_naii value
			from tbl_addendumii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') h
			)n
			GROUP by id_paket");
    	return $query->result();
    }
    public function countdoc5($id_tahun)
    {
    	$query = $this->db->query("SELECT id_paket, sum(hasil) hasil from (
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiii_bal' file, a.addiii_bal value
			from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') a
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiii_boq' file, a.addiii_boq value
			from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') b
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiii_jdst' file, a.addiii_jdst value
			from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') c
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiii_slp' file, a.addiii_slp value
			from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') d
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiii_kurva' file, a.addiii_kurva value
			from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') e
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiii_shop' file, a.addiii_shop value
			from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') f
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiii_bakln' file, a.addiii_bakln value
			from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') g
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiii_naiii' file, a.addii_naiii value
			from tbl_addendumiii a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') h
			)n
			GROUP by id_paket");
    	return $query->result();
    }
    public function countdoc6($id_tahun)
    {
    	$query = $this->db->query("SELECT id_paket, sum(hasil) hasil from (
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiv_bal' file, a.addiv_bal value
			from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') a
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiv_boq' file, a.addiv_boq value
			from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') b
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiv_jdst' file, a.addiv_jdst value
			from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') c
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiv_slp' file, a.addiv_slp value
			from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') d
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiv_kurva' file, a.addiv_kurva value
			from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') e
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiv_shop' file, a.addiv_shop value
			from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') f
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiv_bakn' file, a.addiv_bakn value
			from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') g
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'addiv_naiv' file, a.addiv_naiv value
			from tbl_addendumiv a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') h
			)n
			GROUP by id_paket");
    	return $query->result();
    }
    public function countdoc7($id_tahun)
    {
    	$query = $this->db->query("SELECT id_paket, sum(hasil) hasil from (
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'pasca_boq' file, a.pasca_boq value
			from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') a
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'pasca_jdst' file, a.pasca_jdst value
			from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') b
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'pasca_slp' file, a.pasca_slp value
			from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') c
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'pasca_kurva' file, a.pasca_kurva value
			from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') d
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'pasca_shop' file, a.pasca_shop value
			from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') e
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'pasca_bakn' file, a.pasca_bakn value
			from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') f
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'pasca_nai' file, a.pasca_nai value
			from tbl_pascamc0 a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') g
			)n
			GROUP by id_paket");
    	return $query->result();
    }
    public function countdoc8($id_tahun)
    {
    	$query = $this->db->query("SELECT id_paket, sum(hasil) hasil from (
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bmn_surat_alih' file, a.bmn_surat_alih value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') a
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bmn_rekomendasi' file, a.bmn_rekomendasi value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') b
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bmn_surat_hibah' file, a.bmn_surat_hibah value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') c
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'keuangan_permohonan' file, a.keuangan_permohonan value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') d
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'keuangan_kuitansi' file, a.keuangan_kuitansi value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') e
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'keuangan_kartu' file, a.keuangan_kartu value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') f
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'keuangan_faktur' file, a.keuangan_faktur value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') g
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'keuangan_pph' file, a.keuangan_pph value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') h
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'keuangan_spp' file, a.keuangan_spp value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') i
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'keuangan_spm' file, a.keuangan_spm value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') j
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'keuangan_sp2d' file, a.keuangan_sp2d value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') k
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bendahara_lpj' file, a.bendahara_lpj value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') l
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bendahara_bapkdr' file, a.bendahara_bapkdr value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') m
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bendahara_rekening' file, a.bendahara_rekening value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') n
			UNION
			select * , if(value = '',0,1) as hasil from(
			select a.id_paket, 'bendahara_bapk' file, a.bendahara_bapk value
			from tbl_pendukung a, tbl_paket b where a.id_paket = b.id_paket AND b.id_tahun = '$id_tahun') o
			)n
			GROUP by id_paket");
    	return $query->result();
    }
}
?>