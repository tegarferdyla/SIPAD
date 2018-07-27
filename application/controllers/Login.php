<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class Login extends CI_Controller
{
	public function __construct ()
	{
		parent::__construct();
		if (isset($_GET['logout']) == 'signout') {
			$this->session->sess_destroy();
			redirect('');
		}
		else {
			if ($this->session->has_userdata('status')) {
				if ($this->session->userdata('role') == "admin") {
					redirect('admin');
				}else if ($this->session->userdata('divisi')=='Kasatker') {
					redirect('kasatker');
				}
				elseif ($this->session->userdata('bagian')=='PPK') {
					redirect('ppk1');
				}elseif ($this->session->userdata('bagian')=='BMN') {
					redirect('bmn');
				}elseif ($this->session->userdata('bagian')=='Keuangan') {
					redirect('keuangan');
				}elseif ($this->session->userdata('bagian')=='Bendahara') {
					redirect('bendahara');
				}  
			}
		}
	}

	public function index ()
	{
		$this->load->view('home/login');
	}

	public function ceklogin ()
	{
		$user = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array
		(
			'username' => $user,
			'password' => md5($password) 
		);
		$cekadmin = $this->Datalogin_model->cekloginadmin('admin',$where)->num_rows();
		$cekuser = $this->Datalogin_model->cekloginuser('user',$where)->num_rows();

		if($cekadmin > 0)
		{
			$result=$this->db->get_where('admin',$where)->row_array();
			$data_session = array
			(
				'nama' => $result['nama'],
				'status' => "login",
				'role' => "admin"
			);
			$this->session->set_userdata($data_session);
			redirect(base_url('admin'));
		}
		elseif ($cekuser > 0 ) 
		{
			$result=$this->db->get_where('user',$where)->row_array();
			$data_session = array
			(
				'nama' => $result['nama'],
				'status' => "login",
				'bagian' => $result['bagian'],
				'divisi' => $result['divisi'],
				'id_user' => $result['id_user'],
				'id_ppk' => $result['id_ppk']
			);
			$this->session->set_userdata($data_session);
			if ($this->session->userdata('divisi')=='Kasatker') {
				redirect(base_url('kasatker'));
			}
			elseif($this->session->userdata('bagian')=='PPK') {
				redirect(base_url('ppk1'));
			}
			elseif($this->session->userdata('bagian')=='BMN'){
				redirect(base_url('bmn'));
			}
			else if ($this->session->userdata('bagian') == 'Keuangan') {
			redirect('keuangan');
			}
			else if ($this->session->userdata('bagian') == 'Bendahara') {
			redirect('bendahara');
			}
		}
		else{
			$this->session->set_flashdata('gagallogin', 'true');
			redirect('login');
		}
	}
}

 ?>