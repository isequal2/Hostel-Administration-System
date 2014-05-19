<?php
session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
				$username=$_SESSION["usernamee"];
				$con=mysqli_connect("localhost","root","hello","hostel");
				
				$x=$_POST['newmessname'];
				$y=$_POST['newmessid'];
				$z=$_POST['newmesscapacity'];
				$w=$_POST['newmesstype'];
				$sql="select * from MESS";
				$result=mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($result))
				{
					
					if($row['MID']==$y )
					{
					include 'newmess.php';
					echo "<div align='center' style='background-color:red;margin-left:170px;margin-right:170px;'><label>You need to change the mess ID " . $row['MID']. " is already alloted</label></div>";
					die();
					}
				if(strtoupper($row['MNAME'])==strtoupper($x) )
					{
					include 'newmess.php';
					echo "<div align='center' style='background-color:red;margin-left:170px;margin-right:170px;'><label border='1 px solid red' style='background-color:white'>You need to change the mess Name". $row['MNAME'] ." is already alloted</label></div>";
					die();
					}
				}
				$sql1="insert into mess values ($y,'$x','$w',$z,0)";
				if(mysqli_query($con,$sql1))
				{
				include 'newmess.php';
				echo "<div align='center' style='background-color:green;margin-left:170px;margin-right:170px;'>New mess has been added to the database</div>";
				}
				else
				{
				echo "error".mysql_error();
				}

?>