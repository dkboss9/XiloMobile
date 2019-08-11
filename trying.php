<div class="col-md-7">
						<b> Average Rating: </b>
	<?php
							$sqll="select AVG(rating) avg from tbl_rating where p_id='$productId'";
							$result=mysqli_query($conn,$sqll);
							$dd=mysqli_fetch_assoc($result);
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