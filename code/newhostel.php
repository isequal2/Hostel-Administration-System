<html>
<head>
<title>Add Hostel</title>
<link rel="stylesheet" type="text/css" href="admin.css"/>
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
	<td><a class="st" href="admin.php">Home</a></td>
	<td><a class="st" href="mess.php">Mess</a></td>
	<td><a class="st_opted" href="add_entity.php">Add Entity</a></td>
	<td><a class="st" href="admin_student_reg.php">New Students</a></td>
	<td><a class="st" href="complaint_admin.php">Complaint</a></td>
	<td><a class="st" href="feedback_view.php">Feedback</a></td>
	<td><a class="st" href="redirect.php?action=logout">Logout</a></td>
	</tr>
	</table>
	</div>
	<div class="profile">
	<table>
	<tr>
	
	
	<td >
			<fieldset>
			<legend>New Hostel Data</legend>
			<form name="formnewmess" method="post" action="newhosteldata.php">
			<table>
			<tr>
			<th>Enter the data for new Hostel<th>
			</tr>
			<tr>
			<td>Hostel id</td>
			<td><input type="text" id="newhostelid" name="newhostelid" placeholder="6" required pattern="[0-9]*" ></td>
			</tr>
			<td>Hostel Name</td>
			<td><input type="text" id="newhostelname" name="newhostelname" placeholder="Mega tower 1" required></td>
			</tr>
			<tr>
			<!--
			<td>capacity</td>
			<td><input type="text" id="newhostelcapacity" name="newhostelcapacity" placeholder="100" required pattern="[0-9]*" ></td>
			</tr>
			-->
			<td>Type</td>
			<td><select id="newhosteltype" name="newhosteltype" required>
			<option value="M">Boys</option>
			<option value="F">Girls</option>
			</option>
			</td>
			</tr>
			<tr>
			<td>Number of rooms</td>
			<td><input type="text" id="newhoste_no_rooms" name="newhostel_no_rooms" placeholder="10" required pattern="[0-9]*" ></td>
			</tr>
			<td>Capacity of each room</td>
			<td><input type="text" id="newhostelcapacityroom" name="newhostelcapacityroom" placeholder="2" required pattern="[0-9]{1}"></td>
			</tr>
			</table>
			<input type="submit" value="submit" />
			</form>
			</frameset>
	</td>
	</tr>
		

	</table>
	
	</div>
	
	
	</div>


</body>
</html>