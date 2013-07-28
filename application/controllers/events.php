<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Events extends CI_Controller {

	

	public function index()
	{
		$this->load->view('mobileHeader');
		$this->load->view('AskQuestions');
		$this->load->view('footer');
	}

	public function fullBrowser()
	{
		$this->load->view('mobileHeader');
		$this->load->view('AskQuestions');
		$this->load->view('footer');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */