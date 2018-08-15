<?php 
	defined('BASEPATH') OR exit ('No direct script access allowed');

	/**
	 * 
	 */
	class Kasatker extends CI_Controller
	{
		public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		} else if ($this->session->userdata('role') == 'admin') {
			redirect('Admin');
		} else if ($this->session->userdata('bagian') == 'Bmn') {
			redirect('Bmn');
		} else if ($this->session->userdata('bagian') == 'PPK') {
			redirect('PPK1');
		}
		else if ($this->session->userdata('bagian') == 'Keuangan') {
			redirect('Keuangan');
		}else if ($this->session->userdata('bagian') == 'Bendahara') {
			redirect('Bendahara');
		}else if ($this->session->userdata('bagian') == 'Pokja') {
			redirect('Pokja');
		}
	}
		public function editprofile() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('kasatker/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('kasatker/sidebar',$data);

		$this->load->view('kasatker/editakun', $data);
		$this->load->view('kasatker/footer');
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
				redirect('Kasatker/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('Kasatker/editprofile');
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
				redirect('Kasatker/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('Kasatker/editprofile');
			}
		}

	}
	public function gantipass()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('kasatker/header', $data);

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('kasatker/sidebar', $data);

		$this->load->view('kasatker/gantipass', $data);
		$this->load->view('kasatker/footer');
	}
		public function index () 
		{
			$id_user = $this->session->userdata('id_user');
			$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$data['chart'] = $this->Datapaket_model->chart();
			$data['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('kasatker/header', $data);
			$this->load->view('kasatker/sidebar');
			$this->load->view('kasatker/dashboard');
			$this->load->view('kasatker/footer');
		}
		public function tahun($id_ppk)
		{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('kasatker/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('kasatker/sidebar',$data);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('kasatker/tahun',$data);
		$this->load->view('kasatker/footer');
		}

		public function test($id_tahun)
		{
			$countdata['tbl_doc1'] = $this->Datapaket_model->countonme($id_tahun);
			$countdata['tbl_doc2'] = $this->Datapaket_model->countdoc2($id_tahun);
			$countdata['tbl_doc3'] = $this->Datapaket_model->countdoc3($id_tahun);
			$countdata['tbl_addendumii'] = $this->Datapaket_model->countdoc4($id_tahun);
			$countdata['tbl_addendumiii'] = $this->Datapaket_model->countdoc5($id_tahun);
			$countdata['tbl_addendumiv'] = $this->Datapaket_model->countdoc6($id_tahun);
			$countdata['tbl_pascamc0'] = $this->Datapaket_model->countdoc7($id_tahun);
			$countdata['tbl_pendukung'] = $this->Datapaket_model->countdoc8($id_tahun);
			$data['tahun'] = $this->Datatahun_model->cektahun($id_tahun);
			$id_ppk = $data['tahun']->id_ppk;
			$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);

			$nama_paket = $this->Datapaket_model->lihatpaket($id_tahun);
			for($i=0;$i<count($nama_paket);$i++){
				$nama = $nama_paket[$i]['nama_paket'];
				$num_doc1 = $countdata['tbl_doc1'][$i]->hasil;
				$num_doc2 = $countdata['tbl_doc2'][$i]->hasil;
				$num_doc3 = $countdata['tbl_doc3'][$i]->hasil;
				$num_doc4 = $countdata['tbl_pascamc0'][$i]->hasil;
				$num_doc5 = $countdata['tbl_addendumii'][$i]->hasil;
				$num_doc6 = $countdata['tbl_addendumiii'][$i]->hasil;
				$num_doc7 = $countdata['tbl_addendumiv'][$i]->hasil;
				if ($countdata['tbl_pendukung']==NULL) {
					$pendukung = 0;
				}else{
					$pendukung = $countdata['tbl_pendukung'][$i]->hasil;
				}
				if ($countdata['tbl_addendumii'][$i]->hasil == 0) {
					$adendum2 = 0;
				}else{
					$adendum2 = 8;
				}

				if ($countdata['tbl_addendumiii'][$i]->hasil == 0) {
					$adendum3 = 0;
				}else{
					$adendum3 = 8;
				}

				if ($countdata['tbl_addendumiv'][$i]->hasil == 0) {
					$adendum4 = 0;
				}else{
					$adendum4 = 8;
				}

				$num1 = $num_doc1+$num_doc2+$num_doc3+$num_doc4+$pendukung+$num_doc5+$num_doc6+$num_doc7;
				$num2 = 53+$adendum2+$adendum3+$adendum4;
				$hitungan = ($num1/$num2)*100;
				$hasil[]['total'] = number_format($hitungan,1);
				$json[] = array('nama_paket'=> $nama,'paket_terkumpul' => $num1, 'total' => $hasil[$i]['total']);
			}
			$cetak = json_encode($json);
			$data['hasil'] = json_decode($cetak);

			$id_user = $this->session->userdata('id_user');
			$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('kasatker/header', $data);
			$data['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('kasatker/sidebar',$data);
			$data['get_tahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
			$id_ppk =  $data['get_tahun'][0]['id_ppk'];
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
			
			if ($data['hasil']==NULL) {
				$this->session->set_flashdata('kosong','true');
				redirect('Kasatker/tahun/'.$id_ppk);
			}

			$this->load->view('kasatker/testfile',$data);
			$this->load->view('kasatker/footer');
		}

		public function laporan($id_tahun)
		{

			$countdata['tbl_doc1'] = $this->Datapaket_model->countonme($id_tahun);
			$countdata['tbl_doc2'] = $this->Datapaket_model->countdoc2($id_tahun);
			$countdata['tbl_doc3'] = $this->Datapaket_model->countdoc3($id_tahun);
			$countdata['tbl_addendumii'] = $this->Datapaket_model->countdoc4($id_tahun);
			$countdata['tbl_addendumiii'] = $this->Datapaket_model->countdoc5($id_tahun);
			$countdata['tbl_addendumiv'] = $this->Datapaket_model->countdoc6($id_tahun);
			$countdata['tbl_pascamc0'] = $this->Datapaket_model->countdoc7($id_tahun);
			$countdata['tbl_pendukung'] = $this->Datapaket_model->countdoc8($id_tahun);
			$data['tahun'] = $this->Datatahun_model->cektahun($id_tahun);
			$id_ppk = $data['tahun']->id_ppk;
			$data['ppk'] = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");

			$nama_paket = $this->Datapaket_model->lihatpaket($id_tahun);
			$jenis = $nama_paket[0]['jenis'];
			for($i=0;$i<count($nama_paket);$i++){
				$nama = $nama_paket[$i]['nama_paket'];
				$num_doc1 = $countdata['tbl_doc1'][$i]->hasil;
				$num_doc2 = $countdata['tbl_doc2'][$i]->hasil;
				$num_doc3 = $countdata['tbl_doc3'][$i]->hasil;
				$num_doc4 = $countdata['tbl_pascamc0'][$i]->hasil;
				$num_doc5 = $countdata['tbl_addendumii'][$i]->hasil;
				$num_doc6 = $countdata['tbl_addendumiii'][$i]->hasil;
				$num_doc7 = $countdata['tbl_addendumiv'][$i]->hasil;
				if ($countdata['tbl_pendukung']==NULL) {
					$pendukung = 0;
				}else{
					$pendukung = $countdata['tbl_pendukung'][$i]->hasil;
				}
				if ($countdata['tbl_addendumii'][$i]->hasil == 0) {
					$adendum2 = 0;
				}else{
					$adendum2 = 8;
				}

				if ($countdata['tbl_addendumiii'][$i]->hasil == 0) {
					$adendum3 = 0;
				}else{
					$adendum3 = 8;
				}

				if ($countdata['tbl_addendumiv'][$i]->hasil == 0) {
					$adendum4 = 0;
				}else{
					$adendum4 = 8;
				}

				$num1 = $num_doc1+$num_doc2+$num_doc3+$num_doc4+$pendukung+$num_doc5+$num_doc6+$num_doc7;
				$num2 = 53+$adendum2+$adendum3+$adendum4;
				$hitungan = ($num1/$num2)*100;
				$hasil[]['total'] = number_format($hitungan,1);
				$json[] = array('nama_paket'=> $nama,'jenis'=>$jenis,'paket_terkumpul' => $num1, 'total' => $hasil[$i]['total']);
			}
			$cetak = json_encode($json);
			$data['hasil'] = json_decode($cetak);
			$this->load->view('kasatker/laporanpaket',$data);
		}

	}

 ?>