<?php
	$action="Logout";
	session_start();
	include('connection.php');
	$username=$_SESSION['patientun']; // hold the user name in session
	$uid=$_SESSION['pid']; // hold the user id in session
	$uip=$_SERVER['REMOTE_ADDR']; // get the user ip
	$action="Logout";
	$query=mysqli_query($connect,"insert into patientlog(patientid,username,userip,action) values('$uid','$username','$uip','$action')");
	if($query){
	session_unset();
    session_destroy();
}
    //unset($_SESSION['pid']);
    header('Location:patientlogin.html');
?>