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
    <li class="breadcrumb-item"><a href="adminhome.php">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Manage patients</li>
  	</ol>
	</nav>
	<div class="continue" style="background-color: white; margin-top: 6%; margin-left: 2%; margin-right: 2%;">
	<h1 style="padding-bottom: 10px;">MANAGE PATIENTS</h1>   	

	<div class="padd">
		<table id="test_table" style="width: 95%; margin-top: 2%;">
			<tr style="border-top: 1px solid lightgray; border-bottom: 1px solid lightgray;">
				<th style="margin-right: 10%;">#&nbsp;&nbsp;&nbsp;</th>
				<th>Patient No</th>
				<th>Name</th>
				<th>Gender</th>
				<th>Age</th>
				<th>Country</th>
				<th>Phone Number</th>
				<th>Mail ID</th>
				<th>Action</th>
			</tr>

			<?php
			include("connection.php");
			if(isset($_GET['category']))
			{
				$category=$_GET['category'];
				$sql="DELETE from patient where pno='$category'";
				$answer=$connect->query($sql);
				header("Location:adminhome.php");
			}
			$q="SELECT * from patient";
			$respatient= $connect -> query($q);
			$i=0;
			if($respatient -> num_rows > 0)
			{
				while ($row = $respatient->fetch_assoc()) 
				{
					$i++;
					$no=$row["pno"];
					$name=$row['pfname']." ".$row['plname'];
					$gen=$row["pgen"];
					$coun=$row["pcountry"];
					$mobile=$row["pmobile"];
					$mail=$row["pmail"];
					$d=$row["pdob"];
            		$today = date("Y-m-d");
            		$diff = date_diff(date_create($d), date_create($today));
            		$age=$diff->format('%y');
					echo "<tr><td>".$i."</td><td>".$no."</td><td>".$name."</td><td>".$gen."</td><td>".$age."</td><td>".$coun."</td><td>".$mobile."</td><td>".$mail."</td><td>"; ?>
						<a href='managepatient.php?category=<?php echo $no; ?> '><button type='button' class='btn btn-danger'>
       						<i class='fa fa-trash' style='color: white;'></i>
   						</button></a> <?php echo "</td></tr>";	
				}
				echo "</table>";
			}
			else
			{
				//echo "0 result";
			}
			if(!mysqli_query($connect,$q))
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
