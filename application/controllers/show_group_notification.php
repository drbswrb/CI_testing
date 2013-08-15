<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Controller to show notification for that partiucular group_id and also posting the notifications.

class Show_group_notification extends CI_Controller {
	
	public function index($user_id,$group_id)
	{
		$user_id= base64_decode($user_id);
		$group_id= base64_decode($group_id);
		
		$this->load->library('session');
		 if ( $this->session->userdata('login_state') == FALSE ) 
     		 redirect( "/" );
	      else
	      	{
		      $this->load->model('md_group_function');
		      $notification=$this->md_group_function->getNotifications($user_id,$group_id);
		      echo "<h1>Notifications for you:</h1><br>";
		      foreach($notification as $row)
		      echo $row->content."<br>";
	     	 }
	}//end of index
	
	public function sendNotification($user_name,$group_id)
	{
		$content= $_POST['article_content'];
		$user_name=base64_decode($user_name);
		  $this->load->model('md_group_function');
		 $query= $this->md_group_function->postNotification($user_name,$group_id,$content);
		 echo $query;
		
	}
}
