<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Controller to update like on particluar article..
//Also used for dislike the  article.......
//Param article_id s use to identify article which user has selected

class Ajax_like extends CI_Controller {
	
	public function index($article_id)
	{
		$this->load->helper('url');		
		$this->load->model('md_like_article');
		$user=$_POST['username'];
		$this->md_like_article->likeArticle($article_id,$user);
		
		$result=$this->md_like_article->showLikes($article_id);
		//return "vishal";
		foreach ($result as $row)
		echo $row->likes;
		//$username=$this->session->userdata('username');
		}
	
	public function disLike($article_id)
	{
		$this->load->helper('url');		
		$this->load->model('md_like_article');
		$user=$_POST['username'];
		$this->md_like_article->dislikeArticle($article_id,$user);
		
		$result=$this->md_like_article->showLikes($article_id);
		foreach ($result as $row)
		echo $row->likes;
		
		}

}
