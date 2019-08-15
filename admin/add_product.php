<?php
  if(isset($_POST["submit"]))
  {
    include "connection.php";
    session_start();
    $adminId=$_SESSION['user_id'];
    $error = array();
    $image=addslashes($_FILES['image']['name']);
    $tmpname=addslashes(file_get_contents($_FILES['image']['tmp_name']));
      $filetype=addslashes($_FILES['image']['type']);
    $array=array('jpg','jpeg','JPG');
  $ext=pathinfo($image,PATHINFO_EXTENSION);
  if(!empty($image)){
    if(in_array($ext,$array)){
    }
    elseif(empty($image))
    {
      $error['image']="Select Image";
    }
    else{
      $error['image']="Invalid format";
    }
  }
    //Mobile name validation
    if(empty($_POST["mobilename"]))
    {
      $error['mobilename']= "Enter Mobile name";
    }
    else
    {
      $mobilename=$_POST["mobilename"];
    }
    //Price Validation
    $p="/[0-9]/";
    if(empty($_POST["price"]))
    {
      $error["price"]= "Enter Price";
    }
    elseif (!preg_match($p, $_POST["price"])) {
      $error["price"]="Enter Valid Price";
    }
    else
    {
      $price=$_POST["price"];
    }
    if((empty($_POST["camera"])))
    {
      $error["camera"]= "This Field is Compulsory";
    }
    else
    {
      $camera=$_POST["camera"];
    }
    //Processor validation
    if((empty($_POST["processor"])))
    {
      $error["processor"]= "Enter Processor model";
    }
    else
    {
      $processor=$_POST["processor"];
    }
    //RAM validation
    if((empty($_POST["ram"])))
    {
      $error["ram"]= "Enter Ram model";
    }
    else
    {
      $ram=$_POST["ram"];
    }
    //ROM validation
    if((empty($_POST["rom"])))
    {
      $error["rom"]= "Enter ROM model";
    }
    else
    {
      $rom=$_POST["rom"];
    }
    //Version Validation
    if((empty($_POST["version"])))
    {
      $error["version"]= "Enter Version model";
    }
    else
    {
      $version=$_POST["version"];
    }
    //Size validation
    if((empty($_POST["size"])))
    {
      $error["size"]= "Enter Size model";
    }
    else
    {
      $size=$_POST["size"];
    }
    //Color validation
    if((empty($_POST["color"])))
    {
      $error["color"]= "Enter Color of model";
    }
    else
    {
      $color=$_POST["color"];
    }
    if((empty($_POST["battery"])))
    {
      $error["battery"]= "Enter battery Power";
    }
    else
    {
      $battery=$_POST["battery"];
    }
    //Description validation
    if((empty($_POST["description"])))
    {
      $error["description"]= "Enter Description";
    }
    else
    {
      $description=$_POST["description"];
    }
    //Radio Button Validation
    if(empty($_POST['gender']))
  {
    $error['gender']="Enter Gender";
  }
  else
  {
    $gender= $_POST['gender'];
  }
  if(count($error)!=0){
    echo "Fucking Mistake";
  }
  if(count($error)== 0)
{
  $date=date('Y-m-d H:i:s');
  $query="select * from tbl_admin where a_id='$adminId' ";
  $adminName=mysqli_query($conn,$query);
  $adminUsername=mysqli_fetch_array($adminName);
  $admin=$adminUsername['a_username'];
  if($gender=="samsung")
  {
    $sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','1','$adminId','$admin','$date')";
    mysqli_query($conn,$sql)or die("Incorrect Query");
    
    if (mysqli_insert_id($conn)>0) {
      echo "Product inserted sucessfully";
      
    }else{
      echo"Product insert failed";
    }
  }
    if($gender=="oppo")
  {
    $sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','4','$adminId','$admin','$date')";
    mysqli_query($conn,$sql);
    
    if (mysqli_insert_id($conn)>0) {
      echo "Product inserted sucessfully";
      
    }else{
      echo"Product insert failed";
    }

}
  if($gender=="nokia")
  {
    $sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','2','$adminId','$admin','$date')";
    mysqli_query($conn,$sql);
    
    if (mysqli_insert_id($conn)>0) {
      echo "Product inserted sucessfully";
      
    }else{
      echo"Product insert failed";
    }
  }
    if($gender=="vivo")
  {
    $sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','5','$adminId','$admin','$date')";
    mysqli_query($conn,$sql);
    
    if (mysqli_insert_id($conn)>0) {
      echo "Product inserted sucessfully";
      
    }else{
      echo"Product insert failed";
    }
  }
    if($gender=="oneplus")
  {$sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','5','adminId','$admin','$date')";
    mysqli_query($conn,$sql);
    
    if (mysqli_insert_id($conn)>0) {
      header("location: sumit_form.php?success=1");
      
    }else{
      echo"Product insert failed";
    }
    }
    if($gender=="other")
  {$sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','6','adminId','$admin','$date')";
    mysqli_query($conn,$sql);
    
    if (mysqli_insert_id($conn)>0) {
      header("location: sumit_form.php?success=1");
      
    }else{
      echo"Product insert failed";
    }
    }
  }
}
?>

 

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
 
   	 <?php include("include/header.php");?>
   	<div class="container-fluid">
	<?php include("include/side_bar.php");?>
    <div class="col-md-9 content" style="margin-left:10px">
  	<div class="panel panel-default">
	<div class="panel-heading" style="background-color:red;">
	<h1><span class="glyphicon glyphicon-tag"></span> Product / Add Product  </h1></div><br>
	<div class="panel-body" style="background-color:#E6EEEE;">
		<div class="col-lg-7">
        <div class="well">
        <form action="add_product.php" method="post" name="form" enctype="multipart/form-data" class="center">
        <p>Title</p>
        <input class="input-lg thumbnail form-control" type="text" name="mobilename" id="mobilename" autofocus style="width:100%" placeholder="Product Name" required>
        <?php  if(isset($error['mobilename']))
      {
        echo $error['mobilename'];
      }
      ?>
<p>Description</p>
<textarea class="thumbnail form-control" name="description" id="description" style="width:100%; height:100px" placeholder="write here..." required></textarea>
<?php if(!empty($error["description"]))
      {
        echo $error["description"];
      }?>
<p>Add Image</p>
<div style="background-color:#CCC">
<input type="hidden" name="size" value="1000000">
<input type="file" name="image">
      
      <?php  if(isset($error['image']))
          {
            echo $error['image'];
          }
      ?>
</div>
</div>
<div class="well">
<p>Price</p>
<div class="input-group">
      <div class="input-group-addon">Rs</div>
      <input type="text" class="form-control" name="price" id="price"  placeholder="0.00" required>
      <?php if(!empty($error["processor"]))
      {
        echo $error["processor"];
      }?>
    </div><br>
<p>Camera</p>
        <input class="input-lg thumbnail form-control" type="text" name="camera" id="camera" autofocus style="width:100%" placeholder="Camera" required>
        <?php if(!empty($error["camera"]))
      {
        echo $error["camera"];
      }?>
    <p>Processor</p>
        <input class="input-lg thumbnail form-control" type="text" name="processor" id="processor" autofocus style="width:100%" placeholder="Processor" required>
        <?php if(!empty($error["processor"]))
      {
        echo $error["processor"];
      }?>
    <p>RAM</p>
        <input class="input-lg thumbnail form-control" type="text" name="ram" id="ram" autofocus style="width:100%" placeholder="RAM" required>
        <?php if(!empty($error["ram"]))
      {
        echo $error["ram"];
      }?>
    <p>ROM</p>
        <input class="input-lg thumbnail form-control" type="text" name="rom" id="rom" autofocus style="width:100%" placeholder="ROM" required>
        <?php if(!empty($error["rom"]))
      {
        echo $error["rom"];
      }?>
    <p>Android Version</p>
        <input class="input-lg thumbnail form-control" type="text" name="version" id="version" autofocus style="width:100%" placeholder="Android Version" required>
        
      <?php if(!empty($error["version"]))
      {
        echo $error["version"];
      }?>
    <p>Size</p>
        <input class="input-lg thumbnail form-control" type="text" name="size" id="size" autofocus style="width:100%" placeholder="Size" required>
        <?php if(!empty($error["size"]))
      {
        echo $error["size"];
      }?>
    <p>Color</p>
        <input class="input-lg thumbnail form-control" type="text" name="color" id="color" autofocus style="width:100%" placeholder="Color" required>
        <?php if(!empty($error["color"]))
      {
        echo $error["color"];
      }?>
   <p>Battery</p>
        <input class="input-lg thumbnail form-control" type="text" name="battery" id="battery" autofocus style="width:100%" placeholder="Battery" required>
        <?php if(!empty($error["battery"]))
      {
        echo $error["battery"];
      }?>

    </div>
        </div>  
        <div class="col-lg-5">
        <div class="well">
<h3>Category</h3>  

<input type="radio" name="gender" value="samsung">Samsung
      <input type="radio" name="gender" value="oppo">Oppo
      <input type="radio" name="gender" value="vivo">Vivo
      <input type="radio" name="gender" value="nokia">Nokia
      <input type="radio" name="gender" value="oneplus">OnePlus
      <input type="radio" name="gender" value="other">Others
      <?php if(!empty($error["gender"]))
      {
        echo $error["gender"];
      }?>
</div>          
</div>

<div align="center"> 
    <input type="submit" name="submit" id="submit" class="btn btn-success" style="width:150px; height:60px" value="Add Products"> 
    </div>
        </form>
 
	</div>
</div></div></div>
<?php include("include/js.php"); ?>
</body>
</html>