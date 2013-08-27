<?php

class Md_load_article extends CI_Model {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	
	public function getArticle($category,$subcategory)
	{
		$this->load->database();
		$query=$this->db->query("select * from article where article_cat='{$category}' and article_sub_cat='{$subcategory}'");
		return $query->result();
	}
	
	public function getDetailArticle($article_id)
	{
		$this->load->database();
		$query=$this->db->query("select * from article where article_id='{$article_id}'");
		return $query->result();
	}
	
	public function getCommentArticle($article_id)
	{
		$this->load->database();
		$query=$this->db->query("select * from comment_article where article_id='{$article_id}' order by comment_id desc");
		return $query->result();
		
	}
	
	public function getFollow($user_id,$subcategory)
	{
		$this->load->database();
		$query="select * from follow_topic_list where topic = '{$subcategory}'  and user_id='{$user_id}'";
		$res=mysql_query($query);
		
		return mysql_num_rows($res);
		
	}
	
}
