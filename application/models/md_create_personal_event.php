<?php
class Md_create_personal_event extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function create_event($params,$userid)
	{
		$this->load->database();
		// Assuming that $params is the string containing user info separated by ",".
		// Separate it from "," and add it to the user_detail table.	
		// return value is 1 or -1;
		$array = explode(",",$params);

		$query = mysql_query("INSERT INTO personal_event (`user_id`, `id`, `title`, `venue`, `start_time`, `end_time`, `date`, `description`) VALUES ('".$userid."', NULL ,'".$array[0]."','".$array[1]."','".$array[2]."','".$array[3]."','".$array[4]."','".$array[5]."')");



		if($query)
		{
			return 1;
		}
		else
		{
			return -1;
		}

	}
}
?>
