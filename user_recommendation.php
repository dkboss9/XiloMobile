<?php
	require_once "connect.php";
	$movies=mysqli_query($conn,"select * from tbl_rating");
	$matrix=array();
	while($movie=mysqli_fetch_array($movies))
	{
		$sql="select * from tbl_user where id=$movie['id']";
		$users=mysqli_query($conn,$sql);
		$username=mysqli_fetch_array($users);
		$matrix[$username['id']][$movie['p_id']]=$movie['rating'];
	}
	echo "<prev>";
	print_r($matrix);
	echo "</prev>";

?>