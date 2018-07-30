<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Keuangan extends CI_Controller {
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
		}else if ($this->session->userdata('bagian') == 'Bendahara') {
				redirect('bendahara');
		}else if ($this->session->userdata('bagian') == 'Pokja') {
			redirect('pokja');
		}
	}
	public function editprofile() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('keuangan/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('keuangan/sidebar',$data);

		$this->load->view('keuangan/editakun', $data);
		$this->load->view('keuangan/footer');
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
				redirect('keuangan/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('keuangan/editprofile');
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
				redirect('keuangan/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('keuangan/editprofile');
			}
		}

	}
	public function index() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$data['chart'] = $this->Datapaket_model->chart();
		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('keuangan/header', $data);
		$this->load->view('keuangan/sidebar');
		$this->load->view('keuangan/dashboard');
		$this->load->view('keuangan/footer');
	}

	public function tahun($id_ppk)
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('keuangan/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('keuangan/sidebar',$data);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('keuangan/tahun',$data);
		$this->load->view('keuangan/footer');
	}

	public function jenispaket($id_tahun)
	{
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('keuangan/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('keuangan/sidebar',$ppk);

		$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
		$id_ppk = $data['dapattahun'][0]['id_ppk'];
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('keuangan/tampilpaket',$data);
		$this->load->view('keuangan/footer');
		
	}

	public function paketkontraktual($id_tahun)
	{
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('keuangan/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('keuangan/sidebar',$ppk);
		
		$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
		$id_ppk = $data['dapattahun'][0]['id_ppk'];
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$data['kontraktual'] = $this->Datapaket_model->kontraktual($id_tahun);
		if ($data['kontraktual']==NULL) {
			redirect('keuangan/jenispaket/'.$id_tahun,'refresh');
		}
		$this->load->view('keuangan/kontraktual',$data);
		$this->load->view('keuangan/footer');
	}
	public function paketsuakelola($id_tahun)
	{
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('keuangan/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('keuangan/sidebar',$ppk);

		$data['suakelola'] = $this->Datapaket_model->suakelola($id_tahun);
		if ($data['suakelola']==NULL) {
			redirect('keuangan/jenispaket/'.$id_tahun,'refresh');
		}
		$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
		$id_ppk = $data['dapattahun'][0]['id_ppk'];
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('keuangan/suakelola',$data);
		$this->load->view('keuangan/footer');
	}
	public function dokumenkontraktual ($id_paket)
	{
			$data['pendukung'] = $this->Datapaket_model->lihatpendukung($id_paket);
			$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$idtahun = $data['paket'][0]['id_tahun'];
			$data['tahun'] = $this->Datatahun_model->cektahun($idtahun);
			$id_ppk = $data['tahun']->id_ppk;
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");

			if ($data['pendukung'] == NULL) {
				$this->session->set_flashdata('kosong', 'true');
				redirect('keuangan/paketkontraktual/'.$idtahun);
			}
			else{
				$id_user = $this->session->userdata('id_user');
				$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
				$this->load->view('ppk1/header', $ini);

				$ppk['get_ppk']=$this->Datappk_model->datappk();
				$this->load->view('keuangan/sidebar',$ppk);

				$this->load->view('keuangan/viewdokumenkontraktual',$data);
				$this->load->view('ppk1/footer');
			}

			

	}
	public function dokumensuakelola ($id_paket)
	{
			$data['pendukung'] = $this->Datapaket_model->lihatpendukung($id_paket);
			$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$idtahun = $data['paket'][0]['id_tahun'];
			$data['tahun'] = $this->Datatahun_model->cektahun($idtahun);
			$id_ppk = $data['tahun']->id_ppk;
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");

			if ($data['pendukung'] == NULL) {
				$this->session->set_flashdata('kosong', 'true');
				redirect('keuangan/paketkontraktual/'.$tahun);
			}
			else{
				$id_user = $this->session->userdata('id_user');
				$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
				$this->load->view('ppk1/header', $ini);

				$ppk['get_ppk']=$this->Datappk_model->datappk();
				$this->load->view('keuangan/sidebar',$ppk);

				$this->load->view('keuangan/viewdokumensuakelola',$data);
				$this->load->view('ppk1/footer');
			}
	}
	public function gantipass()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('bmn/header', $data);

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bmn/sidebar', $data);

		$this->load->view('bmn/gantipass', $data);
		$this->load->view('bmn/footer');
	}
}

?>