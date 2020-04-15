<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Materialize CSS file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/materialize/css/materialize.css">
	<!--font awesome file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/font/css/font-awesome.css">
	<!--Materialize CSS Icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Custom CSS-->
	<style>
		body{background-color: rgba(48,68,79,1);}
		.header{text-align: center;padding: 20px;}
		.form-wrapper{background-color: white;padding: 20px; border : 1px solid gray; border-radius: 10px;}
		#admin_banner{padding: 50px;}
		#username,#password{background-color: rgba(236,236,236,1); border-radius: 10px; border : 1px solid rgb(236,236,236); color: black; width: 90%; padding: 0px 10px 0px 20px;}
		#button{background-color: rgba(46,78,103);color : white; border-radius: 10px; border : 1px solid rgb(46,78,103); width:100%; padding: 10px;}
		div.checkbox input[type="checkbox"]{-webkit-appearance : checkbox;}
		h6{color:white;}
		div.header h1{font-family: "Sans Serif"; color:white; letter-spacing: 2px;}
	</style>
</head>
<body>

	<div class="container">
		<div class="header">
			<h1>ADMIN LOGIN</h1>
		</div>
	</div>
	<div id="admin_banner">
		<div class="row">
			<div class="col l4 m4 s12">
				<div class="form-wrapper">
					<?= form_open('Admin/Login');?>

					<!--Login fail info-->
					<?php if($emsg = $this->session->flashdata('errmsg')): ?> 
					<p class="red-text"> <?= $emsg;?></p>
					<?php endif; ?>
					<div>
						</i><input type="text" name="username" id="username" placeholder="Username" required />
					</div>
					<div>
						<input type="password" name="password" id="password" placeholder="password" required />
					</div>
					<br>
					<div>
						<button type="submit" id="button"><i class="fa fa-lock"></i><span style="font-size: 18px; font-weight: 700; margin-left: 5px;">Login</span></button>
					</div>
					<?= form_close();?>
				</div>
			</div>
			<div class="col l7 m7 s12 offset-l1">
					<div class="row" style="margin-top : -2%;">
						<div class="l12 m12 s12" style="color: white;">
							<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p>
						</div>
					</div>	
					<div class="row" style="margin-top: -8%;">
						<div class="col l3 m3 s3 center-align">
							<h1 style="color: rgb(23,250,231);"><i class="fa fa-users"></i></h1>
							<h6>Manage Users</h6>
						</div>
						<div class="col l3 m3 s3 center-align">
							<h1 style="color: rgb(23,250,231);"><i class="fa fa-gift"></i></h1>
							<h6>Manage Sales</h6>
						</div>
						<div class="col l3 m3 s3 center-align">
							<h1 style="color: rgb(23,250,231);"><i class="fa fa-users"></i></h1>
							<h6>Manage Sellers</h6>
						</div>
						<div class="col l3 m3 s3 center-align">
							<h1 style="color: rgb(23,250,231);"><i class="fa fa-cubes"></i></h1>
							<h6>Manage Items</h6>
						</div>
					</div>
			</div>
		</div>
	</div>

	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>
</body>
</html>