<?php

require 'connect.inc.php';

$roll_no=$_POST['roll_no'];
$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$gender = $_POST['gender'];
$dob=$_POST['date'];
$year=$_POST['year'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass1 = $_POST['new_pass'];
$pass2 = $_POST['new_pass1'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["college_id"]["name"]);
$extension = end($temp);

$_FILES["college_id"]["name"]=$roll_no.".".$extension;
$college_id=$_FILES["college_id"]["name"];


$query = "INSERT INTO `register`  VALUES('$roll_no', '$fname', '$mname','$lname', '$gender', '$dob','$year','$pass1','$college_id',0,'$email',$phone)";

		if($query_run=mysql_query($query))
		{	
		
		

if ((($_FILES["college_id"]["type"] == "image/gif")
|| ($_FILES["college_id"]["type"] == "image/jpeg")
|| ($_FILES["college_id"]["type"] == "image/jpg")
|| ($_FILES["college_id"]["type"] == "image/pjpeg")
|| ($_FILES["college_id"]["type"] == "image/x-png")
|| ($_FILES["college_id"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
		if ($_FILES["college_id"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["college_id"]["error"] . "<br>";
		}
		else
		{
		/* echo "Upload: " . $_FILES["college_id"]["name"] . "<br>";
		echo "Type: " . $_FILES["college_id"]["type"] . "<br>";
		echo "Size: " . ($_FILES["college_id"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["college_id"]["tmp_name"] . "<br>";
 */
			
			move_uploaded_file($_FILES["college_id"]["tmp_name"],"upload/" . $_FILES["college_id"]["name"]);
			//echo "Stored in: " . "upload/" . $_FILES["college_id"]["name"];
			
		}
		
	echo "Thank You for Registering. Wait for admin approval";
	header('Refresh: 2; URL= login.html');	
	}
	else
	{
	echo "Invalid file";
	header('Refresh: 2; URL= login.html');
	}

		
		
	}
	else
	echo mysql_error();

	

	

?>