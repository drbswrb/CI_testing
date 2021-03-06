<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Browseboard-Welcome user!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url('Assets/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url()?>Assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css" />


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
<script src="<?php echo base_url();?>Assets/css/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
 $(window).load(function(){
            $("#alert_window").mCustomScrollbar();
	     $("#discussion_window").mCustomScrollbar();
	  
        });
</script>

<body style="background-color:#F0F2F1">
	<div class="span10" style="height:50px;width:100%;margin-top:5px;margin-left:0;">
        	<div class="span2" style="margin-top:5px;margin-left:80px;">
                	<a href="<?php echo base_url()?>/index.php" style="text-decoration:none"><span style="font-family:Calibri, 'Californian FB';color:#1BBC9B;font-size:42px;font-weight:bold;">browseboard</span></a>
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
                                <a href="#" style="font-size:18px;">
                                Hi, <?php
				                echo "Anshul";
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

        <img src="<?php echo base_url('Assets/images/205409_466035890074606_183932173_n.jpg');?>"  style="width:70px;height:70px;margin-left:1050px;margin-top:-40px;"/>  	
  	</div>
        
        <div class="span12" style="height:70px;margin-top:35px;margin-left:100px;width:100%;margin-left:0;">
        	<div class="span2" style="height:30px;background-color:#CD6667;margin-left:80px;">
                	<div class="span2" style="height:25px;margin-left:4px;margin-top:4px;">
                        	<span style="font-family:'Segoe UI';font-size:15px;color:#fff"><?php echo $group_name ?></span>
                        </div>
                </div>
               <div class="span5"  style="margin-left:0;height:70px;background-color:#1BBC9B;width:550px;margin-left:260px;margin-top: -15px;">
                <div class="span2" style="height:50px;width:110px;background-color:#fff;margin-top:10px;border-radius:3px;margin-left:20px;">
                	<div class="span1" style="height:20px;width:35px;margin-top:5px;margin-left:35px;">
                        	<div class="span1" style="height:25px;width:30px;margin-left:4px;margin-top:0;">
                        		<img src="<?php echo base_url()?>Assets/images/Add_members.png" style="height:25px;width:30px;"/>
                                </div>
                                <a href="#addMembers"  data-toggle="modal">
                                <div class="span1" style="width:100px;height:18px;margin-left:-25px;margin-top:0;">
                                	<span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#686C99">Add Member</span>
                                </div>
                                </a>
                        </div>
                </div>
                <div class="span2" style="height:50px;width:110px;background-color:#fff;margin-top:10px;border-radius:3px;margin-left:20px;">
                	<div class="span1" style="height:20px;width:30px;margin-top:5px;margin-left:35px;">
                        	<div class="span1" style="height:25px;width:30px;margin-left:5px;margin-top:0;">
                        		<img src="<?php echo base_url()?>Assets/images/View_members.png" style="height:25px;width:30px;"/>
                                  </div>
                                     <a href="#viewMembers"  data-toggle="modal">
                                    <div id="view_members" class="span1" style="width:100px;height:18px;margin-left:-28px;margin-top:0;">
                                	<span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#686C99">View Members</span>
                                </div>
                                </a>
                        </div>
                </div>
                <div class="span2" style="height:50px;width:110px;background-color:#fff;margin-top:10px;border-radius:3px;margin-left:20px;">
                	<div class="span1" style="height:20px;width:30px;margin-top:5px;margin-left:35px;">
                        	<div class="span1" style="height:25px;width:30px;margin-left:4px;margin-top:0;">
                        		<img src="<?php echo base_url()?>Assets/images/join_group_blue.png" style="height:25px;width:30px;"/>
                                 </div>
                                 
				 <a href="#joinGroup">
                                 <div class="span1" style="width:100px;height:18px;margin-left:-17px;margin-top:0;">
                                	<span id="joinGroup" style="font-family:Calibri, 'Californian FB';font-size:16px;color:#686C99">Join Group</span>
                                </div>
				</a>
                                 
                        </div>	
                </div>
                <div class="span2" style="height:50px;width:110px;background-color:#fff;margin-top:10px;border-radius:3px;margin-left:20px;">
                	<div class="span1" style="height:20px;width:30px;margin-top:5px;margin-left:35px;">
                        	<div class="span1" style="height:25px;width:30px;margin-left:4px;margin-top:0;">
                        		<img src="<?php echo base_url()?>Assets/images/leave_grooup.png" style="height:25px;width:30px;"/>
                                </div>
				                           
				<a href="#leaveGroup">
				<div class="span1"  style="width:100px;height:18px;margin-left:-22px;margin-top:0;">	 
								
				<span id="leaveGroup" style="font-family:Calibri, 'Californian FB';font-size:16px;color:#686C99">Leave Group<span>
                                
				</div>	
				</a>
				
                        </div>
                </div>
               </div>
                
        </div>
        <div class="span5"  style="height:845px;background-color:#fff;margin-left:70px;margin-bottom:30px;">
      		  <!--blue border-->
        	<div class="span5"  style="margin-left:0;height:50px;background-color:#669ACC;width:380px;margin-right:-5px;">
                	<span style="font-family:'Segoe UI';font-size:21px;color:#fff;margin-left:130px;line-height:50px;">Group Alerts</span>
                </div>
               
                <div id="send_notice" class="span5" style="height:45px;margin-left:8px;margin-top:4px;border:2px solid #669ACC;background-color:#fff;border-radius:5px;width:350px;">
                	<input type="text" style="height:25px;width:270px;margin-top:0px;margin-left:0;border:0px solid #fff" placeholder="Type in and Press enter to send message" id="notification_content"/>
                        <button class="btn btn-mini " id="post_notification">Send</button>
                </div>
                 <div class="span5" id="alert_window" style="height:700px;background-color:#fff;margin-left:0;">
         	 <!-- end blue border-->  
                 <!-- start of repetaing div,don't forget to alternate background color-->
                    <?php $i=0;foreach($group_notification as $row){
			$email=$row->posted_by_username;
			$query = mysql_query("select * from user_detail where email='{$email}'");
			$row1 =mysql_fetch_array($query);
			$name = $row1['first_name'] . " " . $row1['last_name'];						 
?>
                 <div class="span5" style="height:50px;margin-left:8px;margin-top:18px;width:380px;">
              
                 	<div class="span1" style="height:20px;margin-left:0">
                 		<img src="<?php echo base_url()?>Assets/images/user_64.png" style="height:33px;"/>
                        </div>
                        <div class="span5" style="height:15px;margin-top:-23px;margin-left:38px;">
                        	<span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#525252"><?php echo $name ?></span>
                        </div>
                        <?php if (($i %2)!=0){$i++;?>
                         <div class="span4" style="height:45px;background-color:#6AC6B4;margin-top:-5px;margin-left:38px;"><div style="color:#fff;font-family:Calibri, 'Californian FB';font-size:16px;margin-left:12px;margin-top:11px"><?php echo $row->notification;?></div></div>
                
                 	<?php } else{$i++;?>
                        	   <div class="span4" style="height:45px;background-color:#93AFC9;margin-top:-5px;margin-left:38px;"><div style="color:#fff;font-family:Calibri,'Californian FB';font-size:16px;margin-left:12px;margin-top:11px"><?php echo $row->notification;?></div></div>
                        <?php }?>
               
                      </div>
                       <?php }?>
                 </div>
        </div>
        </div>
         <div class="span7" style="height:845px;background-color:#fff;width:550px;margin-left:30px;">
         	  <!--blue border-->
        	<div class="span7" style="margin-left:0;height:50px;background-color:#66669A;width:550px;border-radius:5px;">
                	<span style="font-family:'Segoe UI';font-size:21px;color:#fff;margin-left:200px;line-height:50px;">Group Discussions</span>
                       
           </div>
		
      		  <!--blue border-->
        	
               
         	 <!-- end blue border-->      
                 <div class="span7" id="discussion_window" style="height:700px;background-color:#fff;margin-left:5px;margin-bottom:30px;">
                 <!-- start of repeating dv,don't forget to alternate css-->
                 <?php foreach( $group_discussion as $row){
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
		<?php }?>
                 
         
	</div>
 		    <div id="send_notice" class="span5" style="height:45px;margin-left:10px;margin-top:-14px;border:2px solid #669ACC;background-color:#fff;border-radius:5px;width:510px;">
                	<input type="text" style="height:25px;width:440px;margin-top:0px;margin-left:0;border:0px solid #fff" placeholder="Type in and Press enter to send message" id="discussion_content"/>
                        <button class="btn btn-mini" id="post_discussion">Send</button>
     </div>
</div>
         <div class="span1" style="height:250px;background-color:#E2E3DD;margin-top:-85px;width:75px;margin-left:15px">
         	<img src="<?php echo base_url()?>Assets/images/writepost.png" />
                <img src="<?php echo base_url()?>Assets/images/addtopic.png" style="margin-top:-15px;"/>
                <img src="<?php echo base_url()?>Assets/images/addevent.png" style="margin-top:-15px;"/>
                <img src="<?php echo base_url()?>Assets/images/askquestion.png" style="margin-top:-15px;"/>



         </div>
         
         <div class="span1" style="height:670px;background-color:#E2E3DD;width:75px;margin-top:175px;margin-left:-70px;">
         	<div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                	  <a href="<?php echo base_url()?>/index.php/categories" style="text-decoration:none;" title="Academics" id="acad-tool" data-placement="right" ><img src="<?php echo base_url()?>Assets/images/Academics_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" /></a>
                </div>
                 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
		<a href="<?php echo base_url()?>/index.php/categories" style="text-decoration:none;" title="Activities" id="activity-tool" data-placement="right" >
                 	<img src="<?php echo base_url()?>Assets/images/Activities_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" /> </a>
                 </div>
                  <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
			<a href="<?php echo base_url()?>/index.php/categories" style="text-decoration:none;" title="Placement" id="placement-tool" data-placement="right" >
                 	<img src="<?php echo base_url()?>Assets/images/Placement_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" /> </a>
                 </div>
                 
                   <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
			<a href="<?php echo base_url()?>/index.php/categories" style="text-decoration:none;" title="Training" id="training-tool" data-placement="right" >
                 	<img src="<?php echo base_url()?>Assets/images/Training_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" /> </a>
                 </div>
                 
                 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/lostandfound_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
				 
				 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/Blindchat_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
				 
				 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/calendar_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
				 
				 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/confessions_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
				 
				 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/compliments_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
				 
				 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/complaints_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>
				 
				 <div class="span1" style="height:50px;background-color:#13C299;margin-left:8px;margin-top:10px;border-radius:5px;">
                 	<img src="<?php echo base_url()?>Assets/images/outsidecampus_dock.png" style="height:42px;width:45px;margin-top:5px;margin-left:5px;" />
                 </div>

         </div>
          <script type="text/javascript" src="<?php echo base_url('Assets/jquery.js')?>"></script>
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
      
      <div id="viewMembers" class="modal hide fade" style="width:600px;height:380px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<header style="border-bottom:1px solid #eeeeee">
   		<span style="padding:20px;color:#D2B293;font-size:14px;">All members in this group :</span>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position:relative; right:5px;">×</button>
    </header>	
        
        <div class="modal-body" style="height:380px;">
        	<?php foreach($group_member as $row){?>
                
                	<div class="span3" style="border:1px solid #13C299;margin-left:10px;height:20px;margin-bottom:10px;">
                        	<span style="margin-left:5px;"><?php echo $row->username_group;?></span>
                        </div>
                        
                        
                
                <?php }?>
        </div>
     </div>
     
     
     <div id="addMembers" class="modal hide fade" style="width:600px;height:200px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<header style="border-bottom:1px solid #eeeeee">
   		<span style="padding:20px;color:#D2B293;font-size:14px;">Send invitation to other member  :</span>
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position:relative; right:5px;">×</button>
    </header>	
        
        <div class="modal-body" style="height:200px;">
        	<div class="span6" style="height:200px;margin-left:5px;">
                	<span style="font-family:'Open Sans';font-size:16px;color:#000;">Enter email id of person whom you want to add :</span>
                        <br>
                        <input type="text" placeholder="Email id required" style="height:15px;width:300px;margin-top:20px;"/>
                        <button id="add_member" class="btn btn-large btn-info" style="height:30px;margin-top:5px;">Add</button>
                	
                </div>
                <div id="progress_bar" class="span6" style="margin-left:20px;margin-top:-100px;height:50px;display:none;">
                <img src="<?php echo base_url()?>Assets/images/382.gif" style="height:40px;width:40px;"/> Please wait...
                      
                  </div>
        </div>
     </div>
   
   
 </body>
 
 <script>
$(document).ready(function(e) {
	//setting tooltip for all dock elements
	$("#acad-tool").tooltip(); 
	$("#activity-tool").tooltip(); 
	$("#placement-tool").tooltip(); 
	$("#training-tool").tooltip(); 
	
	
	//function for updating alert box whenever there is update in database..currently it will check every 2.5 seconds....
	//functionfor updating group alerts
	setInterval(function(){
		
		//alert("hellO");
		var group_id=(<?php echo $group_id;?>);
		
		    $.ajax(
	      {
		      type:"POST",
		      url:"<?php echo base_url()?>index.php/ajax_groupalert_update",
		      data:"group_id="+group_id,
		      cache:false,
		      success: function(html)
		      {
			  // alert("No update currently");
				
			 	$("#alert_window").html(html);
				 $("#alert_window").mCustomScrollbar();
			}
	      });//end of ajax
		
		},2500);
		
	//funcion for updating group discussions
	
	setInterval(function(){
		var group_id=(<?php echo $group_id;?>);;
		
		
		    $.ajax(
	      {
		      type:"POST",
		      url:"<?php echo base_url()?>index.php/ajax_groupdiscussion_update",
		      data:"group_id="+group_id,
		      cache:false,
		      success: function(html)
		      {
			  
			$("#discussion_window").html(html);
			$("#discussion_window").mCustomScrollbar();
			
			 }
	      });//end of ajax
		
		
		
		},2500);
	
	$("#add_member").click(function(e) {                
		$("#progress_bar").css({"display":"block"});
		setTimeout( function(){  $("#progress_bar").html("Invitation sent! Click 'x' to dismiss this winow.") ;},5000);

        });
        $("#post_notification").click(function(e) {
		var notification_content=$("#notification_content").val();
		var group_id=<?php echo $group_id;?>;
              //ajax call to update notification
	      
	      $.ajax(
	      {
		      type:"POST",
		      url:"<?php echo base_url()?>index.php/ajax_insert_notification",
		      data:"group_id="+group_id+"&notification_content="+ notification_content,
		      cache:false,
		      success: function(html)
		      {
			    //  alert(html);
				
			 	//alert("Notification successfully posted");
				$("#alert_window").html(html);
				 $("#alert_window").mCustomScrollbar();
				$("#notification_content").val('');
			
			 }
	      });//end of ajax
		      
	      
        });
	
		

        $("#post_discussion").click(function(e) {
		var discussion_content=$("#discussion_content").val();
		var group_id=<?php  echo $group_id;?>;
		
		
              //ajax call to update discussion
	      
	      $.ajax(
	      {
		      type:"POST",
		      url:"<?php echo base_url()?>index.php/ajax_insert_discussion",
		      data:"group_id="+group_id+"&discussion_content="+ discussion_content,
		      cache:false,
		      success: function(html)
		      {
			    //  alert(html);
			 	//alert("Disscussion successfully posted");
				//alert(html);
				$("#discussion_window").html(html);
				 $("#discussion_window").mCustomScrollbar();
				$("#discussion_content").val('');
			 }
	      });//end of ajax
});

$("#leaveGroup").click(function(e) {
		var group_id=<?php  echo $group_id;?>;
	      $.ajax(
	      {
		      type:"POST",
		      url:"<?php echo base_url()?>index.php/leave_group",
		      cache:false,
		      data:"group_id="+group_id,
		      success: function(html)
		      {
			 	alert("You are successfully removed from this group");
				window.location.href="<?php echo base_url()?>index.php/home";
			 }
	      });//end of ajax
});

$("#joinGroup").click(function(e) {

		var group_id=<?php echo $group_id;?>;
	      $.ajax(
	      {
		      type:"POST",
		      url:"<?php echo base_url()?>index.php/join_group",
		      cache:false,
		      data:"group_id="+group_id,
		      success: function(html)
		      {
			 	alert("You are successfully added to this group");
}
	      });//end of ajax
});

});
 </script>
