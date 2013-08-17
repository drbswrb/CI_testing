<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller to insert comment on particular id .
//This file is receiver of ajax contents coming from main file.

class Ajax_insert_question extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');		
		$this->load->library('session');
		$this->load->database();
		$content=$_POST['content'];
		$posted_by= $this->session->userdata('username');
		$query=mysql_query("select * from user_detail where email='{$posted_by}'");
		$row=mysql_fetch_array($query);
		$name=$row['first_name'];
		$question_cat = $_POST['article_cat'];
		$question_sub_cat = $_POST['article_sub_cat'];		
		$date = date('Y-m-d H:i:s');
		$query = mysql_query("insert into questions (question_cat, question_sub_cat, question, email, posted_by, number_of_likes, posted_date) values ('{$question_cat}','{$question_sub_cat}','{$content}','{$posted_by}','{$name}',0,'{$date}')");
		

	}

}
