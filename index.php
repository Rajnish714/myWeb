<?php
require("navbar.php");
$products="SELECT * FROM products";
$run_pro=mysqli_query($con,$products);
?>
<!doctype html>

<head>
<link rel="stylesheet" href="css/index.css">
</head>

<body>
	<!--------------------------------------navbar----------------------------------------------------------->
	

	<!--------------------------------------uper slide container--------------------------------------------->

	<div class="container-fluid" id="side">
		<div class="carousel slide" data-ride="carousel" id="slider">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/1.jpg" alt="p1.jpg">
				</div>
				<div class="carousel-item">
					<img src="images/2.jpg" alt="p2.jpg">
				</div>
				<div class="carousel-item">
					<img src="images/3.jpg" alt="p3.jpg">
				</div>
			</div>
			<ul class="carousel-indicators">
				<li data-target="#slider" data-slide-to="0" class="active"></li>
				<li data-target="#slider" data-slide-to="1"></li>
				<li data-target="#slider" data-slide-to="2"></li>
			</ul>
			<a href="#slider" data-slide="prev" class="carousel-control-prev">
				<span class="carousel-control-prev-icon"></span>
			</a>
			<a href="#slider" data-slide="next" class="carousel-control-next">
				<span class="carousel-control-next-icon"></span>
			</a>

		</div>
	</div>
	<!--------------------------------------bottom item container--------------------------------------------->
	<?php
	
	?>

	<!--<div class="container-fluid">
		<div class="row col-lg-12">

			<div class="col-lg-2" id="items"> item</div>
			<div class="col-lg-2" id="items">item</div>
			<div class="col-lg-2" id="items">item</div>
			<div class="col-lg-2" id="items"> item</div>
			<div class="col-lg-2" id="items">item</div>
			<div class="col-lg-2" id="items">item</div>
	
		
		
		</div>
	
	</div>-->

	<!--------------------------------------body end --------------------------------------------->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>