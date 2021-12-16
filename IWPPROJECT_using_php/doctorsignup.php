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
  	<script type="text/javascript">
  		function check() {
  			if (document.getElementById('password').value ==document.getElementById('confirm_password').value) {
    			document.getElementById('confirm_password').style.color = 'green';
    			document.getElementById('message').innerHTML = 'Password Match';}
    		else {
    			document.getElementById('confirm_password').style.color = 'red';
  			}

}

  	</script>
  	<style type="text/css">
  		body
  		{
  			background-image: url("images/13978.jpg");
  		}
  		button
  		{
  			background-color: rgb(216, 218, 237);
  			color: #2E304A;
  			padding-top: 0.5%;
  			padding-bottom: 0.5%;
  			padding-left: 7%;
  			padding-right: 7%;
  			text-align: center;
  			font-weight: bold;
  		}
  		button:focus
  		{
  			border: 1px solid blue;
  		}
		.navbar
		{
			color: #0A1172;
		}
		.navbar a:hover 
		{
  			background-color: navy;
  			color: white;
		}
		.continue
		{
			padding-left: 2%;
			padding-top: 1.7%;
			padding-bottom: 1.7%;
			color: black;
		}
		.padd
		{
			padding-bottom: 2%;
		}
		input
		{
			width: 60%;
		}
		input:invalid 
		{
  			color: red;
		}
		select
		{
			width: 60%;
		}

	</style>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar navbar-light fixed-top" style="background-color: #E1F5FE;">
  	<div class="navbar-brand" href="#"><img src="images/ehosp.png" width="50" height="50">eHospital Management System</div>
  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  	</button>
  	<div class="collapse navbar-collapse" id="navbarNav">
    	<ul class="navbar ml-auto" type="none">
      		<li class="nav-item">
        		<a class="nav-link" href="home.html">Home <span class="sr-only">(current)</span></a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="about.html">About </a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="adminlogin.html">Admin </a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="patientlogin.html">Patient </a>
      		</li>
      		<li class="nav-item">
        		<a class="nav-link" href="doctorlogin.html">Doctor </a>
      		</li>
    	</ul>
  	</div>
	</nav>
	<form action="dsave.php" method="post">
				
		<div class="continue" style="background-color:grey; margin-top: 6.45%; margin-left: 25%; margin-right: 25%;">
			<fieldset>
		<legend><b>Signup Form</b></legend>
			<div class="padd">
			<label>First Name*</label><br>
			<input type="text" name="fn" pattern="[a-zA-Z]{1,50}" required ><br>
			</div>
			<div class="padd">
			<label>Last Name*</label><br>
			<input type="text" name="ln" pattern="[a-zA-Z]{1,50}" required ><br>
			</div>
			<div class="padd">
			<label>Date of Birth</label><br>
			<input type="date" name="dob">
			</div>
			<div class="padd">
			<label>Gender</label><br>
			<span>
			<select name="gender">
				<option value="">Select</option>
				<option value="Male">Male</option>
				<option value="Female">Female</option>
				<option value="Other">Other</option>
			</select>
			</span>
			</div>
			<div class="padd">
				<label>Specialization</label><br>
				<span>
				<select id="spec" name="docspec">
					<option value="" disabled selected>Select</option>
		<?php
		include('connection.php');
            $query = "SELECT spec FROM specialization";
            $result = $connect->query($query);

            while( $row = $result->fetch_assoc() ){
                echo "<option value='{$row['spec']}'>{$row['spec']}";
            }
        ?>
				</select>
			</span>
			</div>
			<div class="padd">
				<label>Mobile Number</label><br>
				<input type="text" name="phone" pattern="[0-9]{10}">
			</div>
			<div class="padd">
				<label>E-Mail*</label><br>
				<input type="email" name="email" required>
			</div>
			<div class="padd">
				<label>Password*</label><br>
				<input type="Password" name="pass1" id="password" required>
			</div>
			<div class="padd">
				<label>Confirm Password*</label><br>
				<input type="Password" name="pass2" id="confirm_password" required onkeyup='check()'>
				<span id='message'></span>
			</div>
			<button type="submit">Signup</button>
			
	</fieldset>	
	</div>
	
	</form>
</body>
</html>