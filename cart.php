<?php
session_start(); 
$id=$_SESSION['id'];


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart Form</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	include "header.php";
	include "connect.php";
	
		
	?>

	 <table  style="margin-top: 13%; width: 90%;margin-right:5%;margin-left:5%; margin-bottom: 22%; ">
      <thead style="background-color:orange" >
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php 
      $select="select * from tbl_cart where id=$id";
      $result=mysqli_query($conn,$select);
      	while($data=mysqli_fetch_array($result))
      	{
          $cId=$data['cart_id'];
      ?>
       <tr >
           <input id="dd_id" type="hidden" name="" value="<?php echo $cId; ?>">
          <th><?php echo $data['name']?></th>
          <th><input type="submit" class="minus" value="-"><label id="q"><?php echo $data['quantity']?></label id><input type="submit" class="plus" value="+"></th>
          <th id="totalPrice"><?php echo $data['totalPrice']?></th>
          <th><a href="#"><button>Remove</button></a></th>
        </tr>
        <?php } ?>
      </table>
 <script src="js/commentscript.js"></script>
 <script src="js/cartQuantity.js"></script>
	
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>