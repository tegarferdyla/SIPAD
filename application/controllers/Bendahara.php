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
			redirect('admin');
		} else if ($this->session->userdata('divisi') == 'Kasatker') {
			redirect('kasatker');
		} else if ($this->session->userdata('divisi') == 'PPK') {
			redirect('ppk1');
		}else if ($this->session->userdata('divisi') == 'BMN') {
			redirect('bmn');
		}
	}
	public function index() {
		$id_user = $this->session->userdata('id_user');
		$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
		$this->load->view('bendahara/header', $data);

		$data['get_ppk']=$this->Datappk_model->datappk();
		$this->load->view('bendahara/sidebar',$data);

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

			$kontraktual['kontraktual'] = $this->Datapaket_model->kontraktual($id_tahun);
			$this->load->view('bendahara/kontraktual',$kontraktual);
			$this->load->view('bendahara/footer');
	}
	public function paketsuakelola($id_tahun)
	{
			$id_user = $this->session->userdata('id_user');
			$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$this->load->view('bendahara/header', $ini);

			$ppk['get_ppk']=$this->Datappk_model->datappk();
			$this->load->view('bendahara/sidebar',$ppk);

			$suakelola['suakelola'] = $this->Datapaket_model->suakelola($id_tahun);
			// print_r($suakelola);
			$this->load->view('bendahara/suakelola',$suakelola);
			$this->load->view('bendahara/footer');
	}
	public function dokumenkontraktual ($id_paket)
	{
			$pendukung['pendukung'] = $this->Datapaket_model->lihatpendukung($id_paket);
			$caritahun = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$tahun = $caritahun[0]['id_tahun'];

			if ($pendukung['pendukung'] == NULL) {
				$this->session->set_flashdata('kosong', 'true');
				redirect('bendahara/paketkontraktual/'.$tahun);
			}
			else{
				$id_user = $this->session->userdata('id_user');
				$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
				$this->load->view('ppk1/header', $ini);

				$ppk['get_ppk']=$this->Datappk_model->datappk();
				$this->load->view('bendahara/sidebar',$ppk);

				$this->load->view('bendahara/viewdokumenkontraktual',$pendukung);
				$this->load->view('ppk1/footer');
			}

			

	}
	public function dokumensuakelola ($id_paket)
	{
			$pendukung['pendukung'] = $this->Datapaket_model->lihatpendukung($id_paket);
			$caritahun = $this->Datapaket_model->showidpkt('tbl_paket', $id_paket);
			$tahun = $caritahun[0]['id_tahun'];

			if ($pendukung['pendukung'] == NULL) {
				$this->session->set_flashdata('kosong', 'true');
				redirect('bendahara/paketkontraktual/'.$tahun);
			}
			else{
				$id_user = $this->session->userdata('id_user');
				$ini['user'] = $this->Datauser_model->GetWhereUser($id_user);
				$this->load->view('ppk1/header', $ini);

				$ppk['get_ppk']=$this->Datappk_model->datappk();
				$this->load->view('bendahara/sidebar',$ppk);

				$this->load->view('bendahara/viewdokumensuakelola',$pendukung);
				$this->load->view('ppk1/footer');
			}

			

	}
}

?>