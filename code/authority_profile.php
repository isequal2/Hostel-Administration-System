<?php
$conn_error = 'Could not connect.';
session_start();
				if(!isset($_SESSION['usernamee']) || !isset($_SESSION['passwd'])){
				 header("location:login.php");
				} 
$mysql_host = 'localhost';
$mysql_user = 'root';
$mysql_pass = 'hello';
$mysql_db ='hostel';
@mysql_connect($mysql_host, $mysql_user, $mysql_pass) or die($conn_error);


@mysql_select_db($mysql_db) or die($conn_error );
$username=$_SESSION["usernamee"];
$line1=$_POST['line_1'];
$line2=$_POST['line_2'];
$po=$_POST['po'];
$pin=$_POST['pin'];
$city=$_POST['city'];
$state=$_POST['state'];
$country=$_POST['country'];
$p_contact=$_POST['p_authority_contact'];
$s_contact=$_POST['s_authority_contact'];
$p_email=$_POST['p_authority_email'];
$s_email=$_POST['s_authority_email'];

//echo $username.$line1.$line2.$po.$pin.$city.$state.$country.$p_contact.$s_contact.$p_email.$s_email;

if(!empty($p_contact))
{
	$sql="select number from aphone where id=$username and type='p'";
	if($query_run=mysql_query($sql))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$phone=$query_row['numbber'];
		if($phone != $p_contact)
		{
			$sql="update aphone set number='$p_contact' WHERE id=$username and type='p'";
			mysql_query($sql);
		}
	}
}
if(!empty($s_contact))
{
	$sql="select number from aphone where id=$username and type='s'";
	if($query_run=mysql_query($sql))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$phone=$query_row['number'];
		if($phone != $s_contact)
		{
			$sql="update aphone set number='$s_contact' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
if(!empty($p_email))
{
	$sql="select email from aemail where id=$username and type='p'";
	if($query_run=mysql_query($sql))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$email=$query_row['email'];
		if($email != $p_email)
		{
			$sql="update aemail set email='$p_email' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
if(!empty($s_email))
{
	$sql="select email from aemail where id=$username and type='s'";
	if($query_run=mysql_query($sql))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$email=$query_row['email'];
		if($email != $s_email)
		{
			$sql="update aeamil set email='$s_email' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
	$sql1="select line1 from address where id=$username";
	$sql2="select line2 from address where id=$username";
	$sql3="select po from address where id=$username";
	$sql4="select pin from address where id=$username";
	$sql5="select city from address where id=$username";
	$sql6="select state from address where id=$username";
	$sql7="select country from address where id=$username";
	
if(!empty($line1))
{
	if($query_run=mysql_query($sql1))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$line=$query_row['line1'];
		if($line != $line1)
		{
			$sql="update address set line1='$line1' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
if(!empty($line2))
{
	if($query_run=mysql_query($sql2))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$line=$query_row['line2'];
		if($line != $line2)
		{
			$sql="update address set line2='$line2' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
if(!empty($po))
{
	if($query_run=mysql_query($sql3))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$line=$query_row['po'];
		if($line != $po)
		{
			$sql="update address set po='$po' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
if(!empty($pin))
{
	if($query_run=mysql_query($sql4))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$line=$query_row['pin'];
		if($line != $pin)
		{
			$sql="update address set pin='$pin' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
if(!empty($city))
{
	if($query_run=mysql_query($sql5))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$line=$query_row['city'];
		if($line != $city)
		{
			$sql="update address set city='$city' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
if(!empty($state))
{
	if($query_run=mysql_query($sql6))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$line=$query_row['state'];
		if($line != $state)
		{
			$sql="update address set state='$state' WHERE id=$username";
			mysql_query($sql);
		}
	}
}
if(!empty($country))
{
	if($query_run=mysql_query($sql7))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$line=$query_row['country'];
		if($line != $country)
		{
			$sql="update address set country='$country' WHERE id=$username";
			mysql_query($sql);
		}
	}
}

$old_pass=$_POST['authority_old_pass'];
$new_pass=$_POST['authority_new_pass'];
$re_pass=$_POST['authority_re_pass'];
if(!empty($old_pass) && !empty($new_pass) && !empty($re_pass) && $new_pass == $re_pass)
{
	$sql="select password from authority where id=$username";
	if($query_run=mysql_query($sql))
	{
		$query_row=mysql_fetch_assoc($query_run);
		$password=$query_row['password'];
		if($old_pass == $password)
		{
			$sql="update authority set password='$new_pass' WHERE id=$username";
			mysql_query($sql);
		}
	}

}


header('Location:admin.php	');
//echo "Profile Updated!";
exit;
?>