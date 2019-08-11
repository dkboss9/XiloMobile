<?php 

	session_start();
	$_SESSION['url']=$_SERVER['REQUEST_URI'];
	if(!empty($_SESSION['id'])){
 	$id=$_SESSION['id'];
 }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Xilo Mobile Hub E-commerce Site</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
<!-- Begin of Top Nav Bar -->
<?php  
	include 'header.php';
	




	
?>
<div class="aaa">
<div class="row">
<?php
require_once"connect.php";
$mobileId=$_GET['mobileId'];
    $selectsql="select * from tbl_product where c_id=$mobileId order by price asc";
    $result=mysqli_query($conn,$selectsql);

     while($d=mysqli_fetch_array($result)) { 
     	$productId=$d['p_id'];?>
     	<input id="p_id" type="hidden" name="" value="<?php echo $productId; ?>">

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
<div id="cart">
						<input type="hidden" value="1" id="quantity">
						<?php 
							if(!isset($_SESSION['id']))
								{ ?>
									<a href="login.php"><button type="button" class="btn btn-primary" id="order" >Order Now</button></a>
						<?php	}else{
							$cartDisplay="select cart_id from tbl_cart where p_id=$productId and id=$id";
						$resultCart=mysqli_query($conn,$cartDisplay);
						if(mysqli_num_rows($resultCart)>0)
						{ ?>
							<button type="button" class="btn btn-primary" id="cartAdd" disabled>Add Cart</button>
						<?php 	
						}else{

						?>
						
						<a href="cartAdd.php?productII=<?php echo $productId; ?>"<button type="button" class="btn btn-primary" id="cartAddd">Add Cart</button></a>
						<?php } }?>
						</div>
</div>
</div>
</div>

<div class="product-bottom text-center">
<div class="col-md-7">
						<b> Average Rating: </b>
	<?php
							$sqll="select AVG(rating) avg from tbl_rating where p_id='$productId'";
							$results=mysqli_query($conn,$sqll);
							$dd=mysqli_fetch_assoc($results);
								if(!empty($dd['avg']))
								{
									echo round( $dd['avg'], 1, PHP_ROUND_HALF_UP); ?>
									<i class="fa fa-star starcolor"></i>
							<?php
								}else{
									echo "N/A";
								}
							
							
						 ?>
	<h3><?php echo $d['mobilename']; ?></h3>
<h5>Rs.<?php echo $d['price']; ?></h5>
</div></p>
</div>
</div>

<?php } 
	
	

?>


</div>











<script src="js/commentscript.js">
	    
	</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>