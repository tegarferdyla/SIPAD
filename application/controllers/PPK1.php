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
		$this->load->view('ppk1/sidebar',$ppk);

		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/dashboard', $data);
		$this->load->view('ppk1/footer');
	}
	public function inputtahun() 
	{
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);
		
		$this->load->view('ppk1/inputtahun');
		$this->load->view('ppk1/footer');
	}
	public function daftartahun() {
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);
		
		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/daftartahun', $data);
		$this->load->view('ppk1/footer');
	}
	public function hapustahun($id_tahun)
	{
		$id_ppk =  $this->session->userdata('id_ppk');
		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$where = array(
					'id_tahun' => $id_tahun,
					'id_ppk' => $id_ppk
				);
		$result = $this->Datatahun_model->hapustahun($where, 'tbl_tahun');
		
		$this->session->set_flashdata('deleteberhasil','true');
		redirect(base_url('ppk1/daftartahun'));
	}
	public function edittahun($id_tahun)
	{
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);
		

		$data = array ('get_ppk' => $this->Datatahun_model->datatahun($id_ppk));
		$tahun = $this->Datatahun_model->GetWhereTahun("where id_tahun ='$id_tahun'");
		$data = array (
				"id_tahun" => $tahun[0]['id_tahun'],
				"nama_tahun" => $tahun[0]['nama_tahun'],
				"deskripsi" => $tahun[0]['deskripsi'],
			);
		$this->load->view('ppk1/edittahun', $data);
		$this->load->view('ppk1/footer');
	}
	public function updatetahun()
	{
		
		$id_tahun = $this->input->post('id_tahun');
		$nama_tahun = $this->input->post('nama_tahun');
		$deskripsi = $this->input->post('deskripsi');
		$input_by = $this->session->userdata('nama');
		$id_ppk = $this->session->userdata('id_ppk');

		$data_update = array (
						'id_tahun' => $id_tahun,
						'nama_tahun' => $nama_tahun,
						'deskripsi' => $deskripsi,
						'input_by' => $input_by,
						'id_ppk' =>$id_ppk
						);
		$where = array ('id_tahun' => $id_tahun);
		$result = $this->Datatahun_model->UpdateDataTahun('tbl_tahun', $data_update, $where);
		if ($result > 0) {
				$this->session->set_flashdata('updateberhasil','true');
				redirect('ppk1/daftartahun');
			}
			else {
				$this->session->set_flashdata('updategagal','true');
				redirect('ppk1/daftartahun');
			}
	}
	public function profile() {
		$id_ppk = $this->session->userdata('id_ppk');

		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);

		$this->load->view('ppk1/profile');
		$this->load->view('ppk1/footer');
	}
	public function changepassword() {
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');
		//Untuk Side Bar
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);
		
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
			$this->load->view('ppk1/sidebar',$ppk);
		
			
			$this->load->view('ppk1/inputtahun');
			$this->load->view('ppk1/footer');
		} 
		else {
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
					$lokasi = "./assets/data/".$tahun;
					mkdir($lokasi, 0777,true);
					$this->session->set_flashdata('berhasil', 'true');
					redirect(base_url('ppk1/inputtahun'));
				} else {
					$this->session->set_flashdata('gagal', 'true');
					redirect(base_url('ppk1/inputtahun'));
				}
			}
		}
	}
	public function jenispaket($tahun) 
	{
		$data = $this->Datatahun_model->cektahun($tahun);
		
		// echo $data->id_tahun;
		// $this->load->view('ppk1/test',$data);
		if ($data==NULL) {
			$this->session->set_flashdata('kosong', 'true');
			redirect('ppk1');
		}else{
		// echo "isi";
			$this->load->view('ppk1/header');

			$id_ppk = $this->session->userdata('id_ppk');
			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar',$ppk);
		
			$this->load->view('ppk1/jenispaket',$data);
			$this->load->view('ppk1/footer');
		}

	}
	public function pilihpaket($tahun, $jenis) 
	{
		$id_ppk = $this->session->userdata('id_ppk');
		$data['jenis'] = $this->Datapaket_model->cekjenis($jenis, $tahun, $id_ppk);
		if ($data['jenis']==NULL) {
			$this->session->set_flashdata('kosong', 'true');
			redirect('ppk1/jenispaket/'.$tahun);
		}else{
			$this->load->view('ppk1/header');

			$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
			$ppk = array("nama" => $ppk[0]['nama']);
			$this->load->view('ppk1/sidebar',$ppk);

			$this->load->view('ppk1/pilihpaket', $data);
			$this->load->view('ppk1/footer');
			// echo "isi";
		}

	}

	public function inputdokutama()
	{
		$this->load->view('ppk1/header');

		$id_ppk = $this->session->userdata('id_ppk');
		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);

		$this->load->view('ppk1/input');
		$this->load->view('ppk1/footer');
	}
	public function inputpaket() 
	{
		$id_ppk = $this->session->userdata('id_ppk');
		$this->load->view('ppk1/header');

		$ppk = $this->Datappk_model->GetWherePPK("where id_ppk ='$id_ppk'");
		$ppk = array("nama" => $ppk[0]['nama']);
		$this->load->view('ppk1/sidebar',$ppk);
		
		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/tambahpaket',$data);
		$this->load->view('ppk1/footer');
	}
	public function tambahpaket()
	{
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
				'id_ppk' => $id_ppk
			);
		$input = $this->Datapaket_model->Tambahpaket($data, 'tbl_paket');
		if ($input > 0) 
		{
			$tahun = $this->Datatahun_model->GetWhereTahun("where id_tahun ='$tahun_paket'");
			$data = array (
				"nama_tahun" => $tahun[0]['nama_tahun']
			);
			$tahun = $data['nama_tahun'];
			$lokasi = "./assets/data/".$tahun."/".$jenis_paket."/".$nama_paket;
			mkdir($lokasi, 0777,true);
			$this->session->set_flashdata('berhasil', 'true');
			redirect(base_url('ppk1/inputpaket'));
		} else {
			$this->session->set_flashdata('gagal', 'true');
			redirect(base_url('ppk1/inputpaket'));
		}
	}


}
?>