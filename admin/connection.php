<?php
	$conn = mysqli_connect('localhost','root','','db_projects');
	
	if(!$conn)
	{
		die('Database connection error');
	}
?>