<!DOCTYPE html>
<html>
<head>
	<title>Seller Contact Update</title>
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
		body{background-color: rgba(0,0,0, 0.05);}
		#contact-wrapper{background-color: rgba(0,102,102,0.8); padding: 20px; border-radius: 5px;}
		#contact-elements input{background-color: white; padding: 5px 20px 5px 20px; width: 90%; border-radius: 5px;}
		#contact-elements textarea{background-color: white;border-radius: 5px;padding: 15px 20px 15px 20px;}
		#contact-elements select{display: block; border-radius: 5px;}
		#contact-elements button{background-color: rgba(48,47,47,1); font-size: 1.1rem; margin-left : 25%;width : 50%;}
		#contact-header{padding: 10px; text-align: center;}
		#contact-header h6{font-size : 25px; font-weight : 600;}
		#contact-header p{ font-weight : 600;}
	</style>
</head>
<body>
	<div class="row" style="margin-top: 5%;">
		<div class="col l4 m4 s12"></div>
		<div class="col l4 m4 s12">
			<!--Contact Form Section-->
			<div id="contact-wrapper" class="white-text">
				<div id="contact-header">
					<h6>Seller Contact Information</h6>
					<p>Fill this form & Complete your Profile Information</p>
				</div>
				<div id="contact-elements">
					<?= form_open('Seller/InsertSellerContact');?>
					<input type="text" name="s_fname" id="sfname" placeholder="First Name" /><br /><br />
					<input type="text" name="s_lname" id="lfname" placeholder="Last Name" />
					<br /><br />
					<textarea class="materialize-textarea" name="s_addr" placeholder="Seller's Address..." style="height:100px;"></textarea>
					<br /><br />
					<select name="city">
						<option disabled selected>Select Your City</option>
						<option>Ahmedabad</option>
						<option>Ajmer</option>
						<option>Bharuch</option>
						<option>Bhopal</option>
						<option>Bangalore</option>
						<option>Chennai</option>
						<option>Daman</option>
						<option>Gandhinagar</option>
						<option>Gwalior</option>
						<option>Hyderabad</option>
						<option>Mumbai</option>
						<option>Nashik</option>
						<option>Surat</option>
						<option>Valsad</option>
						<option>Vapi</option>
					</select>
					<br /><br />
					<button type="submit" class="btn waves-effect waves-light">UPDATE CONTACT</button>
					<?= form_close();?>
				</div>
			</div>
		</div>
		<div class="col l4 m4 s12"></div>
	</div>


	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>
</body>
</html>