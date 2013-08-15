<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class LoadQuestions extends CI_Controller
{
		
	public function index() {
 	$this->load->helper('url');
	$this->load->model('md_load_questions');
	$que = $this->md_load_questions->getQuestions();
	$data['que'] = $que;
	$this->load->library('session');
	if ( $this->session->userdata('login_state') == FALSE ) 
     		 redirect( "/" );
      	else{
	         $data['name']= $this->session->userdata('name');
		 $this->load->view('question_view',$data);
      	}	

    	

	}
}

