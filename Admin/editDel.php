<?php
	session_start(); 
	include('../function.php');
	$cn=makeconnection();
	if (isset($_GET['action']) && $_GET['action']=="delete")
	{
		$sql="DELETE FROM user_info WHERE userID=".$_GET['id'];
		$result=mysqli_query($cn,$sql);
		if (!$result)
		{
			//echo"Data not deleted from database with id =".$_GET['id'];
			$_SESSION['adminError']="Something went wrong ! Please try again";
			header('location:index.php');
		}
		else
		{
			$_SESSION['adminInfo']="Data Deleted succfully";
			header('location:index.php');
		}
	}
	else if (isset($_GET['action']) && $_GET['action']=="edit")
	{
		//echo "Data will be edited with id ".$_GET['id'];
		header("Location:edit.php?id=".$_GET['id']);
	}
	
 ?>