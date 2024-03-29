<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Questionc extends CI_Controller {
	var $userdata;

	public function index() {

	}

	public function getupdatedsince($timestamp, $eventid)
	{
		$this->load->model('questionc_model');
		$results = $this->questionc_model->getupdatedsince($timestamp, $eventid);
		header('Content-Type: application/json');
		echo json_encode($results);
	}

	public function upvote($questionid) {
		$this->load->model('questionc_model');
		$this->questionc_model->upvote($questionid);
	}

	public function downvote($questionid) {
		$this->load->model('questionc_model');
		$this->questionc_model->downvote($questionid);
	}
	
	public function delete($questionid, $slug) {
		$this->load->model('questionc_model');
		$this->questionc_model->delete($questionid, $slug);
	}

	public function createnew() {
		$this->load->model('questionc_model');

		$input = $_POST;
		$neededInputs = array('eventid', 'question');
		foreach($neededInputs as $neededInput) {
			if (!array_key_exists($neededInput, $input) ||
				empty($input[$neededInput])) {
				$loc = 'Location: /'.gethostname().$input['backto'].'?error=1';
			    header($loc);
			    return;
			}
		}

		if (!isset($input['author'])) {
			$input['author'] = "anonymous";
		}

		if (isset($input['source'])) {
			$source = $input['source'];
		} else {
			$source = "web";
		}
		$this->questionc_model->saveNew($input['eventid'], $input['question'], $source, $input['author']);
		
		$loc = 'Location: '.$input['backto'];
		header($loc);

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
		$questions_count = $this->questionc_model->getCount($event_details->eventid);

		$this->load->view('nav', $this->userdata);
		$this->load->view('event_main', 
			array_merge(
				array('event'=>(array)json_decode(json_encode($event_details))), 
				array('questions' => $questions_details),
				array('questions_count' => $questions_count)
			));
		$this->load->view('footer');


	}
}

