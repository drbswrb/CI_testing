<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//code for updaring the group alert in case there is new entry in database,use timestamp for comparing this
class Ajax_groupdiscussion_update extends CI_Controller {
	
	public function index()
	{
		$this->load->helper('url');		
		$this->load->library('session');
		$this->load->database();
		$group_id=$_POST['group_id'];
		$timestamp=date('Y-m-d H:i:s');
		$query = $this->db->query("select * from group_discussion where group_id=$group_id order by posted_date_time desc");
		$row1=$query->result();
		$i=0;


		foreach($row1 as $row)
		{
			$email=$row->posted_by_username;
			$query = mysql_query("select * from user_detail where email='{$email}'");
			$row1 =mysql_fetch_array($query);
			$name = $row1['first_name'] . " " . $row1['last_name'];
?>
			<div class="span6 " style="height:50px;margin-left:8px;margin-top:18px;width:520px;">
                                  	
						<div class="span1" style="height:20px;margin-left:0">
                 			<img src="<?php echo base_url()?>Assets/images/user_64.png" style="height:33px;"/>
                        </div>
                        <div class="span6" style="height:15px;margin-top:-23px;margin-left:38px;">
                        	<span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#525252"><?php echo $name ?></span>
                        </div>
                                                 <?php if (($i %2)!=0){$i++;?>
                         <div class="span6" style="height:45px;background-color:#6AC6B4;margin-top:-5px;margin-left:38px;"><div style="color:#fff;font-family:Calibri, 'Californian FB';font-size:16px;margin-left:12px;margin-top:11px"><?php echo $row->discussion;?></div></div>	
                
                 	<?php } else{$i++;?>
                        	   <div class="span6" style="height:45px;background-color:#93AFC9;margin-top:-5px;margin-left:38px;"><div style="color:#fff;font-family:Calibri, 'Californian FB';font-size:16px;margin-left:12px;margin-top:11px"><?php echo $row->discussion;?></div></div>
                        <?php }?>
			</div>
	<?php 	   
		}
		
	}
}
?>
