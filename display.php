<?php 

	session_start();
	$productId=$_GET['productID'];
 	$_SESSION['url']=$_SERVER['REQUEST_URI'];
 	$id=$_SESSION['id'];

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Xilo Mobile Hub E-commerce Site</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
			.single-product
			{
				margin-top: 55px;
			}
			.col-md-7 h2
			{
				color: orange;
			}
			.single-product .price
			{
				color: orange;
				font-size: 26px;
				font-weight: bold;
						padding-top: 20px;
			}
			.single-product input
			{
				border: 1px solid #ccc;
				font-weight: bold;
				height: 33px;
				text-align: center;
				width: 40px;
			}
			.single-product .btn.btn-primary
			{
				background: orange!important;
				color: #fff;
				font-size: 15px;
				margin-left: 20px;
				border: none;
				box-shadow: none !important;
			}
			.single-product.rate
			{
				color: orange;
			}
			
			/*-----User's Comment----*/
			.h6, h6 {
				font-size: 26px;
				color: orange;
				font-weight: bold;
				margin-right: 25px;
				}
				.btn.btn-submit
				{
				background: orange!important;
				color: #fff;
				font-size: 15px;
				margin-left: 15px;
				margin-bottom: 25px;
				border: none;
				box-shadow: none !important;
				}
		</style>
	</head>
	<body>
<?php
	include "header.php";
	require_once"connect.php";

    $selectsql="select * from tbl_product where p_id=$productId ";
    $result=mysqli_query($conn,$selectsql);

     while($d=mysqli_fetch_array($result)) {
?>


		<!--Begin of Single Product-->
		<section class="single-product">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						
						<div class="container col-md-8">
							<div class="ruchancarousel">
								
								<div class="carousel-inner">
									<div class="carousel-item active">
										<?php
                           					 echo '<img src="data:images/jpeg;base64,'.base64_encode($d['image']).'"height ="450" width="300">';
                         			 ?>
									</div>
									
									
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<h2><?php echo $d['mobilename']; ?></h2>
						
						<p class="price">Rs. <?php echo $d['price']; ?></p>
						<p ><b>Views:</b> <?php echo $d['price'];?> &nbsp &nbsp &nbsp &nbsp &nbsp<b> Average Rating </b><?php echo $d['price']; ?></p>
						<p><b>Camera:</b><?php echo $d["camera"];?></p>
						<p><b>Processor:</b><?php echo $d["processor"];?></p>
						<p><b>RAM/ROM:</b> <?php echo $d["ram"];?>/ <?php echo $d["rom"];?></p>
						<p><b>Version:</b><?php echo $d["version"];?></p>
						<p><b>Description:</b>Size is <?php echo $d["size"];?>.  Available color is <?php echo $d["color"];?>. Battery Power is <?php echo $d["battery"];?>. <?php echo $d["description"];?> 
						</p>
						<p><b>Availability:</b>In Stock</p>
						<label>Quantity: </label>
						<input type="number" step="1" min="1" max="20" value="1">
						<button type="button" class="btn btn-primary">Add Cart</button>
						<!-- rating start -->
						<div>
							<!-- rating end -->
							<?php 
								if(isset($_SESSION['username']))
									{ 
										require_once "connect.php";
    									$sql = "select r_id from tbl_rating where p_id='$productId' and id = '$id'";
    									$result = mysqli_query($conn,$sql);
    									$data=mysqli_fetch_assoc($result);
    									if(mysqli_num_rows($result)==1){ ?>
    										<br><p><b> You already rated this Product</b></p>
    										<?php
    										 } else {


										?>
								<form action="insertRating.php" method="post">
								<fieldset class="rating">
								<legend>Rate US:</legend>
								<input type="radio" id="star5" name="rating" value="5" /><label for="star5" name="five" title="Rocks!">5 stars</label>
								<input type="radio" id="star4" name="rating" value="4" /><label for="star4" name="four" title="Excellent">4 stars</label>
								<input type="radio" id="star3" name="rating" value="3" /><label for="star3" name="3" title="Preety Good">3 stars</label>
								<input type="radio" id="star2" name="rating" value="2" /><label for="star2" name="2" title="Average">2 stars</label>
								<input type="radio" id="star1" name="rating" value="1" checked /><label for="star1" name="1" title="Sucks big time">1 star</label>
							</fieldset>
							<br>
							<br> &nbsp &nbsp
							<input type="submit" name="submit" value="Rate" > 
							</form>
							<?php } 
						}
			//Login needed to Give Rating
							else {?>
							<br><p><b><a href="login.php"> Login to give Rating</a></b></p>
							<?php } ?>
						</div>
						<style>
						.rating {
						float:left;
						}
						.rating:not(:checked) > input {
						position:absolute;
						top:-9999px;
						clip:rect(0,0,0,0);
						}
						.rating:not(:checked) > label {
						float:right;
						width:1em;
						padding:0 .1em;
						overflow:hidden;
						white-space:nowrap;
						cursor:pointer;
						font-size:200%;
						line-height:1.2;
						color:#ddd;
						text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
						}
						.rating:not(:checked) > label:before {
						content: '★ ';
						}
						.rating > input:checked ~ label {
						color: #f70;
						text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
						}
						.rating:not(:checked) > label:hover,
						.rating:not(:checked) > label:hover ~ label {
						color: gold;
						text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
						}
						.rating > input:checked + label:hover,
						.rating > input:checked + label:hover ~ label,
						.rating > input:checked ~ label:hover,
						.rating > input:checked ~ label:hover ~ label,
						.rating > label:hover ~ input:checked ~ label {
						color: #ea0;
						text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
						}
						.rating > label:active {
						position:relative;
						top:2px;
						left:2px;
						}
						</style>
						</div>

					</div>
				</div>
	</section>

		<!--Begin User Comment -->
		<section class="comment">
			<div class="container">
				<h6>Comments</h6>
				<textarea rows="4" cols="50">
			
				</textarea>
				<button type="button" class="btn btn-submit">Submit</button>
			</div>
		</section>
	<?php } ?>

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