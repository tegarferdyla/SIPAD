<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Bmn extends CI_Controller {
	public function index() {
		$this->load->view('bmn/header');
		$this->load->view('bmn/sidebar');
		$this->load->view('bmn/dashboard');
		$this->load->view('bmn/footer');
	}
}

?>