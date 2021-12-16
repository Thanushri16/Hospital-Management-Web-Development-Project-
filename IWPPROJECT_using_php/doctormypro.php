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
button
      {
        background-color: #2E304A;
        color: white;
        padding-top: 0.5%;
        padding-bottom: 0.5%;
        padding-left: 2%;
        padding-right: 2%;
        text-align: center;
        
      }
        button:focus
      {
        border: 1px solid blue;
      }
  	</style>
  </head>
  <body>
  	<nav aria-label="breadcrumb">
  	<ol class="breadcrumb justify-content-end">
    <li class="breadcrumb-item"><a href="doctorhome.html">Doctor</a></li>
    <li class="breadcrumb-item active" aria-current="page">My Profile</li>
  	</ol>
	</nav>

  <div class="main">
    <form action="doctormyproedit.php" method="post">
    <div class="padd">
    <h3 style="padding-bottom: 20px; color: #800020;text-shadow: 1px 1px #C28285;margin-left: 20%;">My profile</h3>
    <table width="60%">
      
      <?php
      include('connection.php');
      $id=$_SESSION['did'];
      $sql="SELECT * from doctor";
      $result =  $connect -> query($sql);
      if($result -> num_rows > 0)
      {
        while ($row = $result -> fetch_assoc()) 
        {
          if($row["dno"]==$id)
          {
            $d=$row["ddob"];
            $today = date("Y-m-d");
            $diff = date_diff(date_create($d), date_create($today)); 
            $df=date_format(date_create($d),"d/m/Y");
            echo "<tr><td class='col'>Name: </td><td>".$row["dname"]."</td></tr>";
            echo "<tr><td class='col'>Registration Number: </td><td>".$row["dno"]."</td></tr><tr><td class='col'>Date of Birth: </td><td>".$df."</td></tr>";
            echo "<tr><td class='col'>Age: </td><td>".$diff->format('%y')."</td></tr><tr><td class='col'>Gender: </td><td>".$row["dgen"]."</td></tr><tr><td class='col'>Specification: </td><td>".$row["dspec"]."</td></tr>";
            echo "<tr><td class='col'>Mobile Number: </td><td>".$row["dmob"]."</td></tr><tr><td class='col'>Mail ID: </td><td>".$row["dmail"]."</td></tr>";
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
  <div class="padd" style="margin-left: 20%;">
  <button type="submit">Edit profile</button>
  </div>
  </form>
</div>
</body>
</html>