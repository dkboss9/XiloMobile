<?php 
session_start();
 $_SESSION['url']=$_SERVER['REQUEST_URI'];
 include "connect.php";
 if(!empty($_SESSION['id'])){
 	$id=$_SESSION['id'];
 }

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
<!-- Begin of Top Nav Bar -->
<?php 
	include "header.php"; ?>
	<div class="aaa"><?php 
	include "sideBar.php";
?>

	<!-- Begin of Image Slider-->
	<div class="container col-md-8">
		<div class="ruchancarousel">
			<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/s1.jpg" class="ruchanimagedesign">
				</div>
				<div class="carousel-item">
					<img src="images/s2.jpg" class="ruchanimagedesign">
				</div>
				<div class="carousel-item">
					<img src="images/oneplus.jpg" class="ruchanimagedesign">
				</div>
				<div class="carousel-item">
					<img src="images/o1.jpg" class="ruchanimagedesign">
				</div>
			</div>
			<ol class="carousel-indicators">
    <li data-target="#carouselExampleFade" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleFade" data-slide-to="1"></li>
    <li data-target="#carouselExampleFade" data-slide-to="2"></li>
    <li data-target="#carouselExampleFade" data-slide-to="3"></li>
  </ol>
		</div>
		</div>
	</div>
<!-- Featured Categories-->
<section class="featured-categories">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<img src="images/r/o1.jpg" class="img-responsive featuredimage">
			</div>
			<div class="col-md-4">
				<img src="images/r/n1.jpg" class="img-responsive featuredimage">
			</div>
			<div class="col-md-4">
				<img src="images/r/n2.jpg" class="img-responsive featuredimage">
			</div>
		</div>
	</div>
</section>

<!-- On Sale Products-->
<section class="on-sale">
<div class="container">
	<div class="title-box">
	<h2>Most Popular</h2>
</div>
<div class="row">
<?php
require_once"connect.php";

    $selectsql="select * from tbl_product order by views desc limit 8";
    $result=mysqli_query($conn,$selectsql);

     while($d=mysqli_fetch_array($result)) { 
     	$productId=$d['p_id'];?>
     	<input id="p_id" type="hidden" name="" value="<?php echo $productId; ?>">

<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
	<a href="display.php?productID=<?php echo $d['p_id'] ?>";>
<?php
                            echo '<img src="data:images/jpeg;base64,'.base64_encode($d['image']).'"height ="200" width="200">';
                          ?>
                          </a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php?productID=<?php echo $d['p_id'] ?>">Details</a></h1>
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

<?php } ?>


</div>


</section>
<!-- New Products-->
<section class="new-products">
	<div class="container">
	<div class="title-box">
	<h2>New Arrivals</h2>
</div>
<div class="row">
<?php
require_once"connect.php";

    $selectsql="select * from tbl_product order by created_date desc limit 8";
    $result=mysqli_query($conn,$selectsql);

     while($d=mysqli_fetch_array($result)) { 
     	$productId=$d['p_id'];?>
     	<input id="p_id" type="hidden" name="" value="<?php echo $productId; ?>">

<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
	<a href="display.php?productID=<?php echo $d['p_id'] ?>";>
<?php
                            echo '<img src="data:images/jpeg;base64,'.base64_encode($d['image']).'"height ="200" width="200">';
                          ?>
                          </a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php?productID=<?php echo $d['p_id'] ?>">Details</a></h1>
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

<?php } ?>


</div>


</section>

<!-- Recommended Products-->

<!-- <section class="on-recommendation">
<div class="container">
	<div class="title-box">
	<h2>Recommended</h2>
		
</div>
</section> -->


<!-- Footer-->
		<?php 
	include "footer.php";
?>
</div>
<script src="js/commentscript.js">
	    
	</script>
	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>