<?php 
session_start();
 $_SESSION['url']=$_SERVER['REQUEST_URI'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Xilo Mobile Hub E-commerce Site</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<!-- Begin of Top Nav Bar -->
<?php 
	include "header.php";
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
	<h2>On Sale</h2>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</a></h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</a></h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
<h1 class="btn btn-secondary buttonquick"><a href="display.php">Description</h1>
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
		<section class="footer">
			<footer class="section footer-classic context-dark bg-image" style="background: #2d3246;">
        <div class="container">
          <div class="row row-30">
            <div class="col-md-4 col-xl-5">
              <div class="pr-xl-4"><a class="brand" href="index.html"><img class="brand-logo-light" src="images/agency/logo-inverse-140x37.png" alt="" width="140" height="37" srcset="images/agency/logo-retina-inverse-280x74.png 2x"></a>
                <p>We deliver products that we believe..</p>
                <!-- Rights-->
                <p class="rights"><span>©  </span><span class="copyright-year">2018</span><span> </span><span>Waves</span><span>. </span><span>All Rights Reserved.</span></p>
              </div>
            </div>
            <div class="col-md-4">
              <h5>Contacts</h5>
              <dl class="contact-list">
                <dt>Address:</dt>
                <dd>Tikathali,Lalitpur</dd>
              </dl>
              <dl class="contact-list">
                <dt>email:</dt>
                <dd><a href="mailto:#">maharjanruchan@gmail.com</a></dd>
              </dl>
              <dl class="contact-list">
                <dt>phones:</dt>
                <dd><a href="tel:#">9868017555</a> <span>or</span> <a href="tel:#">9822546748</a>
                </dd>
              </dl>
            </div>
            <div class="col-md-4 col-xl-3">
              <h5>Quick Links</h5>
              <ul class="nav-list">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Contacts</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row no-gutters social-container">
          <div class="col"><a class="social-inner" href="https://www.facebook.com/ruchan.maharjan"><span class="icon mdi mdi-facebook"></span><span>Facebook</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-instagram"></span><span>instagram</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-twitter"></span><span>twitter</span></a></div>
          <div class="col"><a class="social-inner" href="#"><span class="icon mdi mdi-youtube-play"></span><span>google</span></a></div>
        </div>
      </footer>
      <style>
      .context-dark, .bg-gray-dark, .bg-primary {
    color: rgba(255, 255, 255, 0.8);
}

.footer-classic a, .footer-classic a:focus, .footer-classic a:active {
    color: #ffffff;
}
.nav-list li {
    padding-top: 5px;
    padding-bottom: 5px;
}

.nav-list li a:hover:before {
    margin-left: 0;
    opacity: 1;
    visibility: visible;
}

ul, ol {
    list-style: none;
    padding: 0;
    margin: 0;
}

.social-inner {
    display: flex;
    flex-direction: column;
    align-items: center;
    width: 100%;
    padding: 23px;
    font: 900 13px/1 "Lato", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
    text-transform: uppercase;
    color: rgba(255, 255, 255, 0.5);
}
.social-container .col {
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.nav-list li a:before {
    content: "\f14f";
    font: 400 21px/1 "Material Design Icons";
    color: #4d6de6;
    display: inline-block;
    vertical-align: baseline;
    margin-left: -28px;
    margin-right: 7px;
    opacity: 0;
    visibility: hidden;
    transition: .22s ease;
}
      </style>
				</section>










<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>