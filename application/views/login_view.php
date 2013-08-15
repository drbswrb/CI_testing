<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Browseboard-Login or sign up</title>
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
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<script>
$(document).ready(function(e) {
        setInterval("rotate()",4000);
	$("#show_signup").click(function(e) {
                $("#login").animate({opacity:"0"},function(){
			$("#login").css({"display":"none"});
			$("#signup").css({"display":"block"}).animate({opacity:"1"});
				
		});
        });
	
	$("#show_login").click(function(e) {
                $("#signup").animate({opacity:"0"},function(){
			$("#signup").css({"display":"none"});
			$("#login").css({"display":"block"}).animate({opacity:"1"});
				
		});
        });
	
	$("#next").click(function(e) {

		var fields = $('#step1 input[type=text]');
        var error = 0;
	fields.each(function(){
            var value = $(this).val();
            if($(this).attr('id')=='firstname' && (value.match(/[_\W0-9]/) || value.length<1)) {
			$("#firstname_error").text("Something's wrong!"); 
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
			$("#lastname_error").text("Something's wrong!"); 
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
			$("#gender_error").text("Something's wrong!");
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
			$("#college_error").text("Something's wrong!");
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

$("#submit").click(function(e) { 
	var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;  
        var fields = $('#step2 input[type=text]');
        var error = 0;

        fields.each(function(){
            var value = $(this).val(); 
	    if($(this).attr('id')=='email' && $("#college").val()=="IIT-Delhi"){
			var emailPattern = /^[a-zA-Z0-9._-]+@iitd.ac.in/;
            	if(!emailPattern.test(value))  {
                	$("#email_error").text("Something's wrong!");
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
                	$("#email_error").text("Something's wrong!");
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
                	$("#email_error").text("Something's wrong!");
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
                	$("#email_error").text("Something's wrong!");
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
				$("#department_error").text("Something's wrong!");
				$("#department_img").css({"visibility":"hidden"});
			}
			if($(this).attr('id')=='year'){
				$("#year_error").text("Something's wrong!");
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
       				$("#password_error").text("Something's wrong!");
				$("#password_img").css({"visibility":"hidden"});
			}
			if($(this).attr('id')=='cpassword'){
				$("#cpassword_error").text("Something's wrong!");
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
                        $("#password_error").text("Something's wrong!");
			$("#cpassword_error").text("Something's wrong!");
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

function rotate(){
		//get current photo havong class named current
			var curPhoto=$("#photoShow div.current");
		
		var nxtPhoto=curPhoto.next();
		
		if(nxtPhoto.length == 0)
		nxtPhoto=$("#photoShow div:first");
		
		curPhoto.removeClass("current").addClass("previous");
		nxtPhoto.css({opacity:0.0}).addClass("current").animate({opacity:"1.0"},1000,function(){
			
			curPhoto.removeClass("previous");
			
			});
		
		
		
		
		}
</script>
 
 
 
 
 
 
 
 
 
 
  <style>
body {
    background: url(<?php echo base_url();?>Assets/images/background.png) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    
} 




#photoShow div{
	position:absolute;
	z-index:0;
}

#photoShow div.previous{
	
 z-index:1;	
}

#photoShow div.current{
	
z-index:2;	
	
}

#show_login:hover{
	cursor:pointer;
}

#show_signup:hover{
	cursor:pointer;
}
</style>
 




    <body>
	<?php 
		if($this->input->cookie('mycookie'))
		{
			$this->session->set_userdata('login_state',  TRUE);
			redirect(base_url().'/index.php/home');
			
		}
	
	?>
	
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
		$this->load->database();
		$result = mysql_query($query);
		$row = mysql_num_rows($result);
			list($user, $host) = explode("@", $email);
		
	       		if (!checkdnsrr($host, "MX") && !checkdnsrr($host, "A"))
       			{
               		?>
			<script> window.alert('Invalid email address!');
			window.location.href="<?php echo base_url()?>index.php" </script>
			<?php	
			}

  
		if($row > 0){
			?>
			<script> window.alert('Username is already in use. Select some other username!');
						
			window.location.href="<?php echo base_url()?>index.php"
				
			 </script>
			<?php		
			}
		else{		
		
			$query = mysql_query("insert into user_detail ( password, email, first_name, last_name, college, gender, semester) values ('".$password."','".$email."','".$firstname."','".$lastname."','".$college."','".$gender."','".$semester."')");
			$query=mysql_query("insert into group_member(group_id,username_group) values(1,'{$email}')");
		
		if(!$query){
			?>
			<script type="text/javascript"> window.alert("Try again. There is some error!"); 
			window.loaction.href="<?php echo base_url()?>index.phps" </script> 
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


        <!-- navigation at top-->
        
        <div class="span12" style="width:100%;height:40px;margin-left:0;border-bottom:1px solid #fff;margin-top:20px;">
	<div class="span4" style="margin-left:80px;margin-top:-15px;height:30px;">
        	<span style="font-family:Calibri, 'Californian FB';color:#1cbc9b;font-size:42px;font-weight:bold;">browseboard</span>
        </div>
        
        <div class="span6" style="height:30px;margin-left:480px;margin-top:0px;width:500px;">
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

<!-- left side for promotional video -->

<div class="span7" style="height:300px;margin-top:20px;margin-left:100px;">
	<img src="<?php echo base_url()?>Assets/images/video_bg.jpg" style="height:300px;"/>
</div>

<div class="span1" style="width:2px;height:330px;margin-left:-30px;border-left:2px solid #fff;margin-top:25px;">
</div>

<!-- right side for login and sign up form-->

<?php        
					echo form_open('index.php/login/validate');
				
?>

<div id="login" class="span7" style="height:300px;margin-top:20px;background-color:#fff;box-shadow:0px 0px 30px #636363;margin-left:40px;overflow:none;display:block;">
	<div  class="span4" style="height:280px;margin-left:0;margin-top:10px;display:block;">
        	<div class="span4" style="height:26px;margin-top:10px;margin-left:120px">
                	<span style="font-family:'Segoe UI';font-size:20px;color:#cd6667;margin-left:5px;">Login</span>
                </div>
                <input type="text" name="Username" placeholder="Enter your browseboard username" style="margin-left:50px;margin-top:20px;width:240px;margin-left:30px;" />
                
                 <input type="password" name="Password" placeholder="Enter your browseboard password" style="margin-left:50px;margin-top:20px;width:240px;margin-left:30px;" />
                 
                 <input type="submit" value="Let me in!" class="btn" style="margin-left:105px;margin-top:15px;margin-bottom:20px;"/>
</form>
                 <br>
                 <span id="show_signup" style="font-family:'Segoe UI';color:#66669a;margin-left:30px;">New to<span style="color:#1ABC9C;font-style:normal;"> browseboard</span>, click here to register!</span>
        </div>
        <div class="span1" style="width:2px;height:300px;">
        	<div class="span1" style="margin-left:-8px;margin-top:110px;"><span style="font-size:18px;">or</span></div>
        </div>
        
        <div class="span2" style="width:180px;height:10px;margin-top:40px;margin-left:20px;margin-bottom:-40px;">
        	<span style="font-family:'Segoe UI';color:#cd6667;font-size:20px;">Facebook Connect</span>
        </div>
	<div class="span2" style="height:50px;margin-top:70px;margin-left:55px;">
        	<a href="<?php echo base_url()?>index.php/facebook_signup" style="text-decoration:none;"><img src="<?php echo base_url()?>Assets/images/fb.jpg" style="width:80px;height:80px;"/></a>
        </div>
        <div class="span2" style="width:180px;height:80px;margin-top:50px;">
        	<a href="<?php echo base_url()?>index.php/facebook_signup" style="text-decoration:none;"><span style="font-family:'Segoe UI';font-size:14px;color:#66669a"> Use your facebook account to instantly connect with us.</span> </a>
        </div>
        


</div>

<div id="signup" class="span7" style="height:320px;margin-top:20px;background-color:#fff;box-shadow:0px 0px 30px #636363;margin-left:40px;display:none;opacity:0;'">

<form method="post">
	<div class="span8" id="step1" style="display:block;">
                <div class="span3" style="height:50px;width:50px;border-radius:50px;background-color:#1cbc9b;margin-top:5px;">
                        <span style="font-family:'Segoe UI';font-size:35px;color:#fff;margin-left:14px;margin-top:10px;">1</span>
                </div>
                <div class="span1" style="height:50px;border-left:2px solid #B9B9B9;margin-left:4px;margin-top:5px;"></div>
                
                <div class="span3" style="height:30px;width:30px;border-radius:30px;background-color:#669acc;margin-top:15px;margin-left:-56px;">
                        <span style="font-family:'Segoe UI';font-size:20px;color:#fff;margin-left:10px;">2</span>
                </div>
                
                <div class="span2" style="height:30px;margin-top:10px;margin-left:60px;border-bottom:2px solid #C2C2C2">
                        <span style="font-family:'Segoe UI';font-size:24px;color:#CD6969;margin-left:30px;">STEP - 1</span>
                </div>
                
                <div class="span7" style="height:30px;margin-top:10px;margin-left:45px;">
                        <span style="font-size:17px;color:#66669A;font-family:Calibri,'Californian FB'">First Name</span>
                        <input  id="firstname" name="firstname" type="text" placeholder="Type in your First Name" value="<?php echo isset($first_name) ? $first_name : '' ?>" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/>

		<span id="firstname_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="firstname_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">

                </div>
                <div class="span7" style="height:30px;margin-top:20px;margin-left:48px;">
                        <span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Last Name</span>
                        <input type="text" id="lastname" name="lastname" placeholder="Type in your Last Name" value="<?php echo isset($last_name) ? $last_name : '' ?>" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/> 
		<span id="lastname_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="lastname_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">                
		</div>

                <div class="span7" style="height:30px;margin-top:20px;margin-left:70px;">
                        <span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Gender</span>
                        <select id="gender" name="gender" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff">
			<option> Male </option>
			<option> Female </option>
			</select> 
		<span id="gender_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="gender_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">                
		
		</div>
                <div class="span7" style="height:30px;margin-top:20px;margin-left:71px;">
                        <span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">College</span>
            <select id="college" name="college" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff">
			<option>DA-IICT</option>
			<option>IIT-Delhi</option>
			<option>IIT-Bombay</option>
			<option>Other</option>
		
			</select>

			<span id="college_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="college_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">                        
		
			</div>
                
                        <div class="span" style="height:20px;margin-left:400px;margin-top:10px;">
                                <button id="next" class="btn btn-mini btn-primary" type="button" >Next</button>
                        </div>
						<div class="span" style="height:20px;margin-left:10px;margin-top:5px;">
       		<span id="show_login" style="font-family:'Segoe UI';color:#cd6667;margin-left:10px;">Already a member? Click to Log in</span>   
          </div>
                </div>
                
                <!--stage 2 of sign up form-->
                
                <div class="span12" id="step2"  style="display:none;">
                        <div class="span3" style="height:30px;width:30px;border-radius:30px;background-color:#669ACC;margin-top:15px;">
        	               <span style="font-family:'Segoe UI';font-size:20px;color:#fff;margin-left:8px;">1</span>
                        </div>
                        <div class="span1" style="height:50px;border-left:2px solid #B9B9B9;margin-left:4px;margin-top:5px;"></div>
        
                        <div class="span3" style="height:50px;width:50px;border-radius:50px;background-color:#1CBC9B;margin-top:5px;margin-left:-57px;">
        	                <span style="font-family:'Segoe UI';font-size:35px;color:#fff;margin-left:17px;">2</span>
                        </div>
                        
                        <div class="span2" style="height:30px;margin-top:10px;margin-left:60px;border-bottom:2px solid #C2C2C2">
                                <span style="font-family:'Segoe UI';font-size:24px;color:#CD6969;margin-left:30px;">STEP - 2</span>
                        </div>
                        
                        <div class="span7" style="height:30px;margin-top:60px;margin-left:-240px;">
                                <span style="font-size:17px;color:#66669A;font-family:Calibri,'Californian FB'">Email</span>
                                <input  id="email" name="email" type="text" placeholder="Your email be your username" value="<?php echo isset($email) ? $email : '' ?>" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/>
			<span id="email_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="email_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">                        

			</div>
                        <div class="span7" style="height:30px;margin-top:20px;margin-left:47px;">
                                <span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Password</span>
                                <input type="password" id="password" name="password" placeholder="Minimum 6 letters" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/> 
			<span id="password_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="password_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">                        

			</div>
                        <div class="span7" style="height:30px;margin-top:20px;margin-left:-10px;">
                                <span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Re-type Password</span>
                                <input type="password" id="cpassword" name="cpassword" placeholder="R-enter your password" style="height:15px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff"/> 
			<span id="cpassword_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="cpassword_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">                        

			</div>
                        <div class="span7" style="height:30px;margin-top:20px;margin-left:31px;">
                                <span style="font-size:17px;color:#66669A;font-family:Calibri, 'Californian FB'">Department
                </span>              
                        <select id="department" name="department" style="height:25px;font-size:12px;border:1px solid #858585;border-radius:0;margin-left:20px;background-color:#fff">
		<option>Computer Science</option>
		<option>Information Technology</option>
		<option>Chemical</option>
		<option>Civil</option>
		<option>Mechanical</option>
		<option>Electronics</option>
		</select><span id="department_error" style="font-size:17px;margin-left:20px;color:red;font-family:Calibri,'Californian FB'"></span>
		<img id="department_img" border="0" src="<?php echo base_url();?>Assets/images/tickmark.png" alt="Pulpit rock" width="30" height="30" style="visibility:hidden;margin-left:5px">                                

			</div>
             <div class="span7" style="height:30px;margin-top:20px;margin-left:85px;">
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

                        <div class="span" style="height:20px;margin-left:400px;margin-top:0px;">
                        	<input id="submit" name="submit" class="btn btn-mini btn-primary" type="submit" ></input>
        		</div>
          </div>      
          

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
<?php } ?>       
    </body>
</html>	
