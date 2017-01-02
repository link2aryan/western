<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/lib/css/login.css">
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
					<strong>Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></strong>
				</div>
				<a href="editDelPlace.php?id=1000&action=add">
				<div class="btn btn-primary" VALUE="Refresh">
					<strong>Add Sites <span class="glyphicon glyphicon-edit" aria-hidden="true"></span></strong>
				</div></a>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class=""><br><br><br><br><br>
				<div class="list-group" style="text-transform: bold;"><strong>
				  <a href="index.php" class="list-group-item ">Alter Users<span class="badge"></span></a>
				  <a href="#" class="list-group-item">Edit Users</a>
				  <a href="#" class="list-group-item">Delete Users</a>
				  <a href="places.php" class="list-group-item ">Sites</a></strong>
				</div>
				</div>
			</div>

			<div class="col-md-10 vr">
				<h3 align="center">
		        	<span style="color: green;">
		        		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
		        		Point of Interest	
		        		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
		        	</span> 
	        	</h3>
				<table class="table table-hover table-condensed " >
	        	<?php 
	        		include('../function.php');
					$cn=makeconnection();
					$sql="SELECT * FROM places";
					$result=$cn->query($sql);
					$i=0;
					if($result = mysqli_query($cn, $sql)):
						if(mysqli_num_rows($result) > 0): 
							while($row = mysqli_fetch_array($result)):?>
					<tr>
	        			<td colspan="3" >
	        				<h4><?php echo ++$i.". ".$row[1]?></h4>
	        				<strong>Location:</strong> <?=$row[2]?><br>
	        				<a href="editDelPlace.php?id=<?= $row[0];?>&action=delete">Delete </a>|
	        				<a href="editDelPlace.php?id=<?= $row[0];?>&action=edit">Update </a>
	        			</td>
	        			<td colspan="2">
	        				<img src="uploads/<?=$row[8]?>" class="img-responsive img-rounded" alt="Update preview of <?=$row[1]?>" style="width:150px;height:auto;"">
	        			</td> 
	        		</tr>
	        			<th>Natural Heritages</th></a>
	        			<th>Cultural Heritage</th>
	        			<th>Other Attraction</th>
	        			<th>Adventure</th>
	        			<th>Best Time to travel</th>
	        		</tr>
	        		<tr>
	        			<td><?=$row[3]?></td>
	        			<td><?=$row[4]?></td>
	        			<td><?=$row[5]?></td>
	        			<td><?=$row[6]?></td>
	        			<td><?=$row[7]?></td>
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
	        		<?php endwhile; endif; endif; ?>
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
