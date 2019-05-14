<?php 

	session_start();
	$_SESSION['url']=$_SERVER['REQUEST_URI'];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Xilo Mobile Hub E-commerce Site</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<!-- Begin of Top Nav Bar -->
<?php  
	include 'header.php';
	




	
?>
<div class="row">
<?php
require_once"connect.php";
$mobileId=$_GET["mobileId"];
    $selectsql="select * from tbl_product where c_id=$mobileId order by price asc";
    $result=mysqli_query($conn,$selectsql);

     while($d=mysqli_fetch_array($result)) { ?>

<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
	<a href="display.php?productID=<?php echo $d['p_id'] ?>";>
<?php
                            echo '<img src="data:images/jpeg;base64,'.base64_encode($d['image']).'"height ="300" width="300">';
                          ?>
                          </a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a href="display.php?productID=<?php echo $d['p_id'] ?>"> See Details</a></h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3><?php echo $d['mobilename']; ?></h3>
<h5>Rs.Rs <?php echo $d['price']; ?></h5>
</div>
</div>

<?php } ?>














<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>