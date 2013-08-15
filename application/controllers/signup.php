<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
// Post variables coming view are Username, Password, Email.
// If the sign-up is failed, controller will redirect to the same page (signup.php) and displays the signup error.
// If the sign-up is successful, controller will redirect to the login page and displays successful login message.

class Signup extends CI_Controller
{
	public function index() {
		$this->load->database();		
		$this->load->helper("form");
		$this->load->library("session");
		$this->load->helper('url');		
		$this->load->view('register');
	}

}

?>
