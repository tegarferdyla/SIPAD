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

			$kontraktual['kontraktual'] = $this->Datapaket_model->kontraktual($id_tahun);
			$this->load->view('pokja/kontraktual',$kontraktual);
			$this->load->view('pokja/footer');
	}
	public function paketsuakelola($id_tahun)
	{
			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('pokja/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('pokja/sidebar',$ppk);

			$suakelola['suakelola'] = $this->Datapaket_model->suakelola($id_tahun);
			// print_r($suakelola);
			$this->load->view('pokja/suakelola',$suakelola);
			$this->load->view('pokja/footer');
	}
	public function inputdokumen($id_paket)
	{
		 		$id_user = $this->session->userdata('id_user');
	 			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
	 			$this->load->view('ppk1/header', $ini);

	 			$ppk['get_ppk']=$this->Datappk_model->datappk();
	 			$this->load->view('pokja/sidebar',$ppk);

	 			$this->load->view('pokja/inputdokumen');
	 			$this->load->view('ppk1/footer');
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