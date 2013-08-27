<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//Controller to get all article and question of particular category and show it on view
//Name of view is 'article_and_question_view' 
//Articles and question depends upon category and its subcategory
class Articles extends CI_Controller
{
	public function index($category,$sub_category) {
		$this->load->library('session');
		$user= $this->session->userdata('username');
		$this->load->helper('url');		
		$this->load->model('md_load_article');
		$this->load->model('md_load_questions');
		$dataArr =$this->md_load_article->getArticle($category,$sub_category);
		//$que = $this->md_load_questions->getQuestions();
		$is_following=$this->md_load_article->getFollow($user,$sub_category);
		$data['arr']=$dataArr;
		//$data['que'] = $que;
		$data['topic'] = $sub_category;
		$data['category']=$category;
		$data['is_following']=$is_following;
		$this->load->library('session');
		 if ( $this->session->userdata('login_state') == FALSE ) 
     		 redirect( "/" );
      else{
	        $data['name']= $this->session->userdata('name');
		
		$this->load->view('article_view',$data);
      }
		//foreach($data as $row)
		//echo $row->article_content."<br>";
		
		
	}

}
