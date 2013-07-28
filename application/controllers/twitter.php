<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {

	public function index() {
//		require_once('application/libraries/twitter/twitterlib.php');

        set_time_limit(60);
        $this->load->library('twitterlib');
		$this->CI = & get_instance();

		$hashtags = $this->CI->db->query('select hashtag from events');

		$hashtags_count = 0;
		foreach($hashtags->result() as $hashset) {
			$hashtags_count++;
//	        $this->twitterlib->searchone(null, array("#askmore", "#".$hashset->hashtag));
	        $this->twitterlib->searchone(null, array($hashset->hashtag));
		}

		echo "Searched ".$hashtags_count." twitter hashtags";

	}

	public function queryAll() {

	}
}

