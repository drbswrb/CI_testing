<?php

class Md_insert_answer extends CI_Model {
	
	public function insertAnswer($question_id,$content,$user)
	{
		$this->load->database();
		$date=date('Y-m-d H:i:s');
		$query=mysql_query("select * from user_detail where email='{$user}'");
		$row=mysql_fetch_array($query);		
		$name=$row['first_name'];
		$query = mysql_query("insert into answers (question_id,answer,posted_by,email,posted_date) values($question_id,'{$content}','{$name}','{$user}','{$date}')");
		
	}
	
}
