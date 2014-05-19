<?php
ob_start();
session_start();
$username=$_POST['user'];
$pass=$_POST['password'];
$con=mysqli_connect("localhost","root","hello","hostel");
$sql="select SID,PASSWORD from student";
$sql1="select AID,PASSWORD from authority";
$result=mysqli_query($con,$sql);
$result1=mysqli_query($con,$sql1);
$flag=0;
/*
echo "<table border='1'>
<tr>
<th>SID</th>
<th>PASSWORD</th>
</tr>";
*/
while($row=mysqli_fetch_array($result))
{
	/*
	echo "<tr>";
	echo "<td>" . $row['AID'] . "</td>";
	echo "<td>" . $row['PASSWORD'] . "</td>";
	echo "</tr>";
	*/
if($row['SID']==$username && $row['PASSWORD']==$pass)
	{
	$_SESSION['usernamee'] = $username;
	$_SESSION['passwd'] = $pass;
	//$_SESSION['sid'] = $username;
	$_SESSION['student']=true;
	$_SESSION['admin']=false;
	$_SESSION['dept']=false;
	$_SESSION['auth']=false;
	//header("location:student.php");
	echo "Redirecting....";
	header('Refresh: 2; URL= ./redirect.php?action=success_stu');
	$flag=1;
	}
}
if($flag==0)
{
	while($row=mysqli_fetch_array($result1))
	{
		if($row['AID']==$username && $row['PASSWORD']==$pass)
		{
			$sql=mysqli_query($con,"SELECT DID FROM AUTHORITY WHERE AID='$username'");
				while($row=mysqli_fetch_array($sql))
				{
				$des=$row['DID'];
				}
			if($des==7)
			{
			$_SESSION['usernamee'] = $username;
			$_SESSION['passwd'] = $pass;
			$_SESSION['admin']=true;
			$_SESSION['student']=false;
			$_SESSION['auth']=false;
			$_SESSION['dept']=false;
			header("location:admin.php");
			
			
			}
			else if($des==6)
			{
			$_SESSION['usernamee'] = $username;
			$_SESSION['passwd'] = $pass;
			$_SESSION['admin']=false;
			$_SESSION['student']=false;
			$_SESSION['auth']=false;
			$_SESSION['dept']=true;
			header("location:authority.php");
			}
			else if($des==1 || $des==2 ||$des==3 ||$des==4 ||$des==5)
			{
			$_SESSION['usernamee'] = $username;
			$_SESSION['passwd'] = $pass;
			$_SESSION['admin']=false;
			$_SESSION['student']=false;
			$_SESSION['auth']=true;
			$_SESSION['dept']=false;
			header("location:department.php");
			}
			else
			
			include 'login.html';
			echo '<div id="login_error">Wrong Username or password.></div>';
			//echo 'Wrong Username or password.';
			header('Refresh: 3; URL= login.html');
			//header("location:login.html");
			$flag=2;
		}
	}
}
if($flag==0)
{	include 'login.html';
	echo '<div id="login_error">Wrong Username or password.</div>';
	//include 'login.html';
    header('Refresh: 3; URL= login.html');
}
//echo "</table>";

?>