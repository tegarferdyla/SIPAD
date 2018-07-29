<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class pokja extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		} else if ($this->session->userdata('role') == 'admin') {
			redirect('admin');
		} else if ($this->session->userdata('divisi') == 'Kasatker') {
			redirect('kasatker');
		} else if ($this->session->userdata('bagian') == 'PPK') {
			redirect('ppk1');
		}else if ($this->session->userdata('bagian') == 'BMN') {
			redirect('bmn');
		}else if ($this->session->userdata('bagian') == 'Keuangan') {
			redirect('keuangan');
		}else if ($this->session->userdata('bagian') == 'Bendahara') {
			redirect('bendahara');
		}	
	}
	public function editprofile() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('pokja/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('pokja/sidebar',$data);

		$this->load->view('pokja/editakun', $data);
		$this->load->view('pokja/footer');
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
				redirect('pokja/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('pokja/editprofile');
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
				redirect('pokja/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('pokja/editprofile');
			}
		}

	}
	public function index() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('pokja/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('pokja/sidebar',$data);

		$this->load->view('pokja/dashboard');
		$this->load->view('pokja/footer');
	}

	public function tahun($id_ppk)
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('pokja/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('pokja/sidebar',$data);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('pokja/tahun',$data);
		$this->load->view('pokja/footer');
	}

	public function jenispaket($id_tahun)
	{

			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('pokja/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('pokja/sidebar',$ppk);

			$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
			$id_ppk = $data['dapattahun'][0]['id_ppk'];
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
			$this->load->view('pokja/tampilpaket',$data);
			$this->load->view('pokja/footer');
		
	}

	public function paketkontraktual($id_tahun)
	{
			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('pokja/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('pokja/sidebar',$ppk);
			
			$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
			$id_ppk = $data['dapattahun'][0]['id_ppk'];
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
			$data['kontraktual'] = $this->Datapaket_model->kontraktual($id_tahun);
			if ($data['kontraktual']==NULL) {
				redirect('Pokja/jenispaket/'.$id_tahun,'refresh');
			}
			$this->load->view('pokja/kontraktual',$data);
			$this->load->view('pokja/footer');
	}
	public function paketsuakelola($id_tahun)
	{
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('pokja/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('pokja/sidebar',$ppk);

		$data['suakelola'] = $this->Datapaket_model->suakelola($id_tahun);
		if ($data['suakelola']==NULL) {
			redirect('Pokja/jenispaket/'.$id_tahun,'refresh');
		}
		$id_ppk = $data['dapattahun'][0]['id_ppk'];
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
		$this->load->view('pokja/suakelola',$data);
		$this->load->view('pokja/footer');
	}
	public function inputdokumen($id_paket)
	{
		$data['pokja'] = $this->Datapaket_model->showidpkt('tbl_pokja', $id_paket);
		if ($data['pokja'] != NULL) {
			redirect('Pokja/viewdoc/' . $id_paket);
		} else {
	 		$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('ppk1/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('pokja/sidebar',$ppk);

			$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$id_tahun = $data['show'][0]['id_tahun'];
			$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
			$id_ppk = $data['dapattahun'][0]['id_ppk'];
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
			$this->load->view('pokja/inputdokumen',$data);
			$this->load->view('ppk1/footer');
		}
	}
	public function savedoc()
	{
		$id_paket = $this->input->post('id_paket');
		$cari = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$jenis = $cari[0]["jenis"];
		$nama_paket = $cari[0]["nama_paket"];
		$idtahun = $cari[0]["id_tahun"];
		$carithn = $this->Datatahun_model->cektahun($idtahun);
		$tahun = $carithn->nama_tahun;
		$id_pendukung = $this->Penomoran_model->IDPokja();

		$file = [
			'upload_path' => './assets/data/' . $tahun . '/' . $jenis . '/' . $nama_paket . '/',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE,
			// 'encrypt_name' => TRUE
		];
		$namabaru = $tahun . "-" . $nama_paket . "-";
		$this->load->library('upload', $file);
		for ($i = 1; $i <= 10; $i++) {
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

		$doc = array(
			'id_pendukung' => $id_pendukung,
			'id_paket' => $id_paket,
			'pokja_surat_perintah' => $namaajah[1] . $namafile[1],
			'pokja_dokumen_lelang' => $namaajah[2] . $namafile[2],
			'pokja_add_dokumen' => $namaajah[3] . $namafile[3],
			'pokja_undangan' => $namaajah[4] . $namafile[4],
			'pokja_pembuktian' => $namaajah[5] . $namafile[5],
			'pokja_aanwijzing' => $namaajah[6] . $namafile[6],
			'pokja_pemenang' => $namaajah[7] . $namafile[7],
			'pokja_undangan_negosiasi' => $namaajah[8] . $namafile[8],
			'pokja_berita_negosiasi' => $namaajah[9] . $namafile[9],
			'pokja_hasil_seleksi' => $namaajah[10] . $namafile[10]
		);
		$tambahdoc = $this->Datapaket_model->insertdoc1('tbl_pokja', $doc);
		if ($tambahdoc>0) {
			redirect('pokja/viewdoc/'.$id_paket,'refresh');
		}
	}
	public function viewdoc($id_paket)
	{
		$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$idtahun = $data['paket'][0]['id_tahun'];
		$data['tahun'] = $this->Datatahun_model->cektahun($idtahun);
		$data['show'] = $this->Datapaket_model->showidpkt('tbl_pokja', $id_paket);
		$id_ppk = $data['tahun']->id_ppk;
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		if ($data['show'] == NULL) {
			redirect('Pokja/inputdokumen/' . $id_paket);
		} else {
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('pokja/sidebar',$ppk);
		$this->load->view('pokja/viewdoc',$data);
		$this->load->view('ppk1/footer');
		}
	}
	public function editdoc($id_paket)
	{
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('pokja/sidebar',$ppk);
		$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
		$idtahun = $data['paket'][0]['id_tahun'];
		$data['tahun'] = $this->Datatahun_model->cektahun($idtahun);
		$id_ppk = $data['tahun']->id_ppk;
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$data['show'] = $this->Datapaket_model->showidpkt('tbl_pokja', $id_paket);
		$this->load->view('pokja/edit',$data);
		$this->load->view('ppk1/footer');
	}
	public function updatedoc()
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
		for ($i = 1; $i <= 10; $i++) {
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
		$where = array ('id_paket' => $id_paket);
		$ganti = array(
			'pokja_surat_perintah' => $namaajah[1] . $namafile[1],
			'pokja_dokumen_lelang' => $namaajah[2] . $namafile[2],
			'pokja_add_dokumen' => $namaajah[3] . $namafile[3],
			'pokja_undangan' => $namaajah[4] . $namafile[4],
			'pokja_pembuktian' => $namaajah[5] . $namafile[5],
			'pokja_aanwijzing' => $namaajah[6] . $namafile[6],
			'pokja_pemenang' => $namaajah[7] . $namafile[7],
			'pokja_undangan_negosiasi' => $namaajah[8] . $namafile[8],
			'pokja_berita_negosiasi' => $namaajah[9] . $namafile[9],
			'pokja_hasil_seleksi' => $namaajah[10] . $namafile[10]
		);
		$tambahpendukung = $this->Datapaket_model->updatedocpend('tbl_pokja', $ganti, $where);
		if ($tambahpendukung > 0) {
			$this->session->set_flashdata('updateberhasil', true);
			redirect('pokja/editdoc/' . $id_paket);
		}
	}
	public function download($tahun,$jenis,$nama_paket,$nama_file) {
		// $name = str_replace('%20',' ', $nama_file);
		$name = rawurldecode($nama_file);
		$paket = str_replace('%20',' ', $nama_paket);
		$data = file_get_contents("./assets/data/".$tahun."/".$jenis."/".$paket."/".$name);
		force_download($name,$data);
	}
	public function test($id_tahun)
	{
		$data['suakelola'] = $this->Datapaket_model->suakelola($id_tahun);
		foreach ($data['suakelola'] as $u) {
		$id_ppk = $u['id_ppk'];
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		}
	}
	// public function dokumenkontraktual ($id_paket)
	// {
	// 		$pendukung['pendukung'] = $this->Datapaket_model->lihatpendukung($id_paket);
	// 		$caritahun = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
	// 		$tahun = $caritahun[0]['id_tahun'];

	// 		if ($pendukung['pendukung'] == NULL) {
	// 			$this->session->set_flashdata('kosong', 'true');
	// 			redirect('pokja/paketkontraktual/'.$tahun);
	// 		}
	// 		else{
	// 			$id_user = $this->session->userdata('id_user');
	// 			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
	// 			$this->load->view('ppk1/header', $ini);

	// 			$ppk['get_ppk']=$this->Datappk_model->datappk();
	// 			$this->load->view('pokja/sidebar',$ppk);

	// 			$this->load->view('pokja/viewdokumenkontraktual',$pendukung);
	// 			$this->load->view('ppk1/footer');
	// 		}

			

	// }
	// public function dokumensuakelola ($id_paket)
	// {
	// 		$pendukung['pendukung'] = $this->Datapaket_model->lihatpendukung($id_paket);
	// 		$caritahun = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
	// 		$tahun = $caritahun[0]['id_tahun'];

	// 		if ($pendukung['pendukung'] == NULL) {
	// 			$this->session->set_flashdata('kosong', 'true');
	// 			redirect('pokja/paketkontraktual/'.$tahun);
	// 		}
	// 		else{
	// 			$id_user = $this->session->userdata('id_user');
	// 			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
	// 			$this->load->view('ppk1/header', $ini);

	// 			$ppk['get_ppk']=$this->Datappk_model->datappk();
	// 			$this->load->view('pokja/sidebar',$ppk);

	// 			$this->load->view('pokja/viewdokumensuakelola',$pendukung);
	// 			$this->load->view('ppk1/footer');
	// 		}

			

	// }
}

?>