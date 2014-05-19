<html>
<head>
<title>Student Register Action</title>
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
	<td><a class="st" href="add_entity.php">Add Entity</a></td>
	<td><a class="st" href="Room_alloted_admin_view.php">Room</a></td>
	<td><a class="st_opted" href="admin_student_reg.php">New Students</a></td>
	<td><a class="st" href="complaint_admin.php">Complaint</a></td>
	<td><a class="st" href="feedback_view.php">Feedback</a></td>
	<td><a class="st" href="redirect.php?action=logout">Logout</a></td>
	</tr>
	</table>
	</div>
	<div class="profile">
	<table>
	<tr>
	<td>
			
			<?php
			session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				require 'connect.inc.php';
				$username=$_SESSION['usernamee'];
				
					echo'<h2>Pending requests for approval</h2>';
					$query="select * from register where `approve` =0";
					
					if($query_run=mysql_query($query))
					{
					echo '
					<form method="post" action="approve.php">
					<table border="1">
					<tr>
					<th>SID</th>
					<th>FIRST NAME</th>
					<th>MIDDLE NAME</th>
					<th>LAST NAME</th>
					<th>GENDER</th>
					<th>DOB</th>
					<th>YEAR</th>
					<th>COLLEGE_ID</th>
					<th>Approve</th>
					</tr>
					';
					while($query_row=mysql_fetch_assoc($query_run))
					{
					
					$sid=$query_row['SID'];
					$fname=$query_row['FNAME'];
					$mname=$query_row['MNAME'];
					$lname=$query_row['LNAME'];
					$gender=$query_row['GENDER'];
					$dob=$query_row['DOB'];
					$year=$query_row['YEAR'];
					$college_id=$query_row['college_id'];
					
					echo '
					<tr>
					<td>'.$sid.'</td>
					<td>'.$fname.'</td>
					<td>'.$mname.'</td>
					<td>'.$lname.'</td>
					<td>'.$gender.'</td>
					<td>'.$dob.'</td>
					<td>'.$year.'</td>
					<td><a href="reg_image.php?img='.$college_id.'">View College ID</a></td>
					<td align="center"><input type="checkbox" name="'.$sid.'" value="'.$sid.'"></td>
					</tr>';
					
					
					}
					
					echo '</table>
					<input type="submit"/>
					</form>';
					}
			
			?>
			</td>
	</tr>
	</table>
	
	</div>
	
	
	</div>


</body>
</html>