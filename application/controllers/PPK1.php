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
	public function index() {
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/dashboard', $data);
		$this->load->view('ppk1/footer');
	}
	public function inputtahun() {
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$this->load->view('ppk1/inputtahun');
		$this->load->view('ppk1/footer');
	}
	public function daftartahun() {
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

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
		$this->load->view('ppk1/header');

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

		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$this->load->view('ppk1/profile');
		$this->load->view('ppk1/footer');
	}
	public function changepassword() {
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');
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
			$this->load->view('ppk1/header');

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
			$this->load->view('ppk1/header');

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
			$this->load->view('ppk1/header');

			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar', $ppk);

			$this->load->view('ppk1/pilihpaket', $data);
			$this->load->view('ppk1/footer');
			// echo "isi";
		}

	}
  
	public function inputdokutama($id_paket)
	{
		$this->load->view('ppk1/header');
		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);
		$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket',$id_paket);
		$this->load->view('ppk1/input',$data);
		$this->load->view('ppk1/footer');
	}

	public function inputdokpendukung() {
		$this->load->view('ppk1/header');

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$this->load->view('ppk1/inputpendukung');
		$this->load->view('ppk1/footer');
	}

	public function simpandoc()
	{
		$id_paket = $this->input->post('id_paket');
		$cari = $this->Datapaket_model->showidpkt('tbl_paket',$id_paket);
		$jenis = $cari[0]["jenis"];
		$nama_paket = $cari[0]["nama_paket"];
		$idtahun = $cari[0]["id_tahun"];
		$carithn = $this->Datatahun_model->cektahun($idtahun);
		$tahun = $carithn->nama_tahun;

		$id_doc = $this->Penomoran_model->IDdoc();
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
		$file16 = $_FILES['file16']['name'];
		$file17 = $_FILES['file17']['name'];
		$file18 = $_FILES['file18']['name'];
		$file19 = $_FILES['file19']['name'];
		$file20 = $_FILES['file20']['name'];

		$addendumii = $this->input->post('topic1');
		$addendumiii = $this->input->post('topic2');
		$addendumiv = $this->input->post('topic3');

		$file = [
			'upload_path' => './assets/data/'.$tahun.'/'.$jenis.'/'.$nama_paket.'/',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE
		];

		$this->load->library('upload',$file);
		for ($i=1; $i <=20 ; $i++) { 
			$this->upload->do_upload('file'.$i);
		}
	    	$doc1 = array(
					'id_doc' 				=> $id_doc,
					'id_paket'			=> $id_paket,
					'surat_md' 			=> $file1,
					'surat_mh'			=> $file2,
					'surat_kl'			=> $file3,
					'kesepakatan_bersama'	=> $file4,
					'perjanjian_kerjasama'	=> $file5,
					'sppbj'				=> $file6,
					'spmk'				=> $file7,
					'naskah_kontrak'		=> $file8,
					'rencana_mk'			=> $file9,
					'bcp'				=> $file10,
					'mc0_dd'				=> $file11,
					'mc0_bal'				=> $file12,
					'mc0_jdst'			=> $file13 
					);
		$tambahdoc1 = $this->Datapaket_model->insertdoc1('tbl_doc1',$doc1);

		$doc2 = array(
					'id_pasca'			=> $this->Penomoran_model->IDPsc(), 
					'id_paket'			=> $id_paket,
					'pasca_boq'			=> $file14,
					'pasca_jdst'			=> $file15,
					'pasca_slp'			=> $file16,
					'pasca_kurva'			=> $file17,
					'pasca_shop'			=> $file18,
					'pasca_bakn'			=> $file19,
					'pasca_nai'			=> $file20
					);
		$tambahdoc2 = $this->Datapaket_model->insertdoc2('tbl_pascamc0',$doc2);
		if (($tambahdoc1&&$tambahdoc2)>0) {
			redirect('ppk1/inputdokutama/'.$id_paket);
		}


	}
	public function inputpaket() 
	{
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

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
	public function viewdocutama ($id_paket)
	{
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket',$id_paket);
		$this->load->view('ppk1/viewdocutama',$data);
		$this->load->view('ppk1/footer');
	}

	public function test()
	{
		$this->load->view('ppk1/test');
	}
	public function testkirim()
	{
		$check1 = $this->input->post('checked1');
		$check2 = $this->input->post('checked2');
		$check3 = $this->input->post('checked3');

		if ($check1 == "on") {
			echo "check1";
		}
		if($check2 == "on"){
			echo "check2";
		}
		if($check3 == "on"){
			echo "check3";
		}
	}

}
?>