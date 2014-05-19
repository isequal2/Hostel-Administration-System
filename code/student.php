<?php
ob_start();
	session_start();			

	if(!isset($_SESSION['usernamee']) ||($_SESSION['student'] ==false))
		header('Location:redirect.php?action=fail');
	
			
			?>
<html>
<head>
<title>Student</title>
<link rel="stylesheet" type="text/css" href="student.css"/>
</head>
<body>

	<div id="student">
	<div align="center" class="img" >
	<table>
	<tr>
	<td ><img src="images/logo.png" height="80px" width="80px"></td>
	<td><h2 class="logo">National Institute of Technology Surathakal, Karnataka 575025<br/>Hostel Administration System</h2></td>
	</tr>
	</table>
	</div>
	
	<div class="link">
	<table>
	<tr>
	<td><a class="st_opted" href="student.php">Home</a></td>
	<td><a class="st" href="room_student.php">Room</a></td>
	<td><a class="st" href="mess_student.php">Mess</a></td>
	<td><a class="st" href="complaint_student.html">Complaint</a></td>
	<td><a class="st" href="feedback.html">Feedback</a></td>
	<td><a class="st" href="redirect.php?action=logout">Logout</a></td>
	</tr>
	</table>
	</div>
	<div class="profile">
	<table>
	<tr>
	
	
	<td ><img src="image.php" height="200px" width="200px" id="profile_pic"></td>
	<td><h2 class="profile_data"><h2>
			<fieldset>
			
				<table>
					<?php
			
					require 'profile_display.php';
			
					?>
				
				</table>
				</fieldset>
			
				<button ><a href="update_profile.php"  >Update Your Profile</a></button>
				<button ><a href="change_password.php"  >Change Password</a></button>
			</div>

		</h2></td>
	</tr>
	</table>
	
	</div>
	
	
	</div>


</body>
</html>