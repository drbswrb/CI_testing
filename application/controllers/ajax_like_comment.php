<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Controller to like a comment on article..
//Also used for dislike the  comment.......
//Param comment_id is use to identify article which user has selected

class Ajax_like_comment extends CI_Controller {
	
	public function index()
	{	
		$this->load->helper('url');		
		$this->load->library('session');		
		$comment_id=$_POST['comment_id'];
		$article_id = $_POST['article_id'];
		$status = $_POST['status'];
		$this->load->helper('url');		
		$this->load->model('md_like_comment');
		if($status == "Like")		
		$this->md_like_comment->likeComment($comment_id);
		else
		$this->md_like_comment->dislikeComment($comment_id);

		$result=$this->md_like_comment->showLikes($comment_id);
		foreach ($result as $row)
		echo $row->likes;
		echo " Likes";
				
	
	}
}
