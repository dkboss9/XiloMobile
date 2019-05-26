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
<?php
	include "header.php";
	
	session_start();
	$id=$_SESSION['username'];
	include "connect.php";
	
	$products=mysqli_query($conn,"select * from tbl_rating");
	$matrix=array();
	while($pro=mysqli_fetch_array($products))
	{
		$iid=$pro['id'];
		$select="select * from tbl_user where id=$iid";
		$user=mysqli_query($conn,$select);
		$userid=mysqli_fetch_array($user);
		$iids=$pro['p_id'];
		$selects="select * from tbl_product where p_id=$iids";
		$users=mysqli_query($conn,$selects);
		$userids=mysqli_fetch_array($users);
		$matrix[$userid['username']][$userids['mobilename']]=$pro['rating'];
	}
	// echo "<pre>";
	// print_r($matrix);
	// echo "</pre>";
	$r=array();
	$r=getRecommendation($matrix,$id);
	foreach ($r as $key=>$value) 
	{
		$rp=$key;
		$select="select * from tbl_product where mobilename='$rp'";
		$result=mysqli_query($conn,$select);?>
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
	}




	function getRecommendation($matrix,$person)
	{
		$total=array();
		$simsums=array();
		$ranks=array();
		foreach ($matrix as $otherPerson => $value)
	    {
			if($otherPerson!=$person)
			{
				$sim=similarity_distance($matrix,$person,$otherPerson);
				foreach ($matrix[$otherPerson] as $key => $value) {
					if(!array_key_exists($key, $matrix[$person]))
					{
						if(!array_key_exists($key, $total))
						{
							$total[$key]=0;
						}
						$total[$key]+=$matrix[$otherPerson][$key]*$sim;
						if(!array_key_exists($key, $simsums))
						{
							$simsums[$key]=0;
						}
						$simsums[$key]+=$sim;
					}
				}
			}
		}
		foreach ($total as $key => $value) 
		{
			$ranks[$key]=$value/$simsums[$key];	
		}
		array_multisort($ranks,SORT_DESC);
		return $ranks;	
	}
	









	function similarity_distance($matrix,$person1,$person2)
	{
		$similar=array();
		$sum=0;
		foreach ($matrix[$person1] as $key => $value) 
		{
			if(array_key_exists($key,$matrix[$person2]))
			{
				$similar=1;
			}
		}
		if($similar==0)
		{
			return 0;
		}
		foreach ($matrix[$person1] as $key => $value) 
		{
			if(array_key_exists($key, $matrix[$person2]))
			{
				$sum=$sum+pow($value-$matrix[$person2][$key],2);
			}
		}	
		return 1/(1+sqrt($sum));
	}

?>
<script src="js/commentscript.js">
	    
	</script>
	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>