<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function index()
	{
		$this->login();
	}
	public function login()
	{
		$this->load->view('nav');
		$this->load->view('login');
		$this->load->view('footer');
	}
	public function signup()
	{
		$this->load->view('nav');
		$this->load->view('signup');
		$this->load->view('footer');
	}

	public function login_save() {
		$input = $_POST	;
		var_dump($input);
	}

	public function signup_save() {
		$input = $_POST;
		$neededInputs = array('inputFullName', 'inputEmail', 'inputUserTwiterHandle', 'inputPassword1', 'inputPassword2');
		$this->load->model('account_model');

		foreach($neededInputs as $neededInput) {
			if (!array_key_exists($neededInput, $neededInputs)) {
			    header('/signup?error=1');
			}
		}

		if ($input['inputPassword1'] != $input['inputPassword2']) {
		    header('/signup?error=2');
		}

		if (!$this->account_model->isAvailable($input['inputEmail'])) {
		    header('/signup?error=3');
		}

		$this->account_model->saveNew($input['inputFullName'], $input['inputEmail'], $input['inputUserTwiterHandle'], $input['inputPassword1']);
	    header('/');
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */