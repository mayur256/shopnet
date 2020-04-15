<!DOCTYPE html>
<html>
<head>
	<title>Shopinet | Seller</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Materialize CSS file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/materialize/css/materialize.css">
	<!--font awesome file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/font/css/font-awesome.css">
	<!--Materialize CSS Icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!--Custom CSS rules-->
	<style type="text/css">
		p{text-align: justify; font-size: 16px; font-weight: 200; line-height: 20px}
		#seller_username{width : 18%; border : 1px solid white; height: 30px; margin-left: 55%; box-shadow: none; background-color: white; padding-left: 5px; font-size: 13px}
		#seller_password{width: 18%; border: 1px solid white; height: 30px; margin-left: 2px; box-shadow: none; background-color: white; padding-left: 5px; font-size: 13px;}
		body{background-color: rgba(0,0,0,0.05);}
		#company_name{border : 1px solid silver; box-shadow: none; padding-left: 3px; border-radius: 3px; height: 35px; margin-bottom: 30px; width: 99%}
		#email{width: 48%; border : 1px solid silver; box-shadow: none; border-radius: 3px; height: 35px; margin-bottom: 30px; padding-left: 3px;}
		#password{width : 48%; border : 1px solid silver; box-shadow: none;border-radius: 3px; height: 35px; margin-bottom: 30px; margin-left: 6px; padding-left: 3px}
		#mobile_no{width: 48%; border : 1px solid silver; box-shadow: none; border-radius: 3px; height: 35px; margin-bottom: 30px; padding-left: 3px;}
		#pincode{width : 48%; border : 1px solid silver; box-shadow: none; border-radius: 3px; height: 35px; margin-bottom: 30px; margin-left: 6px; padding-left: 3px;}
		#panno{width: 48%; border : 1px solid silver; box-shadow: none; border-radius: 3px; height: 35px; margin-bottom: 30px; padding-left: 3px;}
		#gstno{width : 48%; border : 1px solid silver; box-shadow: none; border-radius: 3px; height: 35px; margin-bottom: 30px; margin-left: 6px; padding-left: 3px;}
		#hr{ margin-left: 0px; height: 1px; background-color: rgb(33,150,243); border: 1px solid rgb(33,150,243);}

		/* hide input type number arrows*/
		input[type=number]::-webkit-inner-spin-button, 
		input[type=number]::-webkit-outer-spin-button { 
    						-webkit-appearance: none;
    						-moz-appearance: none;
    						appearance: none;
    						margin: 0; 
							}

		#message { display:none;color: #000;position: relative;padding: 20px;margin-top: 10px;}
		#message p {font-size: 18px;}
		.valid {color: green;}
		.invalid{color: red;}

	</style>
</head>
<body>

	<!--apexbar section begins-->
	<nav class="blue">
		<div class="nav-wrapper">
			<a href="<?= $_SERVER['PHP_SELF']?>" class="brand-logo">&nbsp;Seller Account</a>
			<?= form_open('Seller/Login');?>
			<input type="text" name="seller_username" id="seller_username" placeholder="Username" />
			<input type="password" name="seller_password" id="seller_password" placeholder="Password" />
			<button class="btn waves-effect waves-light" id="btn_submit" type="submit" style="background : black; height: 32px; line-height: 32px; margin-top: -4px;">LOGIN</button>
			<?= form_close();?>
		</div>
	</nav>
	<!--/apexbar-->

	<!--Registration Section-->
	<div class="row">
		<div class="col l7 m8 s12" style="padding : 50px 300px 0px 50px;">
			<h5 style="font-weight: 800; font-family: 'Georgia'">Start <span class="blue-text">Selling</span> on My Online <span class="blue-text">Shop</span></h5>
			<hr id="hr">
			<p>On the Insert tab, the galleries include items that are designed to coordinate with the overall look of your document. You can use these galleries to insert tables, headers, footers, lists, cover pages, and other document building blocks. When you create pictures, charts, or diagrams, they also coordinate with your current document look.</p>
			<p>You can easily change the formatting of selected text in the document text by choosing a look for the selected text from the Quick Styles gallery on the Home tab. You can also format text directly by using the other controls on the Home tab. Most controls offer a choice of using the look from the current theme or using a format that you specify directly.</p>
			<center><button type="button" class="btn waves-effect waves-light blue" style="margin-top: 30px;">SELL ON MY SHOP</button></center>
		</div>
		<div class="col l5 m4 s12 white" style="padding : 15px;margin-top: 20px;margin-left: -50px">
			<?= form_open("Seller/CreateAccount"); ?>
			<h6 class="center-align" style="margin-bottom: 30px;font-family: 'Georgia','Arial'; font-weight: 800; font-size: 35px;">Register Now</h6>
			<input type="text" name="comp_name" id="company_name" placeholder="Company Name" required>
			<input type="email" name="email" id="email" placeholder="Email-ID" required>
			<input type="password" name="password" id="password" placeholder="Password" required>
			<input type="number" name="mob_no" id="mobile_no" placeholder="Mobile number" required>
			<input type="number" name="pincode" id="pincode" placeholder="Pincode" required>
			<input type="text" name="panno" id="panno" placeholder="Pan Number" required>
			<input type="text" name="gstno" id="gstno" placeholder="GST Number" required>
			<center><button type="submit" id="btn_create" class="btn waves-effect waves-light blue" style="margin-top: 30px;">CREATE ACCOUNT</button></center>
			<?= form_close(); ?>
			<div id="message">
  				<h6>Password must contain the following:</h6>
  				<p id="letter" class="invalid">A <b>lowercase</b> letter</p>
  				<p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
  				<p id="number" class="invalid">A <b>number</b></p>
  				<p id="length" class="invalid">Minimum <b>8 characters</b></p>
			</div>
		</div>
		
	</div>

	<div class="white center-align">
		<h1 style="font-family : 'Georgia'; padding-top : 5px;font-weight: 600; letter-spacing: 0.1px;">Buyer & Seller <span class="blue-text">Accounts</span></h1>
		<hr style="width: 57.5%; height: 5px; background-color: rgb(33,150,243); border : 1px solid rgb(33,150,243);">
		<div class="row" style="margin-top: 50px; padding-bottom: 40px;">
			<div class="col l6 m6 s12">
				<center>
					<i class="fa fa-user-circle" style="font-size: 200px"></i>
					<h4 class="blue-text">15,000 Buyers</h4>
					<h6 style="color: silver; font-weight: 500">15,000 buyer account in my Online Shop</h6>
				</center>
			</div>
			<div class="col l6 m6 s12">
				<center>
					<i class="fa fa-user-circle" style="font-size: 200px"></i>
					<h4 class="blue-text">15,000 Buyers</h4>
					<h6 style="color: silver; font-weight: 500">15,000 buyer account in my Online Shop</h6>
				</center>
			</div>
		</div>
	</div>
	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>

	<!-- Custom JQuery Code -->
	<script type="text/javascript">
		$('document').ready(function(){

			//Password Validation
			$('#password').focus(function(){
				$('#message').css("display","block");
			});
			$('#password').keyup(function(){
				var pwd = $(this).val();
				var lower = $('#letter');
				var upper = $('#capital');
				var digits = $('#number');
				var lengths = $('#length');
				var validated =  false;
				var count = 0;
				a = [0, 0, 0, 0];

				//validate lowercase letters
				var lc = /[a-z]/;
				if(pwd.match(lc))
				{
					lower.removeClass('invalid');
					lower.addClass('valid');
					a[0] = 1;
					//console.log("Contains lowercase");
				}  
				else
				{
					lower.removeClass('valid');
					lower.addClass('invalid');
					a[0] = 0;
					//console.log(" Doesn't Contains lowercase");
				}

				//validates uppercase letters
				var uc = /[A-Z]/;
				if(pwd.match(uc))
				{
					upper.removeClass('invalid');
					upper.addClass('valid');
					a[1] = 1;
					//console.log("Contains uppercase");
				}  
				else
				{
					upper.removeClass('valid');
					upper.addClass('invalid');
					a[1] = 0;
					//console.log(" Doesn't Contains uppercase");
				}

				//vaidates digits
				var  digit = /[0-9]/;
				if(pwd.match(digit))
				{
					digits.removeClass('invalid');
					digits.addClass('valid');
					a[2] = 1;
					//console.log("Contains digits");
				}  
				else
				{
					digits.removeClass('valid');
					digits.addClass('invalid');
					a[2] = 0;
					//console.log(" Doesn't Contains digits");
				}

				//validate length of password
				if(pwd.length >= 8)
				{
					lengths.removeClass('invalid');
					lengths.addClass('valid');
					a[3] = 1
				}
				else
				{
					lengths.removeClass('valid');
					lengths.addClass('invalid');
					a[3] = 0;
				}

				for(i=0; i<a.length;i++)
				{
					if(a[i]==1)
					{
						count++;
					}
				}
				if(count == 4)
				{
					validated = true;
				}
				else
				{
					validated = false;
				}

				if(validated == false){
					$('#btn_create').prop("disabled", true);
				}
				else
				{
					$('#btn_create').prop("disabled", false);
				}

			});

			$('#password').blur(function(){
				$('#message').hide();
			});

			// Mobile Number Validation
			$('#mobile_no').keyup(function(){
				var mob = $(this).val();
				if(mob.length < 10){
					$(this).attr("title", "Mobile number should be exactly 10 digits");
					$('#btn_create').prop("disabled", true);
				}
				else
				{
					$('#btn_create').prop("disabled", false);
				}
			});

			// Pincode Validation
			$('#pincode').keyup(function(){
				var pin = $(this).val();
				if(pin.length < 6){
					$(this).attr("title", "Pincode number should be exactly 6 digits");
					$('#btn_create').prop("disabled", true);
				}
				else
				{
					$('#btn_create').prop("disabled", false);
				}
			});

			//Pan validation
			$('#panno').keyup(function(){
				var regex = /^([a-zA-Z]{5})(\d{4})([a-zA-Z]{1})$/;
				var panno = $(this).val();
				if(!regex.test(panno))
				{
					$(this).attr("title", "Invalid Pan Number");
					$('#btn_create').prop("disabled", true);	
				}
				else
				{
					$(this).attr("title", "Valid Pan Number");
					$('#btn_create').prop("disabled", false);	
				}
			});

			//GST Validation
			$('#gstno').keyup(function(){
				var regex = /\d{2}[A-Z]{5}\d{4}[A-Z]{1}[A-Z\d]{1}[Z]{1}[A-Z\d]{1}/;
				var gstno = $(this).val();
				if(!regex.test(gstno))
				{
					$(this).attr("title", "Invalid Pan Number");
					$('#btn_create').prop("disabled", true);	
				}
				else
				{
					$(this).attr("title", "Valid Pan Number");
					$('#btn_create').prop("disabled", false);	
				}
			});
		});
	</script>
</body>
</html>