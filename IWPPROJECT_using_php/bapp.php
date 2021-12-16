<?php
    session_start();
    include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>eHospital</title>
	<link rel = "icon" href =  "ehosp.png" type = "image/x-icon"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  	<link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
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
			padding: 8px;
  margin-bottom: 7px;
  background-color: lightblue;
  color: black;
			box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
		}
  	</style>

  	
  </head>
  <body>
  	<nav aria-label="breadcrumb">
  <ol class="breadcrumb justify-content-end">
    <li class="breadcrumb-item"><a href="patienthome.html">User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Book Appointment</li>
  </ol>
	</nav>
	<form action="asave.php" method="post">
	<div class="continue" style="background-color: white; margin-top: 6.45%; margin-left: 15%; margin-right: 15%;">
	<h1>BOOK APPOINTMENT</h1>
	<div class="padd">
	<label>Doctor Specialization</label><br>
	<select id="spec" name="docspec">
		<option value="" disabled selected>Select</option>
		<?php

            $query = "SELECT spec FROM specialization";
            $result = $connect->query($query);

            while( $row = $result->fetch_assoc() ){
                echo "<option value='{$row['spec']}'>{$row['spec']}";
            }
        ?>

	</select>
	</div>
	<div class="padd">
	<label>Doctor</label><br>
	<select id="doc" name="docname">
		<option value="" disabled selected>Select</option>
		<?php
			
		//if(isset($_GET["docspec"])){
			include('connection.php');
            $q = "SELECT dname FROM doctor";
            $result = $connect->query($q);

            while( $row = $result->fetch_assoc() ){
                echo "<option value='{$row['dname']}'>{$row['dname']}";
            }            
       //}

        ?>

	</select>
	<div class="padd">
		<br><label>Date</label><br>
		<input type="date" name="apdate" min=
		<?php
         echo date('Y-m-d');
     	?>
     required>
	</div>
	<div class="padd">
		<label>Time</label>&nbsp<small>(Appointment hours are 9am to 7pm)</small></br>
		<input type="time" name="aptime" min="09:00" max="19:00" required>
		
		
	</div>
	<!--<div class="padd">
		<label><b>Consultency fee:</b></label>

	</div>-->
	<div class="padd">
		<button type="submit">Make Appointment</button>
	</div>
</div>
</div>
</form>
</body>
</html>	