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
		<link rel="stylesheet" type="text/css" href="bootstrap/dist/js/">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script type="text/javascript"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
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
	include "product_recommend.php";
	?><div class="aaa"><?php
    $selectsql="select * from tbl_product where p_id=$productId ";
    $result=mysqli_query($conn,$selectsql);
    $aaaaa="";
     while($d=mysqli_fetch_array($result)) {
     	$aaaaa=$d['mobilename'];
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
						<p ><b>Views: </b> <?php echo $d['views'];?> &nbsp &nbsp &nbsp &nbsp &nbsp<div id="avg"><b> Average Rating: </b><?php
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
							
						 ?></div></p>
						<p><b>Camera:</b><?php echo $d["camera"];?></p>
						<p><b>Processor:</b><?php echo $d["processor"];?></p>
						<p><b>RAM/ROM:</b> <?php echo $d["ram"];?>/ <?php echo $d["rom"];?></p>
						<p><b>Version:</b><?php echo $d["version"];?></p>
						<p><b>Description:</b>Size is <?php echo $d["size"];?>.  Available color is <?php echo $d["color"];?>. Battery Power is <?php echo $d["battery"];?>. <?php echo $d["description"];?> 
						</p>
						<p><b>Availability:</b>In Stock</p>
						<div id="cart">
						<label>Quantity: </label>
						<input type="number" step="1" min="1" max="5" value="1" id="quantity">
						<?php 
							if(!isset($_SESSION['id']))
								{ ?>
									<a href="login.php"><button type="button" class="btn btn-primary" id="order" >Order Now</button></a>
						<?php	}else{
							$cartDisplay="select cart_id from tbl_cart where p_id=$productId and id=$id";
						$result=mysqli_query($conn,$cartDisplay);
						if(mysqli_num_rows($result)>0)
						{ ?>
							<button type="button" class="btn btn-primary" id="cartAdd" disabled>Add Cart</button>
						<?php 	
						}else{

						?>
						
						<button type="button" class="btn btn-primary" id="cartAdd">Add Cart</button>
						<?php } }?>
						</div>
						<!-- rating start -->
						<div id="arating">
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
								
								<fieldset class="rating">
								<legend>Rate US:</legend>
								<input id="p_id" type="hidden" name="" value="<?php echo $productId; ?>">
								<input type="radio" id="star5" name="rating" value="5" /><label for="star5" name="five" title="Rocks!">5 stars</label>
								<input type="radio" id="star4" name="rating" value="4" /><label for="star4" name="four" title="Excellent">4 stars</label>
								<input type="radio" id="star3" name="rating" value="3" /><label for="star3" name="3" title="Preety Good">3 stars</label>
								<input type="radio" id="star2" name="rating" value="2" /><label for="star2" name="2" title="Average">2 stars</label>
								<input type="radio" id="star1" name="rating" value="1"  /><label for="star1" name="1" title="Sucks big time">1 star</label>

							</fieldset>
							
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
<div class="row">
<?php 
	$d=mysqli_fetch_array($result);
	$matrix=array();
	$select="select * from tbl_product";
	$result=mysqli_query($conn,$select);
	$currentPrice = mysqli_query($conn,"Select price from tbl_product where p_id=$productId");
	$ppp=mysqli_fetch_array($currentPrice);
	$c_price=$ppp['price'];
	// echo $c_price;
	$lowPrice=0;
	$highPrice = 0;
	while($dataa=mysqli_fetch_array($result))
	{

		$matrix[$dataa['mobilename']]['price']=$dataa['price'];
		$matrix[$dataa['mobilename']]['views']=$dataa['views'];
		
			$lowPrice=$matrix[$dataa['mobilename']]['price']=$dataa['price'];
			$highPrice=$matrix[$dataa['mobilename']]['price']=$dataa['price'];

		
	}
	echo "<h1>".count($matrix)."</h1>";
	
	// print_r($matrix[1]);
	foreach ($matrix as $key => $value) {
		// echo '<pre>';
		// // print_r($key);
		// echo $value['price'];
		if($value['price'] < $lowPrice){
			$lowPrice = $value['price'];
		}
		if($value['price'] > $highPrice){
			$highPrice = $value['price'];
		}
	}

	foreach ($matrix as $key => $value){
		$normalized[$key][
		'price'] = ($c_price - $lowPrice)/($highPrice - $lowPrice);
	}
	echo "<pre>";
	print_r($normalized);


	  // echo "<pre>";
	  // print_r($matrix);
	  // echo "</pre>";

	$r=getRecommendation($matrix,$aaaaa);
	
	
	foreach ($r as $key=>$value) 
	{

		$rp=$key;
		$select="select * from tbl_product where mobilename='$rp'";
		$result=mysqli_query($conn,$select);
		while($d=mysqli_fetch_array($result)) { 

	 	?>

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
				<h1 class="btn btn-secondary buttonquick"><a class="categorydesign" href="display.php?productID=<?php echo $d['p_id'] ?>"> See Details</a></h1>
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
				<h5>Rs. <?php echo $d['price']; ?></h5>
				</div>
				</div>

	<?php }
	}

?>


		<!--Begin User Comment -->
		
		<section class="comment">
			<div class="container">
				<h6>Comments</h6>
				<!--Posting all comments-->
				<div id="all_comments">
  <?php
    
  	
    $comm = mysqli_query($conn,"select name,comment,date from tbl_comment where p_id=$productId order by date desc");
    while($row=mysqli_fetch_array($comm))
    {
	  $name=$row['name'];
	  $comment=$row['comment'];
      $time=$row['date'];
    ?>
	
<div id="hang"> </div>
 <p class="name"><strong>commented by <?php echo $name;?> on <?php echo date("j-M-Y g:ia", strtotime($time)) ?>:</span></strong> 
 			<?php echo $comment;?></p>	
		<?php
    }
    ?>
  </div>
  
				<?php
    		//Checking whether user has login or not. If not Hiding Comment box from him 
			if(isset($_SESSION['username']))
			{
			
			
		?>
		<!-- <form action="" method="post" onsubmit="return post(<?php echo $productId ?>);" id="comments"> -->
				<input id="p_id" type="hidden" name="" value="<?php echo $productId; ?>">
				<textarea  rows="4" cols="50" id="comment">
			
				</textarea>
				<input type="submit" class="btn btn-submit" id="submit" >
		<!-- </form> -->
		</div>
		</section>
		<h2 id="error"></h2>
	<?php  }
	include "footer.php";

	?>
	</div>
	<script src="js/commentscript.js">
	    
	</script>
	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
	</html>

		