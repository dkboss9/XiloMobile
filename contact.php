<?php
  if (isset($_POST['signup'])) 
{
  $err = array();
  if(empty($_POST['name']))
  {
    $err['name']= "Enter Name";
  }
  //Checking if there is any numeric characters
  elseif (!preg_match("/[a-zA-Z'-]/",$_POST['name']))
  {
    $err['name']= "Enter the valid name";
  }
  
  else
  {
    $name= $_POST['name'];
  }
  if(empty($_POST['email']))
  {
    $err['email']= "Enter email";
  }
  //Checking whether email is in valid format or not
  else
  {
    $pattern = "/^([a-zA-z0-9\.\-])+\@(([a-zA-Z0-9\_\.])+\.)+([a-zA-Z0-9]{2,4})+$/";
    if (!preg_match($pattern, $_POST['email']))
    {
          $err['email']= "Enter valid email"; 
      }
  
     else
     {
      $email= $_POST['email'];
     }
    }
    
    if(empty($_POST['subject']))
    {
      $err['phonenumber']= "Enter subject";
    }
    else
    {
      $phonenumber= $_POST['subject'];
    }
    if(empty($_POST['message']))
  {
    $err['message']= "Enter Message";
  }
  else
  {
    $message=$_POST['message'];
  }
  if(count($err)== 0)
    {
      $date=date('Y-m-d H:i:s');
      require_once "connect.php";
      $sql = "insert into tbl_message(name,email,subject,message,date)values ('$name','$email','$phonenumber','$message','$date')";
      mysqli_query($conn,$sql);
      if (mysqli_insert_id($conn)>0) {
      	header("location:message_send.php");
         } 
    }
}
  ?>


<!DOCTYPE html>
<html>
	<head>
		<title>Contact Form</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<style>
	.bg h2.title {
	margin-right: 0;
	margin-left: 0;
	margin-top: 0;
	}
	h2.title:before {
	content: " ";
	position: absolute;
	background: #fff;
	bottom: -6px;
	width: 220px;
	height: 30px;
	z-index: -1;
	left: 50%;
	margin-left: -110px;
	}
	b, strong {
	font-weight: bold;
	}
	h2.title {
	color: #FE980F;
	font-family: 'Roboto', sans-serif;
	font-size: 18px;
	font-weight: 700;
	margin: 0 15px;
	text-transform: uppercase;
	margin-bottom: 30px;
	position: relative;
	}
	.text-center {
	text-align: center;
	}
	#contact-page .form-control {
	background-color: #fff;
	border: 1px solid orange;
	height: 46px;
	padding: 6px 12px;
	width: 100%;
	font-size: 16px;
	border-radius: 4px;
	box-shadow: inherit;
	}
	.form-control {
	display: block;
	width: 100%;
	height: 34px;
	padding: 6px 12px;
	font-size: 14px;
	line-height: 1.428571429;
	color: #555;
	vertical-align: middle;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ccc;
	border-radius: 4px;
	}
	.contact-form .form-group {
	margin-bottom: 20px;
	}
	.btn.btn-primary {
	background: #FE980F;
	border: 0 none;
	border-radius: 0;
	margin-top: 16px;
	float: right;
	}
	#contact-page #message {
	height: 160px;
	}
	.col-sm-4 {
	width: 33.33333333333333%;
	}
	#contact-page .contact-info address {
	margin-bottom: 40px;
	margin-top: -5px;
	float:right;
	}
	.address {
	margin-bottom: 20px;
	font-style: normal;
	line-height: 1.428571429;
	}
	#contact-page .contact-info p {
	margin-bottom: 0;
	color: orange;
	font-size: 16px;
	line-height: 25px;
	}
	.p {
	margin: 0 0 10px;
	}
	.col-sm-8{
	flex: 0 0 66%;
	max-width: 66%;
	}
	</style>
	<body>
		<?php
		include "header.php";
		?>
		<div id="contact-page" class="container">
			<div class="bg">
				<div class="row">
					<div class="col-sm-8">
						<div class="contact-form">
							<h2 class="title text-center">Get In Touch</h2>
							<div class="status alert alert-success" style="display: none"></div>
							<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
								<div class="form-group col-md-6">

									<input type="text" name="name" class="form-control" required placeholder="Name">
								</div>
								<div class="form-group col-md-6">
									<input type="email" name="email" class="form-control" required placeholder="Email">
								</div>
								<div class="form-group col-md-12">
									<input type="text" name="subject" class="form-control" required placeholder="Subject">
								</div>
								<div class="form-group col-md-12">
									<textarea name="message" id="message" required class="form-control" rows="8" placeholder="Your Message Here"></textarea>
								</div>
								<div class="form-group col-md-12">
									<input type="submit" name="signup" value="Send">
								</div>
							</form>
						</div>
					</div>
					
					<div class="col-sm-4">
						<div class="contact-info">
							<h2 class="title text-center">Contact Info</h2>
							<address>
								<p>Xilo Mobile Inc.</p>
								<p>Kathmandu Nepal</p>
								<p>Mobile: +977 9868017555</p>
								<p>Mobile: +977 9808585515<p>
									<p>Mobile: +977 9818740337</p>
									<p>Email: maharjanruchan@gmail.com</p>
								</address>
							</div>
						</div>
						
						
					</div>
				</div>
			</div>
			<?php
			include "footer.php";
			?>
			<script src="js/commentscript.js">
				
			</script>
			
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		</body>
	</html>