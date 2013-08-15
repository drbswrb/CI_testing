<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//Controleller to show full notification, members, discussions of particular group(which user has selected)
//This controller loads view in which all notifications are displayed

class User_group_detail extends CI_Controller{
	
	public function index($group_id,$group_name)
	{
		$group_id=base64_decode($group_id);
		$group_name= base64_decode($group_name);
		
		$this->load->helper('url');		
		$this->load->library('session');
		
		 if ( $this->session->userdata('login_state') == FALSE ) 
     		 redirect( "/" );
      		else
      		{
			$this->load->model('md_group_function');
			$group_member=$this->md_group_function->getGroupMember($group_id,$group_name);
			$data['group_member']=$group_member;
			
			$group_notification=$this->md_group_function->getGroupNotification($group_id,$group_name);
			$data['group_notification']=$group_notification;
			
			$group_discussion=$this->md_group_function->getGroupDiscussion($group_id,$group_name);	
			$data['group_discussion']=$group_discussion;
			
			$data['group_id']=$group_id;
			
			$data['group_name']=$group_name;
			 $data['username']= $this->session->userdata('username');
			
			
			$this->load->view('show_group_detail',$data);
      		}
		
	}
	
	
}
