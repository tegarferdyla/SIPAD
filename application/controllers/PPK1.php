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
		$this->load->view('ppk1/sidebar');
		$data['get_tahun'] = $this->Datatahun_model->datatahun($id_ppk);
		$this->load->view('ppk1/dashboard', $data);
		$this->load->view('ppk1/footer');
	}
	public function input() {
		$this->load->view('ppk1/header');
		$this->load->view('ppk1/sidebar');
		$this->load->view('ppk1/input');
		$this->load->view('ppk1/footer');
	}
	public function inputtahun() {
		$this->load->view('ppk1/header');
		$this->load->view('ppk1/sidebar');
		$this->load->view('ppk1/inputtahun');
		$this->load->view('ppk1/footer');
	}
	public function daftartahun() {
		$this->load->view('ppk1/header');
		$this->load->view('ppk1/sidebar');
		$data['get_tahun'] = $this->Datatahun_model->datatahun();
		$this->load->view('ppk1/daftartahun', $data);
		$this->load->view('ppk1/footer');
	}
	public function profile() {
		$this->load->view('ppk1/header');
		$this->load->view('ppk1/sidebar');
		$this->load->view('ppk1/profile');
		$this->load->view('ppk1/footer');
	}
	public function changepassword() {
		$this->load->view('ppk1/header');
		$this->load->view('ppk1/sidebar');
		$this->load->view('ppk1/changepassword');
		$this->load->view('ppk1/footer');
	}

	public function tambahtahun() {
		$this->form_validation->set_rules('tahun', 'Nama Tahun', 'trim|required');
		$id_ppk = $this->session->userdata('id_ppk');
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('ppk1/header');
			$this->load->view('ppk1/sidebar');
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
			$resultchecknip = $this->Datatahun_model->cektahun($tahun);
			if ($resultchecknip > 0) {
				$this->session->set_flashdata('tahunsalah', 'true');
				redirect('ppk1/inputtahun');
			} else {
				$input = $this->Datatahun_model->Tambahtahun($data, 'tbl_tahun');
				if ($input > 0) {
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
		$data['get_tahun'] = $this->Datatahun_model->cektahun($tahun);
		if ($data) {
			# code...
		}

		echo "<pre>";
		print_r($data);
		echo "</pre>";
		/*$this->load->view('ppk1/header');
			$this->load->view('ppk1/sidebar');
			$this->load->view('ppk1/jenispaket',$data);
			$this->load->view('ppk1/footer');*/
	}
	public function pilihpaket($tahun, $jenis) {
		$id_ppk = $this->session->userdata('id_ppk');
		$data['jenis'] = $this->Datapaket_model->cekjenis($jenis, $tahun, $id_ppk);
		// if ($data ) {
		// 	echo "data tidak ada";
		// 	// $this->load->view('ppk1/header');
		// 	// $this->load->view('ppk1/sidebar');
		// 	// $this->load->view('ppk1/pilihpaket');
		// 	// $this->load->view('ppk1/footer');
		// }else{
		// 	echo "data ada";
		$this->load->view('ppk1/header');
		$this->load->view('ppk1/sidebar');
		$this->load->view('ppk1/pilihpaket', $data);
		$this->load->view('ppk1/footer');
		// }
		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";
	}
// =======
// 		public function pilihpaket($tahun,$jenis) 
// 		{
// 			$id_ppk = $this->session->userdata('id_ppk');
// 			$data['jenis'] = $this->Datapaket_model->cekjenis($jenis,$tahun,$id_ppk);
// 			// if ($data ) {
// 			// 	echo "data tidak ada";
// 			// 	// $this->load->view('ppk1/header');
// 			// 	// $this->load->view('ppk1/sidebar');
// 			// 	// $this->load->view('ppk1/pilihpaket');
// 			// 	// $this->load->view('ppk1/footer');
// 			// }else{
// 			// 	echo "data ada";
// 			$this->load->view('ppk1/header');
// 			$this->load->view('ppk1/sidebar');
// 			$this->load->view('ppk1/pilihpaket',$data);
// 			$this->load->view('ppk1/footer');
// 			// }
// 			// echo "<pre>";
// 			// print_r($data);
// 			// echo "</pre>";
// 		}
// 

}
?>