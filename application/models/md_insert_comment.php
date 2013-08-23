<?php

class Md_insert_comment extends CI_Model {
	
	public function insertComment($article_id,$content,$user)
	{
		$this->load->database();
		$date = date("Y-m-d H-i-s");
		$query = mysql_query("insert into comment_article (comment_text,posted_by,article_id,posted_at) values('{$content}','{$user}',$article_id,'{$date}')");
		
	}
	
}
