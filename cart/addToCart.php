<?php
session_start();
$id=$_SESSION['id'];
include "../connect.php";

	$product=$_POST['p_id'];
	$quantity=$_POST['quantity'];
	$select="select mobilename,price from tbl_product where p_id=$product";
	$result=mysqli_query($conn,$select);
	$data=mysqli_fetch_array($result);
	$mobilename=$data['mobilename'];
	$price=$data['price'];
	$finalPrice=$price*$quantity;
	$insert="insert into tbl_cart (name,quantity,price,totalPrice,status,id,p_id) values ('$mobilename','$quantity','$price','$finalPrice','Added to Cart','$id','$product')";
	if(mysqli_query($conn,$insert))
	{
		echo "sucess";
	}else{
		echo "failed";
	}

