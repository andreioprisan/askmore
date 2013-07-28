<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twiml extends CI_Controller {

	public function index()
	{
	}

	public function voice()
	{
		header("Content-type: text/xml; charset=utf-8");
		$a = '<?xml version="1.0" encoding="UTF-8"?>
				<Response>
				    <Say voice="woman">Please say your question after the tone.</Say>
				    <Record maxLength="180" transcribe="true" transcribeCallback="http://askmo.re/twiml/transcribe" />
				</Response>';
		echo $a;

		if (isset($_POST) && count($_POST) != 0) {
			$this->load->model('twiml_model');
			$this->twiml_model->save($_POST);
		}

	}

	public function sms()
	{
		header("Content-type: text/xml; charset=utf-8");
		$a = '<?xml version="1.0" encoding="UTF-8"?>
				<Response>
				    <Sms>Thank you for submitting your question!</Sms>
				</Response>';
		echo $a;

		if (isset($_POST) && count($_POST) != 0) {
			$this->load->model('twiml_model');
			$this->twiml_model->save($_POST);
		}

	}

	public function transcribe() {
		if (isset($_POST) && count($_POST) != 0) {
			$this->load->model('twiml_model');
			$this->twiml_model->save($_POST);
		}
	}


}

