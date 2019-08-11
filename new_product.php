<?php
	if(isset($_POST["enter"]))
	{
		
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
	if(count($error)== 0)
{
	$date=date('Y-m-d H:i:s');
	require_once "connect.php";
	$admin="dkboss9";
	if($gender=="samsung")
	{
		$sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','1','1','$admin','$date')";
		mysqli_query($conn,$sql);
		
		if (mysqli_insert_id($conn)>0) {
			echo "Product inserted sucessfully";
			
		}else{
			echo"Product insert failed";
		}
	}
		if($gender=="oppo")
	{
		$sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','4','1','$admin','$date')";
		mysqli_query($conn,$sql);
		
		if (mysqli_insert_id($conn)>0) {
			echo "Product inserted sucessfully";
			
		}else{
			echo"Product insert failed";
		}

}
	if($gender=="nokia")
	{
		$sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','2','1','$admin','$date')";
		mysqli_query($conn,$sql);
		
		if (mysqli_insert_id($conn)>0) {
			echo "Product inserted sucessfully";
			
		}else{
			echo"Product insert failed";
		}
	}
		if($gender=="vivo")
	{
		$sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','5','1','$admin','$date')";
		mysqli_query($conn,$sql);
		
		if (mysqli_insert_id($conn)>0) {
			echo "Product inserted sucessfully";
			
		}else{
			echo"Product insert failed";
		}
	}
		if($gender=="oneplus")
	{$sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','3','1','$admin','$date')";
		mysqli_query($conn,$sql);
		
		if (mysqli_insert_id($conn)>0) {
			echo "Product inserted sucessfully";
			
		}else{
			echo"Product insert failed";
		}
		}
		if($gender=="other")
	{
		$sql="insert into tbl_product(image,mobilename,price,camera,processor,ram,rom,version,size,color,battery,description,c_id,a_id,created_by,created_date) values ('$tmpname','$mobilename','$price','$camera','$processor','$ram','$rom','$version','$size','$color','$battery','$description','6','1','$admin','$date')";
		mysqli_query($conn,$sql);
		
		if (mysqli_insert_id($conn)>0) {
			echo "Product inserted sucessfully";
			
		}else{
			echo"Product insert failed";
		}
	}
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>New Product Insertion</title>
		<style >
			.center{
				background:gray;
			}
		</style>
	</head>
	<body>
		<center>
		<form action=""   method="post" enctype="multipart/form-data" class="center">
			<input type="hidden" name="size" value="1000000">
			Upload Image
			<input type="file" name="image">
			
			<?php  if(isset($error['image']))
					{
						echo $error['image'];
					}
			?>
			<br>
			Mobile Name
			<input type="text" name="mobilename">
			<?php  if(isset($error['mobilename']))
			{
				echo $error['mobilename'];
			}
			?>
			
			<br>
			Price
			<input type="text" name="price">
			<?php if(!empty($error["price"]))
			{
				echo $error["price"];
			}?>
			<br>
			Camera
			<input type="text" name="camera">
			<?php if(!empty($error["camera"]))
			{
				echo $error["camera"];
			}?>
			<br>
			Processor
			<input type="text" name="processor">
			<?php if(!empty($error["processor"]))
			{
				echo $error["processor"];
			}?>
			<br>
			RAM
			<input type="text" name="ram">
			<?php if(!empty($error["ram"]))
			{
				echo $error["ram"];
			}?>
			<br>
			ROM
			<input type="text" name="rom">
			<?php if(!empty($error["rom"]))
			{
				echo $error["rom"];
			}?>
			<br>
			Android Version
			<input type="text" name="version">
			<?php if(!empty($error["version"]))
			{
				echo $error["version"];
			}?>
			<br>
			Size
			<input type="text" name="size">
			<?php if(!empty($error["size"]))
			{
				echo $error["size"];
			}?>
			<br>
			Color
			<input type="text" name="color">
			<?php if(!empty($error["color"]))
			{
				echo $error["color"];
			}?>
			<br>
			Battery
			<input type="text" name="battery">
			<?php if(!empty($error["battery"]))
			{
				echo $error["battery"];
			}?>
			<br>
			Description
			<input type="text" name="description">
			<?php if(!empty($error["description"]))
			{
				echo $error["description"];
			}?>
			<br>
			<label for="gender">Mobile Category: </label>
			<input type="radio" name="gender" value="samsung">Samsung
			<input type="radio" name="gender" value="oppo">Oppo
			<input type="radio" name="gender" value="vivo">Vivo
			<input type="radio" name="gender" value="nokia">Nokia
			<input type="radio" name="gender" value="oneplus">OnePlus
			<input type="radio" name="gender" value="other">Other
			<?php if(!empty($error["gender"]))
			{
				echo $error["gender"];
			}?>
			<br>
			<input type="submit" name="enter" value="Enter">
		</form>
		</center>
	</body>
</html>