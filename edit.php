<?php
require_once "connect.php";
  session_start();
  $id = $_COOKIE['id'];
  $sql = "select * from tbl_user where id =$id";
  $result = mysqli_query($conn,$sql);
  $data = mysqli_fetch_assoc($result);
  if (isset($_POST['sign'])) 
{
  $err = array();
  if(empty($_POST['name']))
  {
    $err['name']= "Enter Name";
  }
  //Checking if there is any numeric characters
  elseif (!preg_match("/[a-zA-Z'-]/",$_POST['name']))
  {
    $err['name']= "Enter the valid name";
  }
  
  else
  {
    $name= $_POST['name'];
  }
  //Validation for username
  if(empty($_POST['username']))
  {
    $err['username']= "Enter Username";
  }
  elseif(!preg_match('/^\w{5,}$/', $_POST['username']))
  {
    $err['username']= "Invalid username";
  }

  else
  {
    $username= $_POST['username'];
  }

  

  //Password validation
  if(($_POST['password'])&& !empty($_POST['password']))
  {
    $password= $_POST['password'];
  }
  //Validation of password matched or not
  if($_POST['password'] != $_POST['repassword'])
  {
    $err['repassword']= "Password do not match!!!";

  }
  //gender
  if(empty($_POST['gender']))
  {
    $err['gender']="Enter Gender";
  }
  else
  {
    $gender= $_POST['gender'];
  }
  //Email validation
  if(empty($_POST['email']))
  {
    $err['email']= "Enter email";
  }
  //Checking whether email is in valid format or not
  else
  {
    $pattern = "/^([a-zA-z0-9\.\-])+\@(([a-zA-Z0-9\_\.])+\.)+([a-zA-Z0-9]{2,4})+$/";
    if (!preg_match($pattern, $_POST['email']))
    {
          $err['email']= "Enter valid email"; 
      }
  
     else
     {
      $email= $_POST['email'];
     }
    }
    //Address validation
    if(empty($_POST['address']))
    {
      $err['address']= "Enter Address";
    }
    else
    {
      $address= $_POST['address'];
    }   
    //Phone number validation
    if(empty($_POST['phonenumber']))
    {
      $err['phonenumber']= "Enter number";
    }
    elseif(strlen(trim($_POST['phonenumber']))!=10)
    {
      $err['phonenumber']= "Enter Ten numbers";
    }
    elseif( (!preg_match("/[0-9]/",$_POST['phonenumber'])))
    {
      $err['phonenumber']= "Enter correct number";
    }
    
    else
    {
      $phonenumber= $_POST['phonenumber'];
    }
    if(count($err)== 0)
    {
      $date=date('Y-m-d H:i:s');
      if(isset($password)){
    $sql ="update tbl_user set name='$name',username='$username',password='$password',gender='$gender',email='$email',address='$address',phone='$phonenumber',updated_date='$date' where id=$id";
    mysqli_query($conn,$sql);
  }else{
    $sqli ="update tbl_user set name='$name',username ='$username',gender='$gender',email='$email',address='$address',phone='$phonenumber',updated_date='$date' where id=$id";

      mysqli_query($conn,$sqli);
  }
      if (mysqli_affected_rows($conn)==1) {

      echo "User update successfully";
      header("location:home.php");
    }else{

      echo"user update failed";
    } 
     
    }
} 
 
?>

<!DOCTYPE html>
<html>
<head>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
  
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <title>Login</title>
  <style>
    body{
      background-image: url('http://localhost/project/images/back.jpg');
    }
    b.designsignup {
    background-color: orange;
    border-radius: 8px;
    font-family: none;
    font-size: 40px;
}
h1.display-4{
    background:orange;
    width: 200px;
    margin-left: 37%;
    border-radius: 0px;
    font-family: none;
    font-size: 30px;
    box-shadow: 2px 5px lavenderblush;
}
.formloginform
{
   width: 100%;
  padding: 14px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: orange;
  background-color: white;
  border:1px solid orange;
}
.row {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -130px;
    margin-left: 130px;
}


  </style>
</head>
<body>

  
<?php include "header.php"

 ?>

<div class="aaa">
  <div class="container">
    <br>
    <div class="row">
      <div class="col-md-8">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 style="text-align: center;" class="display-4"><b class="designsignup">Edit Profile</b></h1>
            <hr class="my-4">
            <form action="" method="post">
              <div class="form-row">
              
              <div class="col-md-12">
                <label for="name">Name</label>
                <input type="text" class="formloginform" name="name"autocomplete="off" value="<?php echo $data['name'];?>">
                <?php  if(isset($err['name']))
                    echo $err['name'];
                ?>
              </div>
              <div class="col-7">
                <label for="username">Username</label>
                <input type="text" class="formloginform" name="username" autocomplete="off" value="<?php echo $data['username'];?>">
                <?php  if(isset($err['username']))
                    echo $err['username'];
                 ?>
              </div>
              
            </div>
            <div class="form-row">
              


              
              <div class="form-group col-md-6">
                <label for="inputPassword1">Password</label>
               
                <input type="password" class="formloginform" name="password" placeholder="Enter Password">
                <?php  if(isset($err['password']))
                     echo $err['password'];
                ?>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword2">Confirm Password</label>
                <input type="password" class="formloginform" name="repassword" placeholder="Confirm Password">
                 <?php  if(isset($err['repassword']))
                    echo $err['repassword'];
                 ?>
              </div>
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail4">Email</label>
                
                
                <input type="email" class="formloginform" name="email" utocomplete="off" value="<?php echo $data['email'];?>">
                <?php  if(isset($err['email']))
                     echo $err['email'];
                ?>
              </div>

            <fieldset class="form-group">
                <div class="row">
                  <legend class="col-form-label col-sm-2 pt-0">Gender</legend>
                  <div class="col-sm-10">
                    <div class="form-check">
                      <input class="form-check-input loginform" type="radio" name="gender" value="Male" checked>
                      <label class="form-check-label" for="gridRadios1">
                        Male
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input loginform" type="radio" name="gender"  value="Female">
                      <label class="form-check-label" for="gridRadios2">
                        Female
                        <?php  if(isset($err['gender']))
                          echo $err['gender'];
                     ?>
                      </label>
                    </div>
                    
                  </div>
                </div>
            </fieldset>
            <div class="form-row">
              <div class="form-group col-md-12">
                
                <label for="inputAddress">Address</label>
                <input type="text" class="formloginform" name="address" autocomplete="off" value="<?php echo $data['address'];?>">
                <?php  if(isset($err['address']))
                     echo $err['address'];
                   ?>
              </div>
              <div class="form-group col-7">
                <label for="phone">Phone No</label>
                <input type="text" class="formloginform" name="phonenumber" autocomplete="off" value="<?php echo $data['phone'];?>">
                <?php  if(isset($err['phonenumber']))
                     echo $err['phonenumber'];
                  ?>
              </div>
              </div>
            
            <br>
            <button type="submit" class="btn btn-primary" name="sign" style="border-radius: 10px; background-color: orange; color: white;">Update</button>
          </form>
         </div>
          </div>
      </div>

     
    </div>
    </div>
  </div>
    <script src="js/commentscript.js">
      
  </script>
  
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>