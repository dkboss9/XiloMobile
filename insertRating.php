<?php 
	
		session_start();
							if(isset($_POST['submit'])){
								echo "Entered";
								if(isset($_SESSION['url']))
  {
  $url= $_SESSION['url'];
  }
    else
    {
      $url="home.php";

    }
    //header('location:'.$url);

							}



?>