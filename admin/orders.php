<?php
include("check_session.php");
include("connection.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')


{




$a_id=$_GET['a_id'];

/*this is delet quer*/
mysqli_query($conn,"delete from tbl_payment where id=$a_id");
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
<div class="panel-heading" style="background-color:red;">
	<h1>Manage User</h1></div><br>

<div style="overflow-x:scroll;">
<table class="table table-bordered table-hover table-striped" style="font-size:18px">
	<tr>
			    <th>Name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total Price</th>

			<th>Operation</th></tr>	
			<?php 
			$result=mysqli_query($conn,"select id, name,quantity,price,total_price from tbl_payment");

			while(list($id,$name,$quantity,$price,$total_price)=
			mysqli_fetch_array($result))
			{
			echo "<tr><td>$name</td><td>$quantity</td><td>$price</td><td>$total_price</td>";

			echo"<td>
			
			<a href='orders.php?a_id=$id&action=delete'>Confirm Order</a>
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