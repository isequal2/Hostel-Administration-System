<html>
<head>
<title>Complaint</title>
<link rel="stylesheet" type="text/css" href="complaint.css"/>
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
	<td><a class="st" href="">Room</a></td>
	<td><a class="st" href="mess.php">Mess</a></td>
	<td><a class="st_opted" href="complaint.php">Complaint</a></td>
	<td><a class="st" href="">FAQ</a></td>
	</tr>
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
				echo "<td>Primary Phone </td>";
				echo "<td>". "change it" . "</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>Primary email </td>";
				echo "<td>". "change it" . "</td>" ;
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