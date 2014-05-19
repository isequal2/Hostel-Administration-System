<?php
ob_start();
	session_start();
	
if (isset($_GET['action'])) {
if (($_GET['action'] == 'success_stu') && ($_SESSION['student']==true)) 
{
header('Refresh: 0; URL= ./student.php');
}
else if ($_GET['action'] == 'logout') {
						session_unset();
						session_destroy();
						
						header('Refresh: 0; URL= login.html');
						}	
	


else if ($_GET['action'] == 'fail') 
{
session_unset();
						session_destroy();
echo "Need to login again";
header('Refresh: 2; URL= login.html');
}
}
else {
session_unset();
						session_destroy();
					header('Location: login.html');	
				}
	

?>