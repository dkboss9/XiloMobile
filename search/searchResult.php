<?php
session_start();
include "../connect.php";
$value=$_POST['search'];
	$select="select * from tbl_product where mobilename like '%{$value}%'";
	$result=mysqli_query($conn,$select);
	?>
	<b>
            <?php echo "Showing results for ";
            ?> "<?php echo $value; ?>"</b>
	<div class="row">
	<?php
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
	if(empty(mysqli_num_rows($result)))
        { ?>

         <center> <b> <p> &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp     "Search Not Found"</p></b></center><?php
        }


 ?>

	
	

		