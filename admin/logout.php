<?php
session_start();
if(isset($_SESSION['user_id'])&& $_SESSION['user_id']!="")
{
  $_SESSION['user_id']="";
  unset($_SESSION['user_id']);
  header("location: login.php");
  
}
else
{
   header("location: login.php");
}
?>