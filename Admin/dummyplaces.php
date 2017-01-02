<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="../assets/lib/js/jquery.js"></script>
	<script type="text/javascript" src="../assets/lib/bootstrap/js/bootstrap.js"></script>
	<title>Places | westernNepal</title>
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
				  <a href="index.php" class="list-group-item ">Alter Users<span class="badge"></span></a>
				  <a href="places.php" class="list-group-item ">Places</a>
				  <a href="#" class="list-group-item">Edit Users</a>
				  <a href="#" class="list-group-item">Delete Users</a></strong>
				</div>
				</div>
			</div>

			<div class="col-md-10">
				<h3 align="center">
		        	<span style="color: green;">
		        		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
		        		Point of Interest	
		        		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
		        	</span> 
	        	</h3>

	        	<table class="table table-hover table-condensed">
	        	
	        		<tr>
	        			<td colspan="3">
	        				<h4>Pokhara 1</h4>
	        				<strong>Location:</strong> Gandaki Zone
	        			</td>
	        			<td colspan="2">
	        				<img src="uploads/gandaki.png" class="img-responsive img-rounded" alt="" style="width:150px;height:auto;"">
	        			</td> 
	        		</tr>
	        			<th>Natural Heritages</th>
	        			<th>Cultural Heritage</th>
	        			<th>Other Attraction</th>
	        			<th>Adventure</th>
	        			<th>Best Time to travel</th>
	        		</tr>
	        		<tr>
	        			<td>lorem lore lorem lorem</td>
	        			<td>lorem lore lorem lorem</td>
	        			<td>lorem lore lorem lorem</td>
	        			<td>lorem lore lorem lorem</td>
	        			<td>lorem lore lorem lorem</td>
	        		</tr>
	        		<tr>
	        			<td colspan="5" align="center">
							<h3 style="color: green;">
								<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
								<span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
							</h3>
	        			</td>
	        		</tr>
	        		<tr>
	        			<td colspan="3">
	        				<h4>Pokhara 2</h4>
	        				<strong>Place:</strong> Gandaki Zone
	        			</td>
	        			<td colspan="2">
	        				<img src="uploads/gandaki.png" class="img-responsive img-rounded" alt="" style="width:150px;height:auto;"">
	        			</td> 
	        		</tr>
	        		<tr>
	        			<th>Natural Heritages</th>
	        			<th>Cultural Heritage</th>
	        			<th>Other Attraction</th>
	        			<th>Adventure</th>
	        			<th>Best Time to travel</th>
	        		</tr>
	        		<tr>
	        			<td>lorem lore lorem lorem</td>
	        			<td>lorem lore lorem lorem</td>
	        			<td>lorem lore lorem lorem</td>
	        			<td>lorem lore lorem lorem</td>
	        			<td>lorem lore lorem lorem</td>
	        		</tr>
	        	</table>
	        	
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
						echo 'NO Session until now';
					}
					 ?> 
				</h4>	
			</pre>
		</div>	
	</div>
</body>
</html>
