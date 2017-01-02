<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../assets/lib/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/lib/bootstrap/js/bootstrap.js"></script>
	<title>westernNepal</title>
</head>
<?php include('../include/adminHeader.php');
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
		<div class="row">
			<div class="col-md-2"></div>
			<div align="center">
				<div class="btn btn-primary" onClick="history.go(0)" VALUE="Refresh">
					Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
				</div>
				<div class="btn btn-primary" VALUE="Refresh">
					Button 1 <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</div>
				<div class="btn btn-primary" VALUE="Refresh">
					Button 2 <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class="">
				<div class="list-group" style="text-transform: bold;"><strong>
				  <a href="#" class="list-group-item ">Alter Users<span class="badge"></span></a>
				  <a href="#" class="list-group-item ">Add Users</a>
				  <a href="#" class="list-group-item">Edit Users</a>
				  <a href="#" class="list-group-item">Delete Users</a></strong>
				</div>
				</div>
			</div>

			<div class="col-md-10">
				<!-- data here -->
			</div>
		</div>
		<div class="">
				<h1>hello world by Admin!</h1>
			<pre>
				<h4>
					<?php
					if(isset($_SESSION))
					{
						print_r($_SESSION);
					}
					else
					{
						echo"NO Session until now";
					}
					 ?> 
				</h4>	
			</pre>
		</div>	
	</div>
</body>
</html>
