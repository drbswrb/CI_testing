<?php

class Md_like_comment extends CI_Model {
	
	public function likeComment($comment_id)
	{
		$this->load->database();
		$query = mysql_query("update comment_article set likes=likes+1 where comment_id=$comment_id;");
		
	}
	
	public function dislikeComment($comment_id)
	{
		$this->load->database();
		$query = mysql_query("update comment_article set likes=likes-1 where comment_id=$comment_id;");
	}
	
	public function showLikes($comment_id)
	{
		$this->load->database();
		$query=$this->db->query("select likes from comment_article where comment_id=$comment_id;");
		return $query->result();
	}

	public function likeStatus($username,$comment_id)
	{
		$this->load->database();
		$query = $this->db->query("select * from like_comment where username='{$username}' and comment_id=$comment_id");
		return $query->result();
	}
	
	
}
