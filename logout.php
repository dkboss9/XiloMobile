<?php
session_start();

unset($_SESSION["username"]);
$_SESSION['id']=null;
setcookie('username',null,time()-1);
header("location:login.php");
?>
