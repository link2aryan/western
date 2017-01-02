<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
 	<link rel="stylesheet" href="assets/lib/css/login.css">
	<script type="text/javascript" src="assets/lib/js/jquery.js"></script>
	<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.js"></script>
 	<title>View | westernNepal</title>
 </head>
 <?php include('include/userHeader.php'); 
 	if (isset($_GET['action']) && $_GET['action']=="addFav")
	{

		$sql="INSERT INTO `favorites` (`userID`, `placeID`) VALUES ('".$_SESSION['userID']."', '".$_GET['id']."')";
		$query=mysqli_query($cn,$sql);
		if (!$query)
		{
			$_SESSION['userError']="Opps ! Something went wrong. Invalid parameter or try again later";
		}
		else
		{
			$_SESSION['userInfo']='Successfully added to '.ucfirst($_SESSION['userName'])."'s favorites !";	
		}
	}
	if (isset($_GET['action']) && $_GET['action']=="remove")
	{
		$sql = "DELETE FROM `favorites` WHERE `favorites`.`userID` = '".$_SESSION['userID']."' AND `favorites`.`placeID` = '".$_GET['id']."'";
		$query=mysqli_query($cn,$sql);
		if (!$query)
		{
			$_SESSION['userError']="Opps ! Something went wrong. Invalid parameter or try again later";
		}
		else
		{
			$_SESSION['userInfo']='Successfully removed from '.ucfirst($_SESSION['userName'])."'s favorites !";	
		}
	}

 if(isset($_SESSION['userError'])):?>
	<?php if (($_SESSION['userError'])!=null):
	 	$_SESSION['userInfo']=""; ?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		  		<div align="center"><?=$_SESSION['userError'];?></div>
		</div>
	<?php endif; 
	$_SESSION['userError']="";
endif;?>
<?php
if(isset($_SESSION['userInfo'])): ?>
	<?php if (($_SESSION['userInfo'])!=null):
		$_SESSION['userError']=""; ?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		  		<div align="center"><?=$_SESSION['userInfo'];?></div>
		</div>
	 <?php endif;
	 	$_SESSION['userInfo']="";
endif;?>
<body style="padding-top: 50px;">
	<div class="container jumbotron">
		<div class="">
			<?php 
				$sql="SELECT * FROM places WHERE placeID='".$_GET['id']."'";
				$result=$cn->query($sql);
				$i=0;
				if($result = mysqli_query($cn, $sql)):
					if(mysqli_num_rows($result) > 0): 
						while($row = mysqli_fetch_array($result)):?>
							<h1 align="center" style="color:#707070;">
								<span class="glyphicon-lg glyphicon-minus" aria-hidden="true"></span>
								<?=$row[1]?>
								<span class="glyphicon-lg glyphicon-minus" aria-hidden="true"></span>
							</h1>
							<hr>
							<div align="center">
								<img src="admin/uploads/<?=$row[8]?>" class="img-responsive img-rounded" alt="Request Administrator to update preview of <?=$row[1]?>" width="400px" height="auto">
							</div><hr>
							<h4>
								<strong>Location : </strong><?=$row[2]?>
							</h4><hr class="hr">
			
		<div >
			<div class="col-md-6 well">
				<h3 class="title">Natural Heritage :</h3>
				<h4 class="content"><?=$row[3];?></h4>
				<hr class="hr">
				<h3 class="title">Cultural/Religious Heritages :</h3>
				<h4 class="content"><?=$row[4];?></h4>
				<hr class="hr">
				<h3 class="title">Adventure Options :</h3>
				<h4 class="content"><?=$row[6];?></h4>
				<hr class="hr">
			</div>
			<div class="col-md-6 well">
				<h3 class="title"> Other Attractions :</h3>
				<h4 class="content"><?=$row[5];?></h4>
				<hr class="hr">
				<h3 class="title"> Best Time to Travel :</h3>
				<h4 class="content"><?=$row[7];?></h4>
				<hr class="hr">
			</div>
		</div>
	</div>
		<?php endwhile;endif; endif; 
			if(mysqli_num_rows($result) <= 0):?> 
				<h1 align="center" style="color:#707070;">
					<span class="glyphicon-lg glyphicon-minus" aria-hidden="true"></span>
					Invalid Refrence
					<span class="glyphicon-lg glyphicon-minus" aria-hidden="true"></span>
				</h1>
				<div align="center" style="font-size: 150px;">
					<span class="glyphicon glyphicon-eye-close" aria-hidden="true" ></span>	
				</div>
				
				<h4 align="center">(Invalid refrence or Data not found. Please contct you database administrator.)</h4>
		<?php endif; ?>	
</div> 	
</body>
</html>