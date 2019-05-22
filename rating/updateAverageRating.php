<?php
session_start();
$id=$_SESSION['id'];
require_once "connect.php";

	$product=$_POST['p_id'];
	$sqll="select AVG(rating) avg from tbl_rating where p_id='$product'";
	$result=mysqli_query($conn,$sqll);
	$dd=mysqli_fetch_array($result)
	?><b> Average Rating: </b>
	<?php echo round( $dd['avg'], 1, PHP_ROUND_HALF_UP); ?>
	<i class="fa fa-star starcolor"></i>

