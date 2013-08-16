<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Browseboard-Welcome user!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url('Assets/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url('Assets/css/flat-ui.css');?>" rel="stylesheet">
     <link href="<?php echo base_url('Assets/css/accordian.css');?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('Assets/images/favicon.ico');?>">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
	<style type="text/css">
     .btnSocial{
    width:80px;
    position: relative;
    opacity: 0.5;
    -webkit-opacity: 0.5;
    -moz-opacity: 0.5;
    transition: 0.5s ease;
    -webkit-transition: 0.5s ease;
    -moz-transition: 0.5s ease;
    
}
.btnSocial:hover{
    -webkit-transform: scale(1.5,1.5);
    -moz-transform:scale(1.5,1.5);
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
}

</style>
  </head>
  
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery.slides.min.js');?>"></script>

<script>
$(document).ready(function(e) {
	
	
});
</script>

<body style="background-color:#F0F2F1">
<div class="span9" style="height:50px;width:100%;margin-top:5px;margin-left:0;">
        	<div class="span2" style="margin-top:5px;margin-left:80px;">
                	<span style="font-family:Calibri, 'Californian FB';color:#1BBC9B;font-size:42px;font-weight:bold;">browseboard</span>
                </div>
                
                 <div class="span3" style="margin-left:140px;margin-top:16px;">
          		<input type="text" value="" placeholder="Search articles,questions or any news..." class="span3" style="width:500px;height:14px;" />
        	</div>
                 <div class="span1">
          		<a href="#" class="btn btn-large btn-block btn-primary" style="height:31px;margin-left:212px;margin-top:18px;"><img src="<?php echo base_url('Assets/images/glyphicons_027_search.png');?>"/ style="width:20px;height:20px;margin-top:-14px;"></a>
       		 </div>
                 
                    <div class="navbar navbar-inverse">
            		<div class="navbar-inner" style="width:0px;background-color:#fff;margin-top:10px;margin-left:960px;">
              		<div class="container">
                	<div class="nav-collapse collapse">
                 	 <ul class="nav">
                    		<li class="active">
                      <a href="#" style="font-size:20px;">
                       Hi, <?php if($this->input->cookie('mycookie')) 
		       		echo $this->input->cookie('mycookie');
				else
				echo $name;
		       ?>
                        <span class="navbar-unread">3</span>
                      </a>
                      <ul>
                        <li><a href="#">My Profile</a></li>
                        <li>
                          <a href="#">Edit Profile</a>
                         
                        </li>
                         <li><a href="#">Create Group</a></li>
                        <li><a href="<?php echo base_url();?>index.php/home/logout">Log Out</a></li>
                      </ul> <!-- /Sub menu -->
                    </li>
                                     </ul>
                </div><!--/.nav-collapse -->
              </div>
            </div>
          </div>
          </div><!-- end of final name nav-->

        <img src="<?php echo base_url('Assets/images/205409_466035890074606_183932173_n.jpg');?>"  style="width:70px;height:70px;margin-left:1055px;margin-top:-40px;"/>  	
        </div>
        
        <div class="span3" style="height:600px;margin-left:80px;margin-top:20px;">
        		<div class="span2" style="height:30px;background-color:#039;margin-left:15px;width:180px;background-color:#19BC9F;">
                        	<span style="font-family:'Open Sans';color:#fff;font-size:20px;margin-left:35px;">SWITCH TO</span>
                        </div>
                        <a href="<?php echo base_url();?>index.php/loadQuestions/index">
                        <div class="span2" style="height:200px;background-color:#CD6667;margin-left:15px;width:180px;margin-top:5px;">
                        	<span style="color:#fff;font-family:Calibri, 'Californian FB';font-size:24px;">Questions !</span>
                        </div>
                        </a>
                         <div class="span3" style="height:450px;background-color:#669ACC;margin-left:15px;width:180px;margin-top:10px;">
                         		<div class="span3" style="height:80px;margin-left:20px;margin-top:10px;">
                	<span style="font-family:'Segoe UI';font-size:22px;color:#fff;">Other topics</span><br>
                        <span style="font-family:'Segoe UI';font-size:22px;color:#fff;">in Academics</span>
                </div>
                
                <div class="span2" style="height:80px;background-color:#fff;margin-left:14px;margin-top:0px;">
                	<div class="span2" style="height:60px;margin-top:5px;margin-left:10px;">
                        	<span style="font-family:'Segoe UI';font-size:22px;margin-left:20px;">Projects</span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:35px;">24 posts </span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:20px;">32 Questions</span>
                        </div>
                </div>
                
                  <div class="span2" style="height:80px;background-color:#fff;margin-left:14px;margin-top:10px;">
                	<div class="span2" style="height:60px;margin-top:5px;margin-left:10px;">
                        	<span style="font-family:'Segoe UI';font-size:22px;margin-left:0px;">Scholarships</span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:35px;">24 posts </span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:20px;">32 Questions</span>
                        </div>
                </div>
                
                  <div class="span2" style="height:80px;background-color:#fff;margin-left:14px;margin-top:10px;">
                	<div class="span2" style="height:60px;margin-top:5px;margin-left:10px;">
                        	<span style="font-family:'Segoe UI';font-size:22px;margin-left:-5px;">Course Detail</span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:35px;">24 posts </span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:20px;">32 Questions</span>
                        </div>
                </div>
                 <div class="span2" style="height:80px;background-color:#fff;margin-left:14px;margin-top:10px;">
                	<div class="span2" style="height:60px;margin-top:5px;margin-left:10px;">
                        	<span style="font-family:'Segoe UI';font-size:20px;margin-left:-7px;">Teacher Review</span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:35px;">24 posts </span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:20px;">32 Questions</span>
                        </div>
                </div>
                         
             </div><!-- end of red color div-->
                        
        </div><!-- end of right div -->
        <!--div for middle section-->
        <div class="span10" style="height:705px;background-color:#fff;margin-top:20px;margin-left:-15px;width:750px;">
        		<div class="span11" style="height:100px;background-color:#66669A;width:750px;margin-left:0">
                        	<div class="span1" style="height:30px;margin-top:20px;margin-left:35px;">
                			<span style="font-family:'Segoe UI';font-size:20px;color:#fff">Added</span><br>
                			<span style="font-family:'Segoe UI';font-size:20px;color:#fff;margin-left:18px;">by</span>
                		</div>
               			 <div class="span1" style="height:50px;background-color:#600;margin-top:20px;margin-left:4px;">
                		</div>
                                <div class="span1" style="height:30px;margin-top:25px;margin-left:10px;">
                			<span style="font-family:'Segoe UI';font-size:15px;color:#fff">Vishal</span><br>
                			<span style="font-family:'Segoe UI';font-size:15px;color:#fff;margin-left:0px;">Kumar</span>
               		       </div>
                               <div class="span5" style="height:40px;margin-top:15px;margin-left:25px;">
                			<span style="font-family:'Segoe UI';font-size:28px;color:#fff;">PREVIOUS YEARS PAPERS</span>
                                        <span style="font-family:'Segoe UI';font-size:22px;color:#fff;margin-left:50px;line-height:50px;">39 Posts</span>
                                         <span style="font-family:'Segoe UI';font-size:13px;color:#fff;margin-left:20px;">Sort by - Dates/<span style="color:#19BC9F">Votes</span></span>
                		</div>
                                 <div class="span1" style="width:85px;height:20px;margin-top:24px;margin-left:5px;">
                			<span style="font-family:'Open Sans';font-size:12px;color:#CED2ED;">34 following</span>
               			 </div>
                                
                                    <div class="span1" style="width:90px;height:20px;background-color:#1BBC9B;margin-top:-25px;margin-left:630px;">
                			<span style="font-family:'Segoe UI';font-size:14px;color:#fff;margin-left:10px;">Follow topic</span>
               			 </div>
			<div class="span11" style="margin-top:32px;margin-left:0px;height:605px;width:750px;overflow-y:scroll;overflow-x:hidden;display:block;">            			
			<!--<div class="span11" style="width:800px;height:380px;margin-left:0px;margin-top:10px;">
			<?php $i=0; ?>
			<?php foreach($que as $row) {
			$i++; 
			$query = mysql_query("select * from answers where question_id = '{$row->question_id}'");
			$ans = mysql_num_rows($query);
			?>		
                	<div class="span6" style="width:800px;height:100px;margin-top:30px;">
                        	<span style="font-family:'Segoe UI';color:#868686;font-size:18px;"><?php echo $i ?>) <?php echo $row->question ?></span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#8C8C8C;margin-left:30px;line-height:50px;">Asked By: <?php echo $row->posted_by ?></span>
                                <img src="<?php echo base_url()?>Assets/images/vote.png" style="width:14px; height:14px;margin-left:420px;margin-top:-5px;"/>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#66669A"><?php echo $row->number_of_likes ?> likes</span>
                                 <img src="<?php echo base_url()?>Assets/images/comments.png" style="width:14px; height:14px;margin-left:50px;margin-top:-5px;"/>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#CD6869"><?php echo $ans ?> Answers</span>
                                
                                <div class="span9" style="height:2px;background-color:#D5D5D5;margin-top:10px;"></div>
                        
                        </div>
	<?php } ?>
			</div>             
                           </div> 
	<div class="span11" style="margin-top:32px;margin-left:0px;height:400px;width:750px;overflow-y:scroll;overflow-x:hidden;display:block;"> -->
	<div class="span12" id="mini-container" style="height:800px;width:100%;margin-top:0px;margin-left:-20px;"> 
<!--
<?php 
	foreach($arr as $row)
		{
?>
 	<div class="span4" style="min-height:190px;background-color:#fff;margin-top:20px;border-radius:10px;">
        	<div class="span4" style="height:20px;margin-left:0;margin-top:5px;">
                	<span style="font-family:Calibri, 'Californian FB';font-size:20px;color:#1ABC9C;margin-left:10px;"> 
				<?php echo $row->article_name  ?>
                        </span>
                </div>
                
                <div class="span4" style="min-height:20px;margin-left:2px;;margin-top:8px;">
                	<span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#333;margin-left:3px;">
                        <?php $var= $row->article_content;  
				if(strlen($var)>=170)
				{
					$len=rand(60,170);
					for( $i=0;$i<=$len;$i++)
					echo $var[$i];
					
					echo "...";
				}
				else
					echo $var;
			?>
                         
                        
                       	<br><br>
                        <a href="<?php echo base_url();?>index.php/load_full_article/index/" style="text-decoration:none;float:right;margin-right:5px;color:#960;">Read  More</a>
                        </span>
                </div>

                   </div> 
        <?php } ?> !-->
<?php 
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
				<span  style="text-decoration:none;margin-left:80px;color:#960;"><a href="<?php echo base_url();?>index.php/get_full_article/index/<?php echo $row->article_id ?>" style="text-decoration:none;">Read  More</a></span>

                                <img src="<?php echo base_url()?>Assets/images/vote.png" style="width:14px; height:14px;margin-left:150px;margin-top:-5px;"/>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#66669A">32  Votes</span>
                                 <img src="<?php echo base_url()?>Assets/images/comments.png" style="width:14px; height:14px;margin-left:100px;margin-top:-5px;"/>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#CD6869">16  Comments</span>
                                
                                <div class="span10" style="height:2px;background-color:#D5D5D5;margin-top:10px;"></div>
                        
                        </div>
<?php } ?>
        </div>
	</div>
	</div>
	</div>
        <!-- div for right side dock and navigation-->
            <div class="span1" style="height:250px;background-color:#E2E3DD;margin-top:20px;width:75px;">
         	<img src="<?php echo base_url()?>Assets/images/writepost.png" />
                <img src="<?php echo base_url()?>Assets/images/addtopic.png" style="margin-top:-15px;"/>
                <img src="<?php echo base_url()?>Assets/images/addevent.png" style="margin-top:-15px;"/>
                <img src="<?php echo base_url()?>Assets/images/askquestion.png" style="margin-top:-15px;"/>

         </div>
        <!-- div for widjets-->
          <div class="span1" style="height:350px;background-color:#E2E3DD;width:75px;margin-top:275px;margin-left:-75px;">
         	<div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                	<img src="<?php echo base_url()?>Assets/images/Academics_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                </div>
                 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/Activities_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
                  <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/Placement_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
                 
                   <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/Training_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
                 
                 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/lostandfound_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>

         </div>
        
       
     
     
     
     
     
     
     <script src="<?php echo base_url(); ?>Assets/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/jquery.dropkick-1.0.0.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/custom_checkbox_and_radio.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/custom_radio.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/jquery.tagsinput.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/jquery.placeholder.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/application.js"></script>
     <script src="<?php echo base_url(); ?>Assets/js/bootstrap-transition.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-alert.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-modal.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-dropdown.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-scrollspy.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-tab.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-popover.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-button.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-collapse.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-carousel.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/bootstrap-typeahead.js"></script>
  <script src="<?php echo base_url(); ?>Assets/js/jquery.slides.min.js"></script>
      
 </body>
