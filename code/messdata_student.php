<?php
$q =($_GET['q']);

			
			session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				$con=mysqli_connect("localhost","root","hello","hostel");
				$sql="select * from MESS where MNAME='$q'";
				$result=mysqli_query($con,$sql);
				echo "<table>
					<tr>
					<th><label>Mess ID</label></th>
					<th><label>Mess Name</label></th>
					<th><label>Food Type</label></th>
					<th><label>Capacity</label></th>
					<th><label>Status</label></th>
					</tr>";
				while($row=mysqli_fetch_array($result))
				{
				  echo "<tr>";
				  
				  echo "<td ><label id='messid'>" . $row['MID'] ."</label></td>";
				  echo "<td><label>" . $row['MNAME'] . "</label></td>";
				  echo "<td><label>" . $row['FOODTYPE'] . "</label></td>";
				  echo "<td><label>" . $row['CAPACITY'] . "</label></td>";
				  echo "<td><label>" . $row['FILLED'] . "</label></td>";
				  $check=$row['CAPACITY'];
				  $cap=$row['FILLED'];
				  echo "</tr>";
				  }
    			  echo "</table>";
				
				
?>