<?php
//the function takes in user article parameters and updates it to the 'article' table in the database, i.e. adds the article in database
class Md_calendar_function extends CI_Model {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function getAllEvents($username)
	{
		$this->load->database();
		
		$query=$this->db->query("select * from calendar where username='{$username}'");
	
		return $query->result();
	}
}
