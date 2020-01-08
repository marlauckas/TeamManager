<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scouting_model extends MY_Model {

	public function __construct() {
		parent::__construct();
	}

	public function get_members() {
		$this->db->db_select('team_manager');
		$this->db->select('member_test.*', FALSE);
		$this->db->from('member_test');
		$this->db->order_by('member_test.last_name');
		$query = $this->db->get();
		return $query->result();
	}
}