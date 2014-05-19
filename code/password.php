<?php
ob_start();
	session_start();
	
	if(!isset($_SESSION['usernamee']))
		header('Location:redirect.php?action=fail');
require 'connect.inc.php';
$sid=$_SESSION['usernamee'];
$pass = $_POST['old_pass'];
$pass1 = $_POST['new_pass'];
$pass2 = $_POST['new_pass1'];

	if($pass1 == $pass2)
	{
	$query = "UPDATE `student` SET  `PASSWORD`='$pass2' where `SID`=$sid and `PASSWORD`='$pass'";

			$query_run=mysql_query($query);
	
	header ('Refresh:1; URL=redirect.php?action=success_stu');	
		
	}
	else
	echo mysql_error();

	

	

?>