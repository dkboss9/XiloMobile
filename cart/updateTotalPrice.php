<?php
	session_start(); 
	$id=$_SESSION['id'];
	$c_id=$_POST['c_id'];
	include "../connect.php";
	$select="select totalPrice from tbl_cart where cart_id=$c_id";
	$result=mysqli_query($conn,$select);
	$data=mysqli_fetch_array($result);
	echo $data['totalPrice'];
?>