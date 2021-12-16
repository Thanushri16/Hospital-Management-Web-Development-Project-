<?php
include('connection.php');
$fname=$_POST['fn']; 
$lname=$_POST['ln']; 
$age=$_POST['age'];
$gen=$_POST['gender']; 
$country=$_POST['country'];
$phonenum=$_POST['phone'];
$mail=$_POST['email'];
$mess=$_POST['message'];
$sql= "INSERT INTO contact (cfname,clname,cage,cgen,ccountry,cmobile,cmail,cmessage) VALUES ('$fname','$lname','$age','$gen','$country','$phonenum','$mail','$mess')";

if(mysqli_query($connect,$sql))
{
	header("Location:home.html");
}
else
{
	echo 'Error Try again!';
}
?>