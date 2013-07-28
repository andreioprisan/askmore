<?php

class Twiml_model extends CI_Model 
{

	function __construct()
	{
		parent::__construct();
	}
	
	public function save($data) 
	{
		$this->db->insert('raw', array('data' => json_encode($data)));
	}

}
