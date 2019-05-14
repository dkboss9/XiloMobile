<?php
session_start();

unset($_SESSION["username"]);
setcookie('username',null,time()-1);
header("location:login.php");
?>
