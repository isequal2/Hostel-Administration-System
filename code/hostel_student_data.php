<?php
$q =($_GET['q']);

			
			session_start();
			$_SESSION['hostelname']=$q;
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				$con=mysqli_connect("localhost","root","hello","hostel");
				$sql="select * from HOSTEL where HNAME='$q'";
				$result=mysqli_query($con,$sql);
				
				echo "<form method='post' action='insert_student_data.php'>";
				echo "<table>
					<tr>
					<th><label>Hostel ID</label></th>
					<th><label>Hostel Name</label></th>
					<th><label>Hostel Type</label></th>
					<th><label>Capacity</label></th>
					<th><label>Status</label></th>
					</tr>";
				while($row=mysqli_fetch_array($result))
				{
				  echo "<tr>";
				  if($row['TYPE']=='M' || $row['TYPE']=='m' )
				  {
				  $type='Boys Hostel';
				  }
				  else
				  {
				  $type='Girls Hostel';
				  }
				  echo "<td ><label id='messid'>" . $row['HID'] ."</label></td>";
				  echo "<td><label>" . $row['HNAME'] . "</label></td>";
				  echo "<td><label>" . $type . "</label></td>";
				  echo "<td><label>" . $row['CAPACITY'] . "</label></td>";
				  echo "<td><label>" . $row['FILLED'] . "</label></td>";
				  $check=$row['CAPACITY'];
				  $cap=$row['FILLED'];
				  echo "</tr>";
				  }
    			  echo "</table>";
				$sql1="select HID from HOSTEL where HNAME='$q'";
				$result1=mysqli_query($con,$sql1);
				$row1=mysqli_fetch_array($result1);
				$mm=$row1['HID'];
				$sql2="select * from ROOM where HID=$mm";
				$result2=mysqli_query($con,$sql2);
				echo "<table>
					<tr>
					<th><label>ROOM ID</label></th>
					<th><label>Capacity</label></th>
					<th><label>Status</label></th>
					<th><label>Select a room</label></th>
					</tr>";
					
				while($row=mysqli_fetch_array($result2))
				{
				  $cap=$row['RCAP'];
				  $fill=$row['RFILLED'];
				  if($cap>$fill)
				  {
				  $temp=$row['RID'];
				  echo "<tr>";
				  
				  echo "<td ><label id='messid'>" . $row['RID'] ."</label></td>";
				  echo "<td><label>" . $row['RCAP'] . "</label></td>";
				  echo "<td><label>" . $row['RFILLED'] . "</label></td>";
				  echo "<td><label><input type='radio' name='selectedroom' value='$temp'/></label></td>";
				  echo "</tr>";
				  }
				  }
    			  echo "</table>";
				  echo "<input type='submit' value='Select room'>";
				  echo "</form>";
				
?>
