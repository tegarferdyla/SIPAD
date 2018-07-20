<?php
defined('BASEPATH') OR exit('No direct scrit access allowed');

/**
 *
 */
class Penomoran_model extends CI_Model {

	function __construct() {
		parent::__construct();
	}

	// Penomoran ID Akun
	public function IDDaftar() {
		$this->db->select("RIGHT(id_user,4) AS kode ");
		$this->db->order_by('id_user', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('user');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "USR" . $kodemax;
		return $kodejadi;
	}

	//Penomoran ID PPK
	public function IDPPK() {
		$this->db->select("RIGHT(id_ppk,4) AS kode");
		$this->db->order_by('id_ppk', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('ppk');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "PPK" . $kodemax;
		return $kodejadi;
	}
	// Penomoran ID Tahun
	public function IDTahun() {
		$this->db->select("RIGHT(id_tahun,4) AS kode");
		$this->db->order_by('id_tahun', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_tahun');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "THN" . $kodemax;
		return $kodejadi;
	}
	public function IDPaket() {
		$this->db->select("RIGHT(id_paket,4) AS kode");
		$this->db->order_by('id_paket', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_paket');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "PKT" . $kodemax;
		return $kodejadi;
	}
	public function IDdoc() {
		$this->db->select("RIGHT(id_doc,4) AS kode");
		$this->db->order_by('id_doc', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_doc1');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "DOC" . $kodemax;
		return $kodejadi;
	}
	public function IDPsc() {
		$this->db->select("RIGHT(id_pasca,4) AS kode");
		$this->db->order_by('id_pasca', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_pascamc0');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "PSC" . $kodemax;
		return $kodejadi;
	}
	public function IDadd2() {
		$this->db->select("RIGHT(id_addii,4) AS kode");
		$this->db->order_by('id_addii', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_addendumii');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "AD2" . $kodemax;
		return $kodejadi;
	}
	public function IDadd3() {
		$this->db->select("RIGHT(id_addiii,4) AS kode");
		$this->db->order_by('id_addiii', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_addendumiii');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "AD3" . $kodemax;
		return $kodejadi;
	}
	public function IDadd4() {
		$this->db->select("RIGHT(id_addiv,4) AS kode");
		$this->db->order_by('id_addiv', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_addendumiv');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "AD4" . $kodemax;
		return $kodejadi;
	}
	public function IDdoc2() {
		$this->db->select("RIGHT(id_doc2,4) AS kode");
		$this->db->order_by('id_doc2', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_doc2');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "DC2" . $kodemax;
		return $kodejadi;
	}
	public function IDdoc3() {
		$this->db->select("RIGHT(id_doc3,4) AS kode");
		$this->db->order_by('id_doc3', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_doc3');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "DC3" . $kodemax;
		return $kodejadi;
	}
	public function IDPend() {
		$this->db->select("RIGHT(id_pendukung,4) AS kode");
		$this->db->order_by('id_pendukung', 'DESC');
		$this->db->limit(1);
		$query = $this->db->get('tbl_pendukung');
		if ($query->num_rows() > 0) {
			$data = $query->row();
			$kode = intval($data->kode) + 1;
		} else {
			$kode = 1;
		}
		$kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		$kodejadi = "DOC" . $kodemax;
		return $kodejadi;
	}
}
?>