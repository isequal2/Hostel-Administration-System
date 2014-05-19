<?php
ob_start();
	session_start();
require 'connect.inc.php';
$sid=$_SESSION['usernamee'];


$query = "select `IMAGE` from `student` where `SID`='$sid'";
	
		if($query_run=mysql_query($query))
		{
			
		
		
		$query_row=mysql_fetch_assoc($query_run);
		$name=$query_row['IMAGE'];
		if($name!="" || $name!=NULL)
		{
		header('Content-type: image');
		readfile("images/".$name);
		}
		else
		{
		header('Content-type: image');
		readfile("images/NA.bmp");
		}
		}
		else
		echo mysql_error();
		
	

	

?>