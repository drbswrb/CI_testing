<?php
class Md_update_personal_event extends CI_Model
{
  public function __construct()
	{
		parent::__construct();
	}
	//this function will update the details of any personal event of a user and only the user can do this
	public function update_event($param,$id)
	{
		$this->load->database();
		// Assuming that $params is the string containing event info separated by ",".
		// Separate it from "," and add it to the personal_event table.	

		$array = explode(",",$params);

		$query = mysql_query("UPDATE personal_event SET title='".$array[2]."',venue='".$array[3]."',start_time='".$array[4]."',end_time='".$array[5]."',date='".$array[6]."',
		description='".$array[7]."' WHERE id='".$array[1]."' and user_id='".$array[0]."'");



		if($query)
		{
			return 1;
		}


		return -1;


	}
	
}
?>
