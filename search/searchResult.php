<?php
session_start();
if(isset($_SESSION['id']))
$id=$_SESSION['id'];
include "../connect.php";
$value=$_POST['search'];
	$select="select * from tbl_product where mobilename like '%{$value}%'";
	$result=mysqli_query($conn,$select);
	?>
	<b>
            <?php 
            echo "Showing results for ";
            ?> "<?php echo $value; ?>"</b>
	<div class="row">
	<?php
	 while($d=mysqli_fetch_array($result)) { 
	 	$productId=$d['p_id'];

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
				<h1 class="btn btn-secondary buttonquick"><div id="cart">
						<input type="hidden" value="1" id="quantity">
						<?php 
							if(!isset($_SESSION['id']))
								{ ?>
									<a href="login.php"><button type="button" class="btn btn-primary" id="order" >Order Now</button></a>
						<?php	}else{
							$productId=$d['p_id'];
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
						</div></h1>
				</div>
				</div>
				</div>
				<div class="product-bottom text-center">
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
				<h5>Rs. <?php echo $d['price']; ?></h5>
				</div>
				</div>

	<?php }
	if(empty(mysqli_num_rows($result)))
        { ?>

         <center> <b> <p> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     "Search Not Found"</p></b></center><?php
        }


 ?>

	
	

		