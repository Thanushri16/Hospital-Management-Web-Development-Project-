<?php
session_start();
include('connection.php');
$username=$_POST['Username'];
$password=$_POST['Password'];
$sql="SELECT pmail,ppass,pno from patient";
$result = mysqli_query($connect,$sql);

    while($row = mysqli_fetch_assoc($result)) 
    {
    	if($row['pmail']==$username)
    	{
    		if($row['ppass']==$password)
    		{
                $un=$row['pmail'];
                $_SESSION['patientun']=$un;
                $res=$row['pno'];
                $_SESSION['pid']=$res;
                $uip=$_SERVER['REMOTE_ADDR'];
                $action="Login";
                mysqli_query($connect,"insert into patientlog(patientid,username,userip,action) values('".$_SESSION['pid']."','".$_SESSION['patientun']."','$uip','$action')");
    			header("Location:patienthome.html");
    		}
            else 
    {
    echo '<script language="javascript">alert("The username/password is not correct");window.location.href="patientlogin.html";</script>';
    }
    	}
    }


mysqli_close($connect);
?>