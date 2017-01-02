<?php 
 if ($_SESSION['userType']!=1)
 {
 	$_SESSION['logInError']="Please login with Admin access !";
 	header('Location:../login.php');
 }
?>