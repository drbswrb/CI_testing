<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Browseboard-Create new account!</title>
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

<script src="<?php echo base_url('Assets/js/jquery.fullscreenr.js')?>" type="text/javascript"></script>
<script type="text/javascript"> 

       var FullscreenrOptions = {  width: 1366, height: 100, bgID: '#bgimg' };
			// This will activate the full screen background!
		jQuery.fn.fullscreenr(FullscreenrOptions);
 
		<!--
			// You need to specify the size of your background image here (could be done automatically by some PHP code)
			
		//-->
</script>
<style>
body {
    background: url(<?php echo base_url();?>Assets/images/background.png) no-repeat center center fixed; 
	

  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    
}
</style>

<body >
<div class="span12" style="width:100%;height:60px;margin-left:0;border-bottom:1px solid #fff">
	<div class="span4" style="margin-left:80px;margin-top:5px;height:30px;">
        	<span style="font-family:Calibri, 'Californian FB';color:#1cbc9b;font-size:42px;font-weight:bold;">browseboard</span>
        </div>
        
        <div class="span6" style="height:30px;margin-left:480px;margin-top:20px;width:500px;">
        	<span style="font-family:'Segoe UI';font-size:15px;color:#858585;">About Us&nbsp </span>
                <span style="font-family:'Segoe UI';font-size:15px;color:#858585;"> | </span>
              <span style="font-family:'Segoe UI';font-size:15px;color:#858585;">&nbspDevelopers&nbsp </span>
                <span style="font-family:'Segoe UI';font-size:15px;color:#858585;"> | </span>
                <span style="font-family:'Segoe UI';font-size:15px;color:#858585;">&nbspContact&nbsp </span>
                <span style="font-family:'Segoe UI';font-size:15px;color:#858585;"> | </span>
                <span style="font-family:'Segoe UI';font-size:15px;color:#858585;">&nbspTeam Behind&nbsp </span>
                <span style="font-family:'Segoe UI';font-size:15px;color:#858585;"> | </span>
                <span style="font-family:'Segoe UI';font-size:15px;color:#858585;">&nbspPrivacy Policy </span>
             
        </div>
        
        

</div>

<div class="span6" style="height:280px;margin-top:60px;margin-left:120px;">
	<div class="span5" style="height:30px;background-color:#C86A62;box-shadow:0px 0px 30px #AEBCA3;border:0px solid #fff;margin-left:70px;"><a href="<?php echo base_url()?>index.php/facebook_signup" style="text-decoration:none;">
        	<span style="font-family:'Segoe UI';font-size:20px;color:#fff;margin-left:50px;margin-top:1px;">Connect using Facebook account</span></a>
        </div>
       
        <div class="span2" style="height:20px;margin-top:20px;margin-left:180px;">
        	<span style="font-family:'Segoe UI';font-size:20px;color:#858585;margin-left:60px;">or</span>
        </div>
        
        <div class="span6" style="height:30px;background-color:#6593C5;box-shadow:0 0 20px #AEBCA3;margin-top:30px;margin-left:26px;">
        	<a href="<?php echo base_url()?>index.php/signup" style="text-decoration:none;"><span style="font-family:'Segoe UI';font-size:20px;color:#fff;margin-left:67px;">Connect using college E-mail address</span></a>
        </div>
</div>

<div class="span1" style="height:280px;border-left:1px solid #fff;margin-top:50px;margin-left:100px;">
	
</div>

 <div class="span7" style="height:300px;margin-top:40px;margin-left:20px;">
 	<img src="<?php echo base_url();?>Assets/images/video_bg.jpg" style="width:450px;height:300px;"/>
 </div>      

	

</body>
