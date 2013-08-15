<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller to insert comment on particular id .
//This file is receiver of ajax contents coming from main file.

class Ajax_insert_answer extends CI_Controller {
	
	public function index($question_id)
	{
		$this->load->helper('url');
		$this->load->library('session');		
		$this->load->model('md_insert_answer');
		$this->load->model('md_load_questions');
		$content=$_POST['answer'];
		$user=$_POST['user'];
		$this->md_insert_answer->insertAnswer($question_id,$content,$user); 
		$dataComment=$this->md_load_questions->getAnswer($question_id); ?>
		<?php foreach($dataComment as $row) { ?>
            
              <div class="span2" style="height:90px;margin-left:5px;background-color:#CC8847;width:110px;">&nbsp&nbsp&nbsp&nbsp Posted by<br><br><?php $email = $this->session->userdata('username');
			$query=mysql_query("select * from user_detail where email='{$email}'");
			$row1=mysql_fetch_array($query);		
			$name=$row1['first_name'];
			?>&nbsp&nbsp&nbsp&nbsp <?php echo $name; ?> </div>
              <div class="span7" style="height:90px;margin-left:35px;width:520px;">
                  <div class="span7" style="margin-left:0px;height:90px;background-color:#D0D8DF;width:520px;">
		<span style="margin-left:10px;"><?php echo $row->answer ?> </span>
                  </div>
                  <div class="span7" style="height:20px;margin-left:0px;width:580px;">
                      <span style="font-family:'Open Sans';font-size:14px;color:#D0757629">29 Votes</span>
                      <span style="font-family:'Open Sans';font-size:14px;color:#D0757629;margin-left:100px">10 min ago</span>
                  </div>
              </div>
		<div class="span6" style="margin-left:0;margin-top:0px;background-color:#FFF;height:40px;width:700px;margin-top:20px;">
	    </div>
	    
<?php }	

		}
} 
?>
