<?php 

	session_start();

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
	include 'sideBar.php';
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
	<h2>On Sale</h2>
</div>
<div class="row">
<div class="col-md-3">
<div class="product-top">
<div class="productdesign">
<a href="" class="imghover">
<img src="images/r/o1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick">Quick View</h1>
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
<img src="images/r/n1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick">Quick View</h1>
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
<img src="images/r/n1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick">Quick View</h1>
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
<img src="images/r/n1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick">Quick View</h1>
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
<img src="images/r/n1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick">Quick View</h1>
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
<img src="images/r/n1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick">Quick View</h1>
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
<img src="images/r/o1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick">Quick View</h1>
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
<img src="images/r/o1.jpg" class="img-fluid">
</a>
</div>
<div class="row">
<div class="col quickview">
<h1 class="btn btn-secondary buttonquick">Quick View</h1>
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
<!-------Footer------>

	</div>
	</div>




</section>











<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>