<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pets Adoption</title>
	<!-- Bootstrap --> 
	<link href="css/bootstrap.min.css" rel="stylesheet"> 
	<link href="css/style.css" rel="stylesheet"> 
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container" >	
	<div class="row">
	<header class="col-sm-12 col-md-12 col-lg-12">
		
	</header>
	</div>

	<div class="row">
	<nav class="col-sm-12 col-md-12 col-lg-12">
		<?php 
		include_once('pages/menu.php'); 
		include_once('pages/functions.php'); 
		?>
	</nav>
	</div>

	<div class="row">
	<section class="col-sm-12 col-md-12 col-lg-12">
		<?php
			if(isset($_GET['page']))
			{
				$page=$_GET['page'];
				if($page == 1)include_once('pages/home.php');
				if($page == 2)include_once('pages/login.php');
				if($page == 3)include_once('pages/gallery.php');
				if($page == 4)include_once('pages/registration.php');
			}
		?>
	</section>
	</div>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>