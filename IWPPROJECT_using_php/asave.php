<?php
    session_start();
    $pid=$_SESSION['pid'];
    include "connection.php";
    
    $date=$_POST['apdate']; 

    $time=$_POST['aptime']; 
    $name=$_POST['docname'];
    $sql="SELECT dno,dname from doctor";
    $result=mysqli_query($connect,$sql);
    while($row=mysqli_fetch_assoc($result))
    {
    	if($row['dname']==$name)
    	{
    		$no=$row['dno'];
    	}
    }
    $sql= "INSERT INTO appointment (appdate,apptime,appdoc,apppat) VALUES ('$date','$time','$no','$pid')";
    
    if(!mysqli_query($connect,$sql)){echo 'Error Try again!';}
    else{
        header("Location:patienthome.html");
    }
?>
