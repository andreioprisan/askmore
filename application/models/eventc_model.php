<?php

class Eventc_model extends CI_Model 
{
	var $doCreatePhoneNumbers = true;
	function __construct()
	{
		parent::__construct();
	}

	public function initTwilio() {
		require_once(getcwd()."/application/libraries/twilio/Services/Twilio.php");
		$sid = "ACc223f6e1d1d2488d8efeeb319286f22c";
		$token = "9ed18b079156d238b7b1517e34a4e2a9";

		$client = new Services_Twilio($sid, $token);
		return $client;
	}

	public function saveNew($data)
	{
		$slug = substr(sha1(json_encode($data).rand()), 0, 4);
		$userdata = (array)json_decode(base64_decode($_COOKIE['ask']));

		if ($this->doCreatePhoneNumbers) {
			$twilioClient = $this->initTwilio();
            $numbers = $twilioClient->account->available_phone_numbers->getList('US', 'Local', array('AreaCode' => '617'));
            $allNumbers = $numbers->available_phone_numbers;
            $potentialNumberToPurchase = $allNumbers[0]->phone_number;
            $friendlyNumber = $allNumbers[0]->friendly_name;

            try {
	            $number = $twilioClient->account->incoming_phone_numbers->create(array(
	                'PhoneNumber' => $potentialNumberToPurchase,
                    "VoiceUrl" => "http://askmo.re/twiml/voice",
				    "VoiceMethod" => "POST",
					"SmsUrl" => "http://askmo.re/twiml/sms",
					"SmsMethod" => "POST"
	            ));
	        } catch (Exception $e) {

	        }
		} else {
			$friendlyNumber = rand(0, 20000);
		}

		$this->db->insert('events', 
			array(	'name' => $data['inputEventName'],
					'location' => $data['inputLocation'],
					'description' => $data['inputDescription'],
					'hashtag' => $data['inputHashtag'],
					'startdate' => $data['inputStartDate'],
					'enddate' => $data['inputEndDate'],
					'moderatorid' => $userdata['userid'],
					'phone' => $friendlyNumber,
					'slug'	=> $slug));

	}

	public function loginVerify($email, $password) 
	{
		$query = $this->db->get_where('users', array('email' => $email, 'password' => sha1(sha1($password).$email)));
		$results = $query->result();
		if (count($results) == 0) {
			return false;
		} else {
			return $query->row();
		}
	}

	function get($table, $where)
	{
		$query = $this->db->get_where($table, $where);
		$results = $query->result();
		if (count($results) == 0) {
			return false;
		} else {
			return $results;
		}
	}

	public function get_uid($cus)
	{
		$sql = 'select uid from payment_customers where payment_customers.cust_id = "'.$cus.'" order by payment_customers.created desc limit 0,1';

		$query = $this->db->query($sql);
		$results = $query->result();

		if (count($results) == 0) {
			return false;
		} else {
			return $query->row()->uid;
		}	
	}


	public function getEventBySlug($slug) {
		$query = $this->db->get_where('events', array('slug' => $slug));
		$results = $query->result();
		if (count($results) == 0) {
			return false;
		} else {
			return $query->row();
		}		
	}	

	public function getAllByAuthor($userid) {
		$query = $this->db->get_where('events', array('moderatorid' => $userid));
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

	function getcount($table, $where)
	{
		$query = $this->db->get_where($table, $where);
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

	function delete($table, $where) {
		$this->db->where($where);
		$this->db->delete($table);
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
