<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../assets/lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="../assets/lib/css/login.css">
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
<body style="padding-top: 120px;">
	
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div align="center">
				<div class="btn-lg btn-success" onClick="history.go(0)" VALUE="Refresh">
					Refresh <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
				</div>
				<hr>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2">
				<div class="">
				<div class="list-group" style="text-transform: bold;"><strong>
				  <a href="index.php" class="list-group-item ">Alter Users<span class="badge"></span></a>
				  <a href="#" class="list-group-item">Edit Users</a>
				  <a href="#" class="list-group-item">Delete Users</a>
				  <a href="places.php" class="list-group-item ">Sites</a></strong>
				</div>
				</div>
			</div>

			<div class="col-md-10">
				<table class="table">
					<tr>
						<th>S.N.</th>
						<th>Full Name</th>
						<th>Email</th>
						<th>Password</th>
						<th>DOB</th>
						<th>lvl</th>
						<th>Username</th>
						<th>Alter</th>
					</tr>
				<?php 
					include('../function.php');
					$cn=makeconnection();
					$sql="SELECT * FROM user_info";
					$result=$cn->query($sql);
					$i=0;
					if ($result->num_rows > 0):
						while($row = $result->fetch_assoc()): ?>
					<tr>
						<td><?=++$i; //$row['userID'];?></td>
						<td><?= $row['fullName'];?></td>
						<td><?= $row['Email'];?></td>
						<td><?= $row['Password'];?></td>
						<td><?= $row['DOB'];?></td>
						<td>
							<?php if($row['lvl']==1) {echo"Admin";}else{echo"User";} ?>
						</td>
						<td><?= $row['username'];?></td>
						<td>
						<form action="editDel.php" method="post">
						<a href="editDel.php?id=<?= $row['userID'];?>&action=delete">Delete </a>|
						<a href="editDel.php?id=<?= $row['userID'];?>&action=edit"> Edit</a>
						</form>
						</td>
					</tr>
				<?php endwhile; $k=$i; endif; ?>	
				</table>
			</div>
		</div>
		<hr class="hr">
		<div>
				<h2 align="center">Recorded Session !</h2>
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
