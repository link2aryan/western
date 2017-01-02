<!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="assets/lib/js/jquery.js"></script>
	<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.js"></script>
 	<title>User Portal</title>
 </head>
 <?php include('include/userHeader.php'); ?>
<body style="padding-top: 50px;">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3 align="center">
		        	<span style="color: green;">
		        		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
		        		Point of Interest	
		        		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
		        	</span> 
	        	</h3>
				<table class="table table-hover table-condensed " >
	        	<?php 
	        		//include('function.php');
					//$cn=makeconnection();
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
	        				<a href="view.php?id=<?= $row[0];?>&action=view" target="_blank">View </a>|
	        				<a href="view.php?id=<?= $row[0];?>&action=addFav">Add to Favroite </a>
	        			</td>
	        			<td colspan="2">
	        				<img src="admin/uploads/<?=$row[8]?>" class="img-responsive img-rounded" alt="Update preview of <?=$row[1]?>" style="width:150px;height:auto;"">
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
	</div> 	
</body>
</html>