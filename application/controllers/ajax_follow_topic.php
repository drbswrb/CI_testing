<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//code for follow or unfollow the topic
class Ajax_follow_topic extends CI_Controller {
	public function index()
	{
		$topic=$_POST['topic'];
		$user=$_POST['user'];
		$this->load->database();
		
		$query = mysql_query("insert into follow_topic_list (topic,user_id)  values ('$topic','$user')");
		if($query)
			echo "1";
		else
			echo "-1";
	
		
		
	}
	
	public function remove()
	{
		$topic=$_POST['topic'];
		$user=$_POST['user'];
		$this->load->database();
		
		$query = mysql_query("delete from  follow_topic_list where topic='$topic' and user_id='$user'");
		if($query)
			echo "1";
		else
			echo "-1";
	
		
		
	}
	
}