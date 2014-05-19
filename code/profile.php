<?php
ob_start();
	session_start();
	
	if(!isset($_SESSION['usernamee']))
		header('Location:redirect.php?action=fail');
require 'connect.inc.php';
$sid=$_SESSION['usernamee'];
$ffname = $_POST['ffname'];
if(isset($_POST['fmname']))
$fmname = $_POST['fmname'];
else
$fmname ="";
$flname = $_POST['flname'];
$mfname = $_POST['mfname'];
if(isset($_POST['mmname']))
$mmname = $_POST['mmname'];
else
$fmname ="";
$mlname = $_POST['mlname'];

$phone=$_POST['phone'];
$email=$_POST['email'];
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["profile_img"]["name"]);
$extension = end($temp);


$_FILES["profile_img"]["name"]=$sid.".".$extension;
$profile_img=$_FILES["profile_img"]["name"];


$query = "UPDATE `student` SET  `FFNAME`='$ffname', `FMNAME`='$fmname', `FLNAME`='$flname', `MFNAME`='$mfname', `MMNAME`='$mmname', `MLNAME`='$mlname' ,`PHONE`='$phone' ,`EMAIL`='$email' where `SID`=$sid";

		if($query_run=mysql_query($query))
		{	
		
		
if ((($_FILES["profile_img"]["type"] == "image/gif")
|| ($_FILES["profile_img"]["type"] == "image/jpeg")
|| ($_FILES["profile_img"]["type"] == "image/jpg")
|| ($_FILES["profile_img"]["type"] == "image/pjpeg")
|| ($_FILES["profile_img"]["type"] == "image/x-png")
|| ($_FILES["profile_img"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
		if ($_FILES["profile_img"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["profile_img"]["error"] . "<br>";
		}
		else
		{
		/* echo "Upload: " . $_FILES["profile_img"]["name"] . "<br>";
		echo "Type: " . $_FILES["profile_img"]["type"] . "<br>";
		echo "Size: " . ($_FILES["profile_img"]["size"] / 1024) . " kB<br>";
		echo "Temp file: " . $_FILES["profile_img"]["tmp_name"] . "<br>";
 */
			
			move_uploaded_file($_FILES["profile_img"]["tmp_name"],"images/" . $_FILES["profile_img"]["name"]);
			/* echo "Stored in: " . "images/" . $_FILES["profile_img"]["name"];
			 */
			$query = "UPDATE `student` SET  `IMAGE`='$profile_img' where `SID`=$sid";

			$query_run=mysql_query($query);
		
		
			
		}
		
		
	}
	else
	{
	
	}
	
	
 
	
	echo "profile updated";
	header ('Refresh:1; URL=redirect.php?action=success_stu');	
		
	}
	else
	echo mysql_error();

	

	

?>