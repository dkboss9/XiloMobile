<?php
session_start();
//session_regenerate_id(true);
include("connection.php");
$check=0;

if(isset($_POST['submit']))
{
$username = $_POST['user_name'];
$password = $_POST['password'];

$query=mysqli_query($conn,"select a_id from tbl_admin where a_username='$username' and a_password='$password'")or die ("query 1 incorrect.......");

list($user_id)=mysqli_fetch_array($query);

$_SESSION['user_id']=$user_id;
header("location: index.php");

$check=1;

if($check==0)
{
$check=2;
}

mysqli_close($connection);
}
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../layout/css/bootstrap.min.css">
<title>Admin Login</title>
</head>
<style>
	.well{
		min-height: 20px;
		padding: 19px;
		margin-bottom: 20px;
		background-color: red;
		max-width: 100%;
		height: 100%;

	}
	body{
		background-color: lightgrey;
	}
	#container{
		width:800px;
		padding-top:150px;
		padding-bottom:550px;
		padding-left: 350px;
		padding-right: 250px;
		box-shadow: 10px black;
	}



	
</style>
<body>
	<div id="container">
			<div class="well" align="center">
			<img src="../images/logo.jpg">
			<h1 align="center">Welcome &nbsp;&nbsp;
			Admin Login</h1>
			<div align="center">
			<form action="login.php" method="post" id="login" name="login" enctype="multipart/form-data">
			<div class="form-group">
			<input type="text" style="font-size:18px; width:200px" class="input-lg" name="user_name" id="user_name" placeholder="User-Name" required autofocus>
			</div>
			<div class="form-group">
			<input type="password" class="input-lg" name="password" style="font-size:18px; width:200px" id="password" placeholder="Password" required>
			 </div>
			 <br>
			 <div class="form-group">
			<button class="btn btn-large btn-lg btn-success" type="submit" name="submit" id="submit">Log in</button>

			</div>

			</form>
			</div>
			</div>
	</div>
</body>
</html>