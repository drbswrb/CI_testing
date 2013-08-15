a<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller to insert comment on particular id .
//This file is receiver of ajax contents coming from main file.

class Leave_group extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');		
		$this->load->library('session');
		//$this->load->model('Md_insert_group_notification');
		$this->load->database();
		
		
		$group_id=$_POST['group_id'];
	
		$username= $this->session->userdata('username');
		
		$query = mysql_query("DELETE FROM `group_member` WHERE username_group= '{$username}' and group_id='{$group_id}'");
		echo $query;
		
	}
}
