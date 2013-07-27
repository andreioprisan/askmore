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
