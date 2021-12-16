<?php
session_start();
include('connection.php');
$username=$_POST['Usernamedoc'];
$password=$_POST['Passworddoc'];
$sql="SELECT dmail,dpass,dno from doctor";
$result = mysqli_query($connect,$sql);

    while($row = mysqli_fetch_assoc($result)) 
    {
        if($row['dmail']==$username)
        {
            if($row['dpass']==$password)
            {
                $un=$row['dmail'];
                $_SESSION['doctorun']=$un;
                $res=$row['dno'];
                $_SESSION['did']=$res;
                $uip=$_SERVER['REMOTE_ADDR'];
                $action="Login";
                mysqli_query($connect,"insert into doctorlog(doctorid,username,doctorip,action) values('".$_SESSION['did']."','".$_SESSION['doctorun']."','$uip','$action')");
                header("Location:doctorhome.html");
            }
            else 
    {
    echo '<script language="javascript">alert("The username/password is not correct");window.location.href="doctorlogin.html";</script>';
    }
        }
    }

mysqli_close($connect);
?>