
<?php
			session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
			$q=$_SESSION['hostelname'];
			
			$roomid=$_POST['selectedroom'];
			If($roomid=="" || $roomid==NULL)
			{
				header('location:room_student.php');
			}
			else
			{
			
				$con=mysqli_connect("localhost","root","hello","hostel");
				$username=$_SESSION['usernamee'];
				
				
				$sql="select * from HOSTEL where HNAME='$q'";
				$result=mysqli_query($con,$sql);	
				
				while($row=mysqli_fetch_array($result))
				{
				  	  
				 $hostelid=$row['HID'];
				  $capacity_constraint=$row['FILLED'];
				  $cap=$row['CAPACITY'];	
				  }
				  
				//$con=mysqli_connect("localhost","root","hello","hostel");
				$sql5="select * from FILLEDROOMSTUDENT where SID='$username'";
				$result5=mysqli_query($con,$sql5);
				  
				if(mysqli_num_rows($result5)>=1)
				{
				$row=mysqli_fetch_array($result5);
				echo "You Have Already Selected a room with roomid = ";
				echo "" . $row['RID']. "</br> in hostel $q";
				echo "<br/><b>Page will be refreshed in 4 seconds<b>";
				header ('Refresh:4;URL=room_student.php');
				
				}
				  
				else
				{
				if($capacity_constraint>=$cap)
				{
					echo "Sorry You cannot take this Hostel, Its already full";
					echo "<br/><b>Page will be refreshed in 4 seconds<b>";
					header ('Refresh:4;URL=room_student.php');
				}				
				//echo"$messid";
				
				
				else
				{
					$sql2="select * FROM HOSTEL WHERE HID='$hostelid'";
					$result2=mysqli_query($con,$sql2);
					$row=mysqli_fetch_array($result2);
					
					//echo "" . $row['FILLED'] . "</br>";
					$filling=$row['FILLED'];
					$filling++;
					$sql3="UPDATE HOSTEL SET FILLED='$filling' WHERE HID='$hostelid'";
					$result3=mysqli_query($con,$sql3);
					
					$sql2="select * FROM ROOM WHERE RID='$roomid'";
					$result2=mysqli_query($con,$sql2);
					$row=mysqli_fetch_array($result2);
					
					//echo "" . $row['FILLED'] . "</br>";
					$filling1=$row['RFILLED'];
					$filling1++;
					$sql3="UPDATE ROOM SET RFILLED='$filling1' WHERE RID='$roomid'";
					$result3=mysqli_query($con,$sql3);
					
					//echo "You Have selected a room with roomID=$roomid in the hostel $q";
					$sql1="insert into FILLEDROOMSTUDENT values ($hostelid,$username,$roomid)";
					if(mysqli_query($con,$sql1))
					{
						echo "You Have selected a room with roomID=$roomid in the hostel $q";
						header ('Refresh:2;URL=room_student.php');
					}
					else
					{
					 echo "error" . mysql_error();
					}
				}
				
				}
			}	
				
?>
