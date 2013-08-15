<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->load->helper('url');		
		$this->load->helper('cookie');
		$this->load->library('session');
		 if ( $this->session->userdata('login_state') == FALSE ) 
     		 redirect( "/" );
      else
      {
	      $data['username']= $this->session->userdata('username');
	      $data['name']= $this->session->userdata('name');
		$this->load->model('md_group_function');
	      $data['group']=$this->md_group_function->getAllGroups(  $data['username']);
		$this->load->model('md_calendar_function');
		$data['calendar']=$this->md_calendar_function->getAllEvents($data['username']);
		$this->load->view('user_landing_page.php',$data);	
      }
	}
	
	public function logout()
	{
		$this->load->helper('url');	
		$this->load->helper('cookie');
		$this->load->library('session');
		$this->session->set_userdata('login_state',  FALSE);
		delete_cookie('mycookie');
		redirect("/");
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
