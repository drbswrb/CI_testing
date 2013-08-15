<?php
class Md_load_questions extends CI_Model {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	public function getQuestions()
	{
		$this->load->database();
		$query=$this->db->query("select * from questions"); //where article_cat='{$category}' and article_sub_cat='{$subcategory}'");
		return $query->result();
	}
	
	public function getDetailQuestion($question_id)
	{
		$this->load->database();
		$query=$this->db->query("select * from questions where question_id='{$question_id}'");
		return $query->result();
	}
	
	public function getAnswer($question_id)
	{
		$this->load->database();
		$query=$this->db->query("select * from answers where question_id='{$question_id}' order by posted_date desc");
		return $query->result();
		
	}
	
}
