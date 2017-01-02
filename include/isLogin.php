<?php 
 if ($_SESSION['loginStatus']!="yes")
 {
 	$_SESSION['logInError']="Please login for more feature !";
 	header('Location:http://localhost:1234/westernnepal/login.php');
 }
?>