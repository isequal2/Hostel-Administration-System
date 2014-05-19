<?php

require 'connect.inc.php';

$sid=$_SESSION['usernamee'];



$query = "select * from `student` where `SID`='$sid'";
		if($query_run=mysql_query($query))
		{
		$query_row=mysql_fetch_assoc($query_run);
		$fname=$query_row['FNAME'];
		$mname=$query_row['MNAME'];
		$lname=$query_row['LNAME'];
		$gender=$query_row['GENDER'];
		if($gender=='m' || $gender=='M')
		{
			$gender="Male";
		}
		else
		{
			$gender="Female";
		}
		$dob=$query_row['DOB'];
		$ffname=$query_row['FFNAME'];
		$fmname=$query_row['FMNAME'];
		$flname=$query_row['FLNAME'];
		$mfname=$query_row['MFNAME'];
		$mmname=$query_row['MMNAME'];
		$mlname=$query_row['MLNAME'];
		//$phone=$query_row[''];
		//$email=$query_row[''];
		//$branch=$query_row[''];
		$year=$query_row['YEAR'];
		$phone=$query_row['PHONE'];
		$email=$query_row['EMAIL'];
		echo '
				
			<tr>
			<td>Roll No<i></i></td>
			<td>'.$sid.'</td>
			</tr>
			<tr>
				<td>Name<i></i></td>
				<td>'.$fname.' '.$mname.' '.$lname.'</td>
			</tr>
			
			<tr>
				<td>Gender<i></i></td>
				<td>'.$gender.'</td>
			</tr>
			<tr>
				<td>Date of birth<i></i></td>
				<td>'.$dob.'</td>
			</tr>';
			if($ffname!=NULL || $ffname !="")
			echo '
			<tr>
			<td>Father\'s Name<i></i></td>
				<td>'.$ffname.' '.$fmname.' '.$flname.'</td>
			</tr>';
			
			if($mfname!=NULL || $mfname !="")
			echo '
			
			<tr>
				<td>Mother\'s Name<i></i></td>
				<td>'.$mfname.' '.$mmname.' '.$mlname.'</td>
			</tr>';
			
			
			
			 echo '
			<tr>
				<td>Phone<i></i></td>
				<td>'.$phone.'</td>
			</tr>
			
			<tr>
				<td>Email<i></i></td>
				<td>'.$email.'</td>
			</tr> ';
			if($year!=NULL || $year !="")
			echo '
			
			<tr>
				<td>Year<i></i></td>
				<td>'.$year.'</td>
			</tr>';
			
		
		}
		else
		echo mysql_error();
		
	

	

?>