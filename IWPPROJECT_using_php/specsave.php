<?php
include('connection.php');
$spec=$_POST['spec'];
$sql= "INSERT INTO specialization (spec) VALUES ('$spec')";
    if(!mysqli_query($connect,$sql)){echo 'Error Try again!';}
    else
    {
    	header("Location:adminhome.php");
    }
?>
