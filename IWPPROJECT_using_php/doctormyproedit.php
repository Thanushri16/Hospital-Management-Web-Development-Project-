<?php
session_start();
?>
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
label
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

var check = function() {
  if (document.getElementById('pass').value ==
    document.getElementById('cpass').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Passwords match';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Passwords dont match';
  }
}
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
  	<h3 style="padding-bottom: 20px; color: #800020;text-shadow: 1px 1px #C28285; margin-left: 2%;">Edit profile</h3>
  	<table width="60%">
    
    <div class="container">
    <hr>
  <div class="row">
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
            $name=$row["dname"];
            $rno=$row["dno"];
            $age=$diff->format('%y');
            $gen=$row["dgen"];
            $spec=$row["dspec"];
            $mob=$row["dmob"];
            $mail=$row["dmail"];
            $pass=$row["dpass"];
          }
        }
      }
      else
      {
        echo "0 result";
      }
    ?>  
      <!-- edit form column --> 
        <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          Doctor ID once entered can't be changed.
        </div>
        
        <form name="form1" class="form-horizontal" role="form" method="post">
          <div class="form-group">
            <label class="col-lg-3 control-label">Doctor ID</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="rnomod" disabled id="rn" value='<?php echo($rno); ?>'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Name</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="namemod" id="fn" value='<?php echo($name); ?>'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Date of Birth</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="dobmod" value='<?php echo($df); ?>'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Age</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" name="agemod" value='<?php echo($age); ?>'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Gender</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="gmod" value='<?php echo($gen); ?>'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Specialization</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="specmod" value='<?php echo($spec); ?>'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Mobile Number</label>
            <div class="col-lg-8">
              <input class="form-control" type="number" name="mobmod" value='<?php echo($mob); ?>'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" name="emailmod" id="email" value='<?php echo($mail); ?>'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="passmod" id="pass" value='<?php echo($pass); ?>' onkeyup='check();'>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="cpassmod" id="cpass" value='<?php echo($pass); ?>' onkeyup='check();'>
              <span id='message'></span>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button class="btn btn-primary" formaction="docmyprosave.php" >Save Changes</button>
              <span></span>
              <input type="reset" class="btn btn-default" formaction="doctormypro.php" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
  </div>
</div>
</div>
</body>
</html>