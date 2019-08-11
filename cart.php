<?php
session_start(); 
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
      $sum=0;
      $select="select * from tbl_cart where id='$id'";
      $result=mysqli_query($conn,$select);
      	while($data=mysqli_fetch_array($result))
      	{
         
      ?>
       <tr >
           <input id="dd_id" type="text" name="" value="<?php echo  $data['cart_id']; ?>">
          <th><?php echo $data['name']?></th>
          <th><input type="submit" class="minus" value="-">
          <label id="q"><?php echo $data['quantity']?></label id>

          <input type="submit" class="plus" value="+"></th>
          <th id="totalPrice"><?php echo $data['totalPrice']?></th>
          <?php  $sum+=$data['totalPrice']; ?>
          <th><a href="cart_remove.php?c_id=<?php echo $data['cart_id']; ?>">
    
            <button>Remove</button></a></th>
        </tr>
      

        <?php } ?>
        <tr style="background-color: orange">
          <th colspan="2" style="text-align: center;">TOTAL</th>
          <th><div id="totalPrices"><?php echo $sum?></div></th>
        
          <th><a href="#"><button>Check Out</button></a></th>
        </tr>
      </table>
    <form action="https://uat.esewa.com.np/epay/main" method="POST">
    <input value="<?php echo $sum; ?>" name="tAmt" type="hidden">
    <input value="<?php echo $sum; ?>" name="amt" type="hidden">
    <input value="0" name="txAmt" type="hidden">
    <input value="0" name="psc" type="hidden">
    <input value="0" name="pdc" type="hidden">
    <input value="epay_payment" name="scd" type="hidden">
    <input value="ee2c3ca1-696b-4cc5-a6be-2c40d929d453" name="pid" type="hidden">
    <input value="http://localhost/project/xilomobile/home.php" type="hidden" name="su">
    <input value="http://merchant.com.np/page/esewa_payment_failed?q=fu" type="hidden" name="fu">
    <input value="Submit" type="submit">
    </form>

</body>

    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
 <script src="js/commentscript.js"></script>
 <script src="js/cartQuantity.js"></script>



</body>
</html>