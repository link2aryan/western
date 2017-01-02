<?php 
session_start();
if (isset($_GET['action']) && $_GET['action']=="add")
	{
		$name="add";
	}
elseif(isset($_GET['action']) && $_GET['action']=="edit")
{
	$name="update";
}
	include('../function.php');
	$cn=makeconnection();
	if (isset($_POST['add']))
	{
		$place= addslashes($_POST['place']);
		$location= addslashes($_POST['location']);
		$nHeritage= addslashes($_POST['nHeritage']);
		$crHeritage= addslashes($_POST['crHeritage']);
		$aOption= addslashes($_POST['aOption']);
		$oAttraction= addslashes($_POST['oAttraction']);
		$time= addslashes($_POST['time']);
		$target_dir = "uploads/";
	    $image= basename($_FILES["imageUpload"]["name"]);
	    $target_file = $target_dir . $image;
	    $uploadOk = 1;
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    if (!move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file))
			{ 
				$image="null";
			}
		$sql="INSERT INTO places SET placeName=".$place."',location='".$location."',NHeritages='".$nHeritage."',CnRHeritages='".$crHeritage."',OAttractions='".$oAttraction."',Adventure='".$aOption."',travelTime='".$time."',image='".$image."'";
		$query=mysqli_query($cn,$sql);
		if (!$query)
		{
			$_SESSION['adminError']="Something went wrong ! Please try again";
		}
		else
		{
			$_SESSION['adminInfo']="Data Edited succfully";
			header("location:places.php");
		}
	}
	if (isset($_POST['update']))
	{
		
		$place= addslashes($_POST['place']);
		$location= addslashes($_POST['location']);
		$nHeritage= addslashes($_POST['nHeritage']);
		$crHeritage= addslashes($_POST['crHeritage']);
		$aOption= addslashes($_POST['aOption']);
		$oAttraction= addslashes($_POST['oAttraction']);
		$time= addslashes($_POST['time']);

		$target_dir = "uploads/";
	    $image= basename($_FILES["imageUpload"]["name"]);
	    $target_file = $target_dir . $image;
	    $uploadOk = 1;
	    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
	    if (!move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file))
			{ 
				$image="null";
			}
		$sql="UPDATE places SET placeName='".$place."',location='".$location."',NHeritages='".$nHeritage."',CnRHeritages='".$crHeritage."',OAttractions='".$oAttraction."',Adventure='".$aOption."',travelTime='".$time."',image='".$image."' where placeID=".$_GET['id'];
		$query=mysqli_query($cn,$sql);
		if (!$query)
		{
			//echo"Data not deleted from database with id =".$_GET['id'];
			$_SESSION['adminError']="Something went wrong ! Please try again";
			//header("location:index.php");
		}
		else
		{
			//echo $target_dir."<br>".$image;
			$_SESSION['adminInfo']="Data Edited succfully";
			header("location:places.php");
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
 	<title><?= ucfirst($name);?> Place</title>
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
 <body style="padding-top: 8px;">
 				<?php 
 					$cn=makeconnection();
					$sql="SELECT * FROM `places` WHERE `placeID`=".$_GET['id'];
					$query=mysqli_query($cn,$sql);
					$row=mysqli_num_rows($query);
					$data=mysqli_fetch_array($query);
					mysqli_close($cn);
 				 ?>
	<div class="container">
 		<div class="row well">
	 		<h3 align="center"><u><?=ucfirst($name);?> Place</u></h3><hr>
	 		<form method="post" action="#" enctype="multipart/form-data">
			<div class="col-md-6 ">
 					<div class="form-group">
			            <label >Name of Place : </label><span style="color: red"> *</span>
			            <input type="text" class="form-control" name="place" placeholder="Place" width="auto" required autofocus value="<?=$data[1]?>" title="Name of the Place">
		          	</div>
		          	<div class="form-group">
			            <label>Location : </label><span style="color: red"> *</span>
			            <input type="text" class="form-control" name="location" placeholder="Location" width="auto" value="<?=$data[2]?>" title="Location of the Place." required>
			            
		          	</div>
		          	<div class="form-group">
			            <label >Natural Heritage : </label><span style="color: red"> *</span>
			            <textarea name="nHeritage" class="form-control" id="" rows="3" placeholder="Natural Heritage of the Place" width="auto" required title="Natural Heritage of the Place" ><?=$data[3]?></textarea>
			            
		          	</div>
		          	<div class="form-group">
		              <label >Cultural/ Religious Heritage : </label><span style="color: red"> *</span>
		              <textarea name="crHeritage" class="form-control" id="" rows="3" placeholder="Cultural/ Religious Heritage of the place" width="auto" required title="Cultural/ Religious Heritage of the place" ><?=$data[4]?></textarea>
			        </div>
			</div>
			<div class="col-md-6">
					<div class="form-group">
		              <label >Adventure Options :</label><span style="color: red"> *</span>
		              <textarea name="aOption" class="form-control" id="" rows="3" placeholder="Adventure Options avilable the place" width="auto" required title="Adventure Options avilable the place" ><?=$data[6]?></textarea>
			        </div>
			        <div class="form-group">
		              <label >Other Attraction :</label>
		              <textarea name="oAttraction" class="form-control" id="" rows="2" placeholder="Other Attraction of the place" width="auto" required title="Other Attraction of the place" ><?=$data[5]?></textarea>
			        </div>
			        <div class="form-group">
		              <label >Best Time to Travel :</label>
		              <textarea name="time" class="form-control" id="" rows="2" placeholder="Best Time to Travel the place" width="auto" required title="Best Time to Travel the place" ><?=$data[7]?></textarea>
			        </div>
			        <div class="form-group">
			        	<label >Image : </label><span style="color: red"> *</span>
			        	<input type="file" name="imageUpload" id="imageUpload" >
			        </div>
			        
		     </div>
		</div>
		<div class="row">
			<div class="col-md-12 well">
				<div align="right">
			        <button type="submit" class="btn btn-success" name="<?=$name;?>"><?= ucfirst($name);?></button>
			        <a href="places.php">
			        <button type="button" class="btn btn-danger" >Cancel</button>
			        </a>
		        </div>
			</div>	
		</div>
		</form>
 	</div>
 			
 		
 	
 </body>
 </html>
 