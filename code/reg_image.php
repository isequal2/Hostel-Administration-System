<?php
ob_start();
	session_start();
require 'connect.inc.php';
$sid=$_GET['img'];


$query = "select `college_id` from `register` where `college_id`='$sid'";
	
		if($query_run=mysql_query($query))
		{
			
		
		
		$query_row=mysql_fetch_assoc($query_run);
		$name=$query_row['college_id'];
		if($name!="" || $name!=NULL)
		{
		header('Content-type: image');
		readfile("upload/".$name);
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