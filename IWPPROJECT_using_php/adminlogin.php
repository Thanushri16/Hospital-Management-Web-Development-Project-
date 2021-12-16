<?php
session_start();
include('connection.php');
$username=$_POST['Username'];
$password=$_POST['Password'];
$sql="SELECT ausername,apass from admin";
$result = mysqli_query($connect,$sql);

    while($row = mysqli_fetch_assoc($result)) 
    {
    	if($row['ausername']==$username)
    	{
    		if($row['apass']==$password)
    		{
                //$res=$row['pno'];
                //$_SESSION['pid']=$res;
    			header("Location:adminhome.php");
    		}
            else 
    {
    echo '<script language="javascript">alert("The username/password is not correct");window.location.href="adminlogin.html";</script>';
    }
    	}
    }


mysqli_close($connect);
?>