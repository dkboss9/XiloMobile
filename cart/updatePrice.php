<?php 
	session_start();
	$id=$_SESSION['id'];
	$c_id=$_POST['c_id'];
	include "../connect.php";
	$sum=0;
	$q="select * from tbl_cart where id='$id'";
	$result=mysqli_query($conn,$q);
	while($d=mysqli_fetch_array($result))
	{
		$sum+=$d['totalPrice'];
	}

	echo $sum;

?>