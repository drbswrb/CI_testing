
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Article and Questions -BrowseBoard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url('Assets/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Loading Flat UI -->
    <link href="<?php echo base_url('Assets/css/flat-ui.css');?>" rel="stylesheet">
     
    <link rel="shortcut icon" href="<?php echo base_url('Assets/images/favicon.ico');?>">
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
  <style>
  .like
 {
	background-image:url(<?php echo base_url();?>Assets/images/LIKE.png);
	background-repeat:no-repeat;
	
}

.dislike
{
	background-image:url(<?php echo base_url();?>Assets/images/DISLIKE.png);
	background-repeat:no-repeat;
	
}
  
  </style>
<script type="text/javascript" src="<?php echo base_url()?>Assets/js/jquery.js"></script>
<script>
	$(document).ready(function(e) {
		
		
                $("#post_comment").click(function(e) {
			$("#progressbar_image").css({"display":"block"});
                        var comm=$("#comment").val();
			var username='<?php echo $this->session->userdata('username');?>';
			var dataString="comment="+comm+"&user="+username;
			$.ajax({
   			type: "POST",
   			url: "<?php echo base_url();?>index.php/ajax_insert_comment/index/<?php echo $art_id;?>",
   			data: dataString,
   			cache: false,

   			success:function(html)
   		{		

	   			$("#comment-box").append(' <div class=\"span8\" style=\"min-height:40px;background-color:#666;margin-left:100px;border-bottom:1px solid #fff;\"><img src=\"<?php  echo base_url();?>Assets/images/user_64.png\" style=\"width:32px;height:32px;margin-top:5px;margin-left:5px;\"/> <span style=\"font-family:Calibri, \'Californian FB\';font-size:18px;color:#1ABC9C;\">'+username+ '</span> <span style=\"font-family:Calibri, \'Californian FB\';font-size:16px;color:#fff;\">'+comm+' </span></div>');
   				$("#progressbar_image").css({"display":"none"});
   		}// end of success
                });
			
		});
		//ajax call for like button
		
		//first check whether user has liked article or not
		
		var count=    <?php echo $valOfLike;?>;
		if(count==0)
		{
			$("#like_box").addClass("like");	
		}
		else
		{
			$("#like_box").addClass("dislike");
		}
		$(".like").click(function(e) {
			if(count==0)
			{
					$("#progressbar_image").css({"display":"block"});
				       var username='<?php echo $this->session->userdata('username');?>';
					$(this).toggleClass("like dislike");
					var dataString="username="+username;
					$.ajax({
					type: "POST",
					url: "<?php echo base_url();?>index.php/ajax_like/index/<?php echo $art_id;?>",
					data: dataString,
					cache: false,
		
					success:function(html)
						{		
								
								count=1;
								$("#like_count").html(html+" likes");
								$("#progressbar_image").css({"display":"none"});
						}// end of success
					});
					
			}//end of if
			else
			{
			
					
				$("#progressbar_image").css({"display":"block"});
				    var username='<?php echo $this->session->userdata('username');?>';
				    var dataString="username="+username;
				    $(this).toggleClass("like dislike");
				$.ajax({
					
					type: "POST",
					url: "<?php echo base_url();?>index.php/ajax_like/disLike/<?php echo $art_id;?>",
					data: dataString,
					cache: false,
		
					success:function(html)
						{		
				
								
								count=0;	
								$("#like_count").html(html+" likes");
								$("#progressbar_image").css({"display":"none"});
						}// end of success
					});
				
			}
					
		});
		
		
		
		//ajax call for dislike button
		
		
        });
</script>
<body style="overflow-x:hiddenroot;background-color:#F1F2F2;">

	<div class="span10" style="margin-left:100px;background-color:#fff;min-height:300px;margin-top:50px;margin-bottom:40px;">
        	<div class="span5" style="margin-left:20px;">
                	<span style="font-family:'Open Sans';font-size:24px;color:#1ABC9C"><?php foreach($art as $row)
		
				echo $row->article_name;
			?>
                        </span>
                </div>
                
                <div class="span10" style="margin-left:20px;margin-top:20px;margin-bottom:50px;">
                	<span style="font-family:Calibri, 'Californian FB';color:#333;font-size:18px;"><?php foreach($art as $row)
		
				echo $row->article_content;
			?></span>
                </div>
        
        </div>
        <div class="span1 like" style="height:50px;margin-top:50px;width:75px;" id="like_box">
        </div>
        <span id="like_count" style="font-family:'Open Sans';font-size:14px;color:#1ABC9C;margin-left:5px;line-height:30px;"><?php echo $numOfLike;?> likes</span>
    
        <br>
        <!-- comment system code goes here -->
        <div class="span10" id="comment-box" style="margin-left:0;">
        <?php  foreach($com as $row){?>
                <div class="span8" style="min-height:40px;background-color:#666;margin-left:100px;border-bottom:1px solid #fff;">
                        <img src="<?php echo base_url()?>Assets/images/user_64.png" style="width:32px;height:32px;margin-top:5px;margin-left:5px;"/>
                        <span style="font-family:Calibri, 'Californian FB';font-size:18px;color:#1ABC9C;"><?php echo $row->posted_by?> </span>
                        <span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#fff;"><?php echo $row->comment_text;?> </span>
                
                </div>
                
            <?php }?>
                  
        </div>
        
        
        <div class="span10" style="margin-left:100px;margin-top:20px;border:1px solid #000;min-height:40px;">
        	<textarea placeholder="Enter your comment here" style="width:500px;height:40px;margin-top:10px;margin-left:10px;" name="comment_text" id="comment"></textarea>
                <input type="submit" class="btn" value="Post" id="post_comment" />
        </div>
        <div class="span1" style="height:20px;">
        	<img src="<?php echo base_url();?>Assets/images/382.gif" id="progressbar_image" style="display:none;"/>
        </div>

</body>
</html>