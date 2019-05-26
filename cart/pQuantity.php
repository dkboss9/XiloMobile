<?php
	session_start(); 

	$id=$_SESSION['id'];
	$c_id=$_POST['c_id'];
	include "../connect.php";
	$select="select quantity from tbl_cart where cart_id=$c_id";
	$result=mysqli_query($conn,$select);
	$data=mysqli_fetch_array($result);
	$qn=$data['quantity'];
	if($qn<5)
	{

	$update="update tbl_cart set quantity=quantity + 1, totalPrice=totalPrice+price where cart_id=$c_id";
	mysqli_query($conn,$update);
	$select="select quantity from tbl_cart where cart_id=$c_id";
	$result=mysqli_query($conn,$select);
	$data=mysqli_fetch_array($result);
	echo $data['quantity'];
	}else{
		echo "5";
	}
	?>

	