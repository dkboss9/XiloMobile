<?php
	session_start();
	$id=$_SESSION['id'];
?>
<!DOCTYPE html>
<html>
<head>
<style>
  .descriptiondesign
  {
    text-decoration: none;
    color: white;
  }
  .descriptiondesign:hover
  {
    text-decoration: none;
    color: red;
  }
  }
</style>
	<title>Xilo Mobile Hub E-commerce Site</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
	include "header.php";
	require_once "connect.php";
	include "recommend.php";
	$products=mysqli_query($conn,"select * from tbl_rating");
	$matrix=array();
	while($pro=mysqli_fetch_array($products))
	{
		$iid=$pro['id'];
		$select="select * from tbl_user where id=$iid";
		$user=mysqli_query($conn,$select);
		$userid=mysqli_fetch_array($user);
		$matrix[$userid['id']][$pro['p_id']]=$pro['rating'];
	}
	// echo "<prev>";
	// print_r($matrix);
	// echo "</prev>";


	var_dump(getRecommendation($matrix,$id));

?>
<?php 
	include "footer.php";
?>
</div>
<script src="js/commentscript.js">
	    
	</script>
	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>