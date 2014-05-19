function validate()
{
	var x=document.getElementById('username');
	var re=/\d{6}/;
	if(x.value=="")
	{
		document.getElementById('pointusername').innerHTML="Please enter username number";
		x.value="";
		x.focus();
		return false;
	}
	else if(!re.test(x.value))
	{
		document.getElementById('pointusername').innerHTML="Please enter a valid username number ex-111385";
		x.value="";
		x.focus();
		return false;
	}
	
	document.getElementById('pointusername').innerHTML="";
	
	var x=document.getElementById('password');
	if(x.value=="")
	{
		document.getElementById('pointpassword').innerHTML="Please enter password";
		x.value="";
		x.focus();
		return false;
	}
	
	document.getElementById('pointpassword').innerHTML="";
			

}