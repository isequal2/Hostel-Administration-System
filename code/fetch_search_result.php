<?php
$q =($_GET['q']);
//$q=140002;
			
			session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				$con=mysqli_connect("localhost","root","hello","hostel");
				$sql="select S.SID,S.FNAME,S.LNAME,S.DOB,S.YEAR,S.PHONE,S.EMAIL,M.MID,M.MNAME,H.HID,H.HNAME,FR.RID from STUDENT S,HOSTEL H,FILLEDROOMSTUDENT FR, MESS M, FILLEDMESSSTUDENT MS  where S.SID=FR.SID && H.HID=FR.HID && MS.SID=S.SID && M.MID=MS.MID && S.SID=$q";
				$result=mysqli_query($con,$sql);
				echo "<table border='1'>
					<tr>
					<th><label>SID</label></th>
					<th><label>Student Name</label></th>
					<th><label>Date of birth</label></th>
					<th><label>Year</label></th>
					<th><label>Phone</label></th>
					<th><label>Email</label></th>
					<th><label>Room</label></th>
					<th><label>Mess</label></th>
					
					</tr>";
				while($row=mysqli_fetch_array($result))
				{
				  echo "<tr>";
				  
				  echo "<td ><label>" . $row['SID'] ."</label></td>";
				  echo "<td><label>" . $row['FNAME'] ." " . $row['LNAME'] . "</label></td>";
				  echo "<td><label>" . $row['DOB'] . "</label></td>";
				  echo "<td><label>" . $row['YEAR'] . "</label></td>";
				  echo "<td><label>" . $row['PHONE'] . "</label></td>";
				  echo "<td><label>" . $row['EMAIL'] . "</label></td>";
				  echo "<td><label>" . $row['RID'] ." " . $row['HID'] . " " . $row['HNAME'] . "</label></td>";
				  echo "<td><label>" . $row['MID'] . " " . $row['MNAME'] ."</label></td>";
				  echo "</tr>";
				  }
    			  echo "</table>";
				
				
?>