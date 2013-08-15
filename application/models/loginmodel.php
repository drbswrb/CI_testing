<?php

class Loginmodel extends CI_Model {

public function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    }
public function check_login($username, $password) {
        
		$en_password = MD5($password);
         $this->load->database();       
        $checklogin = array('email' => $username, 'password' => $password);
        $verifylogin = $this->db->get_where('user_detail',$checklogin);
    
        if ($verifylogin->num_rows() == 1) {
        
            return TRUE;
        }
        else{
            return FALSE;
        }
    } 
public function create_user($userDetails){
	$this->load->database();
	$this->db->insert('user',$userDetails);

}
	}
?>
