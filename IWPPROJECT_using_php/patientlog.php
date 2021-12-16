<?php
session_start();
include('connection.php');
//if($_SESSION['login'])
{
?>
<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">
<title>eHospital</title>
	<link rel = "icon" href =  "ehosp.png" type = "image/x-icon"> 
<style type="text/css">
  		.padd
		{
			padding-bottom:3%;
		}

		input[type=date]::-webkit-inner-spin-button{
    		-webkit-appearance: none;
    		display: none;
		}

		input::-webkit-datetime-edit-text 
		{ 
			color: red;
			padding: 0 0.3em; 
		}

		input,select{
			width: 60%;
		}

		label{
			font-weight: bold; 
		}

		h1{
			text-align: center;
		}

		button{
			
  margin-bottom: 7px;
  background-color: #E50914;
  color: white;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
			border-radius: 10%;
		}
  	</style>
</head>
<body bgcolor="#d6c2c2"> 
	<nav aria-label="breadcrumb">
  <ol class="breadcrumb justify-content-end">
    <li class="breadcrumb-item"><a href="adminhome.php">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Patient log</li>
  </ol>
	</nav>
<h2 style="padding-top: 3%;"><center>Patient session log</center></h2>
	<div class="continue" style="background-color: white; margin-top: 5%; margin-left: 5%;margin-right: 5%; ">
	<div class="padd">	
	<table id="test_table" style="width: 95%;">
			<tr style="border-top: 1px solid lightgray; border-bottom: 1px solid lightgray;">
				<th>#&nbsp;&nbsp;&nbsp;</th>
				<th>Patient ID</th>
				<th>Username</th>
				<th>User Ip</th>
				<th>Action Performed</th>
				<th>Login Time</th>
			</tr>

			<?php
			include("connection.php");
			$query=mysqli_query($connect,"select * from patientlog");
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
</div>
</div>
</div>
<a href="delplog.php"><center><button type="submit">Delete all logs</button></center></a>
</form>
 </body>
</html>
<?php
} 
?>
