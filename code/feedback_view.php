<html>
<head>
<title>feedback View</title>
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
	<td><a class="st" href="admin_student_reg.php">New Students</a></td>
	<td><a class="st" href="complaint_admin.php">Complaint</a></td>
	<td><a class="st_opted" href="feedback_view.php">Feedback</a></td>
	<td><a class="st" href="redirect.php?action=logout">Logout</a></td></tr>
	</table>
	</div>
	<div class="profile">
	<table>
	<tr>
	
	
	<td >
			<?php
				session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
				$username=$_SESSION["usernamee"];
				$con=mysqli_connect("localhost","root","hello","hostel");
				$sql="SELECT * FROM FEEDBACK";
				$result=mysqli_query($con,$sql);
				
				echo "<table border='1'>
				<tr>";
				echo "<th>Feedback id </th>";
				echo "<th>Feedbacks </th>";
				echo "</tr>";
				while($row=mysqli_fetch_array($result))
				{
				echo "<tr>";
				echo "<td>". $row['FID'] . "</td>" ;
				echo "<td>". $row['F_TEXT'] . "</td>" ;
				echo "</tr>";
				}
				echo "</table>";
			?>
		</td>
	</tr>
	</table>
	
	</div>
	
	
	</div>


</body>
</html>