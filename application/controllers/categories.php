<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//controller to show details of any topic when user clicked on it
//Loaded view is "view_topic_details

class Categories extends CI_Controller
{
	public function index() {
		$this->load->library("session");
		$this->load->helper('url');		
		  $data['name']= $this->session->userdata('name');
		  $this->load->library('session');
		 if ( $this->session->userdata('login_state') == FALSE ) 
     		 redirect( "/" );
		 else
		 {
		$this->load->view('view_topic_details',$data);
		 }
	}

}

?>
