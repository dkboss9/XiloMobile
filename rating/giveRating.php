<?php
session_start();
$id=$_SESSION['id'];
require_once "connect.php";
if(isset($_POST['rating']))
{
	$product=$_POST['p_id'];
	$rate=$_POST['rating'];
	$insert="insert into tbl_rating (rating,p_id,id) values ('$rate','$product','$id')";
	mysqli_query($conn,$insert);
	$select="select rating from tbl_rating where id=$id and p_id=$product";
	$result=mysqli_query($conn,$select); 
	$data=mysqli_fetch_assoc($result); ?>
	<p id="arating"><b> You gave <?php
	echo $data['rating'] ?> <i class="fa fa-star starcolor"></i> to  this Product</b></p>
	
<?php } ?>
		