<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 2</title>
</head>

<body>
<?php
include('connection.php');
$id=$_SESSION['pid'];
  $fmodname=$_POST['fnamemod'];
  $lmodname=$_POST['lnamemod'];
  $modemail=$_POST['emailmod']; 
  $modgen=$_POST['gmod']; 
  $modcoun=$_POST['counmod'];
  $modphonenum=$_POST['mobmod'];
  $modpass=$_POST['passmod'];
  
 $sql= "UPDATE patient SET pmail = '$modemail', pfname = '$fmodname',plname = '$lmodname', pgen = '$modgen', pcountry = '$modcoun', pmobile = '$modphonenum', ppass='$modpass' WHERE pno = '$id'";
  
  if(!mysqli_query($connect,$sql))
  {
    echo 'Error Try again!';
  }
  else
  {
    header('Location:patienthome.html');
  } 
?>

</body>
</html>