<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Eventc extends CI_Controller {
	var $userdata;

	public function index() {

	}

	public function list_a() {
		$this->load->model('eventc_model');

		if (isset($_COOKIE['ask'])) {
			$this->userdata = (array)json_decode(base64_decode($_COOKIE['ask']));
		} else {
			header('Location: /');
			return;
		}

		$eventsList = $this->eventc_model->getAllByAuthor($this->userdata['userid']);

		$this->load->view('nav', $this->userdata);
		$this->load->view('event_list', array('eventsList' => (array)$eventsList));
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

	public function lookup($slug) {
		$this->load->model('eventc_model');
		$this->load->model('questionc_model');

		$event_details = $this->eventc_model->getEventBySlug($slug);
		$questions_details = $this->questionc_model->getQuestionsById($event_details->eventid);

		$this->load->view('nav', $this->userdata);
		$this->load->view('event_main', 
			array_merge(
				array('event'=>(array)json_decode(json_encode($event_details))), 
				array('questions' => $questions_details)
			));
		$this->load->view('footer');


	}
}

