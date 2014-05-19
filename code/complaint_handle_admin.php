<?php
				
				//echo "hello";
				
				session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
				$username=$_SESSION["usernamee"];
				$con=mysqli_connect("localhost","root","hello","hostel");
				
				
				
				$sql="select * from COMPLAINT";
				$result=mysqli_query($con,$sql);
				//$count1=mysqli_num_rows($result);
				$sql="select CID FROM COMPLAINT ORDER BY CID DESC LIMIT 1";
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
				 $sql1="select SID from COMPLAINT WHERE CID=$i";
				 $result1=mysqli_query($con,$sql1);
				$row=mysqli_fetch_array($result1);
				$mn=$row['SID'];
				 $sql2="INSERT INTO COMPLAINT_DEPT(CID,DID,SID,STATUS) VALUES ($i,$_POST[$i],$mn,'N')";
				 
				 				 $result1=mysqli_query($con,$sql2);
				 $sql3="delete from COMPLAINT WHERE CID=$i";
				 
				 				 $result1=mysqli_query($con,$sql3);
				 
				 
				 
				}
				$i++;
				
				}
				
				
				
				header("location:complaint_admin.php");
				exit;
				//$result=mysqli_query($con,$sql);

				
?>