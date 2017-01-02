<?php 
	session_start();
	session_unset();
	include('function.php');
	$_SESSION['logInError']="";
		if (isset($_POST['signIn']))
		{
			$cn=makeconnection();
			$sql="SELECT * FROM `user_info` WHERE `Password`='".$_POST['logInPass']."' AND (`Email`='".$_POST['emailUsername']."' OR `username`='".$_POST['emailUsername']."')";
			$query=mysqli_query($cn,$sql);
			$row=mysqli_num_rows($query);
			$data=mysqli_fetch_array($query);
			mysqli_close($cn);
			if($row>0)
			{
				$_SESSION['userID']=$data[0];
				$_SESSION['fullName']=$data[1];
				$_SESSION['userEmail']=$data[2];
				$_SESSION['userName']=$data[6];
				$_SESSION["userType"]= $data[5];
				$_SESSION['loginStatus']="yes";
				//
				if ($_SESSION["userType"]==1)
				{
					header("location:admin/index.php");
				}
				elseif ($_SESSION["userType"]==0)
				{
					header("location:userPortal.php");
				}
				else
				{
					header("location:login.php");	
				}
			}
			else
			{
				$_SESSION['logInError']="Invalid User Name or Password";
				header("location:login.php");
			}
		}

		if (isset($_POST['signUp']))
		{
			$fName=$_POST['fName'];
			$Email=$_POST['Email'];
			$password=$_POST['Password'];
			$DOB=$_POST['DOB'];
			$userName=$_POST['userName'];
			$lvl=0;
			$cn=makeconnection();
			$sql="INSERT INTO user_info SET fullName='".$fName."',Email='".$Email."',username='".$userName."', Password='".$password."',DOB='".$DOB."', lvl='".$lvl."'";
			$query=mysqli_query($cn,$sql);
			if (!$query)
			{
				$_SESSION['signUpError']="Something went wrong, Please try a moment again with unique email address and username!";
				header("location:index.php");
			}
			else
			{
				$_SESSION['signUpInfo']="User Created suceffully! Please log in with your credentials.";
				header("location:index.php");
			}
		}

 ?>