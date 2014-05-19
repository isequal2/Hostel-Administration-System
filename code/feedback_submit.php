<?php
session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				$username=$_SESSION['usernamee'];

$text=$_POST['feedback'];
$con=mysqli_connect("localhost","root","hello","hostel");
$sql="insert into FEEDBACK(F_TEXT) VALUES('$text')";

if(mysqli_query($con,$sql))
{
header("location:student.php");
//echo "entered";
}
else
{
echo "error" . mysql_error($con);
}




?>