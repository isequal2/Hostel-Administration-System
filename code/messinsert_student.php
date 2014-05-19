
<?php
$q =($_GET['q']);

			
			session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				//echo "$q";
				$con=mysqli_connect("localhost","root","hello","hostel");
				$username=$_SESSION['usernamee'];
				
				
				$sql="select * from MESS where MNAME='$q'";
				$result=mysqli_query($con,$sql);	
				
				while($row=mysqli_fetch_array($result))
				{
				  	  
				 $messid=$row['MID'];
				  $capacity_constraint=$row['FILLED'];
				  $cap=$row['CAPACITY'];	
				  }
				  
				//$con=mysqli_connect("localhost","root","hello","hostel");
				$sql5="select * from FILLEDMESSSTUDENT where SID='$username'";
				$result5=mysqli_query($con,$sql5);
				  
				if(mysqli_num_rows($result5)>=1)
				{
				$row=mysqli_fetch_array($result5);
				echo "You Have Already Selected a mess with messid = ";
				echo "" . $row['MID']. "</br>";
				
				}
				  
				else
				{
				if($capacity_constraint>=$cap)
				{
					echo "Sorry You cannot take this mess, Its already full";
				}				
				//echo"$messid";
				else
				{
					$sql2="select * FROM MESS WHERE MID='$messid'";
					$result2=mysqli_query($con,$sql2);
					$row=mysqli_fetch_array($result2);
					
					//echo "" . $row['FILLED'] . "</br>";
					$filling=$row['FILLED'];
					$filling++;
					$sql3="UPDATE MESS SET FILLED='$filling' WHERE MID='$messid'";
					$result3=mysqli_query($con,$sql3);
					echo "You Have selected $q";
					$sql1="insert into FILLEDMESSSTUDENT values ($messid,$username)";
					if(!mysqli_query($con,$sql1))
					{
						echo "You Have selected this mess";
					}
					else
					{
					 //echo "error" . mysql_error($con);
					}
				}
				}
				
				
?>
