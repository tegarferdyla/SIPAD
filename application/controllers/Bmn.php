<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Bmn extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (!$this->session->has_userdata('status')) {
			redirect('Login');
		} else if ($this->session->userdata('role') == 'admin') {
			redirect('Admin');
		} else if ($this->session->userdata('bagian') == 'Kasatker') {
			redirect('Kasatker');
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
		$this->load->view('bmn/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bmn/sidebar',$data);

		$this->load->view('bmn/editakun', $data);
		$this->load->view('bmn/footer');
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
				redirect('Bmn/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('Bmn/editprofile');
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
				redirect('Bmn/editprofile');
			} else {
				$this->session->set_flashdata('updategagal', 'true');
				redirect('Bmn/editprofile');
			}
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
	public function index() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$data['chart'] = $this->Datapaket_model->chart();
		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bmn/header', $data);
		$this->load->view('bmn/sidebar');
		$this->load->view('bmn/dashboard');
		$this->load->view('bmn/footer');		
	}

	public function tahun($id_ppk)
	{
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('bmn/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bmn/sidebar',$data);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
		$this->load->view('bmn/tahun',$data);
		$this->load->view('bmn/footer');
	}

	public function jenispaket($id_tahun)
	{

			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('bmn/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('bmn/sidebar',$ppk);

			$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
			$id_ppk = $data['dapattahun'][0]['id_ppk'];
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
			$this->load->view('bmn/tampilpaket',$data);
			$this->load->view('bmn/footer');
		
	}

	public function paketkontraktual($id_tahun)
	{
			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('bmn/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('bmn/sidebar',$ppk);
			$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
			$id_ppk = $data['dapattahun'][0]['id_ppk'];
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
			$data['kontraktual'] = $this->Datapaket_model->kontraktual($id_tahun);
			if ($data['kontraktual']==NULL) {
				redirect('Bmn/jenispaket/'.$id_tahun,'refresh');
			}
			$this->load->view('bmn/kontraktual',$data);
			$this->load->view('bmn/footer');
	}
	public function paketsuakelola($id_tahun)
	{
			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('bmn/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('bmn/sidebar',$ppk);
			$data['dapattahun'] = $this->Datatahun_model->dapatkantahun($id_tahun);
			$id_ppk = $data['dapattahun'][0]['id_ppk'];
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");
			$data['suakelola'] = $this->Datapaket_model->suakelola($id_tahun);
			if ($data['suakelola']==NULL) {
				redirect('Bmn/jenispaket/'.$id_tahun,'refresh');
			}
			$this->load->view('bmn/suakelola',$data);
			$this->load->view('bmn/footer');
	}
	public function dokumenkontraktual ($id_paket)
	{
			$data['pendukung'] = $this->Datapaket_model->lihatpendukung($id_paket);
			$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$tahun = $data['paket'][0]['id_tahun'];
			$data['tahun'] = $this->Datatahun_model->cektahun($tahun);
			$data['show'] = $this->Datapaket_model->showidpkt('tbl_pokja', $id_paket);
			$id_ppk = $data['tahun']->id_ppk;
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");

			if ($data['pendukung'] == NULL) {
				$this->session->set_flashdata('kosong', 'true');
				redirect('Bmn/paketkontraktual/'.$tahun);
			}
			else{
				$id_user = $this->session->userdata('id_user');
				$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
				$this->load->view('bmn/header', $ini);

				$ppk['get_ppk']=$this->Datappk_model->datappk();
				$this->load->view('bmn/sidebar',$ppk);

				$this->load->view('bmn/viewdokumenkontraktual',$data);
				$this->load->view('Bmn/footer');
			}

			

	}
	public function dokumensuakelola ($id_paket)
	{
			$data['pendukung'] = $this->Datapaket_model->lihatpendukung($id_paket);
			$data['paket'] = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$tahun = $data['paket'][0]['id_tahun'];
			$data['tahun'] = $this->Datatahun_model->cektahun($tahun);
			$data['show'] = $this->Datapaket_model->showidpkt('tbl_pokja', $id_paket);
			$id_ppk = $data['tahun']->id_ppk;
			$data['namappk'] = $this->Datappk_model->GetWherePPK("where id_ppk = '$id_ppk'");

			if ($data['pendukung'] == NULL) {
				$this->session->set_flashdata('kosong', 'true');
				redirect('Bmn/paketkontraktual/'.$tahun);
			}
			else{
				$id_user = $this->session->userdata('id_user');
				$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
				$this->load->view('bmn/header', $ini);

				$ppk['get_ppk']=$this->Datappk_model->datappk();
				$this->load->view('bmn/sidebar',$ppk);

				$this->load->view('bmn/viewdokumensuakelola',$data);
				$this->load->view('bmn/footer');
			}

			

	}
}

?>