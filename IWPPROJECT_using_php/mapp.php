<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>eHospital</title>
	<link rel = "icon" href =  "images/ehosp.png" type = "image/x-icon"> 
  	<meta name="description" content="">
  	<meta name="author" content="">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
  	<link rel=”stylesheet” href=”https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  	
  	<style type="text/css">
  		.padd
		{
			padding-bottom: 2%;
		}

		input[type=date]::-webkit-inner-spin-button {
    		-webkit-appearance: none;
    		display: none;
		}
		tr:first-child
		{
			color: gray;
			font-weight: bolder;
			margin-top: 10%;
			margin-bottom: 10%;
		}
  	</style>
  	
  </head>
  <body>
  	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb justify-content-end">
    <li class="breadcrumb-item"><a href="doctorhome.html">Doctor</a></li>
    <li class="breadcrumb-item active" aria-current="page">My Appointments</li>
  	</ol>
	</nav>
	<div class="continue" style="background-color: white; margin-top: 6.45%; margin-left: 5%; margin-right: 5%;">
	<h1 style="padding-bottom: 10px;">MY APPOINTMENTS</h1>   	

	<div class="padd">
		<table id="test_table" style="width: 95%; margin-top: 2%;">
			<tr style="border-top: 1px solid lightgray; border-bottom: 1px solid lightgray;">
				<th style="margin-right: 10%;">#&nbsp;&nbsp;&nbsp;</th>
				<th>Patient Name</th>
				<th>Appointment Date</th>
				<th>Appointment Time</th>
				<th>Action</th>
			</tr>

			<?php
			include("connection.php");
			$id=$_SESSION['did'];
			if(isset($_GET['category']))
			{
				$category=$_GET['category'];
				$sql="DELETE from appointment where appno='$category'";
				$answer=$connect->query($sql);
				header("Location:doctorhome.html");
			}
			$sql="SELECT * from appointment";
			$q="SELECT pno,pfname,plname from patient";
			$result =  $connect -> query($sql);
			$respatient= $connect -> query($q);
			$i=0;
			if($result -> num_rows > 0)
			{
				while ($row = $result -> fetch_assoc() AND $respatientname=$respatient->fetch_assoc()) 
				{
					if($row['appdoc']==$id)
					{
						if($row['apppat']==$respatientname['pno'])
						{
						$i++;
						$appnumber=$row['appno'];
						$d=$row["appdate"];
						$name=$respatientname['pfname']." ".$respatientname['plname'];
						$df=date_format(date_create($d),"d/m/Y");
						echo "<tr><td>".$i."</td><td>".$name."</td><td>".$df."</td><td>".$row["apptime"]."</td><td>"; ?>
						<a href='mapp.php?category=<?php echo $appnumber; ?> '><button type='button' class='btn btn-danger'>
       						<i class='fa fa-trash' style='color: white;'></i>
   						</button></a> 	
						<a href='mapp.php?category=<?php echo $appnumber; ?> '><button type='button' class='btn btn-success'>
       						<i class='fa fa-check-circle' style='color: white;'></i>
   						</button></a> <?php echo "</td></tr>";			
   					}
					}	
				}
				echo "</table>";
			}
			else
			{
				//echo "0 result";
			}
			if(!mysqli_query($connect,$sql))
			{
				echo 'Error Try again!';
			}
			else
			{
				//echo 'Thank you';
			}
			?>
		</table>
	</div>
</div>
  </body>
  </html>
