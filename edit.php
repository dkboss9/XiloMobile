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
    }else{

      echo"user update failed";
    } 
     
    }
} 
 
?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
  <link href="fontawesome/css/all.css" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
strong.designlogin{
  background-color: orange;
    border-radius: 8px;
    font-family: none;
    font-size: 40px;
}
span.login {
    background-color: orange;
    width: 8px;
    margin-left: -7px;
}
.loginform{
  border:1px solid orange;
}

  </style>
</head>
<body>

  
<?php include "header.php" ?>


  <div class="container">
    <br>
    <div class="row">
      <div class="col-md-8">
        <div class="jumbotron jumbotron-fluid">
          <div class="container">
            <h1 style="text-align: center;" class="display-4"><b class="designsignup">Sign-up</b></h1>
            <hr class="my-4">
            <form action="" method="post">
              <div class="form-row">
              
              <div class="col-md-12">
                <label for="name">Name</label>
                <input type="text" class="form-control loginform" name="name"placeholder="Enter Name">
                <?php  if(isset($err['name']))
                    echo $err['name'];
                ?>
              </div>
              <div class="col-7">
                <label for="username">Username</label>
                <input type="text" class="form-control loginform" name="username"placeholder="Enter username">
                <?php  if(isset($err['username']))
                    echo $err['username'];
                 ?>
              </div>
              
            </div>
            <div class="form-row">
              


              
              <div class="form-group col-md-6">
                <label for="inputPassword1">Password</label>
               
                <input type="password" class="form-control loginform" name="password" placeholder="Enter Password">
                <?php  if(isset($err['password']))
                     echo $err['password'];
                ?>
              </div>
              <div class="form-group col-md-6">
                <label for="inputPassword2">Confirm Password</label>
                <input type="password" class="form-control loginform" name="repassword" placeholder="Confirm Password">
                 <?php  if(isset($err['repassword']))
                    echo $err['repassword'];
                 ?>
              </div>
            </div>
            <div class="form-group col-md-12">
                <label for="inputEmail4">Email</label>
                
                
                <input type="email" class="form-control loginform" name="email" placeholder="Enter Email">
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
                <input type="text" class="form-control loginform" name="address" placeholder="Enter address">
                <?php  if(isset($err['address']))
                     echo $err['address'];
                   ?>
              </div>
              <div class="form-group col-7">
                <label for="phone">Phone No</label>
                <input type="text" class="form-control loginform" name="phonenumber" placeholder="Example 98********">
                <?php  if(isset($err['phonenumber']))
                     echo $err['phonenumber'];
                  ?>
              </div>
              </div>
            
            <br>
            <button type="submit" class="btn btn-primary" name="sign" style="border-radius: 10px; background-color: orange; color: white;">Sign Up</button>
          </form>
         </div>
          </div>
      </div>

     
    </div>
</body>
</html>