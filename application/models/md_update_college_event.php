<?php
class Md_update_college_event extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
	}
	public function update_event($params,$id)
	{
		$this->load->database();
		// Assuming that $params is the string containing user info separated by ",".
		// Separate it from "," and add it to the user_detail table.	

		$array = explode(",",$params);

		$query = mysql_query("UPDATE college_events SET title='".$array[0]."',description='".$array[1]."',venue='".$array[2]."',start_time='".$array[3]."',end_time='".$array[4]."',date='".$array[5]."',contac_information='".$array[6]."',poster='".$array[7]."',status='".$array[8]."' WHERE id='".$id."'");



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
