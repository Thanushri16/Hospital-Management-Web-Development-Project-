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
$id=$_SESSION['did'];
  $modname=$_POST['namemod']; 
  $modemail=$_POST['emailmod']; 
  $modgen=$_POST['gmod']; 
  $modsp=$_POST['specmod'];
  $modphonenum=$_POST['mobmod'];
  $modpass=$_POST['passmod'];
  
 $sql= "UPDATE doctor SET dmail = '$modemail', dname = '$modname', dgen = '$modgen', dspec = '$modsp', dmob = '$modphonenum', dpass='$modpass' WHERE dno = '$id'";
  
  if(!mysqli_query($connect,$sql))
  {
    echo 'Error Try again!';
  }
  else
  {
    header('Location:doctorhome.html');
  } 
?>

</body>
</html>