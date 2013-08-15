
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
<script type="text/javascript" src="<?php echo base_url()?>Assets/js/jquery.js"></script>
<script src="<?php echo base_url('Assets/js/jquery.masonry.min.js')?>"></script>
<script>

	$(document).ready(function(e) {
		 $('#mini-container').masonry({
     			 columnWidth: 50,
			 isAnimated: true
    });
               
        });

</script>
 <body style="overflow-x:hidden;background-color:#F1F2F2;">
 
 
 <p style="color:#1ABC9C;font-size:22px;font-family:'Open Sans';position:absolute;left:400px;top:50px;">Welcome to Articles Section of Academics </p>
  <a href="#signUp" class="btn btn-primary"  data-toggle="modal" style="margin-top:50px;margin-left:100px;">Insert new Article</a>

<div class="span12" id="mini-container" style="height:200px;width:100%;margin-top:100px;margin-left:100px;"> 

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
                        <a href="<?php echo base_url();?>index.php/get_full_article/index/<?php echo $row->article_id ?>" style="text-decoration:none;float:right;margin-right:5px;color:#960;">Read  More</a>
                        </span>
                </div>
                
                <div class="span4" style="height:1px;margin-left:0;border-top:1px dashed #C2CFCC;">
                	<b class="icon-user" style="margin-top:10px;margin-left:10px;margin-right:5px;">
                                <span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#ccc;margin-left:20px;">
                                           <?php echo $row->posted_by  ?>
                                </span>
                        </b>
                        
                        
                        <b class="icon-time" style="margin-top:10px;margin-left:70px;margin-right:5px;">
                        	 <span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#ccc;margin-left:20px;">
                        		 <?php echo $row->date_posted  ?>
                       		 </span>
                        </b>
                       
                </div>
                
                <div class="span4" style="height:1px;margin-left:0;border-top:1px dashed #C2CFCC;margin-top:40px;margin-bottom:40px;">
                	 <b class="icon-thumbs-up" style="margin-top:10px;margin-left:10px;margin-right:5px;">
                        	 <span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#ccc;margin-left:20px;">
                        		34
                       		 </span>
                        </b>
                        
                        <b class="icon-comment" style="margin-top:10px;margin-left:70px;margin-right:5px;">
                        	 <span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#ccc;margin-left:20px;">
                        		34
                       		 </span>
                        </b>
                        
                         <b class="icon-eye-open" style="margin-top:10px;margin-left:90px;margin-right:5px;">
                        	 <span style="font-family:Calibri, 'Californian FB';font-size:16px;color:#ccc;margin-left:20px;">
                        		12
                       		 </span>
                        </b>
                
                
                </div>
                
                
        	
        </div>
        
       <?php }?> 
        
     
 </div>
 
 
 
 
 
 
 
 
  <div id="signUp" class="modal hide fade" style="width:600px;height:380px;" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<header style="border-bottom:1px solid #eeeeee">
   		<span style="padding:20px;color:#D2B293;font-size:14px;">Insert New Article !</span>
    		<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style="position:relative; right:5px;">×</button>
    	</header>	
        <form action="<?php echo base_url();?>index.php/insert_new_article" method="post">
	<input type="text" placeholder="Enter Article heading" name="heading" style="margin-left:20px;margin-top:20px;"/>
        <br>
        
        <textarea placeholder="Enter Article Content" name="article_content"style="margin-left:20px;margin-top:20px;width:400px;height:200px;" ></textarea>					
                   
             <br>
             <input type="submit" class="btn btn-warning" value="Submit" style="margin-left:20px;"/>      
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
 </body>
 
 </html>