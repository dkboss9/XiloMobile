<?php 
session_start();
 $_SESSION['url']=$_SERVER['REQUEST_URI'];

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
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="display.php" class="imghover">
<img src="images/r/edited/o1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
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
	<h3>Oppo</h3>
<h5>Rs.25,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/n1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</a></h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Nokia</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/s1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</a></h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Samsung</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/op1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>OnePlus</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/v1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Vivo</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/n2.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Nokia</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/o2.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
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
	<h3>Oppo</h3>
<h5>Rs.20,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/o3.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
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
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Oppo</h3>
<h5>Rs.22,000</h5>
</div>
</div>
</div>
</section>
<!-- New Products-->
<section class="new-products">
	<div class="container">
	<div class="title-box">
	<h2>New Arrivals</h2>
</div>
<div class="row">
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/o1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
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
	<h3>Oppo</h3>
<h5>Rs.25,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/n1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Nokia</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/s1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Samsung</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/op1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>OnePlus</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/v1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Vivo</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/n2.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
</div>
<div class="col addcart">
<h1 class="btn btn-secondary buttonquick">Add Cart</h1>
</div>
</div>
</div>
<div class="product-bottom text-center">
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star starcolor"></i>
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Nokia</h3>
<h5>Rs.23,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/o2.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
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
	<h3>Oppo</h3>
<h5>Rs.20,000</h5>
</div>
</div>
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/edited/o3.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick"><a class="descriptiondesign" href="display.php">Description</h1>
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
<i class="fa fa-star-half-o starcolor"></i>
	<h3>Oppo</h3>
<h5>Rs.22,000</h5>
</div>
</div>
</div>
</section>

<!-- Recommended Products-->
<section class="on-recommendation">
<div class="container">
	<div class="title-box">
	<h2>Recommended</h2>
</div>
</section>


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