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

		$file1 = str_replace(' ', '_', $_FILES['file1']['name']);
		$file2 = str_replace(' ', '_', $_FILES['file2']['name']);
		$file3 = str_replace(' ', '_', $_FILES['file3']['name']);
		$file4 = str_replace(' ', '_', $_FILES['file4']['name']);
		$file5 = str_replace(' ', '_', $_FILES['file5']['name']);
		$file6 = str_replace(' ', '_', $_FILES['file6']['name']);
		$file7 = str_replace(' ', '_', $_FILES['file7']['name']);
		$file8 = str_replace(' ', '_', $_FILES['file8']['name']);
		$file9 = str_replace(' ', '_', $_FILES['file9']['name']);
		$file10 = str_replace(' ', '_', $_FILES['file10']['name']);
		$file11 = str_replace(' ', '_', $_FILES['file11']['name']);
		$file12 = str_replace(' ', '_', $_FILES['file12']['name']);
		$file13 = str_replace(' ', '_', $_FILES['file13']['name']);
		$file14 = str_replace(' ', '_', $_FILES['file14']['name']);
		$file15 = str_replace(' ', '_', $_FILES['file15']['name']);
		$file16 = str_replace(' ', '_', $_FILES['file16']['name']);
		$file17 = str_replace(' ', '_', $_FILES['file17']['name']);
		$file18 = str_replace(' ', '_', $_FILES['file18']['name']);
		$file19 = str_replace(' ', '_', $_FILES['file19']['name']);
		$file20 = str_replace(' ', '_', $_FILES['file20']['name']);
		$file21 = str_replace(' ', '_', $_FILES['file21']['name']);
		$file22 = str_replace(' ', '_', $_FILES['file22']['name']);
		$file23 = str_replace(' ', '_', $_FILES['file23']['name']);
		$file24 = str_replace(' ', '_', $_FILES['file24']['name']);
		$file25 = str_replace(' ', '_', $_FILES['file25']['name']);
		$file26 = str_replace(' ', '_', $_FILES['file26']['name']);
		$file27 = str_replace(' ', '_', $_FILES['file27']['name']);
		$file28 = str_replace(' ', '_', $_FILES['file28']['name']);
		$file29 = str_replace(' ', '_', $_FILES['file29']['name']);
		$file30 = str_replace(' ', '_', $_FILES['file30']['name']);
		$file31 = str_replace(' ', '_', $_FILES['file31']['name']);
		$file32 = str_replace(' ', '_', $_FILES['file32']['name']);
		$file33 = str_replace(' ', '_', $_FILES['file33']['name']);
		$file34 = str_replace(' ', '_', $_FILES['file34']['name']);
		$file35 = str_replace(' ', '_', $_FILES['file35']['name']);
		$file36 = str_replace(' ', '_', $_FILES['file36']['name']);
		$file37 = str_replace(' ', '_', $_FILES['file37']['name']);
		$file38 = str_replace(' ', '_', $_FILES['file38']['name']);
		$file39 = str_replace(' ', '_', $_FILES['file39']['name']);
		$file40 = str_replace(' ', '_', $_FILES['file40']['name']);
		$file41 = str_replace(' ', '_', $_FILES['file41']['name']);
		$file42 = str_replace(' ', '_', $_FILES['file42']['name']);
		$file43 = str_replace(' ', '_', $_FILES['file43']['name']);
		$file44 = str_replace(' ', '_', $_FILES['file44']['name']);
		$file45 = str_replace(' ', '_', $_FILES['file45']['name']);
		$file46 = str_replace(' ', '_', $_FILES['file46']['name']);
		$file47 = str_replace(' ', '_', $_FILES['file47']['name']);
		$file48 = str_replace(' ', '_', $_FILES['file48']['name']);
		$file49 = str_replace(' ', '_', $_FILES['file49']['name']);
		$file50 = str_replace(' ', '_', $_FILES['file50']['name']);
		$file51 = str_replace(' ', '_', $_FILES['file51']['name']);
		$file52 = str_replace(' ', '_', $_FILES['file52']['name']);
		$file53 = str_replace(' ', '_', $_FILES['file53']['name']);
		$file54 = str_replace(' ', '_', $_FILES['file54']['name']);
		$file55 = str_replace(' ', '_', $_FILES['file55']['name']);
		$file56 = str_replace(' ', '_', $_FILES['file56']['name']);
		$file57 = str_replace(' ', '_', $_FILES['file57']['name']);
		$file58 = str_replace(' ', '_', $_FILES['file58']['name']);
		$file59 = str_replace(' ', '_', $_FILES['file59']['name']);
		$file60 = str_replace(' ', '_', $_FILES['file60']['name']);
		$file61 = str_replace(' ', '_', $_FILES['file61']['name']);
		$file62 = str_replace(' ', '_', $_FILES['file62']['name']);

		$addendumii = $this->input->post('topic1');
		$addendumiii = $this->input->post('topic2');
		$addendumiv = $this->input->post('topic3');

		$file = [
			'upload_path' => './assets/data/' . $tahun . '/' . $jenis . '/' . $nama_paket . '/',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE,
		];
		if (!empty($file1)) {
			$namabaru1 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru1 = "";
		}

		if (!empty($file2)) {
			$namabaru2 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru2 = "";
		}

		if (!empty($file3)) {
			$namabaru3 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru3 = "";
		}

		if (!empty($file4)) {
			$namabaru4 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru4 = "";
		}

		if (!empty($file5)) {
			$namabaru5 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru5 = "";
		}

		if (!empty($file6)) {
			$namabaru6 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru6 = "";
		}

		if (!empty($file7)) {
			$namabaru7 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru7 = "";
		}

		if (!empty($file8)) {
			$namabaru8 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru8 = "";
		}

		if (!empty($file9)) {
			$namabaru9 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru9 = "";
		}

		if (!empty($file10)) {
			$namabaru10 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru10 = "";
		}

		if (!empty($file11)) {
			$namabaru11 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru11 = "";
		}

		if (!empty($file12)) {
			$namabaru12 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru12 = "";
		}

		if (!empty($file13)) {
			$namabaru13 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru13 = "";
		}

		if (!empty($file14)) {
			$namabaru14 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru14 = "";
		}

		if (!empty($file15)) {
			$namabaru15 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru15 = "";
		}

		if (!empty($file16)) {
			$namabaru16 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru16 = "";
		}

		if (!empty($file17)) {
			$namabaru17 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru17 = "";
		}

		if (!empty($file18)) {
			$namabaru18 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru18 = "";
		}

		if (!empty($file19)) {
			$namabaru19 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru19 = "";
		}

		if (!empty($file20)) {
			$namabaru20 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru20 = "";
		}

		if (!empty($file21)) {
			$namabaru21 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru21 = "";
		}

		if (!empty($file22)) {
			$namabaru22 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru22 = "";
		}

		if (!empty($file23)) {
			$namabaru23 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru23 = "";
		}

		if (!empty($file24)) {
			$namabaru24 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru24 = "";
		}

		if (!empty($file25)) {
			$namabaru25 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru25 = "";
		}

		if (!empty($file26)) {
			$namabaru26 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru26 = "";
		}

		if (!empty($file27)) {
			$namabaru27 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru27 = "";
		}

		if (!empty($file28)) {
			$namabaru28 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru28 = "";
		}

		if (!empty($file29)) {
			$namabaru29 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru29 = "";
		}
		if (!empty($file30)) {
			$namabaru30 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru30 = "";
		}

		if (!empty($file31)) {
			$namabaru31 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru31 = "";
		}

		if (!empty($file32)) {
			$namabaru32 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru32 = "";
		}

		if (!empty($file33)) {
			$namabaru33 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru33 = "";
		}

		if (!empty($file34)) {
			$namabaru34 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru34 = "";
		}

		if (!empty($file35)) {
			$namabaru35 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru35 = "";
		}

		if (!empty($file36)) {
			$namabaru36 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru36 = "";
		}

		if (!empty($file37)) {
			$namabaru37 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru37 = "";
		}

		if (!empty($file38)) {
			$namabaru38 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru38 = "";
		}

		if (!empty($file39)) {
			$namabaru39 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru39 = "";
		}

		if (!empty($file40)) {
			$namabaru40 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru40 = "";
		}
		if (!empty($file41)) {
			$namabaru41 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru41 = "";
		}
		if (!empty($file42)) {
			$namabaru42 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru42 = "";
		}
		if (!empty($file43)) {
			$namabaru43 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru43 = "";
		}
		if (!empty($file44)) {
			$namabaru44 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru44 = "";
		}
		if (!empty($file45)) {
			$namabaru45 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru45 = "";
		}
		if (!empty($file46)) {
			$namabaru46 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru46 = "";
		}
		if (!empty($file47)) {
			$namabaru47 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru47 = "";
		}
		if (!empty($file48)) {
			$namabaru48 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru48 = "";
		}

		if (!empty($file49)) {
			$namabaru49 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru49 = "";
		}

		if (!empty($file50)) {
			$namabaru50 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru50 = "";
		}

		if (!empty($file51)) {
			$namabaru51 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru51 = "";
		}

		if (!empty($file52)) {
			$namabaru52 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru52 = "";
		}

		if (!empty($file53)) {
			$namabaru53 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru53 = "";
		}

		if (!empty($file54)) {
			$namabaru54 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru54 = "";
		}

		if (!empty($file55)) {
			$namabaru55 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru55 = "";
		}

		if (!empty($file56)) {
			$namabaru56 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru56 = "";
		}

		if (!empty($file57)) {
			$namabaru57 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru57 = "";
		}

		if (!empty($file58)) {
			$namabaru58 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru58 = "";
		}

		if (!empty($file59)) {
			$namabaru59 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru59 = "";
		}

		if (!empty($file60)) {
			$namabaru60 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru60 = "";
		}

		if (!empty($file61)) {
			$namabaru61 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru61 = "";
		}

		if (!empty($file62)) {
			$namabaru62 = $tahun . "-" . $nama_paket . "-";
		} else {
			$namabaru62 = "";
		}
		$namabaru = $tahun . "-" . $nama_paket . "-";

		$this->load->library('upload', $file);
		for ($i = 1; $i <= 62; $i++) {
			if (!$this->upload->do_upload('file' . $i)) {
				$this->upload->display_errors();
			} else {
				// $this->upload->do_upload('file'.$i);
				$a = $this->upload->data();
				rename($a['full_path'], $a['file_path'] . $namabaru . $a['file_name']);
			}
		}
		$doc1 = array(
			'id_doc' => $id_doc,
			'id_paket' => $id_paket,
			'surat_md' => $namabaru1 . $file1,
			'surat_mh' => $namabaru2 . $file2,
			'surat_kl' => $namabaru3 . $file3,
			'kesepakatan_bersama' => $namabaru4 . $file4,
			'perjanjian_kerjasama' => $namabaru5 . $file5,
			'sppbj' => $namabaru6 . $file6,
			'spmk' => $namabaru7 . $file7,
			'naskah_kontrak' => $namabaru8 . $file8,
			'rencana_mk' => $namabaru9 . $file9,
			'bcp' => $namabaru10 . $file10,
			'mc0_dd' => $namabaru11 . $file11,
			'mc0_bal' => $namabaru12 . $file12,
			'mc0_jdst' => $namabaru13 . $file13,
		);
		$tambahdoc1 = $this->Datapaket_model->insertdoc1('tbl_doc1', $doc1);

		$doc2 = array(
			'id_pasca' => $this->Penomoran_model->IDPsc(),
			'id_paket' => $id_paket,
			'pasca_boq' => $namabaru14 . $file14,
			'pasca_jdst' => $namabaru15 . $file15,
			'pasca_slp' => $namabaru16 . $file16,
			'pasca_kurva' => $namabaru17 . $file17,
			'pasca_shop' => $namabaru18 . $file18,
			'pasca_bakn' => $namabaru19 . $file19,
			'pasca_nai' => $namabaru20 . $file20,
		);
		$tambahdoc2 = $this->Datapaket_model->insertdoc2('tbl_pascamc0', $doc2);
		if ($addendumii == "on") {
			$datadendumii = array(
				'id_addii' => $this->Penomoran_model->IDadd2(),
				'id_paket' => $id_paket,
				'addii_bal' => $namabaru21 . $file21,
				'addii_boq' => $namabaru22 . $file22,
				'addii_jdst' => $namabaru23 . $file23,
				'addii_slp' => $namabaru24 . $file24,
				'addii_kurva' => $namabaru25 . $file25,
				'addii_shop' => $namabaru26 . $file26,
				'addii_bakln' => $namabaru27 . $file27,
				'addii_naii' => $namabaru28 . $file28,
			);
			$tambahdoc3 = $this->Datapaket_model->insertdoc3('tbl_addendumii', $datadendumii);
		}
		if ($addendumiii == "on") {
			$datadendumiii = array(
				'id_addiii' => $this->Penomoran_model->IDadd3(),
				'id_paket' => $id_paket,
				'addiii_bal' => $namabaru29 . $file29,
				'addiii_boq' => $namabaru30 . $file30,
				'addiii_jdst' => $namabaru31 . $file31,
				'addiii_slp' => $namabaru32 . $file32,
				'addiii_kurva' => $namabaru33 . $file33,
				'addiii_shop' => $namabaru34 . $file34,
				'addiii_bakln' => $namabaru35 . $file35,
				'addii_naiii' => $namabaru36 . $file36,
			);
			$tambahdoc4 = $this->Datapaket_model->insertdoc4('tbl_addendumiii', $datadendumiii);
		}
		if ($addendumiv == "on") {
			$datadendumiv = array(
				'id_addiv' => $this->Penomoran_model->IDadd4(),
				'id_paket' => $id_paket,
				'addiv_bal' => $namabaru37 . $file37,
				'addiv_boq' => $namabaru38 . $file38,
				'addiv_jdst' => $namabaru39 . $file39,
				'addiv_slp' => $namabaru40 . $file40,
				'addiv_kurva' => $namabaru41 . $file41,
				'addiv_shop' => $namabaru42 . $file42,
				'addiv_bakn' => $namabaru43 . $file43,
				'addiv_naiv' => $namabaru44 . $file44,
			);
			$tambahdoc5 = $this->Datapaket_model->insertdoc4('tbl_addendumiv', $datadendumiv);
		}
		$doc3 = array(
			'id_doc2' => $this->Penomoran_model->IDdoc2(),
			'id_paket' => $id_paket,
			'laporan_harian1' => $namabaru45 . $file45,
			'laporan_mingguan1' => $namabaru46 . $file46,
			'bulanan_kontraktor' => $namabaru47 . $file47,
			'sertifikat_pembayaran' => $namabaru48 . $file48,
			'laporan_harian2' => $namabaru49 . $file49,
			'laporan_mingguan2' => $namabaru50 . $file50,
			'bulanan_konsultan' => $namabaru51 . $file51,
			'berita_apm' => $namabaru52 . $file52,
			'berita_ascm' => $namabaru53 . $file53,
			'provisional_sp' => $namabaru54 . $file54,
			'provisional_bafv' => $namabaru55 . $file55,
			'provisional_basv' => $namabaru56 . $file56,
			'provisional_bastp' => $namabaru57 . $file57,
		);
		$tambahdoc6 = $this->Datapaket_model->insertdoc5('tbl_doc2', $doc3);
		$doc4 = array(
			'id_doc3' => $this->Penomoran_model->IDdoc3(),
			'id_paket' => $id_paket,
			'final_sp' => $namabaru58 . $file58,
			'final_bafv' => $namabaru59 . $file59,
			'final_basv' => $namabaru60 . $file60,
			'final_bastp' => $namabaru61 . $file61,
			'final_dokumentasi' => $namabaru62 . $file62,
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

		$file1 = $_FILES['file1']['name'];
		$file2 = $_FILES['file2']['name'];
		$file3 = $_FILES['file3']['name'];
		$file4 = $_FILES['file4']['name'];
		$file5 = $_FILES['file5']['name'];
		$file6 = $_FILES['file6']['name'];
		$file7 = $_FILES['file7']['name'];
		$file8 = $_FILES['file8']['name'];
		$file9 = $_FILES['file9']['name'];
		$file10 = $_FILES['file10']['name'];
		$file11 = $_FILES['file11']['name'];
		$file12 = $_FILES['file12']['name'];
		$file13 = $_FILES['file13']['name'];
		$file14 = $_FILES['file14']['name'];
		$file15 = $_FILES['file15']['name'];

		// $addendumii = $this->input->post('topic1');
		// $addendumiii = $this->input->post('topic2');
		// $addendumiv = $this->input->post('topic3');

		$file = [
			'upload_path' => './assets/data/' . $tahun . '/' . $jenis . '/' . $nama_paket . '/',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE,
		];

		$this->load->library('upload', $file);
		for ($i = 1; $i <= 62; $i++) {
			$this->upload->do_upload('file' . $i);
		}
		$pendukung = array(
			'id_pendukung' => $id_pendukung,
			'id_paket' => $id_paket,
			'bmn_surat_alih' => $file1,
			'bmn_rekomendasi' => $file2,
			'bmn_surat_hibah' => $file3,
			'keuangan_permohonan' => $file4,
			'keuangan_kuitansi' => $file5,
			'keuangan_kartu' => $file6,
			'keuangan_faktur' => $file7,
			'keuangan_pph' => $file8,
			'keuangan_spp' => $file9,
			'keuangan_spm' => $file10,
			'keuangan_sp2d' => $file11,
			'bendahara_lpj' => $file12,
			'bendahara_bapkdr' => $file13,
			'bendahara_rekening' => $file14,
			'bendahara_bapk' => $file15,
		);
		$tambahpendukung = $this->Datapaket_model->insertpend('tbl_pendukung', $pendukung);
		if ($tambahpendukung > 0) {
			$this->session->set_flashdata('updateberhasil', true);
			redirect('ppk1/inputdokpendukung/' . $id_paket);
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
		$id_ppk = $this->session->userdata('id_ppk');
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$data['doc1'] = $this->Datapaket_model->showdata1('tbl_doc1', $id_paket);
		$this->load->view('ppk1/header', $data);
		if ($data['doc1'] == NULL) {
			redirect('PPK1/inputdokpendukung/' . $id_paket);
		} else {
			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar', $ppk);

			$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$this->load->view('ppk1/viewdocpendukung', $data);

			$this->load->view('ppk1/footer');
		}
	}

	public function test($id_paket) {
		// $cari['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$idtahun = $data['paket'][0]['id_tahun'];
		$data['tahun'] = $this->Datatahun_model->cektahun($idtahun);
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