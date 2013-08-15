<?php 

class Sign_up_selection extends CI_Controller{
	
	public function index()    {
		$this->load->helper('url');
		$this->load->library('session');
		 if ( $this->session->userdata('login_state') == FALSE ) 
		 $this->load->view('sign_up_selection_view.php');
     		
		 else
		      {
			    redirect( "welcome" );
		      }
	}
	
	
}
	
	
?>