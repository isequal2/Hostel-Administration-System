<html>
<head>
<title>New mess</title>
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
			<legend>New Mess Data</legend>
			<form name="formnewmess" method="post" action="newmessdata.php">
			<table>
			<tr>
			<th>Enter the data for new mess<th>
			</tr>
			<tr>
			<td>Mess id</td>
			<td><input type="text" id="newmessid" name="newmessid" placeholder="111" required pattern="[0-9]{3}" ></td>
			</tr>
			<td>Mess Name</td>
			<td><input type="text" id="newmessname" name="newmessname" placeholder="Block 1 Mess" required></td>
			</tr>
			<tr>
			<td>capacity</td>
			<td><input type="text" id="newmescapaccity" name="newmesscapacity" placeholder="100" required pattern="[0-9]*" ></td>
			</tr>
			<td>Type</td>
			<td><select id="newmesstype" name="newmesstype" required>
			<option value="V">Vegetarion</option>
			<option value="N">Non-vegeterion</option>
			</option>
			</td>
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