<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//code for updating the group alert in case there is new entry in database,use timestamp for comparing this
class Ajax_sort_content extends CI_Controller {
	//$topic is for which topic tp sort like course_detail,placements etc
	// $type is for it is Article or question
	//$order_by is whether sort by vote or date
	public function index()
	{
		$this->load->database();		
		$topic = $_POST['topic'];
		$sorted_by = $_POST['order_by'];
		$type = $_POST['type'];
		$query=$this->db->query("select * from article where article_sub_cat='{$topic}' order by $sorted_by desc");
		$arr = $query->result();
		 
	foreach($arr as $row)
		{
?>

<div class="span11" style="width:800px;height:100px;margin-top:30px;">

                        	<!--<span style="font-family:'Segoe UI';color:#868686;font-size:18px;margin-left:30px;"><?php echo $row->article_content ?></span><br> -->
				<span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#333;margin-left:30px;">

                        <?php $var= $row->article_content;  
				if(strlen($var)>=100)
				{

					$len=100;

					for( $i=0;$i<=$len;$i++)

					echo $var[$i];

					

					echo "...";
				}

				else
					echo $var;

			?>
                         

                        
                       	<br><br>
                        
                        </span>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#8C8C8C;margin-left:30px;line-height:50px;">By: <?php echo $row->posted_by ?> </span> 
			<span style="text-decoration:none;margin-left:80px;color:#960;"> <a href="<?php echo base_url();?>index.php/get_full_article/index/<?php echo $row->article_id ?>" style="text-decoration:none;">Read More</a></span>

                                <img src="<?php echo base_url()?>Assets/images/vote.png" style="width:14px; height:14px;margin-left:150px;margin-top:-5px;"/>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#66669A"><?php echo $row->likes; ?>  Votes</span>
                                 <img src="<?php echo base_url()?>Assets/images/comments.png" style="width:14px; height:14px;margin-left:100px;margin-top:-5px;"/>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#CD6869"><?php $query=mysql_query("select * from comment_article where article_id=$row->article_id");
$n=mysql_num_rows($query);
 echo $n; ?>  Comments</span>
                                
                                <div class="span10" style="height:2px;background-color:#D5D5D5;margin-top:10px;"></div>
                        
                        </div>

<?php } 

	
   }
}
