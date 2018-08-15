<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Home extends CI_Controller
	{
		public function index () {
			$this->load->view('home/header');
			$this->load->view('home/content');
			$this->load->view('home/footer');
		}

		public function updatepassword()
		{
			$id_user = $this->session->userdata('id_user');
			$bag = $this->session->userdata('bagian');
			$oldpass = $this->input->post('passlama');
			$newpass = $this->input->post('passnew');
			$repassnew = $this->input->post('repassnew');
			$data['user'] = $this->Datauser_model->GetWhereUser($id_user);
			$validasipass = $data['user']['password'];
			if ($validasipass != md5($oldpass)) {
				$test = $this->session->set_flashdata('updategagal', 'true');
				if ($bag == 'PPK') {
					redirect('PPK1/gantipass',$test);
				}elseif ($bag == 'Kasatker') {
					redirect('Kasatker/gantipass',$test);
				}elseif ($bag == 'Bmn') {
					redirect('Bmn/gantipass',$test);
				}elseif ($bag == 'Pokja') {
					redirect('Pokja/gantipass',$test);
				}elseif ($bag == 'Keuangan') {
					redirect('Keuangan/gantipass',$test);
				}elseif ($bag == 'Bendahara') {
					redirect('Bendahara/gantipass',$test);
				}
			}elseif($newpass != $repassnew){
				$test = $this->session->set_flashdata('passbeda', 'true');
				if ($bag == 'PPK') {
					redirect('PPK1/gantipass',$test);
				}elseif ($bag == 'Kasatker') {
					redirect('Kasatker/gantipass',$test);
				}elseif ($bag == 'Bmn') {
					redirect('Bmn/gantipass',$test);
				}elseif ($bag == 'Pokja') {
					redirect('Pokja/gantipass',$test);
				}elseif ($bag == 'Keuangan') {
					redirect('Keuangan/gantipass',$test);
				}elseif ($bag == 'Bendahara') {
					redirect('Bendahara/gantipass',$test);
				}
			}else{
				$data_update = array('password' => md5($newpass));
				$result = $this->Datauser_model->UpdateDataUser($data_update, $id_user);
				if ($result>0) {
					$test = $this->session->set_flashdata('updateberhasil', 'true');
					if ($bag == 'PPK') {
						redirect('PPK1/gantipass',$test);
					}elseif ($bag == 'Kasatker') {
					redirect('Kasatker/gantipass',$test);
					}elseif ($bag == 'BMN') {
						redirect('Bmn/gantipass',$test);
					}elseif ($bag == 'Pokja') {
						redirect('Pokja/gantipass',$test);
					}elseif ($bag == 'Keuangan') {
						redirect('Keuangan/gantipass',$test);
					}elseif ($bag == 'Bendahara') {
						redirect('Bendahara/gantipass',$test);
					}
				}
			}
		}
	}

 ?>