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
		$this->load->model('account_model');
		$input = $_POST;

		$neededInputs = array('inputEmail', 'inputPassword1');
		foreach($neededInputs as $neededInput) {
			if (!array_key_exists($neededInput, $input)) {
			    header('Location: /login?error=1');
			    return;
			}
		}

		$userDetails = $this->account_model->loginVerify($input['inputEmail'], $input['inputPassword1']);
		if ($userDetails) {
			$this->session->set_userdata($userDetails);
			
		    header('Location: /');
		    return;
		} else {
		    header('Location: /login?error=2');
		    return;			
		}

		return;
	}

	public function signup_save() {
		$input = $_POST;
		$neededInputs = array('inputFullName', 'inputEmail', 'inputUserTwiterHandle', 'inputPassword1', 'inputPassword2');
		$this->load->model('account_model');

		foreach($neededInputs as $neededInput) {
			if (!array_key_exists($neededInput, $input)) {
			    header('Location: /signup?error=1');
			    return;
			}
		}

		if ($input['inputPassword1'] != $input['inputPassword2']) {
		    header('Location: /signup?error=2');
		    return;
		}

		if (!$this->account_model->isAvailable($input['inputEmail'])) {
		    header('Location: /signup?error=3');
		    return;
		}

		$this->account_model->saveNew($input['inputFullName'], $input['inputEmail'], $input['inputUserTwiterHandle'], $input['inputPassword1']);
	    header('Location: /');
	    return;
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */