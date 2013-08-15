﻿<!DOCTYPE html>
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
    <link href="<?php echo base_url()?>Assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />
	<style>
	#colc{
    position:relative;
    }
    #colc a{
    color:#000;
    display:inline-block;
    width:180px;
   
    }
    #colc a:hover{
    color:#fff;
    background:#1abc9c;
    }
	
	
	.btnSocial{
    width:50px;
    position: relative;
    opacity: 1;
    -webkit-opacity: 1;
    -moz-opacity: 1;
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
	
	
	.btn.btn-primary1{
    background-color: rgb(102, 154, 204); }
    .btn.btn-primary1:hover, .btn.btn-primary:focus {
      background-color:rgb(128, 193, 255); }
    .btn.btn-primary1:active, .btn.btn-primary.active {
      background-color: #16a085; }
	  
	  .btn.btn-primary2{
    background-color:rgb(205, 102, 103); }
    .btn.btn-primary2:hover, .btn.btn-primary:focus {
      background-color:rgb(255, 144, 145); }
    .btn.btn-primary2:active, .btn.btn-primary.active {
      background-color: #16a085; }
	  
	  .btn.btn-primary3{
    background-color:rgb(102, 102, 154); }
    .btn.btn-primary3:hover, .btn.btn-primary:focus {
      background-color:rgb(149, 149, 201); }
    .btn.btn-primary3:active, .btn.btn-primary.active {
      background-color: #16a085; }
	  
	  
    </style>

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <script type="text/javascript" src="<?php echo base_url('Assets/jquery_002.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/jquery.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/jquery_003.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery.slides.min.js');?>"></script>
<script src="<?php echo base_url();?>Assets/css/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
$(function ()  {
	 $("#example").tooltip(); 
	 $("#example2").tooltip(); 
	 $("#example3").tooltip(); 
	 $("#example4").tooltip(); 
	 $("#example5").tooltip(); 
	 $("#example6").tooltip(); 
	 $("#example7").tooltip(); 
	 $("#example8").tooltip(); 
	 $("#example9").tooltip(); 
	 $("#example10").tooltip(); 
	 $("#example11").tooltip(); 
	 $("#example12").tooltip(); 
	 $("#example13").tooltip(); 
	 $("#example14").tooltip(); 
	 $("#example15").tooltip();
	 $("#example16").tooltip();
	 $("#example17").tooltip();
	 $("#example18").tooltip();
	 $("#example19").tooltip();
	 $("#example20").tooltip();
	 $(window).load(function(){
            $("#today_event_window").mCustomScrollbar();
	    $("#tomorrow_event_window").mCustomScrollbar();
        });
}
);
</script>
<script>
$(document).ready(function() {
	 
     
	 $("#add_event_today").click(function(e) {
	var username = "<?php echo $username; ?>";
	var title = $("#event_title_today").val();
	var location=$("#event_location_today").val();
	var time=$("#event_time_today").val();
	//alert("hello");
    $.ajax(
     {
      type:"POST",
      url:"<?php echo base_url()?>index.php/ajax_insert_calendar_event_today",
      cache:false,
      data:"username="+username+"&title="+title+"&location="+location+"&time="+time,
      success: function(html){
	$("#addedSuccessfully").css({"display":"block"});
	$("#today_event_window").html(html);
	$("#today_event_window").mCustomScrollbar();
	//$("#addCalendarEventToday").css({"display":"none"});
      }
      
      
     });
});
    $("#add_event_tomorrow").click(function(e) {
	var username = "<?php echo $username; ?>";
	var title = $("#event_title_tomorrow").val();
	var location=$("#event_location_tomorrow").val();
	var time=$("#event_time_tomorrow").val();
	//alert("hello");
    $.ajax(
     {
      type:"POST",
      url:"<?php echo base_url()?>index.php/ajax_insert_calendar_event_tomorrow",
      cache:false,
      data:"username="+username+"&title="+title+"&location="+location+"&time="+time,
      success: function(html){
	$("#addedSuccessfully").css({"display":"block"});
	$("#tomorrow_event_window").html(html);
	$("#tomorrow_event_window").mCustomScrollbar();
	//$("#addCalendarEventToday").css({"display":"none"});
      }
      
      
     });
    
  });
 
	$('#accordion2').accordionza({
		autoPlay: false,
		autoRestartDelay: 3000,
		
		onSlideClose: function() {
			//this.children('p').stop(true).animate({left: 320, opacity: 0}, 500);
			this.children('p').stop(true)
				.filter(':eq(0)').animate({left: 320, opacity: 0}, 500).end()
				.filter(':eq(1)').animate({left: 320, opacity: 0}, 500).end()
				.filter(':eq(2)').animate({left: 320, opacity: 0}, 500).end()
				.filter(':eq(3)').animate({left: 320, opacity: 0}, 500).end()
				.filter(':eq(4)').animate({left: 320, opacity: 0}, 500).end()
				.filter(':eq(5)').animate({left: 320, opacity: 0}, 500).end()
				.filter(':eq(6)').animate({top: 420, opacity: 0}, 500).end()
				.filter(':eq(7)').animate({top: 420, opacity: 0}, 500).end()
				.filter(':eq(8)').animate({top: 420, opacity: 0}, 500).end()
				
				this.children('img').stop(true)
				.filter(':eq(0)').animate({top: 120}, 500).end()
				
			
		},
		onSlideOpen: function() {
			var properties = {left: 142, opacity: 1};
			var propertiesTwo={top: 302,opacity: 1};
			var propertiesThree={left: 125,opacity: 1};
			var duration = 300;
			var easing = 'easeOutCirc';
			this.children('p').stop(true)
				.filter(':eq(0)').animate({opacity: 0}, 000).animate(propertiesThree, duration, easing).end()
				.filter(':eq(1)').animate({opacity: 0}, 250).animate(properties, duration, easing).end()
				.filter(':eq(2)').animate({opacity: 0}, 500).animate(properties, duration, easing).end()
				.filter(':eq(3)').animate({opacity: 0}, 750).animate(properties, duration, easing).end()
				.filter(':eq(4)').animate({opacity: 0}, 1000).animate(properties, duration, easing).end()
				.filter(':eq(5)').animate({opacity: 0}, 1250).animate(properties, duration, easing).end()
				.filter(':eq(6)').animate({opacity: 0}, 1500).animate(propertiesTwo, duration, easing).end()
				.filter(':eq(7)').animate({opacity: 0}, 1750).animate(propertiesTwo, duration, easing).end()
				.filter(':eq(8)').animate({opacity: 0}, 1750).animate(propertiesTwo, duration, easing);
				
				this.children('img').stop(true)
				.filter(':eq(0)').animate({top: 20}, 500).end()
				
				
		},
		slideDelay: 300000,
		slideEasing: 'easeOutCirc',
		slideSpeed: 250,
		slideTrigger: 'mouseover',
		slideWidthClosed: 160
	});

  

});
  
  
</script>

<script>

$(document).ready(function(e) {
        $("#course_detail").click(function(e) {
                alert('clicked');
        });
});
</script>
  <body style="overflow-x:hidden;background-color:#F1F2F2;">
	<?php 
		if(isset($_POST['remember']))
		{
			if($remember==1)
		{
			$cookie = array(
				    'name'   => 'mycookie',
				    'value'  => $username,
				    'expire' => 86500,
				  
				    'secure' => FALSE
				);

				$this->input->set_cookie($cookie); 
		}
		}
		
	
	
	
	?>
  	<div class="span10" style="height:50px;width:100%;margin-top:5px;margin-left:0;">
        	<div class="span2" style="margin-top:5px;margin-left:80px;">
                	<span style="font-family:Calibri, 'Californian FB';color:#1BBC9B;font-size:42px;font-weight:bold;">browseboard</span>
                </div>
                
                 <div class="span3" style="margin-left:140px;margin-top:16px;">
          		<input type="text" value="" placeholder="Search articles,questions or any news..." class="span3" style="width:500px;height:14px;" />
        	</div>
                 <div class="span1">
          		<a href="#" class="btn btn-large btn-block btn-primary" style="height:31px;width:50px;margin-left:225px;margin-top:18px;"><img src="<?php echo base_url('Assets/images/glyphicons_027_search.png');?>"/ style="width:20px;height:20px;margin-top:-18px;"></a>
       		 </div>
                 
                    <div class="navbar navbar-inverse">
            <div class="navbar-inner" style="width:0px;background-color:#fff;margin-top:10px;margin-left:960px;">
              <div class="container">
                <div class="nav-collapse collapse">
                  <ul class="nav">
                    <li class="active">
                      <a href="#" style="font-size:16px;line-height:20px;">
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

        <img src="<?php echo base_url('Assets/images/205409_466035890074606_183932173_n.jpg');?>"  style="width:70px;height:70px;margin-left:1070px;margin-top:-40px;"/>  	
        </div>
  	<div class="span12" style="margin-left:80px;margin-top:20px;width:90%;">
        
        	 <!-- Strart of accordian -->
                <div class="span11" style="height:400px;margin-left:10px;">
                	<ul style="overflow: hidden; position: relative;" id="accordion2">
				<li class="" style="position: absolute; top: 0px; width: 420px; height: 160px; left: 0px;background-color:#66669A;">
					<img src="<?php echo base_url('Assets/images/academics.png');?>" style="position:absolute;margin-left:10px;top:110px;width:100px;height:150px"/>
                                        <p style="left: 320px; opacity: 0;top:40px;" ><a href="<?php echo base_url(); ?>categories" style="text-decoration:none;"><span style="font-family:calibri;font-size:38px;color:#fff;">Academics</span></a></p>
					<p style="left: 320px; opacity: 0;top:100px;" ><a href="<?php echo base_url();?>index.php/articles/index/academics/course_detail" style="text-decoration:none;"><span style="font-family:'calibri';font-size:18px;color:#fff;">Course Details</span></a></p>
					<p  style="left: 320px; opacity: 0;top:145px;"><a href="<?php echo base_url();?>index.php/articles/index/academics/teacher_reviews" style="text-decoration:none;"><span style="font-family:'calibri';font-size:18px;color:#fff;">Teacher Reviews</span></a></p>
                                        <p style="left: 320px; opacity: 0;top:190px;"><a href="<?php echo base_url();?>index.php/articles/index/academics/scholarships" style="text-decoration:none;"><span style="font-family:'calibri';font-size:18px;color:#fff;">Scholarships</span></a></p>
                                         <p style="left: 320px; opacity: 0;top:235px;"><a href="<?php echo base_url();?>index.php/articles/index/academics/projects" style="text-decoration:none;"><span style="font-family:'calibri';font-size:18px;color:#fff;">Projects</span></a></p>
                                          <p style="left: 320px; opacity: 0;top:280px;width:200px;"><a href="<?php echo base_url();?>academics/course_detail" style="text-decoration:none;"><span style="font-family:'calibri';font-size:18px;color:#fff;"></span></a></p>
					<p class="uni" style="left:140px;top:420px;opacity:0;"><span style="font-family:calibri;color:#fff;font-size:18px;">24</span><br><span style="font-family:calibri;color:#fff;font-size:15px;margin-left:-15px;">articles</span></p>
                                       <p class="uni" style="left:240px;top:420px;opacity:0;"><span style="font-family:calibri;color:#fff;font-size:18px;">16</span><br><span style="font-family:calibri;color:#fff;font-size:15px;margin-left:-19px;">Questions</span></p>
				</li>
				<li class="slide_opened" style="position: absolute; top: 0px; width: 420px; height: 160px; left: 0px;background-color:#CD6667;">
					<img src="<?php echo base_url('Assets/images/activity.png');?>" style="position:absolute;margin-left:10px;top:110px;width:100px;height:150px"/>
                                        <p  style="left: 320px; opacity: 0;top:40px;" ><a href="<?php echo base_url(); ?>categories" style="text-decoration:none;"><span style="font-family:calibri;font-size:38px;color:#fff;">Activities</span></a></p>
					<p  style="left: 320px; opacity: 0;top:100px;"><span style="font-family:'calibri';font-size:18px;color:#fff;">Boards and Clubs</span></p>
					<p  style="left: 320px; opacity: 0;top:80px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">College Fests</span></p>
                                        <p style="left: 320px; opacity: 0;top:125px;width:200px"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">Politics and PORs</span></p>
                                        <p style="left: 320px; opacity: 0;top:167px;width:200px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">Current rankings</span></p>
                                        <p style="left: 320px; opacity: 0;top:190px;width:200px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;"></span></p>
					<p class="uni" style="left:140px;top:420px;opacity:0;"><span style="font-family:calibri;color:#fff;font-size:18px;">24</span><br/><span style="font-family:calibri;color:#fff;font-size:15px;margin-left:-15px;">Articles</span></p>
                                        <p class="uni" style="left:240px;top:420px;opacity:0;"><span style="font-family:calibri;color:#fff;font-size:18px;">16</span><br><span style="font-family:calibri;color:#fff;font-size:15px;margin-left:-19px;">Questions</span></p>
				</li>
				<li class="" style="position: absolute; top: 0px; width: 420px; height: 160px; left: 480px;background-color:#1BBC9B">
					<img src="<?php echo base_url('Assets/images/training.png');?>" style="position:absolute;margin-left:10px;top:110px;width:100px;height:150px"/>
                                        <p  style="left: 320px; opacity: 0;top:40px;" ><a href="<?php echo base_url(); ?>categories" style="text-decoration:none;"><span style="font-family:calibri;font-size:38px;color:#fff;">Training</span></a></p>
					<p  style="left: 320px; opacity: 0;width:200px;top:100px;"><span style="font-family:'calibri';font-size:18px;color:#fff;">Where To Apply ?</span></p>
					<p  style="left: 320px; opacity: 0;top:80px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">How to  Apply ?</span></p>
                                        <p style="left: 320px; opacity: 0;top:125px;width:200px"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">Internship Reviews</span></p>
                                        <p style="left: 320px; opacity: 0;top:167px;width:200px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">General Rules</span></p>
                                        <p style="left: 320px; opacity: 0;top:190px;width:200px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;"></span></p>
					<p class="uni" style="left:140px;top:420px;opacity:0;"><span style="font-family:calibri;color:#fff;font-size:18px;">32</span><br><span style="font-family:calibri;color:#fff;font-size:15px;margin-left:-20px;">Articles</span></p>
                                        <p class="uni" style="left:240px;top:420px;opacity:0;"><span style="font-family:calibri;color:#fff;font-size:18px;">25</span><br><span style="font-family:calibri;color:#fff;font-size:15px;margin-left:-20px;">Questions</span></p>
				</li>
                                <li class="" style="position: absolute; top: 0px; width: 420px; height: 160px; left: 480px;background-color:#669ACC">
					<img src="<?php echo base_url('Assets/images/placements.png');?>" style="position:absolute;margin-left:10px;top:110px;width:100px;height:150px"/>
                                        <p  style="left: 320px; opacity: 0;top:40px;" ><a href="<?php echo base_url(); ?>categories" style="text-decoration:none;"><span style="font-family:calibri;font-size:38px;color:#fff;">Placement</span></a></p>
					<p  style="left: 320px; opacity: 0;width:200px;top:100px;"><span style="font-family:'calibri';font-size:18px;color:#fff;">Previous Statistics</span></p>
					<p  style="left: 320px; opacity: 0;top:80px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">Latest Updates</span></p>
                                        <p style="left: 320px; opacity: 0;top:125px;width:200px"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">Preparation fundae</span></p>
                                        <p style="left: 320px; opacity: 0;top:167px;width:200px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;">Visiting Companies</span></p>
                                        <p style="left: 320px; opacity: 0;top:190px;width:200px;"><span style="font-family:'calibri';font-size:18px;color:#fff;line-height:150px;"></span></p>
					                    <p class="uni" style="left:140px;top:420px;opacity:0;"><span style="font-family:calibri;color:#fff;font-size:18px;">84</span><br><span style="font-family:calibri;color:#fff;font-size:15px;margin-left:-20px;">Articles</span></p>
                                        <p class="uni" style="left:240px;top:420px;opacity:0;"><span style="font-family:calibri;color:#fff;font-size:18px;">65</span><br><span style="font-family:calibri;color:#fff;font-size:15px;margin-left:-20px;">Questions</span></p>
				</li>
                               
                                
			</ul>
  
               </div>
  		<!-- End of accordian -->
        	<!-- code for sode navigation icon menu -->
        	<div class="span2" style="height:400px;margin-left:10px;width:150px;margin-top:20px;">
                		<div style="height:146px;width:180px;background-color:rgb(226, 226, 226);margin-top:-20px;">
                                	
                                        
                                        <div class="span2" id="colc" style="height:20px;margin-left:0px;margin-top:10px;">
                                                <a href="#" style="text-decoration:none;" title="Total Groups Joined : 2" id="example" data-placement="right" ><img src="<?php echo base_url('Assets/images/my_group.png');?>" style="width:25px;height:19px;margin-right:5px;margin-left:4px;"/><span style="font-family:'calibri';font-size:14px;"><strong>My Groups</strong></span></a>
                                        </div>
                                      <?php  foreach ($group as $row){?>       
                                      <div class="span3" style="height:20px;margin:0;margin-top:4px;width:200px;margin-left:-20px;">
                                        
                                                  <a href="<?php echo base_url();?>index.php/user_group_detail/index/<?php echo base64_encode($row->group_id) ?>/<?php  echo base64_encode($row->group_name);?>" style="text-decoration:none;"><span style="font-family:'calibri';color:rgb(102, 154, 204);font-size:13px;margin-left:55px;"  onmouseover="style.color='rgb(27, 188, 155)'" onmouseout="style.color='rgb(102, 154, 204)'"><strong><?php echo $row->group_name;?></strong></span></a><a href="#"><img src="<?php echo base_url('Assets/images/message1.png');?>" style="width=12px;height:12px;margin-left:30px;margin-bottom:3px;" onmouseover="this.src='<?php echo base_url('Assets/images/message.png');?>'" onmouseout="this.src='<?php echo base_url('Assets/images/message1.png');?>'"/></a>
                                                                                                
                                      </div>
                                     <?php }?>
									  <div class="span2" id="colc" style="height:20px;margin:0;margin-top:8px;">
                        	<a href="#"  style="text-decoration:none;"><img src="<?php echo base_url('Assets/images/join_group.png');?>" style="width:20px;height:19px;margin-right:7px;margin-left:7px;margin-top:-0px;"/><span style="font-family:'calibri';font-size:14px;"><strong>Create Group</strong></span></a>
                        </div>
						<div class="span2" id="colc" style="height:20px;margin:0;margin-top:12px;">
                        	<a href="#"  style="text-decoration:none;"><img src="<?php echo base_url('Assets/images/create_group.png');?>" style="width:20px;height:18px;margin-right:7px;margin-left:7px;margin-top:-0px;"/><span style="font-family:'calibri';font-size:14px;"><strong>Join Group</strong></span></a>
                        </div></div>
                                      <div style="height:105px;width:180px;background-color:rgb(226, 226, 226);margin-top:7px;">
									  
									  <div class="span2" id="colc" style="height:20px;margin:0;margin-top:10px;">
                        	<a href="#"  style="text-decoration:none;"><img src="<?php echo base_url('Assets/images/Blind_Chat.png');?>" style="width:20px;height:19px;margin-right:7px;margin-left:5px;"/><span style="font-family:'calibri';font-size:14px;"><strong>Blind Chat</strong></span></a>
                        </div>
                        <div class="span2" id="colc" style="height:20px;margin:0;margin-top:12px;">
                        	<a href="#"  style="text-decoration:none;"><img src="<?php echo base_url('Assets/images/lostandfound.png');?>" style="width:20px;height:19px;margin-right:7px;margin-left:5px;"/><span style="font-family:'calibri';font-size:14px;"><strong>Lost and Found</strong></span><div style="width:15px;height:15px;border-radius:40px;background-color:rgb(205, 102, 103);margin-left:141px;margin-top:-18px;"><div style="font-family:calibri, 'Californian FB';color:#fff;font-size:13px;margin-left:4px;">1</div></div></a>
                        </div>
                        <div class="span2" id="colc" style="height:20px;margin:0;margin-top:12px;width:140px;">
                        	<a href="#"  style="text-decoration:none;"><img src="<?php echo base_url('Assets/images/outsidecampus.png');?>" style="width:25px;height:19px;margin-right:4px;margin-left:3px;"/><span style="font-family:'calibri';font-size:14px;"><strong>Out Campus</strong></span></a>
                        </div></div>
						<div style="height:105px;width:180px;background-color:rgb(226, 226, 226);margin-top:7px;">
									  <div class="span2" id="colc" style="height:20px;margin:0;margin-top:10px;">
                        	<a href="#" style="text-decoration:none;"><img src="<?php echo base_url('Assets/images/confessions.png');?>" style="width:20px;height:19px;margin-right:7px;margin-left:7px;margin-top:-0px;"/><span style="font-family:'calibri';font-size:14px;"><strong>Confessions</strong></span><div style="width:15px;height:15px;border-radius:40px;background-color:rgb(205, 102, 103);margin-left:141px;margin-top:-18px;"><div style="font-family:calibri, 'Californian FB';color:#fff;font-size:13px;margin-left:4px;">1</div></div></a>
                        </div>
                        <div class="span2" id="colc" style="height:20px;margin:0;margin-top:12px;">
                        	<a href="#"  style="text-decoration:none;"><img src="<?php echo base_url('Assets/images/compliments.png');?>" style="width:20px;height:19px;margin-right:7px;margin-left:5px;"/><span style="font-family:'calibri';font-size:14px;"><strong>Compliments</strong></span><div style="width:15px;height:15px;border-radius:40px;background-color:rgb(205, 102, 103);margin-left:141px;margin-top:-18px;"><div style="font-family:calibri, 'Californian FB';color:#fff;font-size:13px;margin-left:4px;">3</div></div></a>
                        </div>
                        <div class="span2" id="colc" style="height:20px;margin:0;margin-top:12px;">
                        	<a href="#"  style="text-decoration:none;"><img src="<?php echo base_url('Assets/images/complaints.png');?>" style="width:20px;height:19px;margin-right:7px;margin-left:5px;"/><span style="font-family:'calibri';font-size:14px;"><strong>Complaints</strong></span><div style="width:15px;height:15px;border-radius:40px;background-color:rgb(205, 102, 103);margin-left:141px;margin-top:-18px;"><div style="font-family:calibri, 'Californian FB';color:#fff;font-size:13px;margin-left:4px;">7</div></div></a>
                        </div></div>
                        
                                       
                                              	
                </div>
                
                <!-- End of side navigation on upper half -->
                
               
  	</div> <!-- End pf upper portion of page -->
  	
      
        
        <!-- Start of lower half right menu -->
  	<div class="span4" style="height:200px;margin-left:80px;margin-top:0px;width:340px;">
        	
                <div class="span2"  style="height:200px;width:150px;">
                  	  <img src="<?php echo base_url('Assets/images/writepost.png');?>" class="btnSocial" alt="" style="margin-left:20px;width:110px;height:110px;margin-bottom:15px;margin-top:15px;" />
                          <a class="btn btn-primary1 btn-large btn-block" href="#">Write post</a>

                </div>
                <div class="span2"  style="height:200px;width:150px;">
                  	 <img src="<?php echo base_url('Assets/images/addevent.png');?>" class="btnSocial" alt="" style="margin-left:20px;width:110px;height:110px;margin-bottom:15px;margin-top:15px;"/>
                         <a class="btn btn-primary btn-large btn-block" href="#">Add event</a>

                </div>
                
                <div class="span2"  style="height:200px;width:150px;margin-top:30px;">
                  	  <img src="<?php echo base_url('Assets/images/askquestion.png');?>" class="btnSocial" alt="" style="margin-left:20px;width:110px;height:110px;margin-bottom:15px;margin-top:15px;"/>
                          <a class="btn btn-primary2 btn-large btn-block" href="#">Ask questions</a>

                </div>
                <div class="span2"  style="height:200px;margin-top:30px;width:150px;">
                  	  <img src="<?php echo base_url('Assets/images/addtopic.png');?>" class="btnSocial" alt="" style="margin-left:20px;width:110px;height:110px;margin-bottom:15px;margin-top:15px;"/>
                         <a class="btn btn-primary3 btn-large btn-block" href="#">Add topic</a>

                </div>
                
                
        </div>
  	<!-- End of lower half right menu -->
        
        
          <!-- Start of calendar -->
  	<div class="span8" style="height:400px;margin-left:120px;margin-top:15px;width:650px;">
        	<!-- frist div for showing "Today"-->
        	<div class="span4" style="margin-left:0;margin-top:0;height:410px;background-color:#DFDFDF;width:320px;">
                	<div class="span4" style="margin-left:0;margin-top:0;background-color:#66669A;height:60px;border-radius:10px 0 0 0;width:320px;">
                        	<div class="span1" style="margin-left:15px;margin-top:14px;height:20px;">
                                	<img src="<?php echo base_url()?>Assets/images/right_arrow.png"/>
                                </div>
                                
                                <div class="span2" style="margin-left:50px;margin-top:5px;height:20px;">
                                	<span style="font-family:'Open Sans';color:#fff;font-size:18px;">TODAY</span>
                                        <br>
                                        <span style="font-family:'Open Sans';color:#fff;font-size:14px;margin-left:-20px;"><?php echo date("M,d D"); ?></span>
                                </div>
                        </div>
                       	<div id="today_event_window" class="span4" style="margin-left:0;margin-top:0px;height:350px;width:325px;">
                        	<!-- repeating tags-->
				<?php $i=1;
				 foreach ( $calendar as $row) { 
				if($row->date == date('Y-m-d')){
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
</div>
                                 
                <!--end of first div for showing "Today"-->
                
                <!-- Second div for showing "Tommorow"-->
		
                <div class="span4" style="margin-top:0;height:410px;background-color:#DFDFDF;margin-left:10px;width:320px">
                `	<div class="span4" style="margin-left:0;margin-top:-15px;background-color:#66669A;height:60px;border-radius:0 10px 0 0;width:320px;">
                        	<div class="span1" style="float:right;margin-top:14px;height:20px;">
                                	<img src="<?php echo base_url()?>Assets/images/left_arrow.png"/>
                                </div>
                                  
                                <div class="span2" style="margin-left:80px;margin-top:5px;height:20px;">
                                	<span style="font-family:'Open Sans';color:#fff;font-size:18px;">TOMORROW</span>
                                        <br>
                                        <span style="font-family:'Open Sans';color:#fff;font-size:14px;margin-left:0px;"><?php echo date("M,d D", strtotime(date('Y-m-d')) + 86400); ?></span>
                                </div>
               		 </div> 
		<div id="tomorrow_event_window" class="span4" style="margin-left:0;margin-top:0px;height:350px;width:325px;">
                        
			<?php $i=1;
		foreach($calendar as $row){
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
                                        	<span style="margin-left:12px;margin-top:200px;color:#ffffff;font-family:Calibri, 'Californian FB';font-size:25px;"><a href="#addCalendarEventTomorrow" data-toggle="modal" style="margin-left:50px;height:200px;color:#696969;font-weight:bold;font-family:Calibri,'Californian FB';font-size:25px; text-decoration:none;text-align:center;">Add New Event</a>
</span>
					

                                        
                                        </div>

</div>
                         
        	<!-- end of div showing tommorow calendar-->
       </div>
        <!-- End of calendar -->
        
        <!-- start of footer -->
        
        <div class="span11" style="height:55px;margin-left:0px;border-top:1px solid #1ABC9C;margin-top:300px;width:100%; ">
        	<div class="span9" style="height:30px;margin-top:10px;margin-left:120px;">
                	<a href="#" style="text-decoration:none;font-size:16px;letter-spacing:1px;" >About &nbsp;&nbsp;|</a>
                        <a href="#" style="text-decoration:none;font-size:16px;letter-spacing:1px;" >&nbsp;&nbsp;&nbsp;Developers &nbsp;&nbsp;|</a>
                        <a href="#" style="text-decoration:none;font-size:16px;letter-spacing:1px;" >&nbsp;&nbsp;&nbsp;Contact&nbsp;&nbsp;|</a>
                         <a href="#" style="text-decoration:none;font-size:16px;letter-spacing:1px;" >&nbsp;&nbsp;&nbsp;Team Behind &nbsp;&nbsp;|</a>
                         <a href="#" style="text-decoration:none;font-size:16px;letter-spacing:1px;" >&nbsp;&nbsp;&nbsp;Privacy Policy &nbsp;&nbsp;</a>
                </div>
                
                <div class="span3" style="height:20px;margin-top:10px;margin-left:90px;">
                 <span style="font-family:'calibri';font-size:14px;color:#A27A5A">Find us on:</span>
                 <img src="<?php echo base_url(); ?>Assets/images/facebook-icon.png" style="width:30px;height:30px;"/>
                 <img src="<?php echo base_url(); ?>Assets/images/twitter-icon.png" style="width:30px;height:30px;margin-left:0px;"/>
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
      
      
       <div id="signUp" class="modal hide fade" style="width:600px;height:380px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<header style="border-bottom:1px solid #eeeeee">
   		<span style="padding:20px;color:#D2B293;font-size:14px;">Notify Every Member !</span>
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position:relative; right:5px;">×</button>
    	</header>	
        <form action="<?php echo base_url();?>index.php/show_group_notification/sendNotification/<?php echo base64_encode($username);?>/1" method="post">
	
        
        <textarea placeholder="Enter notification content" name="article_content"style="margin-left:20px;margin-top:20px;width:400px;height:200px;" ></textarea>					
                   
             <br>
             <input type="submit" class="btn btn-warning" value="Submit" style="margin-left:20px;"/>      
    	</form>
 </div>

<div id="addCalendarEventToday" class="modal hide fade" style="width:600px;height:320px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<header style="border-bottom:1px solid #eeeeee">
   			<span style="margin-left:150px;padding:20px;color:#696969;font-size:25px;"> Enter Calendar Event:</span>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position:relative; right:5px;">×</button>
    	
</header>
<span>
  <br>
    
  <input type="text" id="event_title_today" style="font-family:Calibri, 'Californian FB';font-size:19px;color:#696969;font-weight:bold;margin-left:5px;width:500px"
	 placeholder="Name of your event"> </input>
  <br>
    <br>
   <input type="text" id="event_location_today" style="font-family:Calibri, 'Californian FB';font-size:19px;color:#696969;font-weight:bold;margin-left:5px;width:500px"
	 placeholder="Location of your event"> </input>
   <br><br>
    <input type="text" id="event_time_today" style="font-family:Calibri, 'Californian FB';font-size:19px;color:#696969;font-weight:bold;margin-left:5px;width:500px"
	 placeholder="Time of your event  (HH:MM)"> </input>
    <br><br>
   <button id="add_event_today" class="btn btn-mini" data-dismiss="modal" style="height:30px;margin-top:5px;margin-left: 10px;width: 100px">Add</button>
</span>
</div>

<div id="addCalendarEventTomorrow" class="modal hide fade" style="width:600px;height:320px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
<header style="border-bottom:1px solid #eeeeee">
   			<span style="margin-left:150px;padding:20px;color:#696969;font-size:25px;"> Enter Calendar Event:</span>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position:relative; right:5px;">×</button>
    	
</header>
<span>
  <br>
    
  <input type="text" id="event_title_tomorrow" style="font-family:Calibri, 'Californian FB';font-size:19px;color:#696969;font-weight:bold;margin-left:5px;width:500px"
	 placeholder="Name of your event"> </input>
  <br>
    <br>
   <input type="text" id="event_location_tomorrow" style="font-family:Calibri, 'Californian FB';font-size:19px;color:#696969;font-weight:bold;margin-left:5px;width:500px"
	 placeholder="Location of your event"> </input>
   <br><br>
    <input type="text" id="event_time_tomorrow" style="font-family:Calibri, 'Californian FB';font-size:19px;color:#696969;font-weight:bold;margin-left:5px;width:500px"
	 placeholder="Time of your event  (HH:MM)"> </input>
    <br><br>
   <button id="add_event_tomorrow" class="btn btn-mini" data-dismiss="modal" style="height:30px;margin-top:5px;margin-left: 10px;width: 100px">Add</button>
</span>
</div>
</body>
 </html>
