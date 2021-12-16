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
			padding-left: 4%;
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
	<form action="dasave.php" method="post">
		<div class="continue" style="background-color: grey; margin-top: 0%; margin-left: 25%; margin-right: 25%;">
			<fieldset>
		<legend><b>Add doctor</b></legend>
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
			<button type="submit">Add doctor</button>
	</fieldset>	
	</div>
	</form>
</body>
</html>