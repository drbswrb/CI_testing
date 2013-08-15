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
  </head>
  
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery.slides.min.js');?>"></script>
<script>
	$(document).ready(function(e) {
		 $("#example1").tooltip(); 
		 $("#example2").tooltip();
		  $("#example3").tooltip(); 
		  $("#example4").tooltip();  
		
                $("#academics").click(function(e) {
			$("#acdemics_sub").css({"display":"block"});
			$("#activities_sub").css({"display":"none"});
			$("#placements_sub").css({"display":"none"});
			$("#training_sub").css({"display":"none"});
                        $("#academics").css({"border-bottom":"4px solid #64618C"});
			$("#activities").css({"border-bottom":"0px solid #DF9B9C"});
			$("#placements").css({"border-bottom":"0px solid #5E87A7"});
			$("#training").css({"border-bottom":"0px solid #35B898"});
                });
		
		var j = new Array();
		for (var i=1; i<=16;i++)
  		{
		j[0]=0;
		j[i]=i;
		}
	
		$.each( j,function(i, l){
  		$("#a"+l).mouseover(function(e) {
			$("#a"+l).css({"background-color":"#35B898"});
			$("#"+l).css({"color":"white"});
			$("#post"+l).css({"color":"white"});
			$("#que"+l).css({"color":"white"});
											
		});		
		$("#a"+l).mouseout(function(e) {
			$("#a"+l).css({"background-color":"white"});
			$("#"+l).css({"color":"#AAAACF"});
			$("#post"+l).css({"color":"#AAAAAA"});
			$("#que"+l).css({"color":"#AAAAAA"});
		});

  		});
		
	
		$("#activities").click(function(e) {
			$("#acdemics_sub").css({"display":"none"});
			$("#activities_sub").css({"display":"block"});
			$("#placements_sub").css({"display":"none"});
			$("#training_sub").css({"display":"none"});
                        $("#academics").css({"border-bottom":"0px solid #64618C"});
			$("#activities").css({"border-bottom":"4px solid #DF9B9C"});
			$("#placements").css({"border-bottom":"0px solid #5E87A7"});
			$("#training").css({"border-bottom":"0px solid #35B898"});
                });
		
		$("#placements").click(function(e) {
			$("#acdemics_sub").css({"display":"none"});
			$("#activities_sub").css({"display":"none"});
			$("#placements_sub").css({"display":"block"});
			$("#training_sub").css({"display":"none"});
                        $("#academics").css({"border-bottom":"0px solid #64618C"});
			$("#activities").css({"border-bottom":"0px solid #DF9B9C"});
			$("#placements").css({"border-bottom":"4px solid #5E87A7"});
			$("#training").css({"border-bottom":"0px solid #35B898"});
                });
		
		$("#training").click(function(e) {
			$("#acdemics_sub").css({"display":"none"});
			$("#activities_sub").css({"display":"none"});
			$("#placements_sub").css({"display":"none"});
			$("#training_sub").css({"display":"block"});
                        $("#academics").css({"border-bottom":"0px solid #64618C"});
			$("#activities").css({"border-bottom":"0px solid #DF9B9C"});
			$("#placements").css({"border-bottom":"0px solid #5E87A7"});
			$("#training").css({"border-bottom":"4px solid #35B898"});
                });
        });
	
</script>
<body style="background-color:#F0F2F1">
<div class="span10" style="height:50px;width:100%;margin-top:5px;margin-left:0;">
        	<div class="span2" style="margin-top:5px;margin-left:80px;">
                	<span style="font-family:Calibri, 'Californian FB';color:#1BBC9B;font-size:42px;font-weight:bold;"><a href="<?php echo base_url()?>home" style="text-decoration:none;	">browseboard </a></span>
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

        <img src="<?php echo base_url('Assets/images/205409_466035890074606_183932173_n.jpg');?>"  style="width:90px;height:90px;margin-left:1055px;margin-top:-40px;"/>  	
        </div>
        
        <!-- code to show 4 main menu options ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
        <div class="span12" style="height:50px;margin-top:20px;margin-left:300px;">
        	<div class="span12" style="margin:0;margin-top:20px;height:45px;">
                	<a href="#" style="text-decoration:none;"><span id="academics" style="font-family:'Segoe UI';color:#64618C;font-size:26px;font-weight:bold;border-bottom:4px solid #64618C">Academics</span></a>
                       <a href="#" style="text-decoration:none;"> <span id="activities" style="font-family	:'Segoe UI';color:#CD6667;font-size:26px;font-weight:bold;margin-left:100px;">Activities</span></a>
                        <a href="#" style="text-decoration:none;"><span id="training" style="font-family:'Segoe UI';color:#35B898;font-size:26px;font-weight:bold;margin-left:110px;">Training</span></a>
                        <a href="#" style="text-decoration:none;"><span id="placements" style="font-family:'Segoe UI';color:#5E87A7;font-size:26px;font-weight:bold;margin-left:120px;">Placements</span></a>
                </div>
        </div>
        <!--- start of content div which shows sub-category of each-->
        <div class="span10" style="height:400px;background-color:#E4E2E3;margin-left:360px;margin-top:30px;">
        	<div id="acdemics_sub" class="span9" style="width:730px;margin-left:10px;margin-top:13px;height:195px;background-color:#666797;display:block; ">
<?php
$this->load->database();
$query = mysql_query("select * from subcategory where cid=1");
$n1 = mysql_num_rows($query);

 for($i=1;$i<=$n1;$i++){  ?>	
                	<div class="span2" id="a<?php echo $i ?>" style="width:170px;height:174px;background-color:#fff;margin-left:10px;margin-top:10px">
<?php
$query = mysql_query("select * from subcategory where id='".$i."'");
$row = mysql_fetch_array($query);
$name = $row['name'];
?>
                        	<div class="span5" style="margin-top:30px;margin-left:20px;height:20px;position: relative;"><span  style="font-family:'Segoe UI';font-size:22px;color:#AAAAAA;"><a id="<?php echo $i ?>" href="<?php echo base_url() ?>course_detail" style="text-decoration:none; color:#AAAACF;"><?php echo $name ?> </a></span></div>
<?php

$query = mysql_query("select * from subcategory where name='".$name."'");
$row = mysql_fetch_array($query);
$post = $row['no_of_post'];
$que = $row['no_of_que'];
?> 
                                <div class="span5" style="margin-top:30px;margin-left:50px;height:20px;"><span id="post<?php echo $i ?>" style="font-family:'Segoe UI';font-size:16px;color:#AAAAAA;"><?php echo $post ?> Posts</span><br><span id="que<?php echo $i ?>" style="font-family:'Segoe UI';font-size:16px;color:#AAAAAA;margin-left:-15px;"><?php echo $que ?> Questions</span></div>
                        </div>
  <?php } ?>

</div>                    
                
                <div id="activities_sub" class="span9" style="width:730px;margin-left:10px;margin-top:13px;height:195px;background-color:#666797;display:none; ">
<?php
$query = mysql_query("select * from subcategory where cid=2");
$n2 = mysql_num_rows($query);

 for($i=$n1+1;$i<=$n2+4;$i++){  ?>	

                		<div id="a<?php echo $i ?>" class="span2" style="width:170px;height:174px;background-color:#fff;margin-left:10px;margin-top:10px">
<?php
$query = mysql_query("select * from subcategory where id='".$i."'");
$row = mysql_fetch_array($query);
$name = $row['name'];
?>

                        		<div class="span5" style="margin-top:30px;margin-left:20px;height:20px;">
                                        	<span id="<?php echo $i ?>" style="font-family:'Segoe UI';font-size:22px;color:#AAAACF;"><?php echo $name?></span>						
                                        </div>
<?php
$query = mysql_query("select * from subcategory where name='".$name."'");
$row = mysql_fetch_array($query);
$post = $row['no_of_post'];
$que = $row['no_of_que'];
?>
                                        <div class="span5" style="margin-top:30px;margin-left:50px;height:20px;">
                                        	<span id="post<?php echo $i ?>"style="font-family:'Segoe UI';font-size:16px;color:#AAAAAA;"> <?php echo $post?> Posts</span><br>
                                                <span id="que<?php echo $i ?>" style="font-family:'Segoe UI';font-size:16px;color:#AAAAAA;margin-left:-15px;"> <?php echo $que?> Questions</span>
                                         </div>
                                   </div>
 <?php } ?>
</div>
                                         
                
                <div id="training_sub" class="span9" style="width:730px;margin-left:10px;margin-top:13px;height:195px;background-color:#666797;display:none;">
             
<?php
$query = mysql_query("select * from subcategory where cid=1");
$n3 = mysql_num_rows($query);

 for($i=$n2+5;$i<=$n3+8;$i++){  ?>	

                		<div id="a<?php echo $i ?>" class="span2" style="width:170px;height:174px;background-color:#fff;margin-left:10px;margin-top:10px">
<?php
$query = mysql_query("select * from subcategory where id='".$i."'");
$row = mysql_fetch_array($query);
$name = $row['name'];
?>

                        		<div class="span5" style="margin-top:30px;margin-left:20px;height:20px;">
                                        	<span id="<?php echo $i ?>"style="font-family:'Segoe UI';font-size:22px;color:#AAAACF;"><?php echo $name?></span>						
                                        </div>
<?php
$query = mysql_query("select * from subcategory where name='".$name."'");
$row = mysql_fetch_array($query);
$post = $row['no_of_post'];
$que = $row['no_of_que'];
?>
                                        <div class="span5" style="margin-top:30px;margin-left:50px;height:20px;">
                                        	<span id="post<?php echo $i ?>" style="font-family:'Segoe UI';font-size:16px;color:#AAAAAA;"><?php echo $post?> Posts</span><br>
                                                <span id="que<?php echo $i ?>"style="font-family:'Segoe UI';font-size:16px;color:#AAAAAA;margin-left:-15px;"> <?php echo $que?> Questions</span>
                                         </div>
                                   </div>
 <?php } ?>

                </div>
                
                <div id="placements_sub" class="span9" style="width:730px;margin-left:10px;margin-top:13px;height:195px;background-color:#666797;display:none">
                <?php
$query = mysql_query("select * from subcategory where cid=1");
$n3 = mysql_num_rows($query);

 for($i=$n2+9;$i<=$n3+12;$i++){  ?>	

                		<div id="a<?php echo $i ?>" class="span2" style="width:170px;height:174px;background-color:#fff;margin-left:10px;margin-top:10px">
<?php
$query = mysql_query("select * from subcategory where id='".$i."'");
$row = mysql_fetch_array($query);
$name = $row['name'];
?>



                        		<div class="span5" style="margin-top:30px;margin-left:5px;height:20px;">
                                        	<span id="<?php echo $i ?>" style="font-family:'Segoe UI';font-size:22px;color:#AAAACF;"><?php echo $name?></span>						

                                        </div>
<?php

$query = mysql_query("select * from subcategory where name='".$name."'");

$row = mysql_fetch_array($query);

$post = $row['no_of_post'];

$que = $row['no_of_que'];

?>
                                        <div class="span5" style="margin-top:30px;margin-left:50px;height:20px;">

                                        	<span id="post<?php echo $i ?>"style="font-family:'Segoe UI';font-size:16px;color:#AAAAAA;"><?php echo $post?> Posts</span><br>

                                                <span id="que<?php echo $i ?>"style="font-family:'Segoe UI';font-size:16px;color:#AAAAAA;margin-left:-15px;"> <?php echo $que?> Questions</span>

                                         </div>

                                   </div>

 <?php } ?>

                </div>
        
        	  <img src="<?php echo base_url();?>Assets/images/addtopic1.png" style="width:100px;height:100px;margin-top:60px;margin-left:50px;" title="Add new topic" id="example1" data-placement="top"/>
                <img src="<?php echo base_url();?>Assets/images/askquestion1.png" style="width:100px;height:100px;margin-top:60px;margin-left:80px;"  title="Ask Question" id="example2" data-placement="top"/>
                <img src="<?php echo base_url();?>Assets/images/addevent1.png" style="width:100px;height:100px;margin-top:60px;margin-left:80px;"  title="Add new event" id="example3" data-placement="top"/>
                <img src="<?php echo base_url();?>Assets/images/writepost1.png" style="width:100px;height:100px;margin-top:60px;margin-left:80px;"  title="Write new post" id="example4" data-placement="top"/>
        
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
