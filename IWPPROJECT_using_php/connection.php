<!DOCTYPE html>
<html>

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<title>eHospital</title>
	<link rel = "icon" href =  "images/ehosp.png" type = "image/x-icon"> 
</head>

<body>
<?php
$connect=mysqli_connect("localhost","root","","hospitaldb");
if (!$connect) 
{
	echo "Could not Connect to Server";
}
else
{
	//echo "Success! Your information has been Stored!"."<br>";
}	

?>
</body>

</html>