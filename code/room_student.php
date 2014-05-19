<html>
<head>
<title>Student</title>
<link rel="stylesheet" type="text/css" href="student.css"/>


<script Language="JavaScript">
function getXMLHTTPRequest() {
try {
req = new XMLHttpRequest();
} catch(err1) {
try {
req = new ActiveXObject("Msxml2.XMLHTTP");
} catch (err2) {
try {
req = new ActiveXObject("Microsoft.XMLHTTP");
} catch (err3) {
req = false;
}
}
}
return req;
}
var http = getXMLHTTPRequest();
function showData() {
var myurl = 'hostel_student_data.php';
var one=document.getElementById('hostel');
var sem=one.options[one.selectedIndex].value;
var modurl = myurl+"?q="+sem;
http.open("GET", modurl, true);
http.onreadystatechange = useHttpResponse;
http.send(null);
}
function useHttpResponse() {
if (http.readyState == 4) {
if(http.status == 200) {
var mytext = http.responseText;
document.getElementById('data').innerHTML = mytext;
}
} else {
document. getElementById('data').innerHTML = "";
}
}
</script>


<script Language="JavaScript">
function getXMLHTTPRequest() {
try {
req = new XMLHttpRequest();
} catch(err1) {
try {
req = new ActiveXObject("Msxml2.XMLHTTP");
} catch (err2) {
try {
req = new ActiveXObject("Microsoft.XMLHTTP");
} catch (err3) {
req = false;
}
}
}
return req;
}
var http = getXMLHTTPRequest();
function showDatas() {
var myurl = 'messdatainsert.php';
var one=document.getElementById('mess');
var sem=one.options[one.selectedIndex].value;
var modurl = myurl+"?q="+sem;
http.open("GET", modurl, true);
http.onreadystatechange = useHttpResponse;
http.send(null);
}
function useHttpResponse() {
if (http.readyState == 4) {
if(http.status == 200) {
var mytext = http.responseText;
document.getElementById('data1').innerHTML = mytext;
}
} else {
document. getElementById('data1').innerHTML = "";
}
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
	<td><a class="st" href="student.php">Home</a></td>
	<td><a class="st_opted" href="room_student.php">Room</a></td>
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
	<td>
			
			<?php
			session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				$username=$_SESSION['usernamee'];
				
					$con=mysqli_connect("localhost","root","hello","hostel");		
					$sql6="SELECT * from FILLEDROOMSTUDENT where SID=$username";
					$result6=mysqli_query($con,$sql6);
					$row6=mysqli_fetch_array($result6);
					$hids=$row6['HID'];
					if(mysqli_num_rows($result6)==1)
					{
						$sql7="SELECT * from HOSTEL Where HID=$hids";
						$result7=mysqli_query($con,$sql7);
						$row7=mysqli_fetch_array($result7);
						echo "you have selected room " . $row6['RID']. " in " . $row7['HNAME'] . "";
					}
					
				else
				{
					$sqll="select GENDER from STUDENT WHERE SID=$username";
					$resultt=mysqli_query($con,$sqll);
					$roww=mysqli_fetch_array($resultt);
					$gen=$roww['GENDER'];
					//echo $gen;
					$sql="select * from HOSTEL where TYPE='$gen'";
					$result=mysqli_query($con,$sql);
					echo "<table>";
					//$x=0;
					
					echo "<select id='hostel'>";
					while($row=mysqli_fetch_array($result))
					{
						$temp=$row['HNAME'];
						echo "<option value='$temp'>".$temp."</option>";
						
						
					}
					echo "</select>";
					echo "<button class='submit' onClick='showData()' value='submit'>Submit</button>";
					//echo "<button class='submit' onClick='showDatas()' value='submit'>Select Mess</button>";
					echo "</td>";
					echo "</tr>";
					echo "<tr>";
					echo "<div id='data'></div>";
					echo "<div id='data1'></div>";
				}
			
			?>
	</tr>
	</table>
	
	</div>
	
	
	</div>


</body>
</html>