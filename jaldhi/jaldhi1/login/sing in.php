<?php
include ('conn.php');
if(isset($_POST['reg']))
    {
        $Email= $_POST['email'];
        $Password= $_POST['password'];
        if($Password=='' or $Email == '')
        {
            echo "please enter the password or email";
        }
        else
        {
            $qry ="SELECT email FROM register_data_sc WHERE email='$Email'";
            $data = mysqli_query($con,$qry);
            if($data)
            {
                if(!$r = mysqli_fetch_array($data))
                {
                    // $uname = $r['uname'];
                    
                    $sql = "INSERT INTO register_data_sc VALUES ('','$Email','$Password')";
                    $data=mysqli_query($con,$sql);
                    
                    header('Location: http://localhost/jaldhi/index.php');

                  }
                  else
                  {
                      echo "User already registerd";
                      // header('location:www.youtube.com');
                  }
                }
        }
    }
    if(isset($_POST['log']))
    {
        $Email= $_POST['email'];
        $Password= $_POST['password'];
        if($Password=='' or $Email == '')
        {
            echo "please enter the password or email";
        }
        else
        {
            $qry ="SELECT Email,Password FROM register_data_sc WHERE Email='$Email' AND Password='$Password'";
            $data = mysqli_query($con,$qry);
            if($data)
            {
                if($r = mysqli_fetch_array($data))
                {
                    // $uname = $r['uname'];
                    header('Location: http://localhost/sign in/index1.php');
                }
                else{
                    echo "no record found";
                }
            }
        }
    }

?>




<!DOCTYPE html>
<html>
	<script
  	src="https://code.jquery.com/jquery-3.6.3.js"
  	integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  	crossorigin="anonymous"></script>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/singinpagecss.css">
</head>
<body> 
	<div class="bg"></div>
	<div class="container">
		<div class="left"></div>
		<div class="right">
			<div class="formBox">
				<h1>Sign In Form</h1>
				<form>
					<p>Username</p>
					<input type="email" name="email" required>
					<span class="error_form" id="email_error_message"></span>
					<p>Password</p>
					<input type="Password" name="password"  required>
					<span class="error_form" id="password_error_message"></span>
					<input type="submit" name="" value="Sign In">
					<a href="#">Forgot Password</a>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(function() {
		$("#email_error_message").hide();
		$("#password_error_message").hide();
		var error_email = false;
		var error_password = false;
		$("#form_email").focusout(function() {
			check_email();
		});
		$("#form_password").focusout(function() { 
			check_password();
		});
		
		function check_password() {
			var password_length = $("#form_password").val().length;
			if (password_length <8) {
			$("#password_error_message").html("Atleast 8 Characters");
			$("#password_error_message").show();
			error_password = true;
			} else {
			$("#password_error_message").hide();
			}
		}

		function check_email() {
			var pattern = /^([\w~ \ -]+@([\w-]+\.)+[\w-]{2,4})?$/;
			var email =$("#from_email").val();
			$("#form_email").val();
			if (pattern.test (email) && email !== '') {
			$("#email_error_message").hide();
			} else {
			$("#email_error_message").html("Invalid Email");
			$("#email_error_message").show();
			error_email = true;
			}
		}

		$("#registration_form").submit(function() {
			error_email = false;
			error_password = false;
			check_email();
			check_password();
			if (error_email === false && error_password === false ) 
				{ alert("Registration Successfull");
				return true;
			} else {
				alert("Please Fill the form Correctly");
				return false;
			}

		});
	});
	</script>
</body>
</html>