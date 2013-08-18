<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//code for updating the group alert in case there is new entry in database,use timestamp for comparing this
class Ajax_sort_content extends CI_Controller {
	//$topic is for which topic tp sort like course_detail,placements etc
	// $type is for it is Article or question
	//$order_by is whether sort by vote or date
	public function index()
	{
		$topic = $_POST['topic'];
		$sorted_by = $_POST['sorted_by'];
		$type = $_POST['type'];
		
	}
	
