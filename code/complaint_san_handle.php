<?php
				
				//echo "hello";
				
				session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
				$username=$_SESSION["usernamee"];
				$con=mysqli_connect("localhost","root","hello","hostel");
				
				
				
				$sql="select * from COMPLAINT_DEPT";
				$result=mysqli_query($con,$sql);
				//$count1=mysqli_num_rows($result);
				$sql="select CID FROM COMPLAINT_DEPT ORDER BY CID DESC LIMIT 1";
				$result=mysqli_query($con,$sql);
				$row=mysqli_fetch_array($result);
				$count=$row['CID'];
				
				$i=1;
			
				while($i<=$count)
				{
				if($_POST[$i]=="")
				{
				//echo "$i not Changed";
				}
				else
				{
				 $sql1="select SID from COMPLAINT_DEPT WHERE CID=$i";
				 $result1=mysqli_query($con,$sql1);
				$row=mysqli_fetch_array($result1);
				$mn=$row['SID'];
				 $sql2="UPDATE COMPLAINT_DEPT SET STATUS='Y' WHERE CID=$i";
				 
				 				 $result1=mysqli_query($con,$sql2);
				 //$sql3="delete from COMPLAINT_DEPT WHERE CID=$i";
				 
				//$result1=mysqli_query($con,$sql3);
				 
				 
				 
				}
				$i++;
				
				}
				
				
				
				header("location:complaint_san.php");
				exit;
				//$result=mysqli_query($con,$sql);

				
?>