<?php
	session_start();
	session_unset();
    //unset($_SESSION['pid']);
    header('Location:adminlogin.html');
?>