<!DOCTYPE html>
<html>
<head>
  <title>eHospital</title>
  <link rel = "icon" href ="images/ehosp.png" type = "image/x-icon"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Bitter&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style type="text/css">

  .navbar{
    color: #0A1172;
  }
  
  .navbar a:hover{
    background-color: navy;
    color: white;
  }
	
.row {  
  display: flex;
  flex-wrap: wrap;
}

.side {
  flex: 20%;
  background-color: #f1f1f1;
  padding: 20px;
}

#ul1 {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 200px;
}

#ul1 li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

#ul1 li a:hover {
  background-color: #555;
  color: white;
  text-decoration: none;
}

.main {
  flex: 80%;
  background-color: white;
  padding-right: 20px;
}
.padd
{
padding-top: 30px;
padding-left: 50px;
}
td
{
	padding-right: 5%;
}
.col
{
	color: #2E304A;
	font-weight: bold;
}
</style>

<script>
$(document).ready(function() {
  $("#ul1 li a").click(function(e) {
    e.preventDefault();
    $(".main").load($(this).attr('href'));
  });
});
</script>

</head>
<body>
  <nav class="navbar navbar-expand-sm navbar navbar-light" style="background-color: #E1F5FE;">
    <div class="navbar-brand"><img src="images/ehosp.png" width="50" height="50">eHospital Management System</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"><i class="fas fa-bars hamburger"></i></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar ml-auto" type="none">
          <li class="nav-item"><a class="nav-link" href="doctorlogin.html">Logout<span class="sr-only">(current)</span></a>
          </li>
      </ul>
    </div>
  </nav>

<div class="row">
  <div class="side">
  	<h2>Menu</h2>
    <ul id="ul1">
      <li><a href="mapp.php">My Appointments</a></li>
      <li><a href="mypatientsdetails.html">My Patients</a></li>
      <li><a href="doctormypro.php">My Profile</a></li>
    </ul>  
  </div>

  <div class="main">
  	<div class="padd">
  	<h3 style="padding-bottom: 20px; color: #800020;text-shadow: 1px 1px #C28285; margin-left: 10%;">Details of the patient</h3>
  	<table width="60%">
    <?php
    include('connection.php');
    $first_name=$_POST['fname'];
    $last_name=$_POST['lname'];
    $sql="SELECT * from patient";
    $result =  $connect -> query($sql);
	if($result -> num_rows > 0)
			{
				while ($row = $result -> fetch_assoc()) 
				{
					if($row["pfname"]==$first_name and $row["plname"]==$last_name)
					{
						$d=$row["pdob"];
						$today = date("Y-m-d");
						$diff = date_diff(date_create($d), date_create($today)); 
						$df=date_format(date_create($d),"d/m/Y");
						echo "<tr><td class='col'>First Name: </td><td>".$row["pfname"]."</td></tr>"."<tr><td class='col'>Last Name: </td><td>".$row["plname"]."</td></tr>";
						echo "<tr><td class='col'>Registration Number: </td><td>".$row["pno"]."</td></tr><tr><td class='col'>Date of Birth: </td><td>".$df."</td></tr>";
						echo "<tr><td class='col'>Age: </td><td>".$diff->format('%y')."</td></tr><tr><td class='col'>Gender: </td><td>".$row["pgen"]."</td></tr><tr><td class='col'>Country: </td><td>".$row["pcountry"]."</td></tr>";
						echo "<tr><td class='col'>Mobile Number: </td><td>".$row["pmobile"]."</td></tr><tr><td class='col'>Mail ID: </td><td>".$row["pmail"]."</td></tr>";
					}
				}
				echo "</table>";
			}
			else
			{
				echo "0 result";
			}
    ?>
  </div>
</div>
</div>
</body>
</html>