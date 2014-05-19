function validate()
{
	var x=document.getElementById('roll');
	var re=/^\d{2}[a-zA-Z]{2}\d+$/;
	if(x.value=="")
	{
		document.getElementById('pointroll').innerHTML="Please enter roll number";
		x.value="";
		x.focus();
		return false;
	}
	else if(!re.test(x.value))
	{
		document.getElementById('pointroll').innerHTML="Please enter a valid roll number ex-11IT87 or 11it87";
		x.value="";
		x.focus();
		return false;
	}
	else if(x.value.length >7 || x.value.length<6 )
	{
		document.getElementById('pointroll').innerHTML="Please enter a valid roll number ex-11IT87 or 11it123";
		x.value="";
		x.focus();
		return false;
	}
	
	document.getElementById('pointroll').innerHTML="";
	
	var x=document.getElementById('fname');
	re=/^[a-zA-Z]+$/;
	if(x.value=="")
	{
		document.getElementById('pointfname').innerHTML="Please enter First name";
		x.value="";
		x.focus();
		return false;
	}
	else if(!re.test(x.value))
	{
		document.getElementById('pointfname').innerHTML="Please enter a valid name ex-Shivam";
		x.value="";
		x.focus();
		return false;
	}
	document.getElementById('pointfname').innerHTML="";
	var x=document.getElementById('mname');
	if(x.value=="")
	{
		document.getElementById('pointmname').innerHTML="Please enter mid name";
		x.value="";
		x.focus();
		return false;
	}
		document.getElementById('pointmname').innerHTML="";

	var x=document.getElementById('lname');
	if(x.value=="")
	{
		document.getElementById('pointlname').innerHTML="Please enter last name";
		x.value="";
		x.focus();
		return false;
	}
		document.getElementById('pointlname').innerHTML="";
	var x=document.getElementById('phone');
	if(x.value=="")
	{
		document.getElementById('pointphone').innerHTML="Please enter phone number";
		x.value="";
		x.focus();
		return false;
	}
		document.getElementById('pointphone').innerHTML="";
	
	var x=document.getElementById('email');
	if(x.value=="")
	{
		document.getElementById('pointemail').innerHTML="Please enter email";
		x.value="";
		x.focus();
		return false;
	}
		document.getElementById('pointemail').innerHTML="";
	var x=document.getElementById('year');
	if(x.value=="")
	{
		document.getElementById('pointyear').innerHTML="Please enter year";
		x.value="";
		x.focus();
		return false;
	}
		document.getElementById('pointyear').innerHTML="";		

}