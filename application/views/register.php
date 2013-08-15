<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Browseboard-Create new account!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Loading Bootstrap -->
    <link href="<?php echo base_url('Assets/css/bootstrap.css');?>" rel="stylesheet">

    <!-- Loading Flat UI -->
    <!--<link href="<?php echo base_url('Assets/css/flat-ui.css');?>" rel="stylesheet"> -->
     <link href="<?php echo base_url('Assets/css/accordian.css');?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?php echo base_url('Assets/images/favicon.ico');?>">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
    <![endif]-->
  </head>
<script type="text/javascript" src="<?php echo base_url('Assets/js/jquery.js')?>"></script>

<script src="<?php echo base_url('Assets/js/jquery.fullscreenr.js')?>" type="text/javascript"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.6/jquery-ui.min.js"></script> 
 	
<script type="text/javascript"> 

       var FullscreenrOptions = {  width: 1366, height: 100, bgID: '#bgimg' };
			// This will activate the full screen background!
		jQuery.fn.fullscreenr(FullscreenrOptions);
 
		
			// You need to specify the size of your background image here (could be done automatically by some PHP code)
			
		//-->
</script> 
<script>
$(document).ready(function(e) {
		
    
    $("#next").click(function(e) {
	var fields = $('#step1 input[type=text]');
        var error = 0;
	fields.each(function(){
            var value = $(this).val();
            if($(this).attr('id')=='firstname' && (value.match(/[_\W0-9]/) || value.length<1)) {
			$("#firstname_error").text("Something's wrong here!"); 
			$("#firstname_img").css({"visibility":"hidden"}); 			              
                	error++;		
            } else {
		if ($(this).attr('id')=='firstname') {
			$("#firstname_error").text("");
			$("#firstname_img").css({"visibility":"visible","margin-left":"5px"});
                	$(this).addClass('valid');
            	}
	    }
	    if($(this).attr('id')=='lastname' && (value.match(/[_\W0-9]/) || value.length<1)) {
			$("#lastname_error").text("Something's wrong here!"); 
			$("#lastname_img").css({"visibility":"hidden"});
			error++;		
            } else {
		if ($(this).attr('id')=='lastname') {
			$("#lastname_error").text("");
			$("#lastname_img").css({"visibility":"visible","margin-left":"5px"});
                	$(this).addClass('valid');
            	}
           }
	    if($(this).attr('id')=='gender' && (value.toLowerCase() !="male" && value.toLowerCase() != "female" )) {
			$("#gender_error").text("Something's wrong here!");
			$("#gender_img").css({"visibility":"hidden"});              
                	error++;		
            } else {
		if ($(this).attr('id')=='gender') {
			$("#gender_error").text("");
			$("#gender_img").css({"visibility":"visible","margin-left":"5px"});
                	$(this).addClass('valid');
            	}
            }
	    if($(this).attr('id')=='college' && ((/\d/.test(value)) || value.length<1)) {
			$("#college_error").text("Something's wrong here!");
			$("#college_img").css({"visibility":"hidden"});
			error++;		
            } else {
                if ($(this).attr('id')=='college') {
			$("#college_error").text("");
			$("#college_img").css({"visibility":"visible","margin-left":"5px"});
                	$(this).addClass('valid');
            	}
            }
	    	
        });

	if(!error){
        $("#step1").css({"display":"none"});
	$("#step2").css({"display":"block"});
	}
	else
	return false;
});       

$("#back").click(function(e) {
         $("#step1").css({"display":"block"});
	$("#step2").css({"display":"none"});
});

$("#submit").click(function(e) { 
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
        var fields = $('#step2 input[type=text]');
        var error = 0;

        fields.each(function(){
            var value = $(this).val(); 
	    if($(this).attr('id')=='email' && $("#college").val()=="IIT-Delhi"){
			var emailPattern = /^[a-zA-Z0-9._-]+@iitd.ac.in/;
            	if(!emailPattern.test(value))  {
                	$("#email_error").text("Something's wrong here!");
			$("#email_img").css({"visibility":"hidden"});			              
               		error++;
            	} else {
			$("#email_error").text("");
			$("#email_img").css({"visibility":"visible","margin-left":"5px"});
                	$(this).addClass('valid');
            	}
		}
		else if($(this).attr('id')=='email' && $("#college").val()=="IIT-Bombay"){
			var emailPattern = /^[a-zA-Z0-9._-]+@iitb.ac.in/;
            	if(!emailPattern.test(value)) {
                	$("#email_error").text("Something's wrong here!");
			$("#email_img").css({"visibility":"hidden"});			              
               		error++;
            	} else {
			$("#email_error").text("");
			$("#email_img").css({"visibility":"visible","margin-left":"5px"});
                	$(this).addClass('valid');
            	}
		}
		else if($(this).attr('id')=='email' && $("#college").val()=="DA-IICT"){
			var emailPattern = /^[a-zA-Z0-9._-]+@daiict.ac.in/;
            	if(!emailPattern.test(value)) {
                	$("#email_error").text("Something's wrong here!");
			$("#email_img").css({"visibility":"hidden"});			              
               		error++;
            	} else {
			$("#email_error").text("");
			$("#email_img").css({"visibility":"visible","margin-left":"5px"});
                	$(this).addClass('valid');
            	}
		}
		else if($(this).attr('id')=='email'){

            	if(!emailPattern.test(value))  {
                	$("#email_error").text("Something's wrong here!");
			$("#email_img").css({"visibility":"hidden"});			              
               		error++;
            	} else {
			$("#email_error").text("");
			$("#email_img").css({"visibility":"visible","margin-left":"5px"});
                	$(this).addClass('valid');
            	}


	    }
	    else{
		if( value.length<1 ) {
			if($(this).attr('id')=='department'){
				$("#department_error").text("Something's wrong here!");
				$("#department_img").css({"visibility":"hidden"});
			}
			if($(this).attr('id')=='year'){
				$("#year_error").text("Something's wrong here!");
			}		
			error++;
            } 	else {
              		if($(this).attr('id')=='department'){
				$("#department_error").text("");
				$("#department_img").css({"visibility":"visible"});
				$(this).addClass('valid');
			}
			if($(this).attr('id')=='year'){
				$("#year_error").text("");
				$("#year_img").css({"visibility":"visible"});
				$(this).addClass('valid');
			}

		
            }
	      }

        });

        var fields = $('#step2 input[type=password]');
        fields.each(function(){
           var value = $(this).val();
           if( value.length<6 ) {
			if($(this).attr('id')=='password'){
       				$("#password_error").text("Something's wrong here!");
				$("#password_img").css({"visibility":"hidden"});
			}
			if($(this).attr('id')=='cpassword'){
				$("#cpassword_error").text("Something's wrong here!");
				$("#cpassword_img").css({"visibility":"hidden"});			
			}        
                	error++;
		
            } else {
			$("#password_error").text("");
			$("#cpassword_error").text("");
			$("#password_img").css({"visibility":"visible","margin-left":"5px"}); 
			$("#cpassword_img").css({"visibility":"visible","margin-left":"5px"});                	
			$(this).addClass('valid');
			}
            });
	if(!error) {
		if( $('#password').val() != $('#cpassword').val() ) {
		    	$('#step2 input[type=password]').each(function(){
                        $("#password_error").text("Something's wrong here!");
			$("#cpassword_error").text("Something's wrong here!");
			$("#cpassword_img").css({"visibility":"hidden"});
			$("#password_img").css({"visibility":"hidden"});
                    });
                 return false;   
                    
            }
	}
	else
		return false;	

});   

        
});


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



<body>



<?php 
				
	if (isset($_POST['submit'])) {
  		$password = $_POST['password'];
  		$firstname = $_POST['firstname'];
  		$lastname = $_POST['lastname'];
  		$email = $_POST['email'];
		$college = $_POST['college'];
		$gender = $_POST['gender'];
		$semester = $_POST['year'];
		$query = "SELECT * from user_detail where email ='".$email."'";
		
		$result = mysql_query($query);
		$row = mysql_num_rows($result);
			list($user, $host) = explode("@", $email);
		
	       		if (!checkdnsrr($host, "MX") && !checkdnsrr($host, "A"))
       			{
               		?>
			<script> window.alert('Invalid email address!');
			window.location.href="<?php echo base_url()?>index.php/signup" </script>
			<?php	
			}

  
		if($row > 0){
			?>
			<script> window.alert('Username is already in use. Select some other username!');
			window.location.href="<?php echo base_url()?>index.php/signup" </script>
			<?php		
			}
		else{		
			
			$query = mysql_query("insert into user_detail ( password, email, first_name, last_name, college, gender, semester, profile_image) values ('".$password."','".$email."','".$firstname."','".$lastname."','".$college."','".$gender."','".$semester."','".$pic."')") or die("alas");
			$query=mysql_query("insert into group_member(group_id,username_group) values(1,'{$email}')");
		
		if(!$query){
			?>
			<script type="text/javascript"> window.alert("Try again. There is some error!"); 
			window.loaction.href="<?php echo base_url()?>index.php/signup" </script> 
			<?php
			}

		else{
				?> 
				<script> window.alert('You are now succefully registered. Please log in to your account!');
    				window.location.href="<?php echo base_url()?>index.php"</script>
			
				<?php 
			    }
		    }
}

	else {
 ?> 

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

<form method="post"> 

<div id="step1" class="span8" style="height:290px;background-color:#fff;box-shadow:0px 0px 30px #636363;border-radius:10px;margin-top:20px;margin-left:380px;display:block">
	<div class="span3" style="height:50px;width:50px;border-radius:50px;background-color:#1cbc9b;margin-top:5px;">
        	<span style="font-family:'Segoe UI';font-size:35px;color:#fff;margin-left:14px;margin-top:10px;">1</span>

        </div>
        <div class="span1" style="height:50px;border-left:2px solid #B9B9B9;margin-left:4px;margin-top:5px;"></div>
        
        <div class="span3" style="height:30px;width:30px;border-radius:30px;background-color:#669acc;margin-top:15px;margin-left:-56px;">
        	<span style="font-family:'Segoe UI';font-size:20px;color:#fff;margin-left:10px;">2</span>
        </div>
        
        <div class="span2" style="height:30px;margin-top:10px;margin-left:100px;border-bottom:2px solid #C2C2C2">
        	<span style="font-family:'Segoe UI';font-size:24px;color:#CD6969;margin-left:30px;">STEP - 1</span>
        </div>
        
        <div class="span7" style="height:30px;margin-top:10px;margin-left:105px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri,'Californian FB'">First Name</span>
                <input  id="firstname" name="firstname" type="text" placeholder="Type in your First Name" value="<?php echo isset($first_name) ? $first_name : '' ?>" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/>
		<span id="firstname_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="firstname_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">
        </div>
        <div class="span7" style="height:30px;margin-top:20px;margin-left:108px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Last Name</span>
                <input type="text" id="lastname" name="lastname" placeholder="Type in your Last Name" value="<?php echo isset($last_name) ? $last_name : '' ?>" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/> 
		<span id="lastname_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="lastname_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">
        </div>
        <div class="span7" style="height:30px;margin-top:20px;margin-left:130px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Gender</span>
                <select id="gender" name="gender"style="height:25px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff">
		<option>Male</option>
		<option>Female</option>
		</select>
		<span id="gender_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="gender_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">
        </div>
        <div class="span7" style="height:30px;margin-top:20px;margin-left:127px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">College
</span>              
		<select id="college" name="college" style="height:25px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff">
	<option>DA-IICT</option>
	<option>IIT-Delhi</option>
	<option>IIT-Bombay</option>
	<option selected>Other</option>
		
		</select>

		<span id="college_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="college_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;">
		</div>
        
        <div class="span" style="height:20px;margin-left:460px;margin-top:10px;">
        	<button id="next" class="btn btn-mini btn-primary" type="button" >Next</button>
        </div>
	

</div>

<div id="step2" class="span8" style="height:335px;background-color:#fff;box-shadow:0px 0px 30px #636363;border-radius:10px;margin-top:20px;margin-left:380px;display:none">
	<div class="span3" style="height:30px;width:30px;border-radius:30px;background-color:#669ACC;margin-top:15px;">
        	<span style="font-family:'Segoe UI';font-size:20px;color:#fff;margin-left:8px;">1</span>
        </div>
        <div class="span1" style="height:50px;border-left:2px solid #B9B9B9;margin-left:4px;margin-top:5px;"></div>
        
        <div class="span3" style="height:50px;width:50px;border-radius:50px;background-color:#1CBC9B;margin-top:5px;margin-left:-57px;">
        	<span style="font-family:'Segoe UI';font-size:35px;color:#fff;margin-left:17px;">2</span>
        </div>
        
        <div class="span2" style="height:30px;margin-top:10px;margin-left:100px;border-bottom:2px solid #C2C2C2">
        	<span style="font-family:'Segoe UI';font-size:24px;color:#CD6969;margin-left:30px;">STEP - 2</span>
        </div>
        
        <div class="span7" style="height:30px;margin-top:10px;margin-left:125px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Email</span>
                <input type="text" id="email" name="email" placeholder="Your email will be username" value="<?php echo isset($email) ? $email : '' ?>" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/>
		<span id="email_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="email_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">
		
        </div>
        <div class="span7" style="height:30px;margin-top:20px;margin-left:97px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Password</span>
                <input type="password" name="password" id="password" placeholder="Minimum 6 letter " style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/>
		<span id="password_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="password_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">
        </div>
        <div class="span8" style="height:30px;margin-top:20px;margin-left:46px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB;'">Retype Password</span>
                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm your password" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:18px;background-color:#fff"/>
		<span id="cpassword_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="cpassword_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">
		
        </div>
        <div class="span7" style="height:30px;margin-top:20px;margin-left:81px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Department</span>
                <select id="department" name="department" style="height:25px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff">
		<option>Computer Science</option>
		<option>Information Technology</option>
		<option>Chemical</option>
		<option>Civil</option>
		<option>Mechanical</option>
		<option>Electronics</option>
		</select>		
		<span id="department_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="department_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">
        </div>
        
        <div class="span7" style="height:30px;margin-top:20px;margin-left:135px;">
        	<span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Year</span>
                <select id="year" name="year" style="height:25px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff">
		<option>1st</option>
		<option>2nd</option>
		<option>3rd</option>
		<option>4th</option>
		</select>		

		<span id="year_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="year_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">
		</div>
        
        <div id="back" class="span2" style="height:20px;margin-left:30px;margin-top:10px;">
        	<button class="btn btn-mini btn-primary" type="button" ><< </button>
        </div>
        <div class="span2" style="height:20px;margin-left:300px;margin-top:10px;">
        	<input id="submit" name="submit" class="btn btn-mini btn-primary" type="submit" ></input>
        </div>
	

</div>

</form>


<script src="<?php echo base_url(); ?>Assets/js/jquery-ui-1.10.0.custom.min.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/jquery.dropkick-1.0.0.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/custom_checkbox_and_radio.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/custom_radio.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/jquery.tagsinput.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/bootstrap-tooltip.js"></script>
    <script src="<?php echo base_url(); ?>Assets/js/jquery.placeholder.js"></script>
    <script src="http://vjs.zencdn.net/c/video.js"></script>
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
<script type="text/javascript"> 

  </script> 
<?php } ?>	
</body>
</html>
