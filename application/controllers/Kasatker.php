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
	}

 ?>