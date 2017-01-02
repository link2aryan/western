<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.css">
	<script type="text/javascript" src="assets/lib/js/jquery.js"></script>
	<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.js"></script>
	<title>westernNepal</title>
</head>
<?php include('include/header.php');
if(isset($_SESSION['signUpError']))
{
	if (($_SESSION['signUpError'])!=null)
	 {
	 	$_SESSION['signUpInfo']=""; ?>
		<div class="alert alert-danger alert-dismissible fade in" role="alert">
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		  		<div align="center"><?=$_SESSION['signUpError'];?></div>
		</div>
	 <?php }
	 	$_SESSION['signUpError']="";
}?>
<?php
if(isset($_SESSION['signUpInfo']))
{
	if (($_SESSION['signUpInfo'])!=null)
	 {
	 	$_SESSION['signUpError']=""; ?>
		<div class="alert alert-success alert-dismissible fade in" role="alert">
		  	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    	<span aria-hidden="true">&times;</span>
		  	</button>
		  		<div align="center"><?=$_SESSION['signUpInfo'];?></div>
		</div>
	 <?php }
	 	$_SESSION['signUpInfo']="";
  }?>

<body style="padding-top: 50px;">
	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  <!-- Indicators -->
	  <ol class="carousel-indicators">
	    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
	    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
	  </ol>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
	    <div class="item active">
	      <img src="assets/images/annapurna.jpg" alt="..." width="100%" height="auto">
	      <div class="carousel-caption">
	        <h2>Annapurna</h2>
	        <h3>(Caption for it)</h3>
	      </div>
	    </div>
	    <div class="item">
	      <img src="assets/images/pokhara.jpg" alt="..." width="100%" height="auto">
	      <div class="carousel-caption">
	        <h2>Pokhara</h2>
	        <h3>(Caption for it)</h3>
	      </div>
	    </div>
	    <div class="item">
	      <img src="assets/images/rara.jpg" alt="..." width="100%" height="auto">
	      <div class="carousel-caption">
	        <h2>Rara</h2>
	        <h3>(Caption for it)</h3>
	      </div>
	    </div>
	    <div class="item">
	      <img src="assets/images/jumla.jpg" alt="..." width="100%" height="auto">
	      <div class="carousel-caption">
	        <h2>Jumla</h2>
	        <h3>(Caption for it)</h3>
	      </div>
	    </div>
	    <div class="item">
	      <img src="assets/images/palpa.jpeg" alt="..." width="100%" height="auto">
	      <div class="carousel-caption">
	        <h2>Palpa</h2>
	        <h3>(Caption for it)</h3>
	      </div>
	    </div>
	  </div>

	  <!-- Controls -->
	  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>
	<div><hr>
		<h2 class="page-header" align="center">
		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
		Points of Intrest
		<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
		</h2>
			<div class="col-md-3">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <div class="panel-title" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample4">
				    	<h4 align="center"><strong>Gulmi</strong></h4>
				    </div>
				  </div>
				    <div class="collapse" id="collapseExample4">
					  <div class="card card-block">
					  <img src="assets/images/lumbini.jpg" width="100%" height="auto">
					  	<li>Reshunga Lake Thaple Lake Padiko Lake Raniban Lake Dhurkot's Bichitra Cave Resunga Hill</li>
					  	<li>Maghe Sankranti Bhagawati Mandir Thaghas Vagawati Mandir Siddhababa Mandir Khadka Ghudaune Panchawali Pratha Saraya Dance 	Coffee farming Annapurna Himalayan Ranges can be seen from here Herbs 	Bird Watching Hiking </li>	
					  	<li>October to December April to February</li>
					    
					  </div>
					</div>
				  </div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <div class="panel-title" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
				    	<h4 align="center"><strong>Manang</strong></h4>
				    </div>
				  </div>
				    <div class="collapse" id="collapseExample3">
					  <div class="card card-block">
					  <img src="assets/images/palpa.jpg" width="100%" height="auto">
					    <li>Tilicho Lake, Annapurna and Gangapurna 	Gompa at Manang and Braga, Gompa at Manang and Braga,Gompa at Manang and Braga</li>
					    <li>PhotoGraphy, Trekking Gateway 	Short treks , Eco friendly adventures,hikings, Bujnee, Horse Riding</li>
					    <li>October to December,April to February</li>
					  </div>
					</div>
				  </div>
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <div class="panel-title" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
				    	<h4 align="center"><strong>Lamjung</strong></h4>
				    </div>
				  </div>
				    <div class="collapse" id="collapseExample2">
					  <div class="card card-block">
					  <img src="assets/images/baglung.jpg" width="100%" height="auto">
					    <li>Trekking route Thorang La Pass. cultural dances like Kaura, Chutka, Krishna Charitra, Sorothi, Ghaantu, Home Stay:Ghale Gaun, Pas Gaun, Bhujung</li>
					    <li>PhotoGraphy, Marshyangdi Hydro Power, Gateway to Mustang 	Short treks , Eco friendly adventures,hikings</li>
					    <li>October to December April to February</li>
					  </div>
					</div>
				  </div>				
			</div>
			<div class="col-md-3">
				<div class="panel panel-default">
				  <div class="panel-heading">
				    <div class="panel-title" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
				    	<h4 align="center"><strong>Mustang</strong></h4>
				    </div>
				  </div>
				    <div class="collapse" id="collapseExample">
					  <div class="card card-block">
					  <img src="assets/images/mustang.jpg" width="100%" height="auto">
					     <li>PhotoGraphy, Trekking Gateway 	Short treks , Eco friendly adventures,hikings, Bujnee, Horse Riding</li>
					    <li>October to December,April to February</li>
					  </div>
					</div>
				  </div>
			</div>
	</div>
	<div class="container">
	
		<div class="row ">
			<div class="col-xs-12">
				<div class="breadcrumbs">
				</div>
				<div class="well">
		<div class="row">

		<div class="col-sm-12 col-md-7 col-lg-5">
		<h1 class="jumbotron" align="center">
		Visit Nepal </h1>
		</div>
		<div class="col-sm-12 col-md-5 col-lg-7">
		<p >Welcome to Nepal and welcome to your official guide to the western Nepal city. With a full cultural agenda showcasing the very best festivals, nightlife, exhibitions &amp; events, plus practical tourist info, hotel, museum, excursion &amp; attraction listings, you won't miss a thing. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis voluptates et accusantium ratione nam praesentium culpa sit. Hic totam similique voluptatum praesentium maiores, veniam quaerat optio, consectetur, repellat, eligendi mollitia.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque quae quo eos incidunt iusto laboriosam consequuntur earum, pariatur esse possimus autem dicta suscipit sunt reiciendis neque aliquam quidem odio deleniti!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt corporis maxime, nam eligendi dolorum, repudiandae aperiam quae iure perspiciatis quis perferendis! Placeat modi ullam, aliquid rerum vel quasi alias eius!Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iusto sit natus sint exercitationem saepe debitis quis quam quaerat magnam. Assumenda enim, suscipit quia porro et quas minus debitis reiciendis sint!</p>
		</div>
			</div>
			</div>
		</div>
	</div>
	</div>
	<div class="footer" align="center"><hr>
		Copyright westernNepal <hr>
	</div>
</body>
</html>
