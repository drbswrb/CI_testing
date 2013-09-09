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
<script>
 $(window).load(function(){
            $("#answer").val('');
	  
        });
$(document).ready(function(e) {

                $("#post_answer").click(function(e) {
			$("#progressbar_image").css({"display":"block"});                      
			var comm=$("#answer").val();
			var username="<?php echo $this->session->userdata('username');?>";
			var dataString="answer="+comm+"&user="+username;
			$.ajax({
   			type: "POST",
   			url: "<?php echo base_url();?>index.php/ajax_insert_answer/index/<?php echo $art_id;?>",
   			data: dataString,
   			cache: false,
			success:function(html)
   		{		
			$("#answerBlock").html(html);
			$("#progressbar_image").css({"display":"none"});
			$("#answer").val('');
			
   		}// end of success
                });
			

		});

});
</script> 


<body style="background-color:#F0F2F1">
  <div class="span10" style="height:50px;width:100%;margin-top:5px;margin-left:0;">
          <div class="span2" style="margin-top:5px;margin-left:80px;">
                 <a href="<?php echo base_url()?>/index.php" style="text-decoration:none"> <span style="font-family:Calibri, 'Californian FB';color:#1BBC9B;font-size:42px;font-weight:bold;">browseboard</span></a>
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

      <div class="span3" style="height:925px;background-color:#1BBC9B;margin-left:80px;margin-top:20px;">
		    <div class="span3" style="margin-left:0;margin-top:5px;height:40px;">
          <center><span style="font-family:Calibri;font-size:24px;color:#fff">More Questions in <br>this topic</span></center>
        </div>

        <div class="span3" style="height:100px;background-color:#fff;margin-left:15px;width:190px;margin-top:30px;">
           <div class="span3" style="margin-left:8px;margin-top:10px;">
              <span style="line-height:10px;font-size:14px;font-family:'calibri';color:#7474A3">DBMS 4th semester question <br/>avalaible.</span>
           </div>

           <div class="span3" style="margin-left:0px;margin-top:30px;">
              <img src="<?php echo base_url()?>Assets/images/following.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#1BBC9B">69 Following</span>
              <img src="<?php echo base_url()?>Assets/images/answer.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#669ACC">34 answers</span>

           </div>

        </div>  
		
		<div class="span3" style="height:100px;background-color:#fff;margin-left:15px;width:190px;margin-top:20px;">
           <div class="span3" style="margin-left:8px;margin-top:10px;">
              <span style="line-height:10px;font-size:14px;font-family:'calibri';color:#7474A3">DBMS 4th semester question <br/>avalaible.</span>
           </div>

           <div class="span3" style="margin-left:0px;margin-top:30px;">
              <img src="<?php echo base_url()?>Assets/images/following.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#1BBC9B">69 Following</span>
              <img src="<?php echo base_url()?>Assets/images/answer.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#669ACC">34 answers</span>

           </div>

        </div>
		
		<div class="span3" style="height:100px;background-color:#fff;margin-left:15px;width:190px;margin-top:20px;">
           <div class="span3" style="margin-left:8px;margin-top:10px;">
              <span style="line-height:10px;font-size:14px;font-family:'calibri';color:#7474A3">DBMS 4th semester question <br/>avalaible.</span>
           </div>

           <div class="span3" style="margin-left:0px;margin-top:30px;">
              <img src="<?php echo base_url()?>Assets/images/following.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#1BBC9B">69 Following</span>
              <img src="<?php echo base_url()?>Assets/images/answer.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#669ACC">34 answers</span>

           </div>

        </div>
		
		<div class="span3" style="height:100px;background-color:#fff;margin-left:15px;width:190px;margin-top:20px;">
           <div class="span3" style="margin-left:8px;margin-top:10px;">
              <span style="line-height:10px;font-size:14px;font-family:'calibri';color:#7474A3">DBMS 4th semester question <br/>avalaible.</span>
           </div>

           <div class="span3" style="margin-left:0px;margin-top:30px;">
              <img src="<?php echo base_url()?>Assets/images/following.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#1BBC9B">69 Following</span>
              <img src="<?php echo base_url()?>Assets/images/answer.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#669ACC">34 answers</span>

           </div>

        </div>
		
		<div class="span3" style="height:100px;background-color:#fff;margin-left:15px;width:190px;margin-top:20px;">
           <div class="span3" style="margin-left:8px;margin-top:10px;">
              <span style="line-height:10px;font-size:14px;font-family:'calibri';color:#7474A3">DBMS 4th semester question <br/>avalaible.</span>
           </div>

           <div class="span3" style="margin-left:0px;margin-top:30px;">
              <img src="<?php echo base_url()?>Assets/images/following.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#1BBC9B">69 Following</span>
              <img src="<?php echo base_url()?>Assets/images/answer.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#669ACC">34 answers</span>

           </div>

        </div>
		
		<div class="span3" style="height:100px;background-color:#fff;margin-left:15px;width:190px;margin-top:20px;">
           <div class="span3" style="margin-left:8px;margin-top:10px;">
              <span style="line-height:10px;font-size:14px;font-family:'calibri';color:#7474A3">DBMS 4th semester question <br/>avalaible.</span>
           </div>

           <div class="span3" style="margin-left:0px;margin-top:30px;">
              <img src="<?php echo base_url()?>Assets/images/following.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#1BBC9B">69 Following</span>
              <img src="<?php echo base_url()?>Assets/images/answer.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#669ACC">34 answers</span>

           </div>

        </div>
		
		<div class="span3" style="height:100px;background-color:#fff;margin-left:15px;width:190px;margin-top:20px;">
           <div class="span3" style="margin-left:8px;margin-top:10px;">
              <span style="line-height:10px;font-size:14px;font-family:'calibri';color:#7474A3">DBMS 4th semester question <br/>avalaible.</span>
           </div>

           <div class="span3" style="margin-left:0px;margin-top:30px;">
              <img src="<?php echo base_url()?>Assets/images/following.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#1BBC9B">69 Following</span>
              <img src="<?php echo base_url()?>Assets/images/answer.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#669ACC">34 answers</span>

           </div>

        </div>


      </div>

      <div class="span9" style="height:925px;background-color:#FFF;margin-top:20px;margin-left:5px;width:735px">

        <div class="span9" style="margin-left:0;margin-top:0;background-color:#66669A;height:auto;width:735px">
          <div style="margin-left:5px">
            <span style="font-family:'calibri';font-size:20px;color:#fff"> <?php foreach($art as $row) 
		echo $row->question ?>
		</span>
          </div>

          <div class="span2" style="margin-left:0;margin-top:10px;">
            <span style="font-family:'calibri';font-size:12px;color:#fff;margin-left:10px;">12 hrs ago</span>
           
          </div>
           <div class="span1" style="height:20px;background-color:#1BBC9B;margin-left:-60px;margin-top:10px;"></div>

          <div class="span2" style="margin-left:0;margin-top:10px;">
            <span style="font-family:'calibri';font-size:14px;color:#fff;margin-left:10px;">by <?php foreach($art as $row) 
		echo $row->posted_by ?>
	</span>
           
          </div>
	
           <div class="span3" style="margin-left:20px;margin-top:10px;">
		<?php $i=0;
		foreach($com as $row)
			$i++; ?>
              <img src="<?php echo base_url()?>Assets/images/following.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#1BBC9B">69 Following</span>
              <img src="<?php echo base_url()?>Assets/images/answer.png" style="width:12px;height:12px;margin-top:-1px;margin-right:4px;margin-left:8px;"/><span style="line-height:10px;font-size:13px;font-family:'calibri';color:#669ACC"><?php echo $i ?> Answers</span>

           </div>

           <div class="span2" style="height:25px;background-color:#1ABC9C;margin-top:8px;">
              <span style="font-family:'calibri';font-size:14px;color:#fff;margin-left:15px;line-height:25px;">Follow Question</span>
           </div>

        </div>

        <div class="span2" style="margin-left:280px;">
            <span style="font-family:'calibri';font-size:20px;color:#CE6A6B;margin-left:15px;line-height:25px;">Answers</span>
        </div>

        <div class="span9" style="margin-left:0;margin-top:0;background-color:#FFF;height:40px;width:735px;margin-top:40px;">
            <div class="span9" style="width:640px;margin-left:0;height:40px;">
                 <input type="text" id="answer" placeholder="Enter your answers here..." style="border-radius:0;height:20px;width:700px;border:1px solid #000;"/>
            </div>
            <div class="span9" style="width:90px;background-color:#669ACC;margin-left:-5px;height:39px;">
               <a href="#" style="text-decoration:none"><span id="post_answer" style=font-family:Calibri;font-size:30px;font-weight:bold;color:#fff;margin-left:10px;>SEND</span></a>
            </div>
		<div class="span1" style="height:10px;">
        	<img src="<?php echo base_url();?>Assets/images/382.gif" id="progressbar_image" style="display:none;"/>
        	</div>
        </div>

        <div id="answerBlock" class="span9" style="margin-left:0px;background-color:#FFF;height:700px;width:725px;margin-top:65px;overflow-y:scroll;overflow-x:hidden">
         <div class="span9" style="margin-left:0;margin-top:0;background-color:#FFF;height:40px;width:735px;margin-top:20px;">
            <!--div for answers..it will repeat--don't forget to alternate css>-->
		<?php foreach($com as $row) { ?>
            
              <div class="span2" style="height:90px;margin-left:5px;background-color:#CC8847;width:110px;">&nbsp&nbsp&nbsp&nbspPosted by<br><br><?php $email = $this->session->userdata('username');
			$query=mysql_query("select * from user_detail where email='{$email}'");
			$row1=mysql_fetch_array($query);		
			$name=$row1['first_name'];
			?>&nbsp&nbsp&nbsp&nbsp<?php echo $name; ?> </div>
              <div class="span7" style="height:90px;margin-left:35px;width:520px;">
                  <div class="span7" style="margin-left:0px;height:90px;background-color:#D0D8DF;width:520px;">
		<span style="margin-left:10px;"><?php echo $row->answer ?> </span>
                  </div>
                  <div class="span7" style="height:20px;margin-left:0px;width:580px;">
                      <span style="font-family:'calibri';font-size:14px;color:#D0757629">29 Votes</span>
                      <span style="font-family:'calibri';font-size:14px;color:#D0757629;margin-left:100px">10 min ago</span>
                  </div>
              </div>
		<div class="span6" style="margin-left:0;margin-top:0px;background-color:#FFF;height:40px;width:700px;margin-top:20px;">
	    </div>
	    
<?php } ?>
</div>
      </div> 
	</div>
      <!-- div for right side dock and navigation-->
            <div class="span1" style="height:250px;background-color:#E2E3DD;margin-top:20px;width:75px;margin-left:5px">
         	<img src="<?php echo base_url()?>Assets/images/writepost.png" />
                <img src="<?php echo base_url()?>Assets/images/addtopic.png" style="margin-top:-15px;"/>
                <img src="<?php echo base_url()?>Assets/images/addevent.png" style="margin-top:-15px;"/>
                <img src="<?php echo base_url()?>Assets/images/askquestion.png" style="margin-top:-15px;"/>

         </div>
        <!-- div for widjets-->
          <div class="span1" style="height:670px;background-color:#E2E3DD;width:75px;margin-top:275px;margin-left:-75px;">
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
