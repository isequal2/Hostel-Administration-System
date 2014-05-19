<html>
<head>
<title>Complaint</title>
<link rel="stylesheet" type="text/css" href="authority.css"/>


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
	<td><a class="st" href="department.php">Home</a></td>
	<td><a class="st_opted" href="complaint_san.php">Complaints</a></td>
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
				$sql1="select DID FROM AUTHORITY WHERE AID=$username";
				$result1=mysqli_query($con,$sql1);
				$row1=mysqli_fetch_array($result1);
				$dept_id=$row1['DID'];
				//echo "$dept_id";
				$sql="SELECT CD.CID,STATUS,CR.SID,COMPLAINT_TEXT FROM COMPLAINT_DEPT CD,COMPLAINT_REDUNDANT CR WHERE CD.DID=$dept_id && CD.CID=CR.CID";
				$result=mysqli_query($con,$sql);
				echo "<form method='post' action='complaint_san_handle.php'>";
				echo "<table border='1px'>";
				echo "<tr>
					  <th>Complaint ID</th>
					  <th>Complaint Status </th>
					  <th>Student ID</th>
					  <th>Complaint</th>
					  <th>Enter new status</th>
					  </tr>";
				while($row=mysqli_fetch_array($result))
				{
				
				
				if($row['STATUS']=='n' || $row['STATUS']=='N')
				{
				$m=$row['CID'];
				echo "<tr>";
				echo "<td>".$row['CID']."</td>";
				echo "<td>".$row['STATUS']."</td>";
				echo "<td>".$row['SID']."</td>";
				echo "<td>".$row['COMPLAINT_TEXT']."</td>";
				echo "<td><input type='TEXT' name='$m' id='$m' placeholder='y' pattern='y'/></td>";
				echo "</tr>";
				}
				}
				echo "</table>";
				echo "<button type='submit'>Submit</button>";
				echo "</form>";
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