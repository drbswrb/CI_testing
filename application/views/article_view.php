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
      
      .icon {
	float: right;
	margin-right: 20px;
	font-size: 16px;
	}
/*
 * Dropdown menu
 */
.dropdown {
  position: relative;
  display: inline-block;
  text-align: left;
  width: 300px;
  margin-left:20px;
}

.dropdown-text::-moz-selection,
.dropdown-toggle::-moz-selection { background: transparent; color: inherit; }
.dropdown-text::selection,
.dropdown-toggle::selection { background: transparent; color: inherit; }

.dropdown-text {
  cursor: pointer;
  position: absolute;
  text-indent: 10px;
  line-height: 38px;
  background-color: #4f4f4b;
  width: 100%;
}

.dropdown-text,
.dropdown-content a {
  color: #fff;
  text-transform:uppercase;
  letter-spacing: 1px;
}

.dropdown-toggle {
  font-size: 0;
  z-index: 1;
  cursor: pointer;
  position: absolute;
  top: 0;
  border: none;
  padding: 0;
  margin: 0 0 0 1px;
  background: transparent;
  text-indent: -10px;
  height: 34px;
  width: 100%;
}

.dropdown-toggle:focus {
  outline: 0;
}

.dropdown-content {
  -webkit-transition: .25s ease;
  -moz-transition: .25s ease;
  -ms-transition: .25s ease;
  -o-transition: .25s ease;
  transition: .25s ease;
  list-style-type: none;
  position: absolute;
  top: 32px;
  padding: 0;
  margin: 0;
  opacity: 0;
  visibility:hidden;
  text-indent: 10px;
  line-height:38px;
  background-color: #df826b;
  width: 300px;
  
}

.dropdown-content:after {
	position: absolute;
	right: 14px;
	top: -9px;
	content: '';
	width: 0px;
	height: 0px;
	border-style: solid;
	border-width: 0 8px 9px 8px;
	border-color: transparent transparent #df826b transparent;
}

.dropdown-content li {
	border-bottom:4px solid #4f4f4b;
	overflow:hidden;
	height:30px;
	}
.dropdown-content li:last-child {
		border-bottom:none;
		}
.dropdown-content a {
  display: block;
  -webkit-transition: .25s ease;
  -moz-transition: .25s ease;
  -ms-transition: .25s ease;
  -o-transition: .25s ease;
  transition: .25s ease;
}

.dropdown-content a:hover {
  background: #4f4f4b;
  padding-left:5px;
  height:30px;
}


.dropdown-toggle:hover ~ .dropdown-text,
.dropdown-toggle:focus ~ .dropdown-text {
  background-color: #4f4f4b;
}

.dropdown-toggle:focus ~ .dropdown-text {
  border-color: #c5c5c5;
  z-index: 2;
}

.dropdown-toggle:focus ~ .dropdown-text:after {
  border-width: 0 4px 5px 4px;
  border-color: transparent transparent #555 transparent;
}

.dropdown-content:hover,
.dropdown-toggle:focus ~ .dropdown-content {
  opacity: 1;
  visibility:visible;
  top: 55px;
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
        
        <div class="span3" style="height:620px;margin-left:80px;margin-top:20px;">
        		<div class="span2" style="height:30px;background-color:#039;margin-left:15px;width:180px;background-color:#19BC9F;">
                        	<span style="font-family:'calibri';color:#fff;font-size:20px;margin-left:35px;">SWITCH TO</span>
                        </div>
                        <a href="<?php echo base_url();?>index.php/loadQuestions/index">
                        <div class="span2" style="height:280px;background-color:#CD6667;margin-left:15px;width:180px;margin-top:5px;">
                        	<center><span style="color:#fff;font-family:Calibri;font-size:24px;">Questions !</span></center>
							<center><img src="<?php echo base_url('Assets/images/questions.png');?>"/ style="width:133px;height:233px;margin-top:10px;"></center>
                        </div>
                        </a>
                         <div class="span3" style="height:450px;background-color:#669ACC;margin-left:15px;width:180px;margin-top:10px;">
                         		<div class="span3" style="height:80px;margin-left:20px;margin-top:10px;">
                	<span style="font-family:'Segoe UI';font-size:22px;color:#fff;">Other topics</span><br>
                        <span style="font-family:'Segoe UI';font-size:22px;color:#fff;">in <?php echo strtoupper($category);?></span>
                </div>
                
                <div class="span2" style="height:80px;background-color:#fff;margin-left:14px;margin-top:0px;">
                	<div class="span2" style="height:60px;margin-top:5px;margin-left:10px;">
                        	<span style="font-family:'Segoe UI';font-size:22px;margin-left:20px;">Projects</span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:35px;"><?php $query=mysql_query("select * from article where article_sub_cat='projects'");
$n=mysql_num_rows($query);
echo $n ?> Posts </span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:20px;"><?php $query=mysql_query("select * from questions where question_sub_cat='projects'");
$n=mysql_num_rows($query);
echo $n ?> Questions </span>
                        </div>
                </div>
                
                  <div class="span2" style="height:80px;background-color:#fff;margin-left:14px;margin-top:10px;">
                	<div class="span2" style="height:60px;margin-top:5px;margin-left:10px;">
                        	<span style="font-family:'Segoe UI';font-size:22px;margin-left:0px;">Scholarships</span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:35px;"><?php $query=mysql_query("select * from article where article_sub_cat='scholarships'");
$n=mysql_num_rows($query);
echo $n ?> Posts </span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:20px;"><?php $query=mysql_query("select * from questions where question_sub_cat='scholarships'");
$n=mysql_num_rows($query);
echo $n ?> Questions </span>
                        </div>
                </div>
                
                  <div class="span2" style="height:80px;background-color:#fff;margin-left:14px;margin-top:10px;">
                	<div class="span2" style="height:60px;margin-top:5px;margin-left:10px;">
                        	<span style="font-family:'Segoe UI';font-size:22px;margin-left:-5px;">Course Detail</span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:35px;"><?php $query=mysql_query("select * from article where article_sub_cat='course_detail'");
$n=mysql_num_rows($query);
echo $n ?> Posts </span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:20px;"><?php $query=mysql_query("select * from questions where question_sub_cat='course_detail'");
$n=mysql_num_rows($query);
echo $n ?> Questions </span>
                        </div>
                </div>
                 <div class="span2" style="height:80px;background-color:#fff;margin-left:14px;margin-top:10px;">
                	<div class="span2" style="height:60px;margin-top:5px;margin-left:10px;">
                        	<span style="font-family:'Segoe UI';font-size:20px;margin-left:-7px;">Teacher Review</span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:35px;"><?php $query=mysql_query("select * from article where article_sub_cat='teacher_reviews'");
$n=mysql_num_rows($query);
echo $n ?> Posts </span><br>
                                <span style="font-family:'Segoe UI';font-size:14px;margin-left:20px;"><?php $query=mysql_query("select * from questions where question_sub_cat='teacher_reviews'");
$n=mysql_num_rows($query);
echo $n ?> Questions </span>
                        </div>
                </div>
                         
             </div><!-- end of red color div-->
                        
        </div><!-- end of right div -->
        <!--div for middle section-->
        <div class="span10" style="height:925px;background-color:#fff;margin-top:20px;margin-left:-15px;width:750px;">
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
                			<span style="font-family:'Segoe UI';font-size:28px;color:#fff;"><?php $upper_topic=strtoupper($topic);$topics=explode("_",$upper_topic);
						foreach($topics as $t)echo $t." ";
					?></span>
                                        <br>
                                        <span style="font-family:'Segoe UI';font-size:22px;color:#fff;margin-left:10px;line-height:50px;">39 Posts</span>
                                         <span style="font-family:'Segoe UI';font-size:13px;color:#fff;margin-left:20px;">Sort by - <span id="date" style="cursor:pointer;">Dates</span>/<span id="votes" style="color:#19BC9F;cursor:pointer">Likes</span></span>
                		</div>
                                 <div class="span1" style="width:85px;height:20px;margin-top:24px;margin-left:5px;">
                			<span id="follow_status" style="font-family:'calibri';font-size:12px;color:#CED2ED;"><?php echo $is_following;?> following</span>
               			 </div>
                                
                                    <div class="span1" style="width:90px;height:20px;background-color:#1BBC9B;margin-top:-25px;margin-left:630px;cursor:pointer">
                                    <?php if ($is_following==0){?>
                			<div id="follow_topic"  style="font-family:'Segoe UI';font-size:14px;color:#fff;margin-left:10px;display:block">Follow topic</div>
                                        <div id="unfollow_topic"  style="font-family:'Segoe UI';font-size:14px;color:#fff;margin-left:15px;display:none">Unfollow</div>
                                        
                                      <?php } else {?>
                                      	<div id="follow_topic"  style="font-family:'Segoe UI';font-size:14px;color:#fff;margin-left:10px;display:none">Follow topic</div>
                                      	<div id="unfollow_topic"  style="font-family:'Segoe UI';font-size:14px;color:#fff;margin-left:15px;display:block">Unfollow</div>
                                        <?php }?>
               			 </div>
			<div id="articleContent" class="span11" style="margin-top:32px;margin-left:0px;height:825px;width:750px;overflow-y:scroll;overflow-x:hidden;display:block;">            			
			
<?php 
	foreach($arr as $row)
		{
?>

<div class="span11" style="width:800px;height:100px;margin-top:30px;margin-bottom:40px;">

                        	<span style="font-family:Calibri, 'Californian FB';font-size:18px;color:#333;margin-left:30px;color:#66669A;">
                                	<?php echo $row->article_name;?>
                                
                                </span>
                                <br>
				<span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#333;margin-left:30px;">

                        <?php $var= $row->article_content;  
				if(strlen($var)>=100)
				{

					$len=100;
					

					for( $i=0;$i<=$len;$i++)

					echo $var[$i];

					

					echo "...";
				?>
                                <?php
				}
				else
					echo $var;

			?>
                        
                        <span  style="text-decoration:none;margin-left:5px;color:#960;"><a href="<?php echo base_url();?>index.php/get_full_article/index/<?php echo $row->article_id ?>" style="text-decoration:none;font-size:14px;">Read  More</a></span>
			<br><br>
                        
                        </span>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#8C8C8C;margin-left:30px;line-height:50px;">By: <?php echo $row->posted_by ?> </span>
				<span  style="text-decoration:none;margin-left:80px;color:#960;"><a href="<?php echo base_url();?>index.php/get_full_article/index/<?php echo $row->article_id ?>" style="text-decoration:none;">Read  More</a></span>

                                <img src="<?php echo base_url()?>Assets/images/vote.png" style="width:14px; height:14px;margin-left:150px;margin-top:-5px;"/>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#66669A"><?php echo $row->likes; ?> Likes</span>
                                 <img src="<?php echo base_url()?>Assets/images/comments.png" style="width:14px; height:14px;margin-left:100px;margin-top:-5px;"/>
                                <span style="font-family:'Segoe UI';font-size:14px;color:#CD6869"><?php $query=mysql_query("select * from comment_article where article_id=$row->article_id");
$n=mysql_num_rows($query);
 echo $n; ?>  Comments</span>
                                
                                <div class="span10" style="height:2px;background-color:#D5D5D5;margin-top:10px;"></div>
                        
                        </div>
<?php } ?>
        
	</div>
	</div>
	</div>
	
        <!-- div for right side dock and navigation-->
            <div class="span1" style="height:250px;background-color:#E2E3DD;margin-top:20px;width:75px;">
         	<a href="#writeQuestion" data-toggle="modal" href="#">
		<img src="<?php echo base_url()?>Assets/images/writepost.png" /> </a>
                <img src="<?php echo base_url()?>Assets/images/addtopic.png" style="margin-top:-15px;"/>
                <img src="<?php echo base_url()?>Assets/images/addevent.png" style="margin-top:-15px;"/>
                <a href="#writeQuestion" data-toggle="modal" href="#">
<img src="<?php echo base_url()?>Assets/images/askquestion.png" style="margin-top:-15px;"/></a>

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
        
       
     <div id="writeQuestion" class="modal hide fade" style="width:600px;height:500px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<header style="border-bottom:1px solid #eeeeee">
   		<span style="padding:20px;color:#D2B293;font-size:14px;">Add new Question !</span>
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position:relative; right:5px;">×</button>
    	</header>	
        <span style="margin-left:30px;color:#696969;font-size:18px;font-family:Calibri, 'Californian FB';line-height:30px;"> Select Category :</span>
        <br>
      	<div class="dropdown"> <span class="dropdown-toggle" tabindex="0"></span>
  		<div class="dropdown-text" name="1"  id="question-category-text">Choose category</div>
  			<ul class="dropdown-content" id="ul-question-category"  style="z-index:3;">
    				<li ><a href="#" name="1"  id="q1" style="text-decoration:none;">Academics </a></li>
   				 <li ><a href="#" name="2" id="q2" style="text-decoration:none;">Activities </a></li>
   				 <li><a href="#" name="3" id="q3" style="text-decoration:none;">Training</a></li>
   				<li><a href="#"  name="4"id="q4" style="text-decoration:none;">Placement </a></li>
   			</ul>
		</div>
                
         <br>
         <div class="span5" style="margin-top:50px;">
          	<span style="margin-left:10px;color:#696969;font-size:18px;font-family:Calibri, 'Californian FB';line-height:30px;"> Select Topic :</span>
          </div>
          <br/>
          <div class="dropdown"> <span class="dropdown-toggle" tabindex="0"></span>
  		<div class="dropdown-text" id="question-topic-text">Choose Topic</div>
  			<ul class="dropdown-content" id="ul-question-topic" style="z-index:3">
                        	 

   			</ul>
		</div>
                
        <br>
          
          
           <div class="span5" style="margin-top:60px;">
          	<span style="margin-left:10px;color:#696969;font-size:18px;font-family:Calibri, 'Californian FB';line-height:30px;"> Enter Question :</span>
          </div>
          <textarea id="questionContent" style="width:400px;height:60px;margin-left:20px;"></textarea>

	<br>
        <input id="AddQuestion" type="submit" class="btn btn-warning" value="Submit" style="margin-left:30px;"/>
       
      
    	</form>
 </div>
<div id="writePost" class="modal hide fade" style="width:600px;height:500px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<header style="border-bottom:1px solid #eeeeee">
   		<span style="padding:20px;color:#D2B293;font-size:14px;">Add new Post !</span>
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position:relative; right:5px;">×</button>
    	</header>	
        <span style="margin-left:30px;color:#696969;font-size:18px;font-family:Calibri, 'Californian FB';line-height:30px;"> Select Category :</span>
        <br>
      	<div class="dropdown"> <span class="dropdown-toggle" tabindex="0"></span>
  		<div class="dropdown-text" name="1" id="category-text">Choose category</div>
  			<ul class="dropdown-content" id="ul-category"  style="z-index:3;">
    				<li ><a href="#" name="1"  id="c1" style="text-decoration:none;">Academics </a></li>
   				 <li ><a href="#" name="2" id="c2" style="text-decoration:none;">Activities </a></li>
   				 <li><a href="#" name="3" id="c3" style="text-decoration:none;">Training</a></li>
   				<li><a href="#"  name="4"id="c4" style="text-decoration:none;">Placement </a></li>
   			</ul>
		</div>
                
         <br>
         <div class="span5" style="margin-top:50px;">
          	<span style="margin-left:10px;color:#696969;font-size:18px;font-family:Calibri, 'Californian FB';line-height:30px;"> Select Topic :</span>
          </div>
          <br/>
          <div class="dropdown"> <span class="dropdown-toggle" tabindex="0"></span>
  		<div class="dropdown-text" id="topic-text">Choose Topic</div>
  			<ul class="dropdown-content" id="ul-topic" style="z-index:3">
                        	 

   			</ul>
		</div>
                
        <br>
          <div class="span5" style="margin-top:50px;">
          	<span  style="margin-left:10px;color:#696969;font-size:18px;font-family:Calibri, 'Californian FB';line-height:30px;"> Enter Title :</span>
          </div>
          <input id="articleTitle" type="text" style="width:400px;height:20px;margin-left:20px;"/>
          
          <br>
           <div class="span5" style="margin-top:10px;">
          	<span  style="margin-left:10px;color:#696969;font-size:18px;font-family:Calibri, 'Californian FB';line-height:30px;"> Enter Content :</span>
          </div>
          <textarea id="articleContent" style="width:400px;height:60px;margin-left:20px;"></textarea>

	<br>
        <input type="submit" id="addArticle" class="btn btn-warning" value="Submit" style="margin-left:30px;"/>
       
	
        
      					
         
    	</form>
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
  <script>
  	//code for sorting articles by date or votes
  	$(function(){
		
		$("#date").click(function(e) {
                        $("#date").css({"color":"#36BC9E"});
			$("#votes").css({"color":"#fff"});
			
			var topic = "<?php echo $topic; ?>";
			 $.ajax(
    					{
     						 type:"POST",
     						 url:"<?php echo base_url()?>index.php/ajax_sort_content",
     						 cache:false,
    						 data:"type=article&order_by=date_posted&topic="+topic,
     						 success: function(html){
						 $("#articleContent").html(html);
												 
					 }
      
      
   			 });
           });//end of date click event
		
		
		$("#votes").click(function(e) {
                        $("#votes").css({"color":"#36BC9E"});
			$("#date").css({"color":"#fff"});
			var topic = "<?php echo $topic; ?>";
			 
			 $.ajax(
    					{
     						 type:"POST",
     						 url:"<?php echo base_url()?>index.php/ajax_sort_content",
     						 cache:false,
    						 data:"type=article&order_by=likes&topic="+topic,
     						 success: function(html){
						 $("#articleContent").html(html);
					 }
      
      
   			 });
                });//end of votes end function
		
		//start of follow and un follow
		
		$("#follow_topic").click(function(e) {
                       var topic="<?php echo $topic;?>";
		       var user="<?php echo $this->session->userdata('username');?>";
		       
		        $.ajax(
    					{
     						 type:"POST",
     						 url:"<?php echo base_url()?>index.php/ajax_follow_topic",
     						 cache:false,
    						 data:"user="+user+"&topic="+topic,
     						 success: function(html){
				
							var data=html;
							if(data==1)
								{
									alert("You are now following this topic");	
									$("#follow_topic").css({"display":"none"});
									$("#unfollow_topic").css({"display":"block"});
									$("#follow_status").html(html+ " following");
								}
							else
								{
									alert("An error has occured,please try later");
								}
								
					 }
      
      
   			 });
                });
		
		$("#unfollow_topic").click(function(e) {
			    var topic="<?php echo $topic;?>";
				
		       var user="<?php echo $this->session->userdata('username');?>";
		       
		        $.ajax(
    					{
     						 type:"POST",
     						 url:"<?php echo base_url()?>index.php/ajax_follow_topic/remove",
     						 cache:false,
    						 data:"user="+user+"&topic="+topic,
     						 success: function(html){
							var data=html;
							if(data==1)
								{
									alert("You are now not following this topic");	
									$("#follow_topic").css({"display":"block"});
									$("#unfollow_topic").css({"display":"none"});
									$("#follow_status").html(html-1+ " following");
								}
							else
								{
									alert("An error has occured,please try later");
									
								}
								
					 }
      
      
   			 });
                        
                
	      /*
	    $("#li-acad").click(function(e) {
               $(".dropdown-text").html("Academics");
        });
	
	      */var value,subcat,value1;
	      $("#ul-category li a").click(function(e) {
		      	value=$(this).html();
			$("#category-text").attr("name",$(this).attr("name"));
			//alert($("#category-text").attr("name"));
			$("#category-text").html(value);
			var param=$("#category-text").attr("name");
			//alert(param);
			
			$.ajax({
				 type:"POST",
      				url:"<?php echo base_url()?>index.php/ajax_getsub_category/index",
      				cache:false,
      				data:"category_id="+param,
      				success: function(html){
					$("#ul-topic").html(" ");
					$("#ul-topic").append(html);
					
					}
				
				});
				
			
        });
	$("#ul-question-category li a").click(function(e) {
				value1 = $(this).html();
                                $("#question-category-text").html($(this).html());
				$("#question-category-text").attr("name",$(this).attr("name"));
				var param=$("#question-category-text").attr("name");
				//alert(param);
				$.ajax({
				 type:"POST",
      				url:"<?php echo base_url()?>index.php/ajax_getsub_category/index",
      				cache:false,
      				data:"category_id="+param,
      				success: function(html){
					$("#ul-question-topic").html(" ");
					$("#ul-question-topic").append(html);
					
					}
				
				});
					
                        });
			
	$(document).on("click", ".try", function(){
		subcat=$(this).html();
		$("#topic-text").html($(this).html());
		$("#question-topic-text").html($(this).html());
		
		
	});
	
	$("#addArticle").click(function(e) {
			var title = $("#articleTitle").val();		
			var content = $("#articleContent").val();
			var article_cat = value;
			var article_sub_cat = subcat;		
			$.ajax({
				 type:"POST",
      				url:"<?php echo base_url()?>index.php/ajax_insert_article",
      				cache:false,
      				data:"content="+content+"&title="+title+"&article_cat="+article_cat+"&article_sub_cat="+article_sub_cat,
      				success: function(html){
					alert("Article added successfully");
					}
				
				});
				
			
        });

	$("#AddQuestion").click(function(e) {
			
		var content = $("#questionContent").val();
     	var question_cat = value1;
      	var question_sub_cat = subcat;  
	alert(value1);
	alert(subcat);  
     $.ajax({
         type:"POST",
              url:"<?php echo base_url()?>index.php/ajax_insert_question",
              cache:false,
              data:"content="+content+"&question_cat="+question_cat+"&question_sub_cat="+question_sub_cat,
              success: function(html){
          alert("Question added successfully");
          }
        
        });		
			
        });
     
	 
	      

	});

$("#AddQuestion").click(function(e) {
			
		var content = $("#questionContent").val();
     	var question_cat = value1;
      	var question_sub_cat = subcat;  
	alert(value1);
	alert(subcat);  
     $.ajax({
         type:"POST",
              url:"<?php echo base_url()?>index.php/ajax_insert_question",
              cache:false,
              data:"content="+content+"&question_cat="+question_cat+"&question_sub_cat="+question_sub_cat,
              success: function(html){
          alert("Question added successfully");
          }
        
        });		
			//$("#ul-topic").append("<li><a href='#'>Demo</a></li>");
        });
     
	
	      });
  
  </script>
      
 </body>
