<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
//Controller to show full article content when user selects previous article content
//Param is 'article_id' which will fetch full content ,comment and likes of that article_id
class Load_full_article extends CI_Controller
{
	public function index() {
		$this->load->view('show_individual_article',$data);

	}

}