<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
</head>

<body>
<?php
include("connection.php");

	 
	$fname=$_POST['fn']; 

	$lname=$_POST['ln']; 

	$name=$fname." ".$lname;

	$dob=$_POST['dob'];

	$gen=$_POST['gender']; 
	
	$spec=$_POST['docspec'];

	$phonenum=$_POST['phone'];

	$mail=$_POST['email'];

	$pass=$_POST['pass1'];
	
	$sql= "INSERT INTO doctor (dname,ddob,dgen,dspec,dmob,dmail,dpass) VALUES ('$name','$dob','$gen','$spec','$phonenum','$mail','$pass')";
	
	if(!mysqli_query($connect,$sql)){echo 'Error Try again!';}
	else
		{
			header('Location:adminhome.php');
		}
?>

</body>

</html>