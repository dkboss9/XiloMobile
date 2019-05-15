<?php 
	require_once"connect.php";
	session_start();
	$productId=$_GET['productID'];
 	$_SESSION['url']=$_SERVER['REQUEST_URI'];
 	$sqli ="update tbl_product set views=views + 1 where p_id='$productId'";

      mysqli_query($conn,$sqli);
 	if(!empty($_SESSION['id'])){
 	$id=$_SESSION['id'];
 }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Xilo Mobile Hub E-commerce Site</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
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
						<p ><b>Views: </b> <?php echo $d['views'];?> &nbsp &nbsp &nbsp &nbsp &nbsp<b> Average Rating: </b><?php
							$sqll="select AVG(rating) avg from tbl_rating where p_id='$productId'";
							$result=mysqli_query($conn,$sqll);
							while($dd=mysqli_fetch_array($result))
							{
								if(!empty($dd['avg']))
								{
									echo round( $dd['avg'], 1, PHP_ROUND_HALF_UP); ?>
									<i class="fa fa-star starcolor"></i>
							<?php
								}else{
									echo "N/A";
								}
							}
						 ?></p>
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
    									$sql = "select r_id,rating from tbl_rating where p_id='$productId' and id = '$id'";
    									$result = mysqli_query($conn,$sql);
    									$data=mysqli_fetch_array($result);
    									if(mysqli_num_rows($result)==1){ ?>
    										<br><p><b> You gave <?php echo $data['rating'] ?> <i class="fa fa-star starcolor"></i> to  this Product</b></p>
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
<?php } ?>
		<!--Begin User Comment -->
		
		<section class="comment">
			<div class="container">
				<h6>Comments</h6>
				<?php
    		//Checking whether user has login or not. If not Hiding Comment box from him 
			if(isset($_SESSION['username']))
			{
			
			
		?>
		<form action="" method="post">
				
				<textarea rows="4" cols="50" id="comment">
			
				</textarea>
				<input type="submit" class="btn btn-submit" id="submit" >
		</form>
		</div>
		</section>
	<?php  }
	include "footer.php";

	?>

		