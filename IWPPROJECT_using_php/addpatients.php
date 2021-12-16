<!DOCTYPE html>
<html>
<head>
	<title>eHospital</title>
	<link rel = "icon" href =  "images/ehosp.png" type = "image/x-icon"> 
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
			padding-bottom: 2%;
		}

		input[type=date]::-webkit-inner-spin-button {
    		-webkit-appearance: none;
    		display: none;
		}
		label
		{
			padding-left: 2%;
			padding-right: 5%;
		}
		button
		{
			margin: 5%;
		}
		.in
		{
			padding: 1%;
		}
  	</style>
  </head>
  <body>
  	<nav aria-label="breadcrumb">
  <ol class="breadcrumb justify-content-end">
    <li class="breadcrumb-item"><a href="patienthome.html">User</a></li>
    <li class="breadcrumb-item active" aria-current="page">Add Patients</li>
  </ol>
	</nav>
	<form action="" method="post">
	<div class="continue" style="background-color: white; margin-top: 6.45%; margin-left: 15%; margin-right: 15%;">
	<h1>ADD PATIENT</h1>
	<div class="padd">
		<div class="in">
			<label>Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="fln">
		</div>
		<div class="in">
			<label>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="email" name="mail">	
		</div>
		<div class="in">
			<label>Password&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="password" name="pw">
		</div>
		<div class="in">
			<label>Address&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="text" name="address">
		</div>
		<div class="in">
			<label>Phone&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="number" name="phone">
		</div>
		<div class="in">
			<label>Gender&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<select name="gender">
				<option value="">Select</option>
				<option value="1">Male</option>
				<option value="2">Female</option>
				<option value="3">Other</option>
			</select>
		</div>
		<div class="in">
			<label>Birth date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="date" name="dob">
		</div>
		<div class="in">
			<label>Age&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
			<input type="number" name="age" min="1" max="100">
		</div>
		<div class="in">
			<label>Blood Group</label>
			<select name="bg">
				<option value="">Select</option>
				<option value="a+">A+</option>
				<option value="a-">A-</option>
				<option value="b+">B+</option>
				<option value="b-">B-</option>
				<option value="o+">O+</option>
				<option value="o-">O-</option>
				<option value="ab+">AB+</option>
				<option value="ab-">AB-</option>
			</select>
		</div>
		<button type="submit">Submit</button> 
	<!--<label>Doctor Specialization</label>
	<select id="spec" name="docspec">
		<option value="General Physician">General Physician</option>
		<option value="Gynecologist">Gynecologist</option>
		<option value="Dentist">Dentist</option>
		<option value="ENT Specialist">ENT Specialist</option>
		<option value="Dermatologist">Dermatologist</option>
	</select>
	</div>
	<div class="padd">
	<label class="padd">Doctor</label>
	<select>
		<option value=""></option>
		<option value=""></option>
		<option value=""></option>
		<option value=""></option>
	</select>
	<div class="padd">
		<label>Date</label>
		<input type="date" name="apdate" min=
		<?php
         echo date('Y-m-d');
     	?>
     required>
	</div>
	<div class="padd">
		<label>Time</label>
		<input type="time" name="aptime" min="09:00" max="19:00" required>&nbsp<small>Appointment hours are 9am to 7pm</small>
	</div>
	<div class="padd">
		<label><b>Consultency fee:</b></label>

	</div>
	-->
</div>
</div>
</form>
  </body>
  </html>