<html>
<head>
<title>Student</title>
<link rel="stylesheet" type="text/css" href="student.css"/>
</head>
<body>

	<form id="student">
	<div align="center" class="img" >
	<table>
	<tr>
	<td ><img src="images/logo.png" height="80px" width="80px"></td>
	<td><h2 class="logo">National Institute of Technology Surathakal, Karnataka 575025<br/>Hostel Administration System</h2></td>
	</tr>
	</table>
	</div>
	
	<div class="link">
	<table >
	<tr>
	<td><a class="st" href="student.php">Home</a></td>
	<td><a class="st" href="student.php">Room</a></td>
	<td><a class="st" href="student.php">Mess</a></td>
	<td><a class="st" href="student.php">Complaint</a></td>
	<td><a class="st" href="student.php">FAQ</a></td>
	</tr>
	</div>
	<div class="profile">
	<table>
	<tr>
	<td ><img src="images/profile.jpg" height="200px" width="200px" id="profile_pic"></td>
	<td><h2 class="profile_data"><h2>
			<?php
				session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
				$username=$_SESSION["usernamee"];
				$con=mysqli_connect("localhost","root","hello","hostel");
				$sql="SELECT * FROM STUDENT WHERE SID='$username'";
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($result))
				{
				echo "Hello " . $row['SID'] . " your password is " . $row['PASSWORD'] ;
				}
			?>
		</h2></td>
	</tr>
	</table>
	
	</div>
	
	
	</form>


</body>
</html>