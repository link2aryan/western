<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="assets/lib/css/login.css">
	<script type="text/javascript" src="assets/lib/js/jquery.js"></script>
	<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.js"></script>
	<title>Sign In | westernNepal</title>
</head>
<body id="login">
<?php include('function.php'); ?>

<!--ebackground-color: #eee;-->
<div class="container">
<div ><br><br><br></div>
	<div class="row">
	<div class="col-md-4"></div>
		<div class="col-md-4">
			<div >
			<form method="POST" action="log.php">
				<?php 
					if (isset($_SESSION['logInError'])!=null): ?>
						<div class="alert alert-danger alert-dismissible fade in" role="alert">
						  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						    	<span aria-hidden="true">&times;</span>
						  	</button>
						  		<div align="center"><?=$_SESSION['logInError'];?></div>
						</div>
					<?php endif; ?>
			<!--class="form-signin"class="form-signin-heading" -->
		        <h2 align="center" >Already a member!</h2>

		        <h3 class="form-signin-heading">Sign In</h3>
		        <label for="inputEmail" class="sr-only">Email address</label>
		        <input type="text" id="inputEmail" class="form-control" placeholder="Email address" required autofocus name="emailUsername"><br>
		        <label for="inputPassword" class="sr-only">Password</label>
		        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="logInPass">
		        <br>
		        <button class="btn btn-lg btn-primary btn-block" type="submit" name="signIn">Sign in</button><br>
				 <a href="index.php"><input type="button" class="btn btn-lg btn-primary btn-block" value="Back"></span></a>
		        
	      	</form>
	      	</div>
		</div>
		<div class="col-md-4"></div>
	</div>
</div>
<script>
$( document ).click(function() {
  $( "#toggle" ).effect( "shake" );
});
</script>
<footer>
	<div class="container text-center">All Rights Reserved 2016-2020 <br>© westernNepal!  </div>
</footer>	
</body>
</html>