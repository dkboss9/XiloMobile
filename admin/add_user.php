<?php
include("check_session.php"); 
include("connection.php");

if(isset($_POST['btn_save']))
{
$user_name=$_POST['user_name'];
$user_password=$_POST['user_password'];
$name=$_POST['name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$date=date('Y-m-d H:i:s');
mysqli_query($conn,"insert into tbl_admin (a_name,a_username,a_password,a_address,a_phone,created_date)values ('$name','$user_name','$user_password','$address','$phone','$date')") 
			or die ("Query 1 is inncorrect........");
header("location: manage_users.php"); 
mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
</head>
<body>
<?php include("include/header.php"); ?>

<div class="container-fluid">
<?php include("include/side_bar.php"); ?>

  <div class="col-sm-10 " align="center">	
  <div class="panel-heading" style="background-color:#c4e17f">
	<h1>Add Admin  </h1></div><br>
	
<form action="add_user.php" name="form" method="post">
<fieldset>
 <label for="name" style="color:black;font-size:20px;
 ">	&nbsp	&nbsp	&nbsp	&nbsp	&nbsp	&nbspName: </label><input name="name" class="input-lg" type="text"  id="name" style="font-size:18px; width:200px"  placeholder="Name" autofocus required>
<hr>
<label for="username" style="color:black;font-size:20px;
 ">&nbspUsername: </label>
<input name="user_name" class="input-lg" type="text"  id="user_name" style="font-size:18px; width:200px" placeholder="User-Name"  required>
<hr>

<label for="password" style="color:black;font-size:20px;
 ">&nbspPassword: </label><input name="user_password" class="input-lg" type="text"  id="user_password" style="font-size:18px; width:200px"  placeholder="Password" required>
<hr>
<label for="address" style="color:black;font-size:20px;
 ">	&nbsp&nbspAddress: </label><input name="address" class="input-lg" type="text"  id="address" style="font-size:18px; width:200px"  placeholder="Address"  required>
<hr>
<label for="phone" style="color:black;font-size:20px;
 ">&nbsp&nbsp	&nbspPhone:</label>
<input name="phone" class="input-lg" type="text"  id="phone" style="font-size:18px; width:200px"  placeholder="Phone"  required>
<hr>
 <button type="submit" class="btn btn-success" name="btn_save" id="btn_save" style="font-size:18px">Submit</button>
 </fieldset>
</form>
</div></div>
<?php include("include/js.php"); ?>
</body>
</html>