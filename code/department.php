<html>
<head>
<title>Department</title>
<link rel="stylesheet" type="text/css" href="authority.css"/>
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
	<td><a class="st_opted" href="department.php">Home</a></td>
	<td><a class="st" href="complaint_san.php">Complaints</a></td>
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
				$sqll="select * from DEPARTMENT D,AUTHORITY A WHERE A.AID=$username && D.DID=A.DID";
				$resultll=mysqli_query($con,$sqll);
				$row11=mysqli_fetch_array($resultll);
				
				echo "<td>Name </td>";
				echo "<td>". $row['FNAME'] . " " . $row['LNAME'] . "</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>gender </td>";
				echo "<td>". $gender . "</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>Department </td>";
				echo "<td>". $row11['DNAME'] . "</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>Phone </td>";
				echo "<td>". $row11['PHONE']. "</td>" ;
				echo "</tr>";
				echo "<tr>";
				echo "<td>Email </td>";
				echo "<td>". $row11['EMAIL'] . "</td>" ;
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