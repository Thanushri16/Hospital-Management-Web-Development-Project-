<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title></title>
</head>

<body>
<?php
include("connection.php");

	 
	$fname=$_POST['fn']; 

	$lname=$_POST['ln']; 

	$dob=$_POST['dob'];

	$gen=$_POST['gender']; 
	
	$country=$_POST['country'];

	$phonenum=$_POST['phone'];

	$mail=$_POST['email'];

	$pass=$_POST['pass1'];
	
	$sql= "INSERT INTO patient (pfname,plname,pdob,pgen,pcountry,pmobile,pmail,ppass) VALUES ('$fname','$lname','$dob','$gen','$country','$phonenum','$mail','$pass')";
	
	if(!mysqli_query($connect,$sql)){echo 'Error Try again!';}
	else
	{
		header('Location:home.html');
	}
?>

</body>

</html>