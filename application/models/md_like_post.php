<?php

class Md_like_article extends CI_Model {

  public function likeArticle($post_id,$user_id)
	{
		$this->load->database();
		$query = mysql_query("update post set post_likes=post_likes+1 where post_id=$post_id;");
		$query=mysql_query("insert into like_post values($post_id,'{$user_id}')");

	}

	public function dislikeArticle($article_id,$user_id)
	{
		$this->load->database();
		$query = mysql_query("update article set post_likes=post_likes-1 where post_id=$post_id;");
		$query=mysql_query("delete from like_post where post_id=$post_id");
	}

	public function showLikes($post_id)
	{
		$this->load->database();
		$query=$this->db->query("select post_likes from post where post_id=$post_id;");
		return $query->result();
	}

	public function getStatus($user_id,$post_id)
	{
		$this->load->database();
		$query="select * from like_post where posted_by='{$user_id}' and post_id=$post_id";
		$res=mysql_query($query);

		return mysql_num_rows($res);
	}

}
