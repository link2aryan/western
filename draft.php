<?php 
					if (($_SESSION['logInError'])!=null)
					{ ?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    	<span aria-hidden="true">&times;</span>
						  	</button>
						  		<div align="center"><?php echo $_SESSION['logInError']; ?></div>
						</div>
					<?php } ?>

if (isset($_POST['signIn']))
		{
			$cn=makeconnection();
			$sql="SELECT * from user_info WHERE Email='".$_POST['emailUsername']."' and Password='".$_POST['logInPass']."'";
			$query=mysqli_query($cn,$sql);
			$row=mysqli_num_rows($query);
			$data=mysqli_fetch_array($query);
			mysqli_close($cn);
			if($row>0)
			{
				$_SESSION['userName']=$_POST['emailUsername'];
				$_SESSION["userType"]= $data[5];
				$_SESSION['loginstatus']="yes";
				header("location:index.php");
			}
			else
			{
				$_SESSION['logInError']="Invalid User Name or Password";
			}
		}

 <?php 
  include('function.php');
  //sign up the user
		if (isset($_POST['signUp'])) 
		{
			$fName=$_POST['fName'];
			$Email=$_POST['Email'];
			$password=$_POST['Password'];
			$DOB=$_POST['DOB'];
			$lvl=0;
			if (isset($_POST['signUp']))
			{
				$cn=makeconnection();
				$sql="INSERT INTO user_info SET fullName='".$fName."',Email='".$Email."', Password='".$password."',DOB='".$DOB."', lvl='".$lvl."'";
				$query=mysqli_query($cn,$sql);
				if(!$query)
				{ ?>
					<div class="alert alert-danger alert-dismissible fade in" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    	<span aria-hidden="true">&times;</span>
						  	</button>
						  		<div align="center">Signup Failed ! Please try again after some moment.</div>
						</div>	
				<?php } 
			}
		}
   ?>

if (($_SESSION['signUpError'])!=null)
 {
 	$_SESSION['signUpInfo']=""; ?>
	<div class="alert alert-danger alert-dismissible fade in" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    	<span aria-hidden="true">&times;</span>
	  	</button>
	  		<div align="center"><?=$_SESSION['signUpError'];?></div>
	</div>
 <?php }
 	$_SESSION['signUpError']="";
  ?>
<?php
if (($_SESSION['signUpInfo'])!=null)
 {
 	$_SESSION['signUpError']=""; ?>
	<div class="alert alert-success alert-dismissible fade in" role="alert">
	  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    	<span aria-hidden="true">&times;</span>
	  	</button>
	  		<div align="center"><?=$_SESSION['signUpInfo'];?></div>
	</div>
 <?php }
 	$_SESSION['signUpInfo']="";