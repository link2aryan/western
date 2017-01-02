<?php 
session_start();
	include('../function.php');
	$cn=makeconnection();
	if (isset($_POST['update']))
	{
		$fName=$_POST['fName'];
		$username=$_POST['userName'];
		$lvl=$_POST['lvl'];
		$DOB=$_POST['DOB'];
		
		$mail=$_POST['Mail'];
		$sql="UPDATE user_info SET fullname='".$fName."',username='".$username."',lvl='".$lvl."',DOB='".$DOB."' where userID=".$_GET['id'];
		$query=mysqli_query($cn,$sql);
		//$row=mysqli_num_rows($query);
		// 	$data=mysqli_fetch_array($query);
		if (!$query)
		{
			//echo"Data not deleted from database with id =".$_GET['id'];
			$_SESSION['adminError']="Something went wrong ! Please try again";
			//header("location:index.php");
		}
		else
		{
			$_SESSION['adminInfo']="Data Edited succfully";
			header("location:index.php");
		}
	}
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../assets/lib/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/lib/bootstrap/js/bootstrap.js"></script>
 	<title>Edit User</title>
 </head>
 <?php 
if(isset($_SESSION['adminError'])):?>
	<?php if (($_SESSION['adminError'])!=null):
	 	$_SESSION['adminInfo']=""; ?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		  		<div align="center"><?=$_SESSION['adminError'];?></div>
		</div>
	<?php endif; 
	$_SESSION['adminError']="";
endif;?>
<?php
if(isset($_SESSION['adminInfo'])): ?>
	<?php if (($_SESSION['adminInfo'])!=null):
		$_SESSION['adminError']=""; ?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		  		<div align="center"><?=$_SESSION['adminInfo'];?></div>
		</div>
	 <?php endif;
	 	$_SESSION['adminInfo']="";
endif;?>
 <body style="padding-top: 60px;">
 	<div class="container">
 		<div class="row"><br><br>
 			<div class="col-md-4"></div>
 			<div class="col-md-4 well">
 				<h2 align="center"><?="Edit Profile".$_GET['id'];?></h2>
 				<?php 
 					$cn=makeconnection();
					$sql="SELECT * FROM `user_info` WHERE `userID`=".$_GET['id'];
					$query=mysqli_query($cn,$sql);
					$row=mysqli_num_rows($query);
					$data=mysqli_fetch_array($query);
					mysqli_close($cn);
 				 ?>
 				<form method="post" action="#">
		        	<div class="form-group">
			            <label >Full Name :</label>
			            <input type="text" class="form-control" name="fName" placeholder="First Name" width="auto" required autofocus value="<?=$data[1]?>" >
		          	</div>
		          	<div class="form-group">
			            <label >Email :</label>
			            <input type="email" class="form-control" name="Mail" placeholder="abc@yourmail.com" width="auto" value="<?=$data[2]?>" readonly>
			            *Email can't be changed.
		          	</div>
		          	<div class="form-group">
			            <label >Username :</label>
			            <input type="text" class="form-control" name="userName" id="exampleInputEmail1" placeholder="Username" width="auto" required value="<?=$data[6]?>" >
		          	</div>
		          	<div class="form-group">
		              <label for="exampleInputDOB">Date Of Birth :</label>
		              <input type="date" class="form-control" name="DOB" id="exampleInputDOB" width="auto" value="<?=$data[4]?>" required currentdate>
			        </div>
			        <div class="form-group">
		              <label >Level:</label>
		              <select  class="form-control" id="sel2" name="lvl" >
				        <option>0</option>
				        <option>1</option>
				       </select>
			        </div>
			        <div class="modal-footer">
			        <button type="submit" class="btn btn-success" name="update"> Update</button>
			        <a href="index.php">
			        <button type="button" class="btn btn-danger" >Cancel</button>
			        </a>
			      </div>
		        </form>
			        
        </div>

 			</div>
 			<div class="col-md-4"></div>
 		</div>
 	</div>
 	
 </body>
 </html>
 