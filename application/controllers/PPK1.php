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
	public function editprofile ()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header',$data);

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

	
		$this->load->view('ppk1/editakun',$data);
		$this->load->view('ppk1/footer');
	}
	public function changeprofile ()
	{
		$id_user = $this->session->userdata('id_user');
		$config['upload_path'] = './assets/img/' ;
		$config['allowed_types'] = 'jpg|png|gif';
        $config['max_size']      = 100000;

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('myfiles')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        }
        else {
        	$result = $this->upload->data();
        	$data_update = array (
        			'foto'  => $result['file_name'],
        			'nama'  => $this->input->post('nama_user'),
        			'email' => $this->input->post('email'),
        			'alamat' => $this->input->post('alamat')
        			);
        	
        	$result = $this->Datauser_model->UpdateDataUser($data_update,$id_user);

        	if ($result > 0 ) {
        		$this->session->set_flashdata('updateberhasil','true');
        		redirect('ppk1/editprofile');
        	}
        	else {
				$this->session->set_flashdata('updategagal','true');
				redirect('ppk1/editprofile');
			}    	
        }

	}
	public function index() {
		
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header',$data);

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar', $ppk);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/dashboard', $data );
		$this->load->view('ppk1/footer');
	}

	public function inputtahun() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header',$data);

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
		$this->load->view('ppk1/header',$data);

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
		$this->load->view('ppk1/header',$data);

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
		$this->load->view('ppk1/header',$data);

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
		$this->load->view('ppk1/header',$data);
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
			$this->load->view('ppk1/header',$data);

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
			 $this->load->view('ppk1/header',$ini);

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
			$this->load->view('ppk1/header',$data);

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
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header',$data);

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);

		$data['show'] = $this->Datapaket_model->showidpkt('tbl_paket',$id_paket);
		$this->load->view('ppk1/input',$data);
		$this->load->view('ppk1/footer');
	}

	public function inputdokpendukung() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header',$data);

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
		$file21 = $_FILES['file21']['name'];
		$file22 = $_FILES['file22']['name'];
		$file23 = $_FILES['file23']['name'];
		$file24 = $_FILES['file24']['name'];
		$file25 = $_FILES['file25']['name'];
		$file26 = $_FILES['file26']['name'];
		$file27 = $_FILES['file27']['name'];
		$file28 = $_FILES['file28']['name'];
		$file29 = $_FILES['file29']['name'];
		$file30 = $_FILES['file30']['name'];
		$file31 = $_FILES['file31']['name'];
		$file32 = $_FILES['file32']['name'];
		$file33 = $_FILES['file33']['name'];
		$file34 = $_FILES['file34']['name'];
		$file35 = $_FILES['file35']['name'];
		$file36 = $_FILES['file36']['name'];
		$file37 = $_FILES['file37']['name'];
		$file38 = $_FILES['file38']['name'];
		$file39 = $_FILES['file39']['name'];
		$file40 = $_FILES['file40']['name'];
		$file41 = $_FILES['file41']['name'];
		$file42 = $_FILES['file42']['name'];
		$file43 = $_FILES['file43']['name'];
		$file44 = $_FILES['file44']['name'];
		$file45 = $_FILES['file45']['name'];
		$file46 = $_FILES['file46']['name'];
		$file47 = $_FILES['file47']['name'];
		$file48 = $_FILES['file48']['name'];
		$file49 = $_FILES['file49']['name'];
		$file50 = $_FILES['file50']['name'];
		$file51 = $_FILES['file51']['name'];
		$file52 = $_FILES['file52']['name'];
		$file53 = $_FILES['file53']['name'];
		$file54 = $_FILES['file54']['name'];
		$file55 = $_FILES['file55']['name'];
		$file56 = $_FILES['file56']['name'];
		$file57 = $_FILES['file57']['name'];
		$file58 = $_FILES['file58']['name'];
		$file59 = $_FILES['file59']['name'];
		$file60 = $_FILES['file60']['name'];
		$file61 = $_FILES['file61']['name'];
		$file62 = $_FILES['file62']['name'];

		$addendumii = $this->input->post('topic1');
		$addendumiii = $this->input->post('topic2');
		$addendumiv = $this->input->post('topic3');

		$file = [
			'upload_path' => './assets/data/'.$tahun.'/'.$jenis.'/'.$nama_paket.'/',
			'allowed_types' => 'pdf',
			'overwrite' => TRUE
		];

		$this->load->library('upload',$file);
		for ($i=1; $i <=62 ; $i++) { 
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
		if ($addendumii == "on") {
			$datadendumii = array(
							'id_addii' => $this->Penomoran_model->IDadd2(), 
							'id_paket' => $id_paket,
							'addii_bal' => $file21,
							'addii_boq' => $file22,
							'addii_jdst' => $file23,
							'addii_slp' => $file24,
							'addii_kurva' => $file25,
							'addii_shop' => $file26,
							'addii_bakln' => $file27,
							'addii_naii' => $file28
							);
			$tambahdoc3 = $this->Datapaket_model->insertdoc3('tbl_addendumii',$datadendumii);
		}
		if ($addendumiii == "on") {
			$datadendumiii = array(
						'id_addiii' => $this->Penomoran_model->IDadd3(), 
						'id_paket' => $id_paket,
						'addiii_bal' => $file29,
						'addiii_boq' => $file30,
						'addiii_jdst' => $file31,
						'addiii_slp' => $file32,
						'addiii_kurva' => $file33,
						'addiii_shop' => $file34,
						'addiii_bakln' => $file35,
						'addii_naiii' => $file36
						);
		$tambahdoc4 = $this->Datapaket_model->insertdoc4('tbl_addendumiii',$datadendumiii);
		}
		if ($addendumiv == "on") {
			$datadendumiv = array(
						'id_addiv' => $this->Penomoran_model->IDadd4(), 
						'id_paket' => $id_paket,
						'addiv_bal' => $file37,
						'addiv_boq' => $file38,
						'addiv_jdst' => $file39,
						'addiv_slp' => $file40,
						'addiv_kurva' => $file41,
						'addiv_shop' => $file42,
						'addiv_bakn' => $file43,
						'addiv_naiv' => $file44
						);
		$tambahdoc5 = $this->Datapaket_model->insertdoc4('tbl_addendumiv',$datadendumiv);
		}
		$doc3 = array(
					'id_doc2' 			=> $this->Penomoran_model->IDdoc2(), 
					'id_paket'			=> $id_paket,
					'laporan_harian1'		=> $file45,
					'laporan_mingguan1'		=> $file46,
					'bulanan_kontraktor'	=> $file47,
					'sertifikat_pembayaran'	=> $file48,
					'laporan_harian2'		=> $file49,
					'laporan_mingguan2'		=> $file50,
					'bulanan_konsultan'		=> $file51,
					'berita_apm'			=> $file52,
					'berita_ascm'			=> $file53,
					'provisional_sp'		=> $file54,
					'provisional_bafv'		=> $file55,
					'provisional_basv'		=> $file56,
					'provisional_bastp'		=> $file57
					);
		$tambahdoc6 = $this->Datapaket_model->insertdoc5('tbl_doc2',$doc3);
		$doc4 = array(
					'id_doc3' 		=> $this->Penomoran_model->IDdoc3(),
					'id_paket'		=> $id_paket,
					'final_sp'		=> $file58,
					'final_bafv'		=> $file59,
					'final_basv'		=> $file60,
					'final_bastp'		=> $file61,
					'final_dokumentasi'	=> $file62
					);
		$tambahdoc7 = $this->Datapaket_model->insertdoc6('tbl_doc3',$doc4);
		$result = ($tambahdoc1&&$tambahdoc2&&$tambahdoc6&&$tambahdoc7);
		if ($result >0) {
			redirect('ppk1/inputdokutama/'.$id_paket);
		}


	}
	public function inputpaket() 
	{
		$id_ppk = $this->session->userdata('id_ppk');
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header',$data);

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
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('ppk1/header',$data);

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
		for ($i=1; $i <=3 ; $i++) { 
			// $this->upload->do_upload('file'.$i);
		$check[$i] = $this->input->post('checked'.$i);
		}
		$check1=  $check[1];
		echo $check1;
		/*$check2 = $this->input->post('checked2');
		$check3 = $this->input->post('checked3');*/

		/*if ($check1 == "on") {
			echo "check1";
		}
		if($check2 == "on"){
			echo "check2";
		}
		if($check3 == "on"){
			echo "check3";
		}*/
		// print_r ($check);
	}

}
?>