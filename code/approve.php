<?php
session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				}
				require 'connect.inc.php';
				
				$query="select * from register where `approve` =0";
					
					if($query_run=mysql_query($query))
				{
						//mysql_fetch_assoc($query_run);
						//$year=$query_row['YEAR'];
					
					while($query_row=mysql_fetch_assoc($query_run))
					{ 
							$sid=$query_row['SID'];
							
							if(isset($_POST[$sid]))
							{
							echo "hello";
							$check=$_POST[$sid];
							$sid=$query_row['SID'];
							$fname=$query_row['FNAME'];
							$mname=$query_row['MNAME'];
							$lname=$query_row['LNAME'];
							$gender=$query_row['GENDER'];
							$dob=$query_row['DOB'];
							$year=$query_row['YEAR'];
							$email=$query_row['email'];
							$phone=$query_row['phone'];
							$college_id=$query_row['college_id'];
							$password=$query_row['PASSWORD'];
							$query1="INSERT INTO `student`(`SID`, `FNAME`, `MNAME`, `LNAME`, `DOB`, `GENDER`, `YEAR`, `PASSWORD`, `IMAGE`, `EMAIL`, `PHONE`) VALUES($sid,'$fname','$mname','$lname','$dob','$gender',$year,'$password','$college_id','$email',$phone)";
							
							if($query_run1=mysql_query($query1))
							{
							echo "check";
							$query1="UPDATE `register` SET `approve`=1 WHERE `SID`=$sid";
							$query_run1=mysql_query($query1);
							//move_uploaded_file("upload/" . $college_id,"images/".$college_id);
							$f1="upload/" . $college_id;
							$f2="images/" . $college_id;

							if (!copy($f1,$f2)) {
							echo "failed to copy $file...\n";
							
												}
							
							else
							{
							echo mysql_error();
							}
							
							} 
						}
					} 
					
				}

header('Refresh: 0; URL= ./admin_student_reg.php');				
?>