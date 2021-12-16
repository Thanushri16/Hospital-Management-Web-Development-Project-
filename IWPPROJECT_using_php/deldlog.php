<?php
include('connection.php');
$sql="DELETE FROM doctorlog";
$result=mysqli_query($connect,$sql);
if(!$result)
	echo "Error";
else
{
	header('Location: adminhome.php');
}
?>