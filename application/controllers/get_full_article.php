<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//Controller to show full article content when user selects previous article content
//Param is 'article_id' which will fetch full content ,comment and likes of that article_id
class Get_full_article extends CI_Controller
{
	public function index($article_id) {
		$this->load->helper('url');		
		$this->load->library('session');
		$this->load->model('md_load_article');
		 
		$dataArticle=$this->md_load_article->getDetailArticle($article_id);
		$data['art']=$dataArticle;
		$dataComment=$this->md_load_article->getCommentArticle($article_id);
		$data['com']=$dataComment;
		$data['art_id']=$article_id;
		
		$username=  $this->session->userdata('username');
		$this->load->model('md_like_article');
		$data['valOfLike']=$this->md_like_article->getStatus($username,$article_id);
		
		$numOfLike=$this->md_like_article->showLikes($article_id);
		foreach($numOfLike as $row)
		$data['numOfLike']= $row->likes;
		
		$this->load->view('show_full_article',$data);
      
		
		
	}

}
