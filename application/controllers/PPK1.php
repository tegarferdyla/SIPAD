<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class PPK1 extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		} else if ($this->session->userdata('role') == 'admin') {
			redirect('admin');
		} else if ($this->session->userdata('divisi') == 'Kasatker') {
			redirect('kasatker');
		}
	}
	public function editprofile() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header', $data);

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$this->load->view('ppk1/editakun', $data);
		$this->load->view('ppk1/footer');
	}
	public function changeprofile() {
		$id_user = $this->session->userdata('id_user');
		$config['upload_path'] = './assets/img/';
		$config['allowed_types'] = 'jpg|png|gif';
		$config['max_size'] = 100000;
		$config['overwrite'] = TRUE;

		$this->load->library('upload', $config);
		if (!$this->upload->do_upload('myfiles')) {
			// $this->upload->do_upload('myfiles');
			$result = $this->upload->data();
			$data_update = array(
				// 'foto'  => $result['file_name'],
				'nama' => $this->input->post('nama_user'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
			);

			$result = $this->Datauser_model->UpdateDataUser($data_update, $id_user);

			if ($result > 0) {
				$this->session->set_flashdata('updateberhasil', 'true');
				redirect('ppk1/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('ppk1/editprofile');
			}
		} else {
			$result = $this->upload->data();
			$data_update = array(
				'foto' => $result['file_name'],
				'nama' => $this->input->post('nama_user'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
			);

			$result = $this->Datauser_model->UpdateDataUser($data_update, $id_user);

			if ($result > 0) {
				$this->session->set_flashdata('updateberhasil', 'true');
				redirect('ppk1/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('ppk1/editprofile');
			}
		}

	}
	public function index() {

		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/dashboard', $data);
		$this->load->view('ppk1/footer');
	}

	public function inputtahun() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$this->load->view('ppk1/inputtahun');
		$this->load->view('ppk1/footer');
	}
	public function daftartahun() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/daftartahun', $data);
		$this->load->view('ppk1/footer');
	}
	public function hapustahun($id_tahun) {
		$id_ppk = $this->session->userdata('id_ppk');
		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$where = array(
			'id_tahun' => $id_tahun,
			'id_ppk' => $id_ppk,
		);
		$result = $this->Datatahun_model->hapustahun($where, 'tbl_tahun');

		$this->session->set_flashdata('deleteberhasil', 'true');
		redirect(base_url('ppk1/daftartahun'));
	}
	public function edittahun($id_tahun) {
		$id_ppk = $this->session->userdata('id_ppk');
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data = array('get_ppk' => $this->Datatahun_model->datatahun($id_ppk));
		$tahun = $this->Datatahun_model->GetWhereTahun("where id_tahun ='$id_tahun'");
		$data = array(
			"id_tahun" => $tahun[0]['id_tahun'],
			"nama_tahun" => $tahun[0]['nama_tahun'],
			"deskripsi" => $tahun[0]['deskripsi'],
		);
		$this->load->view('ppk1/edittahun', $data);
		$this->load->view('ppk1/footer');
	}
	public function updatetahun() {

		$id_tahun = $this->input->post('id_tahun');
		$nama_tahun = $this->input->post('nama_tahun');
		$deskripsi = $this->input->post('deskripsi');
		$input_by = $this->session->userdata('nama');
		$id_ppk = $this->session->userdata('id_ppk');

		$data_update = array(
			'id_tahun' => $id_tahun,
			'nama_tahun' => $nama_tahun,
			'deskripsi' => $deskripsi,
			'input_by' => $input_by,
			'id_ppk' => $id_ppk,
		);
		$where = array('id_tahun' => $id_tahun);
		$result = $this->Datatahun_model->UpdateDataTahun('tbl_tahun', $data_update, $where);
		if ($result > 0) {
			$this->session->set_flashdata('updateberhasil', 'true');
			redirect('ppk1/daftartahun');
		} else {
			$this->session->set_flashdata('updategagal', 'true');
			redirect('ppk1/daftartahun');
		}
	}
	public function profile() {
		$id_ppk = $this->session->userdata('id_ppk');

		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$this->load->view('ppk1/profile');
		$this->load->view('ppk1/footer');
	}
	public function changepassword() {
		$id_ppk = $this->session->userdata('id_ppk');
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);
		//Untuk Side Bar
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$this->load->view('ppk1/changepassword');
		$this->load->view('ppk1/footer');
	}
	public function tambahtahun() {
		$this->form_validation->set_rules('tahun', 'Nama Tahun', 'trim|required');
		$id_ppk = $this->session->userdata('id_ppk');
		if ($this->form_validation->run() == FALSE) {
			$id_user = $this->session->userdata('id_user');
			$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('ppk1/header', $data);

			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar', $ppk);

			$this->load->view('ppk1/inputtahun');
			$this->load->view('ppk1/footer');
		} else {
			$tahun = $this->input->post('tahun');
			$deskripsi = $this->input->post('deskripsi');
			$data = array(
				'id_tahun' => $this->Penomoran_model->IDTahun(),
				'nama_tahun' => $tahun,
				'deskripsi' => $deskripsi,
				'input_by' => $this->session->userdata('nama'),
				'id_ppk' => $id_ppk,
			);
			$resultchecknip = $this->Datatahun_model->validasitahun($tahun);
			if ($resultchecknip > 0) {
				$this->session->set_flashdata('tahunsalah', 'true');
				redirect('ppk1/inputtahun');
			} else {
				$input = $this->Datatahun_model->Tambahtahun($data, 'tbl_tahun');
				if ($input > 0) {
					$lokasi = "./assets/data/" . $tahun;
					mkdir($lokasi, 0777, true);
					$this->session->set_flashdata('berhasil', 'true');
					redirect(base_url('ppk1/inputtahun'));
				} else {
					$this->session->set_flashdata('gagal', 'true');
					redirect(base_url('ppk1/inputtahun'));
				}
			}
		}
	}
	public function jenispaket($tahun) {
		$data = $this->Datatahun_model->cektahun($tahun);

		// echo $data->id_tahun;
		// $this->load->view('ppk1/test',$data);
		if ($data == NULL) {
			$this->session->set_flashdata('kosong', 'true');
			redirect('ppk1');
		} else {
			// echo "isi";
			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('ppk1/header', $ini);

			// $this->load->view('ppk1/header1');

			$id_ppk = $this->session->userdata('id_ppk');
			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar', $ppk);

			$this->load->view('ppk1/jenispaket', $data);
			$this->load->view('ppk1/footer');
		}

	}
	public function pilihpaket($tahun, $jenis) {
		$id_ppk = $this->session->userdata('id_ppk');
		$data['jenis'] = $this->Datapaket_model->cekjenis($jenis, $tahun, $id_ppk);
		if ($data['jenis'] == NULL) {
			$this->session->set_flashdata('kosong', 'true');
			redirect('ppk1/jenispaket/' . $tahun);
		} else {
			$id_user = $this->session->userdata('id_user');
			$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('ppk1/header', $data);

			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar', $ppk);

			$this->load->view('ppk1/pilihpaket', $data);
			$this->load->view('ppk1/footer');
			// echo "isi";
		}

	}

	public function inputdokutama($id_paket) {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$this->load->view('ppk1/input', $data);
		$this->load->view('ppk1/footer');
	}

	public function inputdokpendukung($id_paket) {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$this->load->view('ppk1/inputpendukung', $data);
		$this->load->view('ppk1/footer');
	}

	public function simpandoc() {
		$id_paket = $this->input->post('id_paket');
		$cari = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$jenis = $cari[0]["jenis"];
		$nama_paket = $cari[0]["nama_paket"];
		$idtahun = $cari[0]["id_tahun"];
		$carithn = $this->Datatahun_model->cektahun($idtahun);
		$tahun = $carithn->nama_tahun;
		$id_doc = $this->Penomoran_model->IDdoc();

		$addendumii = $this->input->post('topic1');
		$addendumiii = $this->input->post('topic2');
		$addendumiv = $this->input->post('topic3');

		$file = [
			'upload_path' => './assets/data/' . $tahun . '/' . $jenis . '/' . $nama_paket . '/',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE,
			// 'encrypt_name' => TRUE
		];
		$namabaru = $tahun . "-" . $nama_paket . "-";
		$this->load->library('upload', $file);
		for ($i = 1; $i <= 62; $i++) {
			$files[$i] = $_FILES['file'.$i]['name'];
			if (!$this->upload->do_upload('file' . $i)) {
				$this->upload->display_errors();
			} else {
				// $this->upload->do_upload('file'.$i);
				$a[$i] = $this->upload->data();
				rename($a[$i]['full_path'], $a[$i]['file_path'] . $namabaru . $a[$i]['file_name']);
			}
			if (!empty($files[$i])) {
				$namaajah[$i] = $tahun . "-" . $nama_paket . "-";
				$namafile[$i] = $a[$i]['file_name'];
			} else {
				$namaajah[$i] = "";
				$namafile[$i] = "";
			}
		}
		$doc1 = array(
			'id_doc' => $id_doc,
			'id_paket' => $id_paket,
			'surat_md' => $namaajah[1] . $namafile[1],
			'surat_mh' => $namaajah[2] . $namafile[2],
			'surat_kl' => $namaajah[3] . $namafile[3],
			'kesepakatan_bersama' => $namaajah[4] . $namafile[4],
			'perjanjian_kerjasama' => $namaajah[5] . $namafile[5],
			'sppbj' => $namaajah[6] . $namafile[6],
			'spmk' => $namaajah[7] . $namafile[7],
			'naskah_kontrak' => $namaajah[8] . $namafile[8],
			'rencana_mk' => $namaajah[9] . $namafile[9],
			'bcp' => $namaajah[10] . $namafile[10],
			'mc0_dd' => $namaajah[11] . $namafile[11],
			'mc0_bal' => $namaajah[12] . $namafile[12],
			'mc0_jdst' => $namaajah[13] . $namafile[13],
		);
		$tambahdoc1 = $this->Datapaket_model->insertdoc1('tbl_doc1', $doc1);

		$doc2 = array(
			'id_pasca' => $this->Penomoran_model->IDPsc(),
			'id_paket' => $id_paket,
			'pasca_boq' => $namaajah[14] . $namafile[14],
			'pasca_jdst' => $namaajah[15] . $namafile[15],
			'pasca_slp' => $namaajah[16] . $namafile[16],
			'pasca_kurva' => $namaajah[17] . $namafile[17],
			'pasca_shop' => $namaajah[18] . $namafile[18],
			'pasca_bakn' => $namaajah[19] . $namafile[19],
			'pasca_nai' => $namaajah[20] . $namafile[20],
		);
		$tambahdoc2 = $this->Datapaket_model->insertdoc2('tbl_pascamc0', $doc2);
		// if ($addendumii == "on") {
			$datadendumii = array(
				'id_addii' => $this->Penomoran_model->IDadd2(),
				'id_paket' => $id_paket,
				'addii_bal' => $namaajah[21] . $namafile[21],
				'addii_boq' => $namaajah[22] . $namafile[22],
				'addii_jdst' => $namaajah[23] . $namafile[23],
				'addii_slp' => $namaajah[24] . $namafile[24],
				'addii_kurva' => $namaajah[25] . $namafile[25],
				'addii_shop' => $namaajah[26] . $namafile[26],
				'addii_bakln' => $namaajah[27] . $namafile[27],
				'addii_naii' => $namaajah[28] . $namafile[28],
			);
			$tambahdoc3 = $this->Datapaket_model->insertdoc3('tbl_addendumii', $datadendumii);
		// }
		// if ($addendumiii == "on") {
			$datadendumiii = array(
				'id_addiii' => $this->Penomoran_model->IDadd3(),
				'id_paket' => $id_paket,
				'addiii_bal' => $namaajah[29] . $namafile[29],
				'addiii_boq' => $namaajah[30] . $namafile[30],
				'addiii_jdst' => $namaajah[31] . $namafile[31],
				'addiii_slp' => $namaajah[32] . $namafile[32],
				'addiii_kurva' => $namaajah[33] . $namafile[33],
				'addiii_shop' => $namaajah[34] . $namafile[34],
				'addiii_bakln' => $namaajah[35] . $namafile[35],
				'addii_naiii' => $namaajah[36] . $namafile[36],
			);
			$tambahdoc4 = $this->Datapaket_model->insertdoc4('tbl_addendumiii', $datadendumiii);
		// }
		// if ($addendumiv == "on") {
			$datadendumiv = array(
				'id_addiv' => $this->Penomoran_model->IDadd4(),
				'id_paket' => $id_paket,
				'addiv_bal' => $namaajah[37] . $namafile[37],
				'addiv_boq' => $namaajah[38] . $namafile[38],
				'addiv_jdst' => $namaajah[39] . $namafile[39],
				'addiv_slp' => $namaajah[40] . $namafile[40],
				'addiv_kurva' => $namaajah[41] . $namafile[41],
				'addiv_shop' => $namaajah[42] . $namafile[42],
				'addiv_bakn' => $namaajah[43] . $namafile[43],
				'addiv_naiv' => $namaajah[44] . $namafile[44],
			);
			$tambahdoc5 = $this->Datapaket_model->insertdoc4('tbl_addendumiv', $datadendumiv);
		// }
		$doc3 = array(
			'id_doc2' => $this->Penomoran_model->IDdoc2(),
			'id_paket' => $id_paket,
			'laporan_harian1' => $namaajah[45] . $namafile[45],
			'laporan_mingguan1' => $namaajah[46] . $namafile[46],
			'bulanan_kontraktor' => $namaajah[47] . $namafile[47],
			'sertifikat_pembayaran' => $namaajah[48] . $namafile[48],
			'laporan_harian2' => $namaajah[49] . $namafile[49],
			'laporan_mingguan2' => $namaajah[50] . $namafile[50],
			'bulanan_konsultan' => $namaajah[51] . $namafile[51],
			'berita_apm' => $namaajah[52] . $namafile[52],
			'berita_ascm' => $namaajah[53] . $namafile[53],
			'provisional_sp' => $namaajah[54] . $namafile[54],
			'provisional_bafv' => $namaajah[55] . $namafile[55],
			'provisional_basv' => $namaajah[56] . $namafile[56],
			'provisional_bastp' => $namaajah[57] . $namafile[57],
		);
		$tambahdoc6 = $this->Datapaket_model->insertdoc5('tbl_doc2', $doc3);
		$doc4 = array(
			'id_doc3' => $this->Penomoran_model->IDdoc3(),
			'id_paket' => $id_paket,
			'final_sp' => $namaajah[58] . $namafile[58],
			'final_bafv' => $namaajah[59] . $namafile[59],
			'final_basv' => $namaajah[60] . $namafile[60],
			'final_bastp' => $namaajah[61] . $namafile[61],
			'final_dokumentasi' => $namaajah[62] . $namafile[62],
		);
		$tambahdoc7 = $this->Datapaket_model->insertdoc6('tbl_doc3', $doc4);
		$result = ($tambahdoc1 && $tambahdoc2 && $tambahdoc6 && $tambahdoc7);
		if ($result > 0) {
			$this->session->set_flashdata('updateberhasil', true);
			redirect('ppk1/viewdocutama/' . $id_paket);
		}

	}
	public function simpandocpendukung() {
		$id_paket = $this->input->post('id_paket');
		$cari = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$jenis = $cari[0]["jenis"];
		$nama_paket = $cari[0]["nama_paket"];
		$idtahun = $cari[0]["id_tahun"];
		$carithn = $this->Datatahun_model->cektahun($idtahun);
		$tahun = $carithn->nama_tahun;

		$id_pendukung = $this->Penomoran_model->IDPend();
		// $addendumii = $this->input->post('topic1');
		// $addendumiii = $this->input->post('topic2');
		// $addendumiv = $this->input->post('topic3');

		$file = [
			'upload_path' => './assets/data/' . $tahun . '/' . $jenis . '/' . $nama_paket . '/',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE,
		];

		$namabaru = $tahun . "-" . $nama_paket . "-Pendukung-";
		$this->load->library('upload', $file);
		for ($i = 1; $i <= 15; $i++) {
			$files[$i] = $_FILES['file'.$i]['name'];
			if (!$this->upload->do_upload('file' . $i)) {
				$this->upload->display_errors();
			} else {
				// $this->upload->do_upload('file'.$i);
				$a[$i] = $this->upload->data();
				rename($a[$i]['full_path'], $a[$i]['file_path'] . $namabaru . $a[$i]['file_name']);
			}
			if (!empty($files[$i])) {
				$namaajah[$i] = $tahun . "-" . $nama_paket . "-Pendukung-";
				$namafile[$i] = $a[$i]['file_name'];
			} else {
				$namaajah[$i] = "";
				$namafile[$i] = "";
			}
		}
		$pendukung = array(
			'id_pendukung' => $id_pendukung,
			'id_paket' => $id_paket,
			'bmn_surat_alih' =>$namaajah[1] . $namafile[1],
			'bmn_rekomendasi' => $namaajah[2] . $namafile[2],
			'bmn_surat_hibah' => $namaajah[3] . $namafile[3],
			'keuangan_permohonan' => $namaajah[4] . $namafile[4],
			'keuangan_kuitansi' => $namaajah[5] . $namafile[5],
			'keuangan_kartu' => $namaajah[6] . $namafile[6],
			'keuangan_faktur' => $namaajah[7] . $namafile[7],
			'keuangan_pph' => $namaajah[8] . $namafile[8],
			'keuangan_spp' => $namaajah[9] . $namafile[9],
			'keuangan_spm' => $namaajah[10] . $namafile[10],
			'keuangan_sp2d' => $namaajah[11] . $namafile[11],
			'bendahara_lpj' => $namaajah[12] . $namafile[12],
			'bendahara_bapkdr' => $namaajah[13] . $namafile[13],
			'bendahara_rekening' => $namaajah[14] . $namafile[14],
			'bendahara_bapk' => $namaajah[15] . $namafile[15],
		);
		$tambahpendukung = $this->Datapaket_model->insertpend('tbl_pendukung', $pendukung);
		if ($tambahpendukung > 0) {
			$this->session->set_flashdata('updateberhasil', true);
			redirect('ppk1/viewdocpendukung/' . $id_paket);
		}

	}
	public function inputpaket() {
		$id_ppk = $this->session->userdata('id_ppk');
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/tambahpaket', $data);
		$this->load->view('ppk1/footer');
	}
	public function tambahpaket() {
		$nama_paket = $this->input->post('nama_paket');
		$jenis_paket = $this->input->post('jenis_paket');
		$tahun_paket = $this->input->post('tahun_paket');
		$deskripsi = $this->input->post('deskripsi');

		$id_ppk = $this->session->userdata('id_ppk');
		$data = array(
			'id_paket' => $this->Penomoran_model->IDPaket(),
			'nama_paket' => $nama_paket,
			'jenis' => $jenis_paket,
			'deskripsi' => $deskripsi,
			'input_by' => $this->session->userdata('nama'),
			'id_tahun' => $tahun_paket,
			'id_ppk' => $id_ppk,
		);
		$input = $this->Datapaket_model->Tambahpaket($data, 'tbl_paket');
		if ($input > 0) {
			$tahun = $this->Datatahun_model->GetWhereTahun("where id_tahun ='$tahun_paket'");
			$data = array(
				"nama_tahun" => $tahun[0]['nama_tahun'],
			);
			$tahun = $data['nama_tahun'];
			$lokasi = "./assets/data/" . $tahun . "/" . $jenis_paket . "/" . $nama_paket;
			mkdir($lokasi, 0777, true);
			$this->session->set_flashdata('berhasil', 'true');
			redirect(base_url('ppk1/inputpaket'));
		} else {
			$this->session->set_flashdata('gagal', 'true');
			redirect(base_url('ppk1/inputpaket'));
		}
	}
	public function viewdocutama($id_paket) {
		$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$idtahun = $data['paket'][0]['id_tahun'];
		$data['tahun'] = $this->Datatahun_model->cektahun($idtahun);
		$data['doc1'] = $this->Datapaket_model->showdata1('tbl_doc1', $id_paket);
		$data['doc2'] = $this->Datapaket_model->showdata2('tbl_doc2', $id_paket);
		$data['doc3'] = $this->Datapaket_model->showdata3('tbl_doc3', $id_paket);
		$data['doc4'] = $this->Datapaket_model->showdata4('tbl_pascamc0', $id_paket);
		$data['doc5'] = $this->Datapaket_model->showdata5('tbl_addendumii', $id_paket);
		$data['doc6'] = $this->Datapaket_model->showdata6('tbl_addendumiii', $id_paket);
		$data['doc7'] = $this->Datapaket_model->showdata7('tbl_addendumiv', $id_paket);
		if ($data['doc1'] == NULL) {
			redirect('PPK1/inputdokutama/' . $id_paket);
		} else {
			$id_ppk = $this->session->userdata('id_ppk');
			$id_user = $this->session->userdata('id_user');
			$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('ppk1/header', $data);

			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar', $ppk);

			$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$this->load->view('ppk1/viewdocutama', $data);
			$this->load->view('ppk1/footer');
		}
	}
	public function viewdocpendukung($id_paket) {	
		$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$idtahun = $data['paket'][0]['id_tahun'];
		$data['tahun'] = $this->Datatahun_model->cektahun($idtahun);
		$data['pendukung'] = $this->Datapaket_model->showpendukung('tbl_pendukung', $id_paket);
		// $this->load->view('ppk1/header', $data);
		if ($data['pendukung'] == NULL) {
			redirect('PPK1/inputdokpendukung/' . $id_paket);
		} else {
			$id_ppk = $this->session->userdata('id_ppk');
			$id_user = $this->session->userdata('id_user');
			$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('ppk1/header', $data);

			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar', $ppk);

			$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$this->load->view('ppk1/viewdocpendukung', $data);
			$this->load->view('ppk1/footer');
		}
	}
	public function editdocutama($id_paket)
	{
		$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$idtahun = $data['paket'][0]['id_tahun'];
		$data['tahun'] = $this->Datatahun_model->cektahun($idtahun);
		$data['doc1'] = $this->Datapaket_model->showdata1('tbl_doc1', $id_paket);
		$data['doc2'] = $this->Datapaket_model->showdata2('tbl_doc2', $id_paket);
		$data['doc3'] = $this->Datapaket_model->showdata3('tbl_doc3', $id_paket);
		$data['doc4'] = $this->Datapaket_model->showdata4('tbl_pascamc0', $id_paket);
		$data['doc5'] = $this->Datapaket_model->showdata5('tbl_addendumii', $id_paket);
		$data['doc6'] = $this->Datapaket_model->showdata6('tbl_addendumiii', $id_paket);
		$data['doc7'] = $this->Datapaket_model->showdata7('tbl_addendumiv', $id_paket);
		
		$id_ppk = $this->session->userdata('id_ppk');
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $data);


		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar', $ppk);

			$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$this->load->view('ppk1/editdocutama', $data);
			$this->load->view('ppk1/footer');
	}
	public function updatedocutama()
	{
		$id_paket = $this->input->post('id_paket');
		$cari = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$jenis = $cari[0]["jenis"];
		$nama_paket = $cari[0]["nama_paket"];
		$idtahun = $cari[0]["id_tahun"];
		$carithn = $this->Datatahun_model->cektahun($idtahun);
		$tahun = $carithn->nama_tahun;
		$file = [
			'upload_path' => './assets/data/' . $tahun . '/' . $jenis . '/' . $nama_paket . '/',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE,
			// 'encrypt_name' => TRUE
		];
		$namabaru = $tahun . "-" . $nama_paket . "-";
		$this->load->library('upload', $file);
		for ($i = 1; $i <= 4; $i++) {
			$delfile[$i] = $this->input->post('delf'.$i);
			$files[$i] = $_FILES['file'.$i]['name'];
			if (!$this->upload->do_upload('file' . $i)) {
				$this->upload->display_errors();
			} else {
				$this->upload->do_upload('file'.$i);
				$a[$i] = $this->upload->data();
				rename($a[$i]['full_path'], $a[$i]['file_path'] . $namabaru . $a[$i]['file_name']);
			}
			if (!empty($files[$i])) {
				$namaajah[$i] = $tahun . "-" . $nama_paket . "-";
				$namafile[$i] = $a[$i]['file_name'];
				unlink($a[$i]['file_path'].$delfile[$i]);
			} else {
				$namaajah[$i] = "";
				$namafile[$i] = $delfile[$i];
			}
		}
		$data_update = array(
						'surat_md' => $namaajah[1] . $namafile[1],
						'surat_mh' => $namaajah[2].$namafile[2],
						'surat_kl' => $namaajah[3].$namafile[3],
						'kesepakatan_bersama' => $namaajah[4].$namafile[4]
						);
		$where = array ('id_paket' => $id_paket);
		$result = $this->Datappk_model->UpdateDataPPK('tbl_doc1', $data_update, $where);
		if ($result>0) {
			redirect('ppk1/editdocutama/'.$id_paket);
		}
	}

	public function test($id_paket) {
		// $cari['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$data['show'] = $this->Datapaket_model->showidpkt('tbl_pendukung', $id_paket);
		$this->load->view('ppk1/test', $data);

	}
	public function testkirim() {
		for ($i = 1; $i < 3; $i++) {
			$input[$i] = $_FILES['file' . $i]['name'];
		}
		echo $input[1];
	}

}
?>