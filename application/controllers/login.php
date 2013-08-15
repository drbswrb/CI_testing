<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// Post Variables coming from login view are 'Username' and 'Password'.
// If the login is failed controller will redirect to the same page (login.php) showing login  error.
// If the login is successful, conroller will redirect to the view of user_landing page. (Path is not specified as we don't have view.)


class Login extends CI_Controller{
		
	public function index()    {

		$this->load->library('form_validation');
		$this->load->helper('form');	
		$this->load->helper('url');		
		$this->load->library('session');
		if ( $this->session->userdata('login_state') == TRUE ) 
     		 redirect( "/index.php/home" );
		$this->load->view('login_view');
		
	}
	public function validate(){
			$this->load->library('session');
			$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->helper('cookie');
			$this->form_validation->set_rules('Username', 'Username','required|trim');
			$this->form_validation->set_rules('Password', 'Password','required|trim');

		if ($this->form_validation->run() == FALSE) {

			$errors = validation_errors();
			$this->session->set_flashdata('login_error', $errors);				
			redirect('login', 'refresh');
		}		
		else{			
			
			$this->load->model('md_login_authent');
			$username = $this->input->post('Username');
			$password = $this->input->post('Password');
			$remember=$this->input->post('remember');
			$this->load->database();
			$query = mysql_query("select * from user_detail where email = '".$username."'");
			$row = mysql_fetch_array($query);
			$name = $row['first_name'];
			$data['username'] = $username;
			$data['remember']=$remember;
			$data['name'] = $name;
			
			
			if($this->md_login_authent-> check_user_authentication($username,$password,'vis')!=-1)
			{
				
						
				//redirect user to view
				$this->session->set_userdata('login_state',  TRUE);
				$this->session->set_userdata('username',  $username);
				$this->session->set_userdata('name',  $name);
				//$this->load->view('user_landing_page', $data);  // Write the path of view, where user should redirect after successfull login. 
				redirect("index.php/home");
				
			}

			else {
				$this->session->set_userdata('login_state',  FALSE);
				$data['error'] = $this->session->set_flashdata('login_error', "Invalid Username or Password!");
				redirect('');
				}
			}            
		}
	}


