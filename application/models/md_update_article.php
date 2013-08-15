<?php

class Md_update_article extends CI_Model {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}
	//the function updates any parameters changed by the user into the database
	public function update_article($params,$article_id)
	{
		$this->load->database();
		// Assuming that $params is the string containing user info separated by ",".
		// Separate it from "," and add it to the article table.	

		$array = explode(",",$params);

		$date=date('Y-m-d');
		$query = mysql_query("UPDATE article SET article_cat_id='".$array[1]."',article_sub_cat_id='".$array[2]."',userid='".$array[3]."',date_posted='".$date."',posted_by='".$array[4]."',article_approval = 0 ,article_content='".$array[5]."',article_name='"0"' WHERE article_id='".$article_id."'");


		if($query)
		{
			return 1;
		}


		return -1;


	}
}
