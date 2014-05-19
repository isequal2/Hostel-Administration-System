<html>
<head>
<title>Admin</title>
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
	<td><a class="st_opted" href="admin.php">Home</a></td>
	<td><a class="st" href="mess.php">Mess</a></td>
	<td><a class="st" href="add_entity.php">Add Entity</a></td>
	<td><a class="st" href="Room_alloted_admin_view.php">Room</a></td>
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
	
	
	<td ><img src="images/profile.jpg" height="200px" width="200px" id="profile_pic"></td>
	<td><h2 class="profile_data"></h2>
			<?php
				session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
				$username=$_SESSION["usernamee"];
				$con=mysqli_connect("localhost","root","hello","hostel");
				$sql="SELECT * FROM AUTHORITY WHERE AID='$username'";
				$result=mysqli_query($con,$sql);
				
				
				
				
				echo "<table>
				<tr>";
				
				$row=mysqli_fetch_array($result);
				if($row['GENDER']=='m' || $row['GENDER']=='M')
				{
					$gender="Male";
				}
				else
				{
					$gender="Female";
				}
				echo "<td>Name </td>";
				echo "<td>". $row['FNAME'] . " " . $row['LNAME'] . "</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>gender </td>";
				echo "<td>". $gender . "</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>Department </td>";
				echo "<td>". "Admin" . "</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>Phone </td>";
				echo "<td>". $row['PHONE'] ."</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>Email </td>";
				echo "<td>". $row['EMAIL'] . "</td>" ;
				echo "</tr>";
				echo "</table>";
			?>
		</td>
	</tr>
		
	</table>
	
	</div>
	
	
	</div>


</body>
</html>