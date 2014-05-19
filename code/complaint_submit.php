<?php
session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				$username=$_SESSION['usernamee'];
$q=$_POST['complaint_type'];
$text=$_POST['complaint_text'];
$con=mysqli_connect("localhost","root","hello","hostel");
$sql1="insert into COMPLAINT_REDUNDANT(COMPLAINT_TEXT,SID) VALUES('$text',$username)";
mysqli_query($con,$sql1);
$sql="insert into COMPLAINT(COMPLAINT_TEXT,SID) VALUES('$text',$username)";

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