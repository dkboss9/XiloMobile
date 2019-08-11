<?php
include("check_session.php");
include("connection.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')


{




$a_id=$_GET['a_id'];

/*this is delet quer*/
mysqli_query($conn,"delete from tbl_admin where a_id=$a_id");
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
<div class="col-sm-9" style="margin-left:10px"> 
<div class="panel-heading" style="background-color:#c4e17f">
	<h1>Manage Admin</h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>Name</th>
                <th>UserName</th>
                <th>Address</th>
                <th>Contact Number</th>

			<th><a href="add_user.php">Add New</a></th></tr>	
			<?php 
			$result=mysqli_query($conn,"select a_id, a_name,a_username, a_address,a_phone from tbl_admin");

			while(list($a_id,$a_name,$a_username,$a_address,$a_phone)=
			mysqli_fetch_array($result))
			{
			echo "<tr><td>$a_name</td><td>$a_username</td><td>$a_address</td><td>$a_phone</td>";

			echo"<td>
			
			<a href='manage_users.php?a_id=$a_id&action=delete'>Delete</a>
			</td></tr>";
			}
			mysqli_close($conn);
			?>
			</table>
			</div>	
			</div></div>
			<?php include("include/js.php"); ?>
			</body>
			</html>