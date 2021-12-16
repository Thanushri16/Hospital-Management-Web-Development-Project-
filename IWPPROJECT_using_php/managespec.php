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
    <li class="breadcrumb-item"><a href="adminhome.php">Admin</a></li>
    <li class="breadcrumb-item active" aria-current="page">Manage Specialization</li>
  </ol>
	</nav>
	<form action="specsave.php" method="post">
	
	<h1>MANAGE SPECIALIZATION</h1>
	<div style="margin-top: 5%; margin-left: 10%; margin-right: 10%;border: 1px solid lightgray; padding: 2%;">
	<label>Add Doctor Specialization</label><br>
	<input type="text" name="spec" placeholder="Enter Doctor Specialization"><br>
	<button type="submit" style="margin-top: 2%;">Submit</button>
	</div>
	<div class="continue" style="background-color: white; margin-top: 5%; margin-left: 10%; margin-right: 15%;">
	<div class="padd">	
	<h5>Manage <b>Doctor Specialization</b></h5>
	<table id="test_table" style="width: 95%; margin-top: 2%;">
			<tr style="border-top: 1px solid lightgray; border-bottom: 1px solid lightgray;">
				<th style="margin-right: 10%;">#&nbsp;&nbsp;&nbsp;</th>
				<th>Specialization</th>
				<th>Action</th>
			</tr>

			<?php
			include("connection.php");
			$sql="SELECT * from specialization";
			if(isset($_GET['category']))
			{
				$category=$_GET['category'];
				$sql="DELETE from specialization where spec='$category'";
				$answer=$connect->query($sql);
				header("Location:adminhome.php");
			}
			$result =  $connect -> query($sql);
			$i=0;
			if($result -> num_rows)
			{
				while ($row = $result -> fetch_assoc()) 
				{
						$i++;
						$spec=$row['spec'];
						echo "<tr><td>".$i."</td><td>".$spec."</td><td>"; ?>
						<a href='managespec.php?category=<?php echo $spec; ?> '><button type='button' class='btn btn-danger'>
       						<i class='fa fa-trash' style='color: white;'></i>
   						</button></a> <?php echo "</td></tr>";	
   							
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
</div>
</form>
</body>
</html>	