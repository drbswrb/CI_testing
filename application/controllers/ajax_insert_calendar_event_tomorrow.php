<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//controller to insert comment on particular id .
//This file is receiver of ajax contents coming from main file.

class Ajax_insert_calendar_event_tomorrow extends CI_Controller {
	
	public function index()
	{
		//echo "hello";		
		$this->load->helper('url');		
		$this->load->library('session');
		$this->load->database();
		$username=$_POST['username'];
		$title=$_POST['title'];
		$location=$_POST['location'];
		$time=$_POST['time'];
		$date=date('Y-m-d', strtotime(date('Y-m-d')) + 86400);
		
		$query=mysql_query("insert into calendar (id,username,title,location,time,date,status) values (NULL,'{$username}','{$title}','{$location}','{$time}','{$date}',0)");
		$query1=$this->db->query("select * from calendar where username='{$username}'");
		$calendar=$query1->result();
		
		 		$i=1;
				 foreach ( $calendar as $row) {
			
				if($row->date == date('Y-m-d', strtotime(date('Y-m-d')) + 86400)){
?>
				 
                             	 <div class="span4" style="margin-left:0;margin-top:0;height:60px;border-bottom:1px solid #fff;">
                                	<div class="span1" style="margin-left:0;margin-top:0;height:60px;border-right:1px solid #fff">
                                        	<span style="margin-left:12px;color:#505050;font-family:Calibri, 'Californian FB';font-size:16px;"><?php echo $row->time ?></span>
                                                <?php if($i%2!=0){ ?><img src="<?php echo base_url()?>Assets/images/deadline.png" style="width:30px;height:32px;margin-left:14px;margin-top:2px;"/> <?php } 
						else { ?>
                                        	<img src="<?php echo base_url()?>Assets/images/view_members_calendar.png" style="width:34px;height:25px;margin-left:14px;margin-top:2px;"/>
						<?php } ?>
                                        </div>
                                        <div class="span3" style="margin-left:0;margin-top:5px;height:60px;width:210px;">
                                        	<a href="#" style="text-decoration:none;" id="example" title="<?php echo $row->title ?>" data-placement="right" ><span style="font-family:Calibri, 'Californian FB';font-size:19px;color:#696969;font-weight:bold;margin-left:5px;;"><?php $var = $row->title; 
				     $i=0;
					if(strlen($var)>20){					
					for($i=0;$i<20;$i++)
						echo $var[$i];
					echo "...";
					}
					else		
						echo $var;
				?>
												
</span> </a>
                                                <br>
                                                <span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#696969;margin-left:5px;">At <?php echo $row->location ?></span>
                                        </div>
                                        <div class="span1" style="width:28px;height:60px;margin-left:0;margin-top:0;">
                                        	<div class="span1" style="margin-left:2px;margin-top:10px;width:22px;height:25px;background-color:#fff;">
                                                	<img src="<?php echo base_url();?>Assets/images/following.png" style="width:19px;height:21px;"/>
                                                </div>
                                        </div>
                                	
                                </div> <?php $i++; } } ?>
<div class="span4" style="margin-left:0;margin-top:0;height:60px;border-bottom:1px solid #fff;">
   <br>
                                        	<span style="margin-left:12px;margin-top:200px;color:#ffffff;font-family:Calibri, 'Californian FB';font-size:25px;"><a href="#addCalendarEventToday" data-toggle="modal" style="margin-left:50px;height:200px;color:#696969;font-weight:bold;font-family:Calibri,'Californian FB';font-size:25px; text-decoration:none;text-align:center;">Add New Event</a>
</span>
					

                                        
                                        </div>

</div>
<?php 

}

} 

?>
