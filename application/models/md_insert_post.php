<?php
//the function takes in user article parameters and updates it to the 'post' table in the database, i.e. adds the post (based on category) in database
class Md_insert_article extends CI_Model {

  public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function insert_new_post($param,$userid)
	{
		// Assuming that $params is the string containing user info separated by ",".
		// Separate it from "," and add it to the post table.
		// assuming that parameters are in the order:  $post_likes, $post_type, $posted_by, $post_approval, $anonymous, $post_content, $tags,
		$this->load->database();
		$date = date('Y-m-d');
    $array = explode(",",$params);
		$query = mysql_query("INSERT INTO post (`post_likes`, `post_type`, `date_posted`, `posted_by`,`post_approval`,`anonymous`,`post_content`, `tags`)
    VALUES ('".$array[0]."','".$array[1]."','".$date."','".$array[2]."','".$array[3]."','".$array[4]."', '".$array[5]."', '".$array[6]."')");

		if($query)
			return 1;
		else
			return -1;
	}
}
