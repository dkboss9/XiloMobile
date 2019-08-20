<?php
	$p_id=$_GET['c_id'];
	include "connect.php";
	session_start();
	$url= $_SESSION['url'];
	//echo $p_id;
	$sql="select * from tbl_cart where cart_id=$p_id ";
	$result=mysqli_query($conn,$sql);
	$output=mysqli_fetch_assoc($result);
	//echo $output['quantity'];
	if($output['quantity']<5)
	{
		$update="update tbl_cart set quantity=quantity + 1, totalPrice=totalPrice+price where cart_id=$p_id";
		mysqli_query($conn,$update);
		header("location:$url");
	}
	else
	{
			header("location:$url");
	}


?>