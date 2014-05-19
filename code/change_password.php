<?php
ob_start();
	session_start();			

	if(!isset($_SESSION['usernamee']))
		header('Location:redirect.php?action=fail');
			
			?>
<html>
<head>
<title>Change Password</title>
<link rel="stylesheet" type="text/css" href="student.css"/>
</head>
<body>

	<div id="student">
	<div align="center" class="img" >
	<table>
	<tr>
	<td ><img src="./images/logo.png" height="80px" width="80px"></td>
	<td><h2 class="logo">National Institute of Technology Surathakal, Karnataka 575025<br/>Hostel Administration System</h2></td>
	</tr>
	</table>
	</div>
	
	<div class="link">
	<table>
	<tr>
<td><a class="st_opted" href="student.php">Home</a></td>
	<td><a class="st" href="">Room</a></td>
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
	
	<td><h2 class="profile_data"><h2>
			<form id="form_update" action="password.php" method="post" >
	
	<div>
			
			<fieldset>
			<legend>TO change password</legend>
			<table>
			<tr>
				<td>Old password<i></i></td>
				<td><input type="password" id="old_pass" name="old_pass" required></td><td><i id="pointphone"></i></td>
			</tr>
			<tr>
				<td>New password<i></i></td>
				<td><input type="password" id="new_pass" name="new_pass" required></td><td><i id="pointphone"></i></td>
			</tr>
			<tr>
				<td>confirm password<i></i></td>
				<td><input type="password" id="new_pass1" name="new_pass1" required></td><td><i id="pointphone"></i></td>
			</tr>
			</table>
			<input type="submit" id="submit1"  value="Change Password"/>
			</fieldset>
		
		
	</div>
</form>




		</h2></td>
	</tr>
	</table>
	
	</div>
	
	
	</div>





</body>
</html>
