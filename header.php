<script>
    function checkPass()
{
    //Store the password field objects into variables ...
    var pass1 = document.getElementById('Password');
    var pass2 = document.getElementById('cPassword');
    //Store the Confimation Message Object ...
    var message = document.getElementById('confirmMessage');
    //Set the colors we will be using ...
    var goodColor = "#66cc66";
    var badColor = "#ff6666";
    //Compare the values in the password field 
    //and the confirmation field
    if(pass1.value == pass2.value){
        //The passwords match. 
        //Set the color to the good color and inform
        //the user that they have entered the correct password 
        pass2.style.backgroundColor = goodColor;
        message.style.color = goodColor;
        message.innerHTML = "Passwords matched!"
    }else{
        //The passwords do not match.
        //Set the color to the bad color and
        //notify the user.
        pass2.style.backgroundColor = badColor;
        message.style.color = badColor;
        message.innerHTML = "Passwords do not matched !"
    }
}  
</script>
<!--Sgn up model-->
<div class="modal fade" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h3 class="modal-title" id="myModalLabel" align="center"><u>Sign Up today</u></h3>
      </div>
      <div class="modal-body">
      	<form class="bor" method="post" action="log.php">
        	<div class="form-group">
	            <label >Full Name :</label>
	            <input type="text" class="form-control" name="fName" id="exampleInputEmail1" placeholder="First Name" width="auto" required autofocus>
          	</div>
          	<div class="form-group">
	            <label >Email :</label>
	            <input type="email" class="form-control" name="Email" id="exampleInputEmail1" placeholder="abc@yourmail.com" width="auto" required>
          	</div>
          	<div class="form-group">
              <label >Password :</label>
              <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" width="auto" minlength="8" title="Use Strong Password(a-z, A-Z, 0-9)" required>
	        </div>
	        <div class="form-group">
	            <label>Confirm Password :</label>
	            <input type="password" class="form-control" name="cPassword" id="cPassword" placeholder="Password" width="auto" minlength="8" onkeyup="checkPass(); return false;" required>
	             <span id="confirmMessage" style="font-size:13px; font-weight:bold;">discover strong password for yourself</span>
	        </div>
	        <div class="form-group">
              <label for="exampleInputDOB">Date Of Birth :</label>
              <input type="date" class="form-control" name="DOB" id="exampleInputDOB" width="auto" currentdate required>
	        </div>
	        <div class="checkbox">
	              <label>
	                <input type="checkbox" required="true"> I agree <a href="#">Terms &amp; Condition</a>
	              </label>
	        </div>
        </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="signUp"> Sign Up</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>
      </form>
    </div>
  </div>
</div>
<!--Sign up model ends-->
<!--Sign In model starts-->
<div class="modal fade" id="signInModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-sm " role="document">
  <div >
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="modal-title" id="myModalLabel" >
        	<h3 align="center">
	        	<span style="color: brown;">
	        		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
	        		Already Member !	
	        		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
	        	</span> 
        	</h3>
			<!-- <h4 class="form-signin-heading">Sign In</h4> -->
		</div>
      </div>
      <div class="modal-body">
    <form method="post" action="log.php" >
        	<div class="form-group">
	        	<label class="sr-only">Email address :</label>
			    <input type="text" id="inputEmail" class="form-control input-lg" placeholder="Email / Username" required autofocus name="emailUsername">
		    </div>
		    <div class="form-group">
	        	<label class="sr-only">Password :</label>
		        <input type="password" id="inputPassword" class="form-control input-lg" placeholder="Password" required name="logInPass">
	        </div>
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-success btn-block" name="signIn">
      		<strong>Sign In</strong>
      		<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
      	</button>
        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Back</button><br>
      </div>
  	</form>
    </div>
    </div>
  </div>
</div>
<!--Sign In model starts-->
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
	      <a href="#">
	      	<img  src="assets/images/logo.png" alt="westernNepal">
	      </a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li ><a href="#">Gallery</a></li>
	        <li><a href="<?="http://localhost:1234/westernnepal/logOut.php"?>">Log Out</a></li>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Visit Western <span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">Palpa</a></li>
	             <li role="separator" class="divider"></li>
	            <li><a href="#">Lumbini</a></li>
	             <li role="separator" class="divider"></li>
	            <li><a href="#">Baglung</a></li>
	            <li role="separator" class="divider"></li>
	            <li><a href="#">Mustang</a></li>
	            <li role="separator" class="divider"></li>
	          </ul>
	        </li>
	      </ul>
	      <ul class="nav navbar-nav navbar-right">
	      	<button type="submit" class="btn btn-success navbar-btn " data-toggle="modal" data-target="#signUpModal">
	      		<strong>Sign Up</strong>
	      	</button>
	      	<button type="submit" class="btn btn-primary navbar-btn"  data-toggle="modal" data-target="#signInModal">
	      		<strong>Sign In</strong>
	      	</button>
	      		<span>&nbsp;</span>
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
	