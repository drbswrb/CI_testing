<?php
//the function takes in user article parameters and updates it to the 'article' table in the database, i.e. adds the article in database
class Md_insert_article extends CI_Model {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function insert_new_article($heading,$content,$username)
	{
		// Assuming that $params is the string containing user info separated by ",".
		// Separate it from "," and add it to the article table.
		// assuming that parameters are in the order:  $category_id,$sub_category_id,$userid,$article_header,$article_content
		$this->load->database();
		$date = date('Y-m-d');
		
		$queryUser=mysql_query("Select  display_name from user_detail where email='{$username}'");
		$row=mysql_fetch_array($queryUser);
		$query = mysql_query("INSERT INTO `article` (`article_cat` ,`article_sub_cat` ,`date_posted` ,`posted_by` ,`article_approval` ,`article_content` ,`article_name`) VALUES (
				'academics','course_detail',$date,'{$row['display_name']}',1,'{$content}','{$heading}'
		)");

		if($query)
			return 1;
		else
			return -1;
	}
}
