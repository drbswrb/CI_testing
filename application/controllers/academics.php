<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Academics extends CI_Controller
{
		
	public function course_details() {
 	$this->load->helper('url');
	redirect(base_url().'index.php/articles/index/academics/course_detail','refresh');

	}
}
