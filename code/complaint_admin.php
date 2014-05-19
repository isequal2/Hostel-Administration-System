<html>
<head>
<title>Admin Complaint</title>
<link rel="stylesheet" type="text/css" href="complaint.css"/>


<script Language="JavaScript">
function validate(form)
{
var c=-1;
for(var i=0;i<5;i++)
{
	if(form.complaint_type[i].checked)
		c=0;
}
if(c==-1)
{
	
	alert("select some complaint type");
	return false;
}
	//document.getElementByName('pointc').innerHTML="Please select complaint type";

/*
if(x.value=="")
	{
		document.getElementByName('pointc').innerHTML="Please select complaint type";
		x.value="";
		x.focus();
		return false;
	}
else	
document.getElementById('pointc').innerHTML="";
*/
}
</script>
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
	<td><a class="st_opted" href="complaint_admin.php">Complaint</a></td>
	<td><a class="st" href="feedback_view.php">Feedback</a></td>
	<td><a class="st" href="redirect.php?action=logout">Logout</a></td>
	</tr>
	</table>
	</div>
	<div class="profile">
	<table>
	<tr>
	
	
		<td ><h3>New Complaints</h3>
			<?php
				session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
				$username=$_SESSION["usernamee"];
				$con=mysqli_connect("localhost","root","hello","hostel");
				$sql="SELECT * FROM COMPLAINT";
				$result=mysqli_query($con,$sql);
				echo "<form method='post' action='complaint_handle_admin.php'>";
				echo "<table border='1px'>";
				echo "<tr>
					  <th>Complaint ID</th>
					  <th>Complaint </th>
					  <th>Student ID</th>
					  <th>Enter department ID to Send</th>
					  </tr>";
				while($row=mysqli_fetch_array($result))
				{
				$m=$row['CID'];
				echo "<tr>";
				echo "<td>".$row['CID']."</td>";
				echo "<td>".$row['COMPLAINT_TEXT']."</td>";
				echo "<td>".$row['SID']."</td>";
				echo "<td><input type='TEXT' name='$m' id='$m' placeholder='1-5 only numbers' pattern=[1-5] /></td>";
				echo "</tr>";
				
				}
				echo "</table>";
				echo "<button type='submit'>Submit</button>";
				echo "</form>";
				?>
		</td>
		
	</tr>
	<tr>
		<td ><br/><br/><h3>Forwarded to Department</h3>
			<?php
				
				$username=$_SESSION["usernamee"];
				
				$sql="SELECT * FROM COMPLAINT_DEPT WHERE STATUS='N'";
				$result=mysqli_query($con,$sql);
				echo "<table border='1px'>";
				echo "<tr>
					  <th>Complaint ID</th>
					  <th>Selected Department</th>
					  <th>Student ID</th>
					  
					  </tr>";
				while($row=mysqli_fetch_array($result))
				{
				
				echo "<tr>";
				echo "<td>".$row['CID']."</td>";
				echo "<td>".$row['DID']."</td>";
				echo "<td>".$row['SID']."</td>";
				echo "</tr>";
				
				}
				echo "</table>";
				?>
		</td>
	</tr>
	<tr>
		<td ><br/><br/><h3>Work completed</h3>
			<?php
				
				$username=$_SESSION["usernamee"];
				
				$sql="SELECT * FROM COMPLAINT_DEPT WHERE STATUS='Y'";
				$result=mysqli_query($con,$sql);
				echo "<table border='1px'>";
				echo "<tr>
					  <th>Complaint ID</th>
					  <th>Selected Department</th>
					  <th>Student ID</th>
					  
					  </tr>";
				while($row=mysqli_fetch_array($result))
				{
				
				echo "<tr>";
				echo "<td>".$row['CID']."</td>";
				echo "<td>".$row['DID']."</td>";
				echo "<td>".$row['SID']."</td>";
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