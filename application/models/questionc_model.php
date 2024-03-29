<?php

class Questionc_model extends CI_Model 
{
	var $doCreatePhoneNumbers = true;
	function __construct()
	{
		parent::__construct();
	}

	public function getupdatedsince($timestamp, $eventid) {
		$bigresults = array(
			'updates'=> null,
			'new' => null);

		$datetime = date('Y-m-d H:i:s', $timestamp);

		$sql = "select questionid, score from questions where eventid = '".$eventid."' and lastupdatedat > '".$datetime."'";
		$query = $this->db->query($sql);
		$results = $query->result();
		if (count($results) != 0) {
			foreach ($results as $result) {
				$bigresults['updates'][] = array('q' => $result->questionid, 'score' => $result->score);
			}
		}

		$sql = "select * from questions where eventid = '".$eventid."' and createdat > '".$datetime."'";
		$query = $this->db->query($sql);
		$results = $query->result();
		if (count($results) != 0) {
			foreach ($results as $result) {
				unset($result->lastupdatedat);
				$result->createdat = date('m/d/y h:iA', strtotime($result->createdat));
				$bigresults['new'][] = (array)$result;
			}
		}

		return $bigresults;		

	}

	public function saveNew($eventid, $content, $source, $author)
	{
		if (trim($author) == "Your name [optional]" || $author == "Your name" || trim($author) == "") {
			$author = "anonymous";
		}

		$question = array(
			'eventid' => $eventid,
			'text'	=> $content,
			'source' => $source,
			'author' => $author,
			'createdat' => date("Y-m-d H:i:s"),
			'status' => 'active'
			);

		$this->db->insert('questions', $question);
	}

	public function downvote($questionid) {
		$sql = 'update questions set score=score-1, lastupdatedat="'.date("Y-m-d H:i:s").'" where questionid = "'.$questionid.'"';
		$query = $this->db->query($sql);
	}

	public function upvote($questionid) {
		$sql = 'update questions set score=score+1, lastupdatedat="'.date("Y-m-d H:i:s").'" where questionid = "'.$questionid.'"';
		$query = $this->db->query($sql);
	}

	public function getQuestionsById($eventid, $sort = "both") {
		if ($sort == "both" || $sort == "") {
			$sort_sql = "order by score desc, createdat desc";
		} else if ($sort == "top") {
			$sort_sql = "order by score desc";
		} else if ($sort == "new") {
			$sort_sql = "order by createdat desc";
		} 
		$sql = 'select * from questions where eventid="'.$eventid.'" '.$sort_sql.'';
		$query = $this->db->query($sql);
		$results = $query->result();
		
		if (count($results) == 0) {
			return false;
		} else {
			return $results;
		}		
	}	

	function update($table, $where, $data)
	{
		var_dump($where);
		$this->db->where($where);
		$this->db->update($table, $data); 
		return $this->db->insert_id();
	}

	function getCount($eventid)
	{
		$query = $this->db->get_where('questions', array('eventid' => $eventid));
		$existingrec = count($query->result());
		return $existingrec;	
	}

	function get_current_card($uid) {
		$sql = 'select concat(card_type," ", card_last4) as card, payment_token.* from payment_customers ';
		$sql .= 'inner join payment_token on payment_token.fingerprint = payment_customers.active_card_fingerprint ';
		$sql .= 'where payment_customers.uid = '.$uid.' order by payment_token.created desc limit 0,1';

		$query = $this->db->query($sql);
		$results = $query->result();

		if (count($results) == 0) {
			return false;
		} else {
			return $query->row();
		}		
	}

	function get_all_custok()
	{
		$sql = "select cust_id from payment_customers";
		$query = $this->db->query($sql);
		$results = $query->result();

		if (count($results) == 0) {
			return false;
		} else {
			return $query->result();
		}		

	}

	function getcustid($uid) 
	{
		$sql = "select cust_id from payment_customers where uid = '".$uid."'";
		$query = $this->db->query($sql);
		$results = $query->result();

		if (count($results) == 0) {
			return false;
		} else {
			return $query->row()->cust_id;
		}		

	}

	function save($table, $where, $data)
	{
		$existingrec = 0;
		$query = $this->db->get_where($table, $where);
		$existingrec = count($query->result());

		//echo "got ".$existingrec." table ".$table." ";
		//var_dump($query->result());

		if ($existingrec === 0) {
			$this->db->insert($table, $data);
		} else {
			$this->db->where($where);
			$this->db->update($table, $data); 
		}
	}

	function insert($table, $data) {
		$this->db->insert($table, $data);
	}

	function delete($questionid, $slug) {
		$this->db->where(array('questionid' => $questionid));
		$this->db->delete('questions');
		$loc = 'Location: /'.$slug;
	    header($loc);
	}

	function get_rewards($uid = null, $page = 0, $cycle = null) {
		if ($uid === null)
			return; 

		$sql = "select * from tasks_payment_status where uid = ".$uid." and forcycle = '".$cycle."' order by forcycle, debit limit ".($page*50).",50";

		$query = $this->db->query($sql);
		$results = $query->result();

		if (count($results) == 0) {
			return false;
		} else {
			return $results;
		}		

	}

	function get_rewards_cycles($uid = null) {
		if ($uid === null)
			return; 

		$sql = "select distinct forcycle from tasks_payment_status where uid = ".$uid." order by forcycle desc";

		$query = $this->db->query($sql);
		$results = $query->result();

		if (count($results) == 0) {
			return false;
		} else {
			return $results;
		}		
	}

	function get_balance($uid = null) {
		if ($uid != null) {
			$extra = " AND uid=$uid ";
		} else {
			$extra = "";
		}
	
		$sql = "select 
					(select count(*)*0.30 as c from tasks_payment_status where debit=0 $extra) as credit, 
					(select count(*)*0.10 as c from tasks_payment_status where debit=1 $extra) as debit";

		$query = $this->db->query($sql);
		$results = $query->result();

		if (count($results) == 0) {
			return false;
		} else {
			return $query->row();
		}		

	}
}
