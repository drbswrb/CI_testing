<?php

class Md_like_article extends CI_Model {
	
	public function likeArticle($article_id,$user_id)
	{
		$this->load->database();
		$query = mysql_query("update article set likes=likes+1 where article_id=$article_id;");
		$query=mysql_query("insert into like_article values($article_id,'{$user_id}')");
		
	}
	
	public function dislikeArticle($article_id,$user_id)
	{
		$this->load->database();
		$query = mysql_query("update article set likes=likes-1 where article_id=$article_id;");
		$query=mysql_query("delete from like_article where article_id=$article_id");
	}
	
	public function showLikes($article_id)
	{
		$this->load->database();
		$query=$this->db->query("select likes from article where article_id=$article_id;");
		return $query->result();
	}
	
	public function getStatus($user_id,$article_id)
	{
		$this->load->database();
		$query="select * from like_article where posted_by='{$user_id}' and article_id=$article_id";
		$res=mysql_query($query);
		
		return mysql_num_rows($res);
	}
	
}
