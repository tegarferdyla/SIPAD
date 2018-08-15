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
				}else if ($this->session->userdata('bagian')=='Kasatker') {
					redirect('Kasatker');
				}elseif ($this->session->userdata('bagian')=='PPK') {
					redirect('PPK1');
				}elseif ($this->session->userdata('bagian')=='BMN') {
					redirect('Nmn');
				}elseif ($this->session->userdata('bagian')=='Keuangan') {
					redirect('Keuangan');
				}elseif ($this->session->userdata('bagian')=='Bendahara') {
					redirect('Bendahara');
				}elseif ($this->session->userdata('bagian')=='Pokja') {
					redirect('Pokja');
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
			redirect(base_url('Admin'));
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
			if ($this->session->userdata('bagian')=='Kasatker') {
				redirect(base_url('Kasatker'));
			}
			elseif($this->session->userdata('bagian')=='PPK') {
				redirect(base_url('PPK1'));
			}
			elseif($this->session->userdata('bagian')=='BMN'){
				redirect(base_url('Bmn'));
			}
			else if ($this->session->userdata('bagian') == 'Keuangan') {
				redirect('Keuangan');
			}
			else if ($this->session->userdata('bagian') == 'Bendahara') {
				redirect('Bendahara');
			}
			else if ($this->session->userdata('bagian') == 'Pokja') {
				redirect('Pokja');
			}
		}
		else{
			$this->session->set_flashdata('gagallogin', 'true');
			redirect('Login');
		}
	}

	public function lupapassword()
	{
		$this->load->view('home/resetpassword');
	}
	public function resetpassword()
	{
		$user = $this->input->post('username');
		$email = $this->input->post('email');
		$this->load->library('generate_token');
		$valid = $this->Datauser_model->validemail($user, $email);
		if ($email != $valid['email']) {
			redirect('Login/lupapassword');
		}
		$renewpass = $this->generate_token->get_token(15);
		$data = array('password' => $renewpass );
		$result = $this->Datauser_model->resetpassword($data,$email,$user);
		$this->load->library('email');
		$config = array();
		$config['charset'] = 'utf-8';
		$config['useragent'] = 'Codeigniter';
		$config['protocol']= "smtp";
		$config['mailtype']= "html";
		$config['smtp_host']= "ssl://smtp.gmail.com";//pengaturan smtp
		$config['smtp_port']= "465";
		$config['smtp_timeout']= "400";
		$config['smtp_user']= "sipad.information@gmail.com"; // isi dengan email kamu
		$config['smtp_pass']= "coba12345"; // isi dengan password kamu
		$config['crlf']="\r\n"; 
		$config['newline']="\r\n"; 
		$config['wordwrap'] = TRUE;
		//memanggil library email dan set konfigurasi untuk pengiriman email

		$this->email->initialize($config);
		//konfigurasi pengiriman
		$this->email->from('SIPAD Information');
		$this->email->to($email);
		$this->email->subject("Reset Password");
		$this->email->message(
		"Masukan Kode Berikut ".$renewpass." <br> atau Klik Tombol Dibawah ini<br><br>".
		"<a href=".site_url('login/tokensend?token='.$renewpass)." style='background-color: #4CAF50; border: none; color: white; padding: 10px 20px;text-align: center; text-decoration: none;display: inline-block; font-size: 14px;'>Reset Password</a>"
		);

		if($this->email->send())
		{
			redirect('Login/validtoken');
		}

	}
	public function validtoken()
	{
		$this->load->view('home/validtoken');
	}
	public function tokensend()
	{
		$token = $this->input->get('token');
		$valid = $this->Datauser_model->validpassword($token);
		if ($token != $valid['password']) {
			echo "kode verifikasi salah atau expired";
		}else{
			redirect('login/newpassword?auth='.$token);
		}
	}
	public function newpassword()
	{
		$token = $this->input->get('auth');
		$data['user'] = $this->Datauser_model->validpassword($token);
		$this->load->view('home/newpassword',$data);
	}
	public function sendpassword()
	{
		$token = $this->input->post('token');
		$password = $this->input->post('password');
		$data = array('password' => md5($password));
		$result = $this->Datauser_model->UpdateDataUser($data,$token);
		if ($result>0) {
			echo "berhasil silahkan login";
		}
	}
		
}

 ?>