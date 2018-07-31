<?php 
	defined('BASEPATH') OR exit ('No direct script access allowed');

	/**
	 * 
	 */
	class Kasatker extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
			if (!$this->session->has_userdata('status')) {
				redirect('login');
			}else if($this->session->userdata('role') =='admin'){
				redirect('admin');
			}
			else if($this->session->userdata('bagian') =='PPK'){
				redirect('ppk1');
			}
		}
		
		public function index () 
		{
			$this->load->view('kasatker/header');
			$this->load->view('kasatker/sidebar');
			$this->load->view('kasatker/dashboard');
			$this->load->view('kasatker/footer');
		}

		public function datappk1 ()
		{
			$this->load->view('kasatker/header');
			$this->load->view('kasatker/sidebar');
			$this->load->view('kasatker/datappk1');
			$this->load->view('kasatker/footer');
		}
		public function profile ()
		{
			$this->load->view('kasatker/header');
			$this->load->view('kasatker/sidebar');
			$this->load->view('kasatker/profile');
			$this->load->view('kasatker/footer');
		}
		public function changepassword ()
		{
			$this->load->view('kasatker/header');
			$this->load->view('kasatker/sidebar');
			$this->load->view('kasatker/changepassword');
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
				$json[] = array('nama_paket'=> $nama,'paket_terkumpul' => $num_doc1, 'total' => $hasil[$i]['total']);
			}
			$cetak = json_encode($json);
			$data['hasil'] = json_decode($cetak);
			// echo "<pre>";
			// print_r($data);
			// echo "</pre>";

			$this->load->view('kasatker/header');
			$this->load->view('kasatker/sidebar');
			$this->load->view('kasatker/testfile',$data);
			$this->load->view('kasatker/footer');
		}
		public function testhit()
		{
			$num1 = 47;
			$num2 = 53;
			$total = ($num1/$num2)*100;

			echo number_format($total,1);
		}

	}

 ?>