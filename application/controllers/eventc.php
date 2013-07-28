<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventc extends CI_Controller {
	var $userdata;

	public function index() {

	}

	public function list_a() {
		if (isset($_COOKIE['ask'])) {
			$this->userdata = (array)json_decode(base64_decode($_COOKIE['ask']));
		} else {
			header('Location: /');
			return;
		}

		$this->load->view('nav', $this->userdata);
		$this->load->view('home', $this->userdata);
		$this->load->view('footer');
	}


	public function create() {
		if (isset($_COOKIE['ask'])) {
			$this->userdata = (array)json_decode(base64_decode($_COOKIE['ask']));
		} else {
			header('Location: /');
			return;
		}

		$this->load->view('nav', $this->userdata);
		$this->load->view('event_create', $this->userdata);
		$this->load->view('footer');

	}

	public function createnew() {
		$this->load->model('eventc_model');

		$input = $_POST;
		$neededInputs = array('inputEventName', 'inputLocation', 'inputHashtag', 'inputStartDate', 'inputEndDate');
		foreach($neededInputs as $neededInput) {
			if (!array_key_exists($neededInput, $input) ||
				empty($input[$neededInput])) {
			    header('Location: /event/create?error=1');
			    return;
			}
		}

		$this->eventc_model->saveNew($input);
		header('Location: /event/list');
		
	}

	public function edit() {
		if (isset($_COOKIE['ask'])) {
			$this->userdata = (array)json_decode(base64_decode($_COOKIE['ask']));
		} else {
			header('Location: /');
			return;
		}

		$this->load->view('nav', $this->userdata);
		$this->load->view('home', $this->userdata);
		$this->load->view('footer');

	}	
}
