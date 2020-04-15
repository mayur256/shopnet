<!DOCTYPE html>
<html>
<head>
	<title>Create Listings</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Materialize CSS file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/materialize/css/materialize.css">
	<!--font awesome file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/font/css/font-awesome.css">
	<!--Materialize CSS Icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style>
		body{background: rgba(0,0,0, 0.2);}
		img{border-radius: 100%; border : 1px solid rgb(33,150,243);}
		#h6{margin-top : -1px;}
		#h6 a{color:black; font-size : 16px; font-weight : 500;}
		.row-borders{border : 2px solid gray;}
	</style>
</head>
<body>
	<div class="container" style=" margin-top : 50px;">
		<!-- Electronics Section -->
		<div class="row row-borders white">
			<div class="col l4 m6 s12">
				<h5 style="padding: 4px; font-family: 'Times New Roman'">Electronic Product Category</h5>
			</div>
			<div class="col l8 m6 s12">
			</div>
		</div>
		<div class="row row-borders white" style="margin-top: -10px; padding : 5px;">
			<div class="col l2 m4 s12 center-align" >
				<img src="<?= base_url('assets/images/menu-images/1.png'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="<?= base_url('index.php/Seller/MobileUpload');?>">Mobiles</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/electronics/1.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="<?= base_url('index.php/Seller/MobAccessoriesUpload');?>">Mobile Accessories</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/electronics/2.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Laptops</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/electronics/3.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Tablets</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/electronics/4.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Computers</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/electronics/5.png'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Computer Accessories</a></h6>
			</div>
		</div>
		<br> <br>

		<!--Men's Fashion-->
		<div class="row row-borders white">
			<div class="col l4 m6 s12">
				<h5 style="padding: 4px; font-family: 'Times New Roman'">Men's Fashion</h5>
			</div>
			<div class="col l8 m6 s12">
			</div>
		</div>
		<div class="row row-borders white" style="margin-top: -10px; padding : 5px;">
			<div class="col l2 m4 s12 center-align" >
				<img src="<?= base_url('assets/images/men/1.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Footwears</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/men/2.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Topwears</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/men/3.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Bottom wears</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/men/4.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Watches</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/men/5.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Men Accessories</a></h6>
			</div>
		</div>
		<br><br>

		<!--Women Fashion Category-->
		<div class="row row-borders white">
			<div class="col l4 m6 s12">
				<h5 style="padding: 4px; font-family: 'Times New Roman'">Women's Fashion</h5>
			</div>
			<div class="col l8 m6 s12">
			</div>
		</div>
		<div class="row row-borders white" style="margin-top: -10px; padding : 5px;">
			<div class="col l2 m4 s12 center-align" >
				<img src="<?= base_url('assets/images/women/1.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Ethnic Wears</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/women/2.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Topwears</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/women/3.png'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Beauty Products</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/women/4.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Jewelery</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/women/5.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Women Accessories</a></h6>
			</div>
		</div>
		<br><br>


		<!--Home and Furniture Section-->
		<div class="row row-borders white">
			<div class="col l4 m6 s12">
				<h5 style="padding: 4px; font-family: 'Times New Roman'">Home and Furniture</h5>
			</div>
			<div class="col l8 m6 s12">
			</div>
		</div>
		<div class="row row-borders white" style="margin-top: -10px; padding : 5px;">
			<div class="col l2 m4 s12 center-align" >
				<img src="<?= base_url('assets/images/home decor/1.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Kitchen Storage</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/home decor/2.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Furniture</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/home decor/3.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Home Decor</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/home decor/4.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Lighting</a></h6>
			</div>
		</div>
		<br><br>

		<!--Sports and Stationary-->
		<div class="row row-borders white">
			<div class="col l4 m6 s12">
				<h5 style="padding: 4px; font-family: 'Times New Roman'">Sports and Stationary</h5>
			</div>
			<div class="col l8 m6 s12">
			</div>
		</div>
		<div class="row row-borders white" style="margin-top: -10px; padding : 5px;">
			<div class="col l2 m4 s12 center-align" >
				<img src="<?= base_url('assets/images/sports/1.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Books</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/sports/2.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Stationary</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/sports/3.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Gaming</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/sports/4.png'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Sports</a></h6>
			</div>
			<div class="col l2 m4 s12 center-align">
				<img src="<?= base_url('assets/images/sports/5.jpg'); ?>" class="responsive-img" style="width: 100px; height:100px;">
				<h6 id="h6"><a href="#">Fitness</a></h6>
			</div>
		</div>
	</div>


	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>
</body>
</html>