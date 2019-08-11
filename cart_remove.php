<?php
include 'connect.php';
$item_id=$_GET['c_id'];
$delete_query="DELETE FROM tbl_cart WHERE cart_id='$item_id'";
$delete_query_result=mysqli_query($conn ,$delete_query);
header('location:cart.php');
?>