<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Twitter extends CI_Controller {

	public function index() {

	}

	public function crawl() {
        set_time_limit(120);
        $this->load->library('twitterlib');
		$this->CI = & get_instance();

		$hashtags = $this->CI->db->query('select hashtag from events');

		$hashtags_count = 0;
		foreach($hashtags->result() as $hashset) {
			$hashtags_count++;
	        $this->twitterlib->searchone(null, array($hashset->hashtag));
			$hashtags = $this->CI->db->query("DELETE FROM tweets WHERE (text not like '%askmore%' and terms = '".$hashset->hashtag."') or processed=1");
		}

		echo "Saved ".$hashtags_count." twitter hashtags";
	}

	public function sync() {
		$this->CI = & get_instance();
		$hashtags = $this->CI->db->query('select hashtag, eventid from events');
		foreach($hashtags->result() as $hashset) {
			$h = $hashset->hashtag;
			$tweets = $this->CI->db->query("select * FROM tweets WHERE text like '%askmore%' and terms = '".$h."' and processed=0");
			foreach($tweets->result() as $tweet) {
				$question = array(
					'eventid' => $hashset->eventid,
					'text' => $tweet->text,
					'status' => 'active',
					'createdat' => date('Y-m-d H:i:s', strtotime($tweet->created_at)),
					'author' => $tweet->author,
					'source' => 'twitter',
					'score' => 0
						
				);

				$this->CI->db->insert('questions', $question);

				$this->CI->db->query("update tweets set processed=1 where hash = '".$tweet->hash."'");



			}
		}


	}
}

