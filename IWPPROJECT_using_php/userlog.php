<?php
session_start();
include('connection.php');
//if($_SESSION['login'])
{
?><!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>welcome</title>
</head>
<body bgcolor="#d6c2c2">    
<table  align="center" border="1">
<tr>
<th>Sno.</th>
<th>User Id</th>
<th>User Name</th>
<th>User Ip</th>
<th>Action Performed</th>
<th>Login Time</th>
</tr>

<?php $query=mysqli_query($connect,"select * from patientlog");// where patientid='".$_SESSION['id']."'");
$cnt=1;
while($row=mysqli_fetch_array($query))
{
?>
<tr>
<td><?php echo $cnt;?></td>
<td><?php echo $row['patientid'];?></td>
<td><?php echo $row['username'];?></td>
<td><?php echo $row['userip'];?></td>
<td><?php echo $row['action'];?></td>
<td><?php echo $row['actiontime'];?></td>
</tr>
<?php $cnt=$cnt+1;
} ?>
</table>
 </body>
</html>
<?php
} //else{
//header('location:logout.php');
//}
?>
