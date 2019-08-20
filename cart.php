<?php
session_start(); 
$_SESSION['url']=$_SERVER['REQUEST_URI'];
if(isset($_SESSION['id']))
$id=$_SESSION['id'];
else
$id=null;


?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart Form</title>
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<style>
  #table{
    background-color: ;
    border:1px solid black;
  }
  #table tr th{
    border:1px solid black;
  }
  .w3-container1{
    float: center;
    width: 100%;
    height: 500px;
  }
  .container{
    
    width: 20%;
    height: 50%;
  }
  .checkout{
  position: fixed;
   left: 700px;
   top:600px;
  }
</style>
<body>
	<?php 
	include "header.php";
	include "connect.php";
	
		
	?>
<div class="w3-container1">
	 <table id="table" style="margin-top: 13%; width: 90%;margin-right:5%;margin-left:5%; margin-bottom: 22%; ">
      <thead style="background-color:orange; border:1px solid;">
        <tr>
          <th>Product</th>
          <th>Quantity</th>
          <th>Price</th>
          <th>Action</th>
        </tr>
      </thead>
      <?php 
      $i = 1;
      $sum=0;
      $select="select * from tbl_cart where id='$id'";
      $result=mysqli_query($conn,$select);
      	while($data=mysqli_fetch_array($result))
      	{
         
      ?>
       <tr >
           <input id="dd_id<?php echo $i;?>" type="hidden" name="" value="<?php echo  $data['cart_id']; ?>">
          <th><?php echo $data['name']?></th>
          <th><form action="cartplus.php?c_id=<?php echo $data['cart_id']; ?>" method="post"><input type="submit" class="minus<?php echo $i; ?>" value="-"></form>
          <label id="q<?php echo $i; ?>"><?php echo $data['quantity']?></label id>
          <form action="cartIncrease.php?c_id=<?php echo $data['cart_id']; ?>" method="post">
          <input type="submit" class="plus" value="+">
          </form></th>
          <th id="totalPrice"><?php echo $data['totalPrice']?></th>
          <?php  $sum+=$data['totalPrice']; ?>
          <th><a href="cart_remove.php?c_id=<?php echo $data['cart_id']; ?>">
    
            <button>Remove</button></a></th>
        </tr>
      

        <?php 
            $i++;
         } ?>
        <tr style="background-color: orange">
          <th colspan="2" style="text-align: center;">TOTAL</th>
          <th><div id="totalPrices"><?php echo $sum?></div></th>
        
          <th>
    <a href="payment.php?total=<?php echo $sum;?>"><input value="Checkout" type="submit">
    </a></th>
        </tr>
      </table>


<script src="js/commentscript.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>







</body>
</html>