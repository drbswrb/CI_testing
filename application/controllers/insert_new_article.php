

<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//Controller to insert article in database
//Param  category and sub-category is required to identify the article's category and sub-category
class Insert_new_article extends CI_Controller
{
	public function index() {
		$this->load->helper('url');		
		$this->load->library('session');
		$this->load->model('md_insert_article');
		
		$heading = $this->input->post('heading');
		$content = $this->input->post('article_content');
		
		$username= $this->session->userdata('username');
		$value=$this->md_insert_article->insert_new_article($heading,$content,$username);
		if($value==1)
		{
			
			redirect("article_and_question/index/academics/course_detail");	
		}	
		else
		{
			echo $value;	
		}
		
		
	}

}
