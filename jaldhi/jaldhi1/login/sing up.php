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
                    
                    $sql = "INSERT INTO register_data_sc VALUES ('$Email','$Password')";
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
?>



<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign Up Form</title>
	<link rel="stylesheet" type="text/css" href="css/singuppagecss.css">
	<script
  	src="https://code.jquery.com/jquery-3.6.3.js"
  	integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  	crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
</head>
<body> 
	<div class="bg"></div>
	<div class="container">
		<div class="left"></div>
		<div class="right">
			<div class="formBox">
				<h1>Sign Up Page</h1>
				<form id="commonForm">
					<p>Email</p>
					<input type="email" name="email" required>
					<span class="error_form" id="email_error_message"></span>
					<p>Password</p>
					<input type="Password" name="password"  required>
					<span class="error_form" id="password_error_message"></span>
					<p>Re Enter Password</p>
					<input type="Password" name="password_2" required>
					<span class="error_form" id="retype_password_error_message"></span>
					<p>Date Of Birth</p>
					<input type="date" name="age" id="18" required>
					<span class="error_form" id="data_error_message"></span>
					<p>Number</p>
					<input type="char" name="num" id="+91 9909522435" required>
					<span class="error_form" id="number_error_message"></span>
					Gender
					<input type="radio" name="Gender" required>Male
					<input type="radio" name="Gender" required>Female
					<span class="error_form" id="gender_error_message"></span>
					<input type="file" class="customfile">
					<input type="submit" name="" value="Sign Up">
					<P> Do you have already account? </P>
					<a href="sing in.php">Sign In</a>
				</form>
			</div>
		</div>
	</div>
	



	<script type="text/javascript">
		$(function()) {
		$("#number_error_message").hide();
		$("#data_error_message").hide();
		$("#email_error_message").hide();
		$("#password_error_message").hide();
		$("#retype_password_error_message").hide();
		var error_number = false;
		var error_data = false;
		var error_email = false;
		var error_password = false;
		var error_retype_password = false;
		$("#form_number").focusout(function() {
			check_fname();
		});
		$("#form_data").focusout(function() {
			check_sname();
		});
		$("#form_email").focusout(function() {
			check_email();
		});
		$("#form_password").focusout(function() { 
			check_password();
		$("#form_retype_password").focusout(function() {
		check_retype_password();
		});

		function check_number() {
			var pattern /^[0-9]*$/;
			var fname = $("#form_number").val()
			if (pattern.test(Number) && Number !== '') {
			$("#fname_error_message").hide();
			} else {
			$("#fname_error_message").html("should contain only integer");
			$("#fname_error_message").show();
			error_fname = true;
			}
		}

		function check_data() {
			var pattern /^[0-9]*$/;
			var fname = $("#form_data").val()
			if (pattern.test(data) && data !== '') {
			$("#fname_error_message").hide();
			} else {
			$("#fname_error_message").html("should contain only integer");
			$("#fname_error_message").show();
			error_fname = true;
			}
		}
		
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
		
		function check_retype_password() {
			var password = $("#form_password").val();
			var retype_password = $("#form_retype_password").val();
			if (password !== retype_password) {
			$("#retype_password_error_message").html("Passwords Did not Matched"); $("#retype_password_error_message").show();
			error_retype_password = true;
			} else {
			$("#retype_password_error_message").hide();
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
			error_number = false;
			error_data = false;
			error_email = false;
			error_password = false;
			error_retype_password = false;
			check_number();
			check_data();
			check_email();
			check_password();
			check_retype_password();
			if (error_number === false && error_data === false && error_email === false && error_password === false && error_retype_password === false) 
				{ alert("Registration Successfull");
				return true;
			} else {
				alert("Please Fill the form Correctly");
				return false;
			}

		});
	});
	}
	</script>
</body>
</html>