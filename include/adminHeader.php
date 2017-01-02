<?php session_start(); 
include('isLogin.php');
include('isAdmin.php');
?>
	<nav class="navbar navbar-inverse navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a href="index.php">
	      	<img  src="../assets/images/logo.png" alt="westernNepal">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li ><a href="#">Gallery</a></li>
	        <li ><a href="places.php">Sites</a></li>
	        <li ><a href="../userPortal.php">User Portal</a></li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome 
	          	<?php 
	          		if (isset($_SESSION['userName']))
	          		{
	          			echo ucfirst($_SESSION['userName'])." !";
	          		}
	          	 ?>
		        <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="<?="http://localhost:1234/westernnepal/logOut.php"?>">Log Out</a></li>
	             
	          </ul>
	        </li>
	      </ul>

	      <form class="navbar-form navbar-right">
	        <div class="input-group">
	          <input type="text" class="form-control" placeholder="Search">
				<span class="input-group-btn">
	              <button class="btn btn-default" type="button">
	              <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
	              </button>
            	</span>
	        </div> 
	      </form>
	      
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
	