<?php
include('connection.php');
$sql="DELETE FROM patientlog";
$result=mysqli_query($connect,$sql);
if(!$result)
	echo "Error";
else
{
	header('Location: adminhome.php');
}
?>