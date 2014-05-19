<?php
session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
				$username=$_SESSION["usernamee"];
				$con=mysqli_connect("localhost","root","hello","hostel");
				
				$x=$_POST['newhostelname'];
				$y=$_POST['newhostelid'];
				//$z=$_POST['newhostelcapacity'];
				$w=$_POST['newhosteltype'];
				$p=$_POST['newhostel_no_rooms'];
				$nn=$_POST['newhostelcapacityroom'];
				$calculate_capacity=$nn*$p;
				
				$sql="select * from HOSTEL";
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($result))
				{
					
					if($row['HID']==$y )
					{
					include 'newhostel.php';
					echo "<div align='center' style='background-color:red;margin-left:170px;margin-right:170px;'><label>You need to change the HOSTEL ID " . $row['HID']. " is already alloted</label></div>";
					die();
					}
				if(strtoupper($row['HNAME'])==strtoupper($x) )
					{
					include 'newhostel.php';
					echo "<div align='center' style='background-color:red;margin-left:170px;margin-right:170px;'><label border='1 px solid red'>You need to change the HOSTEL Name". $row['HNAME'] ." is already alloted</label></div>";
					die();
					}
				}
				
				$i=1;
				While($i!=$p+1)
				{
				$sql2="insert into `ROOM` values ($i,$y,$nn,0)";
				mysqli_query($con,$sql2);
				$i++;
				
				}
				$sql4="insert into HOSTEL values ($y,'$x','$w',$calculate_capacity,0)";
				//mysqli_query($con,$sql4);
				if(mysqli_query($con,$sql4))
				{
				include 'newhostel.php';
				echo "<div align='center' style='background-color:green;margin-left:170px;margin-right:170px;'>New hostel has been added to the database</div>";
				}
				else
				{
				echo "error".mysql_error();
				}

?>