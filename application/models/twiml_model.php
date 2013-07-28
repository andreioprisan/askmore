<?php

class Twiml_model extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}
	
	public function save($data) 
	{
		if (isset($data['Body'])) {
			$content = $data['Body'];
			$source = "sms";
		} else if (isset($data['TranscriptionText'])) {
			$content = $data['TranscriptionText'];
			$source = "voice";
		} else {
			return;
		}

		$eventId = $this->getEventID($data['To']);
		if (!$eventId) {
			return;
		}

		$question = array(
			'eventid' => $eventId,
			'text'	=> $content,
			'source' => $source,
			'createdat' => date("Y-m-d H:i:s"),
			'author' => 'anonymous',
			'status' => 'active'
			);

		$this->db->insert('raw', array('data' => json_encode($data)));
		$this->db->insert('question', $question);

	}

	public function getEventID($phoneNumber) {
		$trimed = substr($phoneNumber, 2);
		$prettyNum = "(".$trimed[0].$trimed[1].$trimed[2].") ".$trimed[3].$trimed[4].$trimed[5]."-".$trimed[6].$trimed[7].$trimed[8].$trimed[9];
		$eventId = $this->lookupEventIDByPhone($prettyNum);
		if (!$eventId) {
			return false;
		} else {
			return $eventId;
		}
		
	}

	public function lookupEventIDByPhone($phone) {
		$query = $this->db->get_where('events', array('phone' => $phone));
		$results = $query->result();
		if (count($results) == 0) {
			return false;
		} else {
			return $query->row()->eventid;
		}
	}

}
