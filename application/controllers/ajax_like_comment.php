<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Controller to like a comment on article..
//Also used for dislike the  comment.......
//Param comment_id is use to identify article which user has selected

class Ajax_like_comment extends CI_Controller {
	
	public function index()
	{	
		$comment_id=$_POST['comment_id'];
		echo $comment_id;
	}
}