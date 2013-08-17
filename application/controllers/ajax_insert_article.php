<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller to insert comment on particular id .
//This file is receiver of ajax contents coming from main file.

class Ajax_insert_article extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');		
		$this->load->library('session');
		//$this->load->model('Md_insert_group_notification');
		$this->load->database();
		$content=$_POST['content'];
		$title=$_POST['title'];
		$posted_by= $this->session->userdata('username');
		$query=mysql_query("select * from user_detail where email='{$posted_by}'");
		$row=mysql_fetch_array($query);
		$name=$row['first_name'];
		$article_cat = $_POST['article_cat'];
		$article_sub_cat = $_POST['article_sub_cat'];		
		$date = date('Y-m-d H:i:s');
		$query = mysql_query("insert into article (likes, article_cat, article_sub_cat, date_posted, posted_by, article_approval, article_content, article_name) values (0,'{$article_cat}','{$article_sub_cat}','{$date}','{$name}',1,'{$content}','{$title}')");
		

	}

}
