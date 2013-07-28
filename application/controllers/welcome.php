<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('nav');
		$this->load->view('welcome');
		$this->load->view('footer');
	}
}
