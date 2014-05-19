<?php
ob_start();
	session_start();			

	if(!isset($_SESSION['usernamee']))
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
			<form id="form_update" action="profile.php" method="post" enctype="multipart/form-data">

	<div>
	<fieldset>
			<legend>Profile Update</legend>
		<table>
			
			<tr>
			<td>Father First name<i></i></td>
				<td><input type="text" id="ffname"  name="ffname" required></td><td><i id="pointfname"></i></td>
			</tr>
			<tr>
				<td>Father Mid Name</td>
				<td><input type="text" id="fmname"  name="fmname" ></td><td><i id="pointmname"></i></td>
			</tr>
			<tr>
				<td>Father Last Name<i></i></td>
				<td><input type="text" id="flname"  name="flname" required></td><td><i id="pointlname"></i></td>
			</tr>
			<tr>
				<td>Mother First name<i></i></td>
				<td><input type="text" id="mfname"  name="mfname" required></td><td><i id="pointfname"></i></td>
			</tr>
			<tr>
				<td>Mother Mid Name</td>
				<td><input type="text" id="mmname" name="mmname"></td><td><i id="pointmname"></i></td>
			</tr>
			<tr>
				<td>Mother Last Name<i></i></td>
				<td><input type="text" id="mlname"  name="mlname" required></td><td><i id="pointlname"></i></td>
			</tr>
			
			<tr>
				<td>Phone<i></i></td>
				<td><input type="text" id="phone"  name="phone" required></td><td><i id="pointphone"></i></td>
			</tr>
			
			<tr>
				<td>Email<i></i></td>
				<td><input type="email" id="email" name="email" required></td><td><i id="pointemail"></i></td>
			</tr>
			
			
			<tr>
				<td>Profile image<i>*</i></td>
				<td><input type="file" id="profile_img" name="profile_img"></td><td><i id="pointdob"></i></td>
			</tr>
			</table>
			</fieldset>
			
			
		
		<input type="submit" id="submit1"  value="Update Profile"/>
		</div>
</form>




		</h2></td>
	</tr>
	</table>
	
	</div>
	
	
	</div>





</body>
</html>