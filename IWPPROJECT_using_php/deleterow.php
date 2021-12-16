<?php
include('connection.php');
if(isset($_GET['del'])){
    	echo "con";
    	$appnumber=$_GET['del'];
    	$sql="DELETE from appointment where appno='$appnumber'";
  		$result =  $connect -> query($sql);
  		if($result)
  		{
  			echo "deleted";
  			header("Location:mapp.php");
  		}}
?>