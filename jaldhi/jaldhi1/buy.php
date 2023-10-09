<?php
  include "heder.php"
?>


<!DOCTYPE html>
<title>
      Vivek Vadoliya
   </title>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>niture</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/buycss.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <script
  	src="https://code.jquery.com/jquery-3.6.3.js"
  	integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM="
  	crossorigin="anonymous"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  

</head>
<body class="main-layout contact_page">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<section>
<div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>

     <div class="wrapper">

      <!-- end loader --> 
      <div class="sidebar">
         <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">
                
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="about.php">About</a>
                </li>
                <li>
                    <a href="product.php">Product</a>
                </li>
                <li>
                    <a href="blog.php">Blog</a>
                </li>
                <li class="active">
                    <a href="contact.php">Contact Us</a>
                </li>
            </ul>

        </nav>
      </div>
     
     <div id="content">
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
           
         <div class="container-fluid">
             
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="index.php"><img src="images/logo.jpg" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="right_header_info">
                     <ul>
                        <!-- <li><a href="login/sing up.php"><img style="margin-right: 15px;" src="icon/1.png" alt="#" /></a></li> -->
                        <li><a href="buy.php"><img style="margin-right: 15px;" src="icon/3.png" alt="#" /></a></li>

                         <li>
                           <button type="button" id="sidebarCollapse">
                              <img src="images/menu_icon.png" alt="#" />
                           </button>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
            </div>
        
         <!-- end header inner --> 
      </header>
      <!-- end header -->
      
<div class="contactus">
   <div class="container-fluid">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="title">
                     <h2>Place Your Oder Hear</h2>
                    
                  </div>
               </div>
            </div>
          </div>
</div>
</section>
<section class="contact" id="contact">
    <div class="body-style">
        <div class="container-c">
          <div class="content">
              <div class="address details">
                <i class="fas fa-map-marker-alt"></i>
              </div>
            </div>
            <div class="right-side">
              <form action="php/buy data.php" method="post">
                <div class="input-box">
                  <input type="text" name="name" id="" placeholder="Enter Your Name" required>
                  <span class="error_form" id="name_error_message"></span>
                </div>
                <div class="input-box">
                  <input type="email" name="email" id="" placeholder="Enter Your Email" required>
                  <span class="error_form" id="email_error_message"></span>
                </div>
                <div class="input-box">
                  <input type="text" name="number" id="" placeholder="Enter your Contact Number" required>
                  <span class="error_form" id="number_error_message"></span>
                </div>
                <div class="input-box">
                  <input type="text" name="pname" id="" placeholder="Enter Name of Product" required>
                  <span class="error_form" id="product_error_message"></span>
                </div>
                <div class="input-box">
                    <input type="number" name="quantity" id="" placeholder="Enter Quantity of Product" required>
                    <span class="error_form" id="quantity_error_message"></span>
                  </div>
                <div class="input-box">
                  <input type="text" name="address" id="" placeholder="Enter Your Address" required>
                  <span class="error_form" id="address_error_message"></span>
                </div>
                <div class="input-box message-box">
                </div>
				<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                	<button class="send">Send</button>
             	</div>
              </form>
            </div>
          </div>
        </div>
      </div>

</section>
<?php
    include "footer.php"
?>
   </div>

</div>

   <div class="overlay"></div>

      <!-- Javascript files--> 
      <script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function () {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
      </script>


      <script>
         $(document).ready(function(){
         $(".fancybox").fancybox({
         openEffect: "none",
         closeEffect: "none"
         });
         
         $(".zoom").hover(function(){
         
         $(this).addClass('transition');
         }, function(){
         
         $(this).removeClass('transition');
         });
         });
         
      </script> 


<script type="text/javascript">
		$(function()) {
		$("#number_error_message").hide();
		$("#name_error_message").hide();
		$("#email_error_message").hide();
		$("#product_error_message").hide();
		$("#quantity_error_message").hide();
    $("#address_error_message").hide();
		var error_number = false;
		var error_name = false;
		var error_email = false;
		var error_product = false;
		var error_quantity = false;
    var error_address = false;
		$("#form_number").focusout(function() {
			check_fname();
		});
		$("#form_name").focusout(function() {
			check_sname();
		});
		$("#form_email").focusout(function() {
			check_email();
		});
		$("#form_product").focusout(function() { 
			check_password();
		$("#form_quantity").focusout(function() {
		check_retype_password();
		});
    $("#form_address").focusout(function() { 
			check_password()
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

		function check_name() {
			var pattern /^[a-z A-Z]*$/;
			var name = $("#form_name").val()
			if (pattern.test(data) && data !== '') {
			$("#name_error_message").hide();
			} else {
			$("#name_error_message").html("should contain only chearter");
			$("#name_error_message").show();
			error_name = true;
			}
		}
		
		function check_product() {
			var pattern /^[a-z A-Z 0-9]*$/;
			var fname = $("#form_product").val()
			if (pattern.test(data) && data !== '') {
			$("#product_error_message").hide();
			} else {
			$("#name_error_message").html("should contain only chearter");
			$("#peoduct_error_message").show();
			error_product = true;
			}
		}
		
		function check_quantity() {
			var pattern /^[0-9]*$/;
			var fname = $("#form_quantity").val()
			if (pattern.test(data) && data !== '') {
			$("#quantity_error_message").hide();
			} else {
			$("#quantity_error_message").html("should contain only chearter");
			$("#quantity_error_message").show();
			error_quantity = true;
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

    function check_address() {
			var pattern /^[a-z A-Z 0-9]*$/;
			var fname = $("#form_address").val()
			if (pattern.test(data) && data !== '') {
			$("#address_error_message").hide();
			} else {
			$("#name_error_message").html("should contain only chearter");
			$("#address_error_message").show();
			error_address = true;
			}
		}

		$("#registration_form").submit(function() {
			error_number = false;
			error_name = false;
			error_email = false;
			error_product = false;
			error_quantity = false;
			check_number();
			check_name();
			check_email();
			check_product();
			check_quantity();
			if (error_number === false && error_name === false && error_email === false && error_product === false && error_quantity === false) 
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