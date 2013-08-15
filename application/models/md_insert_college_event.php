<?php

class Md_insert_college_event extends CI_Model {

	public function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function insert_event($params, $userid, $is_intercollege_event) 
	{
		// Assuming that $params is the string containing user info separated by ",".
		// Separate it from "," and add it to the article table.
		// Here note that the input parameter ($params) to the function should follow the sequence
		// (" 'title', 'description', 'venue', start_time', 'end_time', 'date', 'contact_information', 'poster', 'status' :")
		$this->load->database();
		$array = explode(",",$params);

		if(!$is_intercollege_event){	
			$query = mysql_query("INSERT INTO `College_events` (`userid`, `id`, `title`, `description`, `venue`, `start_time`, `end_time`, `date`, `contact_information`, `poster`, `status`) VALUES('".$userid."', NULL, '".$array[0]."','".$array[1]."','".$array[2]."','".$array[3]."','".$array[4]."','".$array[5]."','".$array[6]."','".$array[7]."','0')") or die("error");
		}

		else{
			 $query = mysql_query("INSERT INTO `Intercollege_events` (`userid`, `id`, `title`, `description`, `venue`, `start_time`, `end_time`, `date`, `contact_information`, `poster`, `status`) VALUES('".$userid."', NULL, '".$array[0]."','".$array[1]."','".$array[2]."','".$array[3]."','".$array[4]."','".$array[5]."','".$array[6]."','".$array[7]."','0')") or die("error");

		}

		if($query)
			return 1;

		return -1.;
	}

}		
