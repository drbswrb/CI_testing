<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//code for updating the group alert in case there is new entry in database,use timestamp for comparing this
class Ajax_getsub_category extends CI_Controller {
	public function index()
	{
		$this->load->helper('url');		
		$this->load->library('session');
		$this->load->database();
		$category_id=$_POST['category_id'];
		$query = $this->db->query("select name from subcategory where cid=$category_id");
		$row1=$query->result();
		//$counter=0;
		foreach($row1 as $row){
			echo "<li><a href=\"#\" class=\"try\">".$row->name."</a></li>";
		}
		//echo $category_id;
	}
	
}