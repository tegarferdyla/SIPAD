<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Bendahara extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('login');
		} else if ($this->session->userdata('role') == 'admin') {
			redirect('Admin');
		} else if ($this->session->userdata('bagian') == 'Kasatker') {
			redirect('Kasatker');
		} else if ($this->session->userdata('bagian') == 'PPK') {
			redirect('PPK1');
		}else if ($this->session->userdata('bagian') == 'BMN') {
			redirect('Bmn');
		}else if ($this->session->userdata('bagian') == 'Keuangan') {
			redirect('Keuangan');
		}else if ($this->session->userdata('bagian') == 'Pokja') {
			redirect('Pokja');
		}	
	}
	public function editprofile() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('bendahara/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bendahara/sidebar',$data);

		$this->load->view('bendahara/editakun', $data);
		$this->load->view('bendahara/footer');
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
				redirect('Bendahara/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('Bendahara/editprofile');
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
				redirect('Bendahara/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('Bendahara/editprofile');
			}
		}

	}
	public function index() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$data['chart'] = $this->Datapaket_model->chart();
		$data['get_ppk']=$this->Datappk_model->datappk();

		$this->load->view('bendahara/header', $data);
		$this->load->view('bendahara/sidebar');
		$this->load->view('bendahara/dashboard');
		$this->load->view('bendahara/footer');
	}

	public function tahun($id_ppk)
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('bendahara/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bendahara/sidebar',$data);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('bendahara/tahun',$data);
		$this->load->view('bendahara/footer');
	}

	public function jenispaket($id_tahun)
	{
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('bendahara/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bendahara/sidebar',$ppk);

		$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
		$id_ppk = $data['dapattahun'][0]['id_ppk'];
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('bendahara/tampilpaket',$data);
		$this->load->view('bendahara/footer');
	}

	public function paketkontraktual($id_tahun)
	{
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('bendahara/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bendahara/sidebar',$ppk);
		
		$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
		$id_ppk = $data['dapattahun'][0]['id_ppk'];
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$data['kontraktual'] = $this->Datapaket_model->kontraktual($id_tahun);
		if ($data['kontraktual']==NULL) {
			redirect('Bendahara/jenispaket/'.$id_tahun,'refresh');
		}
		$this->load->view('bendahara/kontraktual',$data);
		$this->load->view('bendahara/footer');
	}
	public function paketsuakelola($id_tahun)
	{
		$id_user = $this->session->userdata('id_user');
		$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('bendahara/header', $ini);

		$ppk['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bendahara/sidebar',$ppk);

		$data['suakelola'] = $this->Datapaket_model->suakelola($id_tahun);
		if ($data['suakelola']==NULL) {
			redirect('Bendahara/jenispaket/'.$id_tahun,'refresh');
		}
		$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
		$id_ppk = $data['dapattahun'][0]['id_ppk'];
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('bendahara/suakelola',$data);
		$this->load->view('bendahara/footer');
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
			redirect('Bendahara/paketkontraktual/'.$idtahun);
		}
		else{
			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('bendahara/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('bendahara/sidebar',$ppk);

			$this->load->view('bendahara/viewdokumenkontraktual',$data);
			$this->load->view('bendahara/footer');
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
			redirect('Bendahara/paketkontraktual/'.$tahun);
		}
		else{
			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('bendahara/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('bendahara/sidebar',$ppk);

			$this->load->view('bendahara/viewdokumensuakelola',$data);
			$this->load->view('bendahara/footer');
		}
	}
	public function gantipass()
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('bendahara/header', $data);

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bendahara/sidebar', $data);

		$this->load->view('bendahara/gantipass', $data);
		$this->load->view('bendahara/footer');
	}
}

?>