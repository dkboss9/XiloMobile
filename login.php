<?php 
  session_start();
  if(isset($_SESSION["username"]))
  {
    header("location:home.php");
  }
  if(isset($_SESSION['url']))
  {
  $url= $_SESSION['url'];
  }
    else
    {
      $url="home.php";
    }

?>

<?php
  
  if (isset($_POST['signup']))
{
  $errs = array();
  if (isset($_POST['username']) && empty($_POST['username']) )
  {
    $errs['username'] = "Enter username";
  }
    
  else if(trim(strlen($_POST["username"]))<5)
  {
    $errs['username'] = "Invalid username";
  }
  else
  {
    $username =  $_POST['username'];
  }
  if (empty($_POST['password']) )
  {
    $errs['password'] = "Enter password";
  }
  else
  {
    $password = $_POST["password"];
  }
  if(count($errs) == 0)
  {
    if($username=="admin" && $password=="admin")
    {
      header("location:admin.php");
    }
    else
    {
    require_once "connect.php";
    $sql = "select * from tbl_user where username ='$username' and password = '$password'";
    $result = mysqli_query($conn,$sql);
    $data=mysqli_fetch_assoc($result);
    $id=$data["id"];
    if(mysqli_num_rows($result)==1){
      session_start();
      $_SESSION['username']=$username;
      $_SESSION['id']=$id;
        setcookie('username',$username,time()+7*24*60*60);
        setcookie('id',$id,time()+7*24*60*60);
      header('location:'.$url);
    }else{
      $fail= 'Username or Password mistake. Login Failed!!!';
    }
  }
    
  }

}


  // SIGN UP FORM VALIDATION
  
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
  if(empty($_POST['password']))
  {
    $err['password']= "Enter password";
  }
  elseif(strlen(trim($_POST['password'])) < 8)
  {
    $err['password']= "Password must be of atleast 8 characters";
  }
  else
  {
    $password= $_POST['password'];
  }
  //Validation of password matched or not
  if(empty($_POST['repassword']))
  {
    $err['repassword']= "Enter password again";
  }
  elseif ($_POST['password'] != $_POST['repassword'])
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
      require_once "connect.php";
      $sql = "insert into tbl_user(name,username,password,gender,email,address,phone,created_date) values ('$name','$username','$password','$gender','$email','$address','$phonenumber','$date')";
      mysqli_query($conn,$sql);
      if (mysqli_insert_id($conn)>0) {

      
   
      $_SESSION['username']=$username;
      $_SESSION['id']=$id;
        setcookie('username',$username,time()+7*24*60*60);
        setcookie('id',$id,time()+7*24*60*60);
       header('location:'.$url);
    }else{

      echo"user creation failed";
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css ">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
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

h1.display-4{
    background:orange;
    width: 156px;
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


  </style>
</head>
<body>
<?php include "header.php"; ?>
  



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
                <input type="text" class="formloginform" name="name"placeholder="Enter Name">
                <?php  if(isset($err['name']))
                    echo $err['name'];
                ?>
              </div>
              <div class="col-md-7">
                <label for="username">Username</label>
                <input type="text" class="formloginform" name="username"placeholder="Enter username">
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
                
                
                <input type="email" class="formloginform" name="email" placeholder="Enter Email">
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
                <input type="text" class="formloginform" name="address" placeholder="Enter address">
                <?php  if(isset($err['address']))
                     echo $err['address'];
                   ?>
              </div>
              <div class="form-group col-7">
                <label for="phone">Phone No</label>
                <input type="text" class="formloginform" name="phonenumber" placeholder="Example 98********">
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

      <div class="col-md-4">
        <div class="jumbotron">
          <h1 style="text-align: center;" class="display-4"><strong class="designlogin">Login</strong></h1>
          <hr>



          <!---LOGIN FORM-->
          <form action="" method="post" >
          <div class="input-group">
             <?php if(isset($fail))
                   {
                      echo $fail;
                  } ?>
            <span class="login">
                   </span>
                   Username
            <input name="username" type="text" class="form-control" aria-describedby="emailHelp" placeholder="Enter Username">
           
                  <?php  if(isset($errs['username']))
                      echo $errs['username']
                   ?>
          </div>
          <br>
          <div class="input-group">
            <span class="login">
            </span>
            Password
            <input name="password" type="password" class="form-control"  placeholder=" Enter Password">
             <?php  if(isset($errs['password']))
                        echo $errs['password']
                    ?>
          </div>
          <br>
          
          <hr class="my-4">
          <div class="col-md-12" >
                        <input type="submit" class="btn btn-block"  name="signup" value="Login"  style="border-radius: 10px; background-color: orange; color: white;">
                  </div> 
          
        </form>
        </div>
        
      </div>
    </div>
  </div>
  
  
    <script src="js/validate.js"></script>
    <script src="bootstrap/assets/js/vendor/jquery-slim.min.js"></script>
    <script src="bootstrap/assets/js/vendor/popper.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>