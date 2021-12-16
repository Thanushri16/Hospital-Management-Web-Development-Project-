<!DOCTYPE html>
<html>
<head>
  <title>eHospital</title>
  <link rel = "icon" href ="images/ehosp.png" type = "image/x-icon"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
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
          <li class="nav-item"><a class="nav-link" href="alogout.php">Logout<span class="sr-only">(current)</span></a>
          </li>
      </ul>
    </div>
  </nav>

<div class="row">
  <div class="side">
  	<h2>Menu</h2>
    <ul id="ul1">
      <li><a href="managepatient.php">Manage Patients</a></li>
      <li><a href="adddoctor.php">Add doctor</a></li>
      <li><a href="managedoctor.php">Manage Doctors</a></li>
      <li><a href="managespec.php">Manage Specialization</a></li> 
      <li><a href="patientlog.php">Patient log</a></li>  
      <li><a href="doctorlog.php">Doctor log</a></li>
    </ul>  
  </div>
  

  <div class="main">
    <h2 style="text-align: center; color: #2E304A; margin-top:2%;margin-bottom: 2%;">ADMIN | DASHBOARD</h2>
    <div class="fakeimg" style="height:200px;">
      <a href="#"><img style="margin-left: 20%; margin-top: 5%;" src="managepatient.jpg" title="Manage patients by clicking on the same in the Menu" width="15%" height="60%"></a>
      <a href="#"><img style="margin-left: 25%; margin-top: 5%;" src="managedoctor.png" title="Manage doctors by clicking on the same in the Menu" width="15%" height="50%"></a>
    </div>
    <h5>
    <span style="margin-left: 21%; color: #800020;">
      Manage patients
    </span>
    <span style="margin-left: 25%; color: #800020;">
      Manage doctors
    </span>
    </h5>
    <p style="font-size: 15px; font-weight: bold;">
      <span style="margin-left: 23%;">
        Total Patients: <?php include('connection.php'); $sql="SELECT * from patient";
$result = mysqli_query($connect,$sql);
$count=mysqli_num_rows($result);
echo"$count";?>
      </span>
      <span style="margin-left: 29%;">
        Total Doctors: <?php include('connection.php'); $sql="SELECT * from doctor";
$result = mysqli_query($connect,$sql);
$count=mysqli_num_rows($result); echo"$count";?>
      </span>
    </p>
</div>
</body>
</html>