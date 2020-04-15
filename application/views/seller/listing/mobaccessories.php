<!DOCTYPE html>
<html>
<head>
	<title>Mobile Accessories Upload</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Materialize CSS file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/materialize/css/materialize.css">
	<!--font awesome file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/font/css/font-awesome.css">
	<!--Materialize CSS Icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Custom CSS-->
	<style type="text/css">
		img{max-width:100%;height:100%;object-fit: contain; margin:auto;display: block}
		body{background-color: rgba(133,212,207,1);}
		#header{font-family : "Times New Roman";padding: 5px 0px 5px 0px}
		label{font-size: 20px;color:white;font-family: Robota;}
		#prod_title,#model_name,#discount_offer,#ship_charge,#prod_price,#output_port,#compatible_mob,#sg_comptmob,#usb_port,#comp_name,#mch_comptmob{background-color: white;width:75%;display: block;padding: 0 5px 0 5px;}
		#save_listing{background-color: #00a8ff;margin:0 0 0 43%;}
		#accessory_type,#duration_format,#ret_policy,#headphone_type,#connection_type,#microphone,#company_name,#battery_capacity,#battery_type,#cable,#sg_feature,#ch_brand,#mc_brand, #mc_type,#mc_capacity, #mc_warranty,#pb_warranty,#prod_color,#hp_warranty,#mobch_warranty{display: block;background: none;width:78%;background:black;color:white;border:1px solid black;box-shadow: none; font-size: 18px; font-family: Robota}
		#powerbank_image_upload,#memorycard_image_upload,#sg_image_upload,#hp_image_upload,#mobch_image_upload{width:1300px;}
		#img1,#img2,#img3,#img4,#mcimg1,#mcimg2,#mcimg3,#mcimg4,#sgimg1,#sgimg2,#sgimg3,#sgimg4,#hpimg1,#hpimg2,#hpimg3,#hpimg4,#mobchimg1,#mobchimg2,#mobchimg3,#mobchimg4{border:1px solid #1980c5; padding: 10px; margin:0 0 10px 0;}
		#divimg1,#divimg2,#divimg3,#divimg4,#mcdivimg1,#mcdivimg2,#mcdivimg3,#mcdivimg4,#sgdivimg1,#sgdivimg2,#sgdivimg3,#sgdivimg4,#hpdivimg1,#hpdivimg2,#hpdivimg3,#hpdivimg4,#mobchdivimg1,#mobchdivimg2,#mobchdivimg3,#mobchdivimg4{display:inline-block;width: 200px; height:200px; border:1px solid gray;margin:0 0 0 20px;}
		#upload_img_btn,#mcupload_img_btn,#sgupload_img_btn,#hpupload_img_btn,#mobchupload_img_btn{background: #00a8ff;margin:0 43%;}
		.success{display: none;}
	</style>
</head>
<body>

	<!--Accessories Header-->
	<div class="container white-text">
		<h4 id="header">Mobile Accessories Upload</h4>
		<hr style="height:2px;background-color: white;border:1px solid white;margin-top:-1%;width:100%;">
	</div>
	<!--Product Title Section-->
	<div class="container white-text" style="background: #279c95">
		<div class="row" style="background: #279c95;padding: 10px">
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="prod_title">Product Title</label>
				<input type="text" name="prod_title" id="prod_title">
			</div>
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="model_name">Model Name</label>
				<input type="text" name="model_name" id="model_name">
			</div>
		</div>
		<div class="row" style="background: #279c95;padding: 10px">
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="prod_color">Product Color</label>
				<select name="prod_color" id="prod_color">
					<option value="0">Select Color</option>
					<option value="1">White</option>
					<option value="2">Black</option>
					<option value="3">Blue</option>
				</select>
			</div>
		</div>
	</div>

	<!--Accessory Type Section-->
	<div class="container white-text" style="background: #279c95">
		<div class="row" style="background: #279c95;padding: 10px">
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="prod_title">Accessory Type</label>
				<select name="accessory_type" id="accessory_type">
					<option value="0" disabled selected>Select Accessory Type</option>
					<option value="1">Power Banks</option>
					<option value="2">Memory Cards</option>
					<option value="3">Screen Guards</option>
					<option value="4">HeadPhones</option>
					<option value="5">Chargers</option>
				</select>
			</div>
		</div>

		<!--HeadPhone Section -->
		<div id="headphones">
			<div class="row" style="background: #279c95;padding: 10px">
				<h5 style="padding-left: 35px;font-family:'Cooper';text-decoration: underline">Headphones</h5>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="headphone_type">Headphone Type</label>
					<select name="headphone_type" id="headphone_type">
						<option value="0" selected disabled>Select Headphone Type</option>
						<option value="1">Over-the-Ear</option>
						<option value="2">In-the-Ear</option>
					</select>
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="connection_type">Connection Type</label>
					<select name="connection_type" id="connection_type">
						<option value="0" selected disabled>Connectivity Type</option>
						<option value="1">Wired</option>
						<option value="2">Wireless</option>
					</select>
				</div>
			</div>
			<div class="row" style="background: #279c95;padding: 10px">
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="microphone">Micorphone</label>
					<select name="microphone" id="microphone">
						<option value="0" selected disabled>Microphone</option>
						<option value="1">Yes</option>
						<option value="2">No</option>
					</select>
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="hp_warranty">Warranty Period</label>
					<select name="hp_warranty" id="hp_warranty">
						<option value="0" selected disabled>Select Warranty</option>
						<option value="1">6 Months</option>
						<option value="2">1 Year</option>
					</select>
				</div>
			</div>
		</div>


		<!--Power Bank Section-->
		<div id="power_bank">
			<div class="row" style="background: #279c95;padding: 10px">
				<h5 style="padding-left: 35px;font-family:'Cooper';text-decoration: underline">Power Bank</h5>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="company_name">Company Name</label>
					<select name="company_name" id="company_name">
						<option value="0" selected disabled>Select Power Bank Brand</option>
						<option value="1">Mi</option>
						<option value="2">Philips</option>
						<option value="3">Syska</option>
						<option value="4">Sony</option>
					</select>
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="battery_capacity">Battery Capapcity</label>
					<select name="battery_capacity" id="battery_capacity">
						<option value="0" selected disabled>Battery Capacity</option>
						<option value="1">0 - 4999 mAh</option>
						<option value="2">5000 - 9999 mAh</option>
						<option value="3">10000 - 12999 mAh</option>
					</select>
				</div>
			</div>
			<div class="row" style="background: #279c95;padding: 10px">
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="battery_type">Battery Type</label>
					<select name="battery_type" id="battery_type">
						<option value="0" selected disabled>Select Battery Type</option>
						<option value="1">Lithium Polymer</option>
						<option value="2">Alakaline</option>
						<option value="3">Lithium-ion</option>
					</select>
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="pb_warranty">Warranty Period</label>
					<select name="pb_warranty" id="pb_warranty">
						<option value="0" selected disabled>Select Warranty</option>
						<option value="1">6 Months</option>
						<option value="2">1 Year</option>
					</select>
				</div>
			</div>
			<div class="row" style="background: #279c95;padding: 10px">
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="output_port">Number of Output Port</label>
					<input type="number" name="output_port" id="output_port" />
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="cable">Cable Included</label>
					<select name="cable" id="cable">
						<option value="0" selected disabled>Cable Inclusion ?</option>
						<option value="1">Yes</option>
						<option value="2">No</option>
					</select>
				</div>
			</div>
		</div>


		<!--Screen Guard Section-->
		<div id="screen_guard">
			<div class="row" style="background: #279c95;padding: 10px">
				<h5 style="padding-left: 35px;font-family:'Cooper';text-decoration: underline">Screen Guard</h5>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="compatible_mob">Compatible Mobile</label>
					<input type="text" name="compatible_mob" id="compatible_mob">
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="sg_feature">Add on Features</label>
					<select name="sg_feature" id="sg_feature">
						<option value="0" selected disabled>Select Features</option>
						<option value="1">Scratch Resistant</option>
						<option value="2">Anti Glare</option>
						<option value="3">Anti Fingerprint</option>
					</select>
				</div>
			</div>
			
		</div>



		<!--Mobile Charger Section-->
		<div id="charger">
			<div class="row" style="background: #279c95;padding: 10px">
				<h5 style="padding-left: 35px;font-family:'Cooper';text-decoration: underline">Mobile Charger</h5>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="ch_brand">Brand Name</label>
					<select name="ch_brand" id="ch_brand">
						<option value="0" selected disabled>Select Brand</option>
						<option value="1">Apple</option>
						<option value="2">Asus</option>
						<option value="3">Mi</option>
						<option value="4">Sony</option>
						<option value="5">Samsung</option>
						<option value="6">Oppo</option>
						<option value="7">Vivo</option>
					</select>
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="usb_port">Number of USB Port</label>
					<input type="number" name="usb_port" id="usb_port" />
				</div>
			</div>
			<div class="row" style="background: #279c95;padding: 10px">
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="mch_comptmob">Compatible Mobile</label>
					<input type="text" name="mch_comptmob" id="mch_comptmob">
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="mobch_warranty">Warranty Period</label>
					<select name="mobch_warranty" id="mobch_warranty">
						<option value="0" selected disabled>Select Mobile Charger Warranty</option>
						<option value="1">6 Months</option>
						<option value="2">1 Year</option>
					</select>
				</div>
			</div>
		</div>


		<!--Memory Card Section-->
		<div id="memory_card">
			<div class="row" style="background: #279c95;padding: 10px">
				<h5 style="padding-left: 35px;font-family:'Cooper';text-decoration: underline">Memory Card</h5>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="mc_brand">Brand Name</label>
					<select name="mc_brand" id="mc_brand">
						<option value="0" selected disabled>Select Brand</option>
						<option value="1">SanDisk</option>
						<option value="2">Samsung</option>
						<option value="3">Sony</option>
						<option value="4">HP</option>
					</select>
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="mc_type">Card Type</label>
					<select name="mc_type" id="mc_type">
						<option value="0" selected disabled>Select Card Type</option>
						<option value="1">Micro SD</option>
						<option value="2">SDHC</option>
						<option value="3">SDXC</option>
						<option value="4">Compact Flash</option>
					</select>
				</div>
			</div>
			<div class="row" style="background: #279c95;padding: 10px">
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="mc_capacity">Capacity</label>
					<select name="mc_capacity" id="mc_capacity">
						<option value="0" selected disabled>Select Capacity</option>
						<option value="1">8 GB</option>
						<option value="2">16 GB</option>
						<option value="3">32 GB</option>
						<option value="4">64 GB</option>
					</select>
				</div>
				<div class="col l6 m6 s6" style="padding-left:4%;">
					<label for="mc_warranty">Warranty</label>
					<select name="mc_warranty" id="mc_warranty">
						<option value="0" selected disabled>Select Warranty Period</option>
						<option value="1">6 Months</option>
						<option value="2">1 Year</option>
					</select>
				</div>
			</div>
		</div>


	</div>




	<!--Listing Section -->
	<div class="container white-text" style="background: #279c95;padding: 30px 0 10px 0">
		<h5 style="margin-left:38px;">Listing Details</h5>
		<div class="row">
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="duration_format">Listing Duration Format</label>
				<select name="duration_format" id="duration_format">
					<option value="0" selected disabled>Select Duration Format</option>
					<option value="1">7 Days</option>
					<option value="2">10 Days</option>
					<option value="3">30 Days</option>
				</select>
			</div>
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="discount_offer">Discount Offer(%)</label>
				<input type="number" name="discount_offer" id="discount_offer">
			</div>
		</div>
		<div class="row">
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="ret_policy">Return Policy</label>
				<select name="ret_policy" id="ret_policy">
					<option value="0" selected disabled>Select Return Policy</option>
					<option value="1">10 Days</option>
					<option value="2">15 Days</option>
					<option value="3">30 Days</option>
				</select>
			</div>
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="ship_charge">Shipping Charge</label>
				<input type="number" name="ship_charge" id="ship_charge">
			</div>
		</div>
		<div class="row">
			<div class="col l6 m6 s6" style="padding-left:4%;">
				<label for="prod_price">Product Price</label>
				<input type="number" name="prod_price" id="prod_price">
			</div>
		</div>
	</div>

	<!--Listing fee section-->
	<div class="container" style="background: #279c95;margin-top:1.2%;">
		<div class="row" style="background: #279c95;padding: 10px">
			<div col 12 m12 s12>
				<h5 style="color:white;margin-left: 2.5%;">The listing fee is : <span class="fa fa-inr">&nbsp;</span><span id="listing_fee"></span></h5>
				<input type="hidden" name="listingfee" id="listingfee"/>
			</div>
		</div>
	</div>
	<!--Save Button Section-->
	<div class="container" style="background: #279c95;margin-top:1.2%;">
		<div class="row" style="background: #279c95;padding: 10px">
			<div col 12 m12 s12>
				<button type="button" id="save_listing" class="btn waves-effects waves-light">save listing</button>
			</div>
		</div>
	</div>



	<!--Power Bank Image Upload Modal-->
	<div class="modal" id="powerbank_image_upload">
		<div class="modal-content">
			<h6>Power Bank Image Upload<span id="pb_modal_close" class="modal-close right">X</span></h6>
			<div>
				<p>Product Id : <span id="product_id"></span></p>
			</div>
			<form method="post" id="image_upload_form" enctype="multipart/form-data">
				<input type="hidden" name="pb_id" id="pb_id">
			<div class="row">
				<div class="col l3 m3 s12">
					<div>
						<input type="file" name="img1" id="img1" />
					</div>
					<div>
						<input type="file" name="img2" id="img2" />
					</div>
					<div>
						<input type="file" name="img3" id="img3" />
					</div>
					<div>
						<input type="file" name="img4" id="img4" />
					</div>
				</div>
				<div class="col l9 m9 s12" id="show_imgs">
					<div id="divimg1"></div>
					<div id="divimg2"></div>
					<div id="divimg3"></div>
					<div id="divimg4"></div>
				</div>
			</div>
			<div id="upload_btn_div">
				<button type="submit" class="btn waves-effects waves-light" id="upload_img_btn">upload and save</button>
			</div>
			</form>
			<div class="success">
				<h6>Listing Successfull</h6>
				<h4 style="color:green">SUCCESS! <span class="fa fa-check right"></span></h4><br/>
				<a href="<?= base_url('index.php/Seller/MobAccessoriesUpload'); ?>" class="btn waves-effects waves-light">Create New Listing</a>
				<a href="<?= base_url('index.php/Seller/Dashboard'); ?>" class="btn waves-effects waves-light right">Dashboard</a>
			</div>
		</div>
	</div>


	<!--Memory Card Image Upload Modal-->
	<div class="modal" id="memorycard_image_upload">
		<div class="modal-content">
			<h6>Memory Card Image Upload<span id="mc_modal_close" class="modal-close right">X</span></h6>
			<div>
				<p>Product Id : <span id="mcid"></span></p>
			</div>
			<form method="post" id="mc_image_upload_form" enctype="multipart/form-data">
				<input type="hidden" name="mc_id" id="mc_id">
			<div class="row">
				<div class="col l3 m3 s12">
					<div>
						<input type="file" name="mcimg1" id="mcimg1" />
					</div>
					<div>
						<input type="file" name="mcimg2" id="mcimg2" />
					</div>
					<div>
						<input type="file" name="mcimg3" id="mcimg3" />
					</div>
					<div>
						<input type="file" name="mcimg4" id="mcimg4" />
					</div>
				</div>
				<div class="col l9 m9 s12" id="show_mcimgs">
					<div id="mcdivimg1"></div>
					<div id="mcdivimg2"></div>
					<div id="mcdivimg3"></div>
					<div id="mcdivimg4"></div>
				</div>
			</div>
			<div id="mc_upload_btn_div">
				<button type="submit" class="btn waves-effects waves-light" id="mcupload_img_btn">upload and save</button>
			</div>
			</form>
			<div class="success">
				<h6>Listing Successfull</h6>
				<h4 style="color:green">SUCCESS! <span class="fa fa-check right"></span></h4><br/>
				<a href="<?= base_url('index.php/Seller/MobAccessoriesUpload'); ?>" class="btn waves-effects waves-light">Create New Listing</a>
				<a href="<?= base_url('index.php/Seller/Dashboard'); ?>" class="btn waves-effects waves-light right">Dashboard</a>
			</div>
		</div>
	</div>

	<!--Screen GuardImage Upload Modal-->
	<div class="modal" id="sg_image_upload">
		<div class="modal-content">
			<h6>Screen Guard Image Upload<span id="sg_modal_close" class="modal-close right">X</span></h6>
			<div>
				<p>Product Id : <span id="sgid"></span></p>
			</div>
			<form method="post" id="sg_image_upload_form" enctype="multipart/form-data">
				<input type="hidden" name="sg_id" id="sg_id">
			<div class="row">
				<div class="col l3 m3 s12">
					<div>
						<input type="file" name="sgimg1" id="sgimg1" />
					</div>
					<div>
						<input type="file" name="sgimg2" id="sgimg2" />
					</div>
					<div>
						<input type="file" name="sgimg3" id="sgimg3" />
					</div>
					<div>
						<input type="file" name="sgimg4" id="sgimg4" />
					</div>
				</div>
				<div class="col l9 m9 s12" id="show_sgimgs">
					<div id="sgdivimg1"></div>
					<div id="sgdivimg2"></div>
					<div id="sgdivimg3"></div>
					<div id="sgdivimg4"></div>
				</div>
			</div>
			<div id="sg_upload_btn_div">
				<button type="submit" class="btn waves-effects waves-light" id="sgupload_img_btn">upload and save</button>
			</div>
			</form>
			<div class="success">
				<h6>Listing Successfull</h6>
				<h4 style="color:green">SUCCESS! <span class="fa fa-check right"></span></h4><br/>
				<a href="<?= base_url('index.php/Seller/MobAccessoriesUpload'); ?>" class="btn waves-effects waves-light">Create New Listing</a>
				<a href="<?= base_url('index.php/Seller/Dashboard'); ?>" class="btn waves-effects waves-light right">Dashboard</a>
			</div>
		</div>
	</div>

	<!--Headphones Image Upload Modal-->
	<div class="modal" id="hp_image_upload">
		<div class="modal-content">
			<h6>Headphone Image Upload<span id="hp_modal_close" class="modal-close right">X</span></h6>
			<div>
				<p>Product Id : <span id="hpid"></span></p>
			</div>
			<form method="post" id="hp_image_upload_form" enctype="multipart/form-data">
				<input type="hidden" name="hp_id" id="hp_id">
			<div class="row">
				<div class="col l3 m3 s12">
					<div>
						<input type="file" name="hpimg1" id="hpimg1" />
					</div>
					<div>
						<input type="file" name="hpimg2" id="hpimg2" />
					</div>
					<div>
						<input type="file" name="hpimg3" id="hpimg3" />
					</div>
					<div>
						<input type="file" name="hpimg4" id="hpimg4" />
					</div>
				</div>
				<div class="col l9 m9 s12" id="show_hpimgs">
					<div id="hpdivimg1"></div>
					<div id="hpdivimg2"></div>
					<div id="hpdivimg3"></div>
					<div id="hpdivimg4"></div>
				</div>
			</div>
			<div id="hp_upload_btn_div">
				<button type="submit" class="btn waves-effects waves-light" id="hpupload_img_btn">upload and save</button>
			</div>
			</form>
			<div class="success">
				<h6>Listing Successfull</h6>
				<h4 style="color:green">SUCCESS! <span class="fa fa-check right"></span></h4><br/>
				<a href="<?= base_url('index.php/Seller/MobAccessoriesUpload'); ?>" class="btn waves-effects waves-light">Create New Listing</a>
				<a href="<?= base_url('index.php/Seller/Dashboard'); ?>" class="btn waves-effects waves-light right">Dashboard</a>
			</div>
		</div>
	</div>

	<!--Mobile charger Image Upload Modal-->
	<div class="modal" id="mobch_image_upload">
		<div class="modal-content">
			<h6>Mobile Charger Image Upload<span id="mobch_modal_close" class="modal-close right">X</span></h6>
			<div>
				<p>Product Id : <span id="mobchid"></span></p>
			</div>
			<form method="post" id="mobch_image_upload_form" enctype="multipart/form-data">
				<input type="hidden" name="mobch_id" id="mobch_id">
			<div class="row">
				<div class="col l3 m3 s12">
					<div>
						<input type="file" name="mobchimg1" id="mobchimg1" />
					</div>
					<div>
						<input type="file" name="mobchimg2" id="mobchimg2" />
					</div>
					<div>
						<input type="file" name="mobchimg3" id="mobchimg3" />
					</div>
					<div>
						<input type="file" name="mobchimg4" id="mobchimg4" />
					</div>
				</div>
				<div class="col l9 m9 s12" id="show_mobchimgs">
					<div id="mobchdivimg1"></div>
					<div id="mobchdivimg2"></div>
					<div id="mobchdivimg3"></div>
					<div id="mobchdivimg4"></div>
				</div>
			</div>
			<div id="mobch_upload_btn_div">
				<button type="submit" class="btn waves-effects waves-light" id="mobchupload_img_btn">upload and save</button>
			</div>
			</form>
			<div class="success">
				<h6>Listing Successfull</h6>
				<h4 style="color:green">SUCCESS! <span class="fa fa-check right"></span></h4><br/>
				<a href="<?= base_url('index.php/Seller/MobAccessoriesUpload'); ?>" class="btn waves-effects waves-light">Create New Listing</a>
				<a href="<?= base_url('index.php/Seller/Dashboard'); ?>" class="btn waves-effects waves-light right">Dashboard</a>
			</div>
		</div>
	</div>
	

	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--JQuery Ajax-->
	<script type="text/javascript" src="<?= base_url('assets/ajax/ajax.js'); ?>"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>


	<!--Custom JS-->
	<script type="text/javascript">
		$('document').ready(function(){
			
			//Hide Accessory type sections
			$('#headphones').hide();
			$('#power_bank').hide();
			$('#screen_guard').hide();
			$('#charger').hide();
			$('#memory_card').hide();

			//On Change event 
			$('#accessory_type').on('change',function(){
				var access_type = $(this).val();
				if(access_type == '1')  //Power Banks
				{
					$('#headphones').fadeOut();
					$('#screen_guard').fadeOut();
					$('#charger').fadeOut();
					$('#memory_card').fadeOut();
					$('#power_bank').fadeIn(800);
				}
				else if(access_type == '2')  //Memory Card
				{
					$('#power_bank').fadeOut();
					$('#headphones').fadeOut();
					$('#charger').fadeOut();
					$('#screen_guard').fadeOut();
					$('#memory_card').fadeIn(800);
				}
				else if(access_type == '3')  //Screen Guards
				{
					$('#power_bank').fadeOut();
					$('#memory_card').fadeOut();
					$('#headphones').fadeOut();
					$('#charger').fadeOut();
					$('#screen_guard').fadeIn(800);
				}
				else if(access_type == '4')  //Headphones
				{
					$('#power_bank').fadeOut();
					$('#memory_card').fadeOut();
					$('#charger').fadeOut();
					$('#screen_guard').fadeOut();
					$('#headphones').fadeIn(800);	
				}
				else if(access_type == '5')  //Chargers
				{
					$('#power_bank').fadeOut();
					$('#headphones').fadeOut();
					$('#memory_card').fadeOut();
					$('#screen_guard').fadeOut();
					$('#charger').fadeIn(800);	
				}
				else
				{
					console.log('Invalid accessory type selection');
				}

			});


				//Validation Script begins here
				$('#save_listing').click(function(){
					var prod_title = $('#prod_title');
					var model_name = $('#model_name');
					var prod_color = $('#prod_color');
					var listing_dur = $('#duration_format');
					var discount = $('#discount_offer');
					var ret_policy = $('#ret_policy');
					var ship_charge = $('#ship_charge');
					var prod_price = $('#prod_price');
					var accessory_type = $('#accessory_type');
					var listingfee = $('#listingfee').val();
					if(prod_title.val() == '')
					{
						M.toast({html : 'Please Specify Product Title'});
						prod_title.css("border","2px solid red");
						prod_title.focus();
					}
					else if(model_name.val() == '')
					{
						M.toast({html : 'Please Specify Model Name'});
						model_name.css("border","2px solid red");
						model_name.focus();
					}
					else if(prod_color.val() == null)
					{
						M.toast({html : 'Please Specify Product Color'});
						prod_color.css("border","2px solid red");
						prod_color.focus();
					}
					else if(accessory_type.val() == null)
					{
						M.toast({html : 'Please Specify Accessory Type'});
						model_name.css("border","2px solid red");
						model_name.focus();
					}
					else if(listing_dur.val() == null)
					{
						M.toast({html : 'Please Specify Listing Duration Format'});
						listing_dur.css("border","2px solid red");
						listing_dur.focus();
					}
					else if(discount.val() == '')
					{
						M.toast({html : 'Please Specify Discount'});
						discount.css("border","2px solid red");
						discount.focus();
					}
					else if(ret_policy.val() == null)
					{
						M.toast({html : 'Please Specify Return Policy'});
						ret_policy.css("border","2px solid red");
						ret_policy.focus();
					}
					else if(ship_charge.val() == '')
					{
						M.toast({html : 'Please Specify Shipping Charge'});
						ship_charge.css("border","2px solid red");
						ship_charge.focus();
					}
					else if(prod_price.val() == '')
					{
						M.toast({html : 'Please Specify Product Price'});
						prod_price.css("border","2px solid red");
						prod_price.focus();
					}
					else if(accessory_type.val() == '1')
					{
						var company_name = $('#company_name');
						var battery_capacity = $('#battery_capacity');
						var battery_type = $('#battery_type');
						var pb_warnty = $('#pb_warranty'); 
						var output_port = $('#output_port');
						var cable = $('#cable');
						if(company_name.val() == null)
						{
							M.toast({html : 'Please Specify Power Bank Company Name.'});
							company_name.css("border","2px solid red");
							company_name.focus();
						}
						else if(battery_capacity.val() == null)
						{
							M.toast({html : 'Please Specify Battery Capacity.'});
							battery_capacity.css("border","2px solid red");
							battery_capacity.focus();
						}
						else if(battery_type.val() == null)
						{
							M.toast({html : 'Please Specify Battery Type.'});
							battery_type.css("border","2px solid red");
							battery_type.focus();
						}
						else if(pb_warnty.val() == null)
						{
							M.toast({html : 'Please Specify Warranty Period.'});
							pb_warnty.css("border","2px solid red");
							pb_warnty.focus();
						}
						else if(output_port.val() == null)
						{
							M.toast({html : 'Please Specify Number of output ports.'});
							output_port.css("border","2px solid red");
							output_port.focus();
						}
						else if(cable.val() == null)
						{
							M.toast({html : 'Please Specify Power Bank Cable.'});
							cable.css("border","2px solid red");
							cable.focus();
						}
						else
						{
							$.ajax({
								type : "ajax",
								method : "POST",
								url : "PowerBankDetailInsert",
								data : {prod_title:prod_title.val(), model_name:model_name.val(), prod_color:prod_color.val(),brand_nm:company_name.val(), battery_capacity:battery_capacity.val(), battery_type:battery_type.val(), pb_warnty:pb_warnty.val(), output_port:output_port.val(), cable:cable.val(), listing_dur : listing_dur.val(), discount:discount.val(), ret_policy:ret_policy.val(), ship_charge:ship_charge.val(),prod_price:prod_price.val(),listingfee:listingfee},
								success : function(data){
										$('#pb_id').val(data)
										$('#product_id').text(data);
										$('.modal').modal({dismissible:false});
										$('#powerbank_image_upload').modal('open');
										console.log('Power Banks details successfully inserted!');
								},
								error : function(){
									console.log('Ajax Request Error : ');
								}
							});
						}
					}
					else if(accessory_type.val() == '2')
					{
						var mc_brand = $('#mc_brand');
						var mc_type = $('#mc_type');
						var mc_capacity = $('#mc_capacity');
						var mc_warranty = $('#mc_warranty');
						if(mc_brand.val() == null)
						{
							M.toast({html : 'Please Specify Brand Name.'});
							mc_brand.css("border","2px solid red");
							mc_brand.focus();	
						}
						else if(mc_type.val() == null)
						{
							M.toast({html : 'Please Specify Memory Card Type.'});
							mc_type.css("border","2px solid red");
							mc_type.focus();	
						}
						else if(mc_capacity.val() == null)
						{
							M.toast({html : 'Please Specify Memory Capacity.'});
							mc_capacity.css("border","2px solid red");
							mc_capacity.focus();	
						}
						else if(mc_warranty.val() == null)
						{
							M.toast({html : 'Please Specify Warranty Period.'});
							mc_warranty.css("border","2px solid red");
							mc_warranty.focus();	
						}
						else
						{
							$.ajax({
								type : "ajax",
								method : "POST",
								url : "MemoryCardDetailInsert",
								data : {prod_title:prod_title.val(), model_name:model_name.val(), prod_color:prod_color.val(), mc_brand:mc_brand.val(), mc_type:mc_type.val(), mc_capacity:mc_capacity.val(), mc_warranty:mc_warranty.val(), listing_dur:listing_dur.val(), discount:discount.val(), ret_policy:ret_policy.val(), ship_charge:ship_charge.val(),prod_price:prod_price.val(),listingfee:listingfee},
								success : function(data){
									$('#mcid').text(data);
									$('#mc_id').val(data);
									$('.modal').modal({dismissible:false});
									$('#memorycard_image_upload').modal('open');
								},
								error : function(){}
							});
						} 							
					}
					else if(accessory_type.val() == '3')
					{
						var compatible_mob = $('#compatible_mob');
						var sg_feature = $('#sg_feature');
						if(compatible_mob.val() == '')
						{
							M.toast({html : 'Please Specify Compatible Mobile.'});
							compatible_mob.css("border","2px solid red");
							compatible_mob.focus();	
						}
						else if(sg_feature.val() == null)
						{
							M.toast({html : 'Please Specify Add on feature.'});
							sg_feature.css("border","2px solid red");
							sg_feature.focus();	
						}
						else
						{
							$.ajax({
								type : "ajax",
								url : "ScreenGuardDetailInsert",
								data : {prod_title:prod_title.val(),model_name:model_name.val(),prod_color:prod_color.val(),compatible_mob:compatible_mob.val(), sg_feature:sg_feature.val(), listing_dur:listing_dur.val(), discount:discount.val(), ret_policy:ret_policy.val(), ship_charge:ship_charge.val(), prod_price:prod_price.val(),listingfee:listingfee},
								method : "POST",
								success : function(data){
									$('#sgid').text(data);
									$('#sg_id').val(data);
									$('.modal').modal({dismissible:false});
									$('#sg_image_upload').modal('open');
									console.log('Screen Guard Image Uploaded Successfully!');
								},
								error : function(){
									console.log("Ajax Request Error : ScreenGuardDetailInsert");
								}
							});
						}
					}
					else if(accessory_type.val() == '4')
					{
						var headphone_type = $('#headphone_type');
						var connection_type = $('#connection_type');
						var microphone = $('#microphone');
						var hp_warranty = $('#hp_warranty');

						if(headphone_type.val() == null)
						{
							M.toast({html : 'Please Specify Add on feature.'});
							headphone_type.css("border","2px solid red");
							headphone_type.focus();
						}
						else if(connection_type.val() == null)
						{
							M.toast({html : 'Please Specify Connection Type.'});
							connection_type.css("border","2px solid red");
							connection_type.focus();
						}
						else if(microphone.val() == null)
						{
							M.toast({html : 'Please Specify Micorphone.'});
							microphone.css("border","2px solid red");
							microphone.focus();
						}
						else if(hp_warranty.val() == null)
						{
							M.toast({html : 'Please Specify Warranty Period.'});
							hp_warranty.css("border","2px solid red");
							hp_warranty.focus();
						}
						else
						{
							$.ajax({
								type : "ajax",
								method : "POST",
								url : "HeadphonesDetailInsert",
								data : {prod_title : prod_title.val(), model_name : model_name.val(), prod_color:prod_color.val(), headphone_type:headphone_type.val(), connection_type:connection_type.val(), microphone:microphone.val(), hp_warranty:hp_warranty.val(), listing_dur:listing_dur.val(), discount:discount.val(), ret_policy:ret_policy.val(), ship_charge:ship_charge.val(), prod_price:prod_price.val(), listingfee:listingfee},
								success : function(data){
									$('#hpid').text(data);
									$('#hp_id').val(data);
									$('.modal').modal({dismissible:false});
									$('#hp_image_upload').modal('open');
									console.log('Headphones Image Uploaded Successfully!');
								},
								error : function(){
									console.log("Ajax Request Error : HeadphonesDetailInsert");
								}
							});
						}
					}
					else if(accessory_type.val() == '5')
					{
						var ch_brand = $('#ch_brand');
						var usb_port = $('#usb_port');
						var mch_comptmob = $('#mch_comptmob');
						var mobch_warranty = $('#mobch_warranty');
						if(ch_brand.val() == null)
						{
							M.toast({html : 'Please Specify Brand Name.'});
							ch_brand.css("border","2px solid red");
							ch_brand.focus();	
						}
						else if(usb_port.val() == '')
						{
							M.toast({html : 'Please Specify no. of usb ports.'});
							usb_port.css("border","2px solid red");
							usb_port.focus();
						}
						else if(mch_comptmob.val() == '')
						{
							M.toast({html : 'Please Specify Compatible Mobile.'});
							mch_comptmob.css("border","2px solid red");
							mch_comptmob.focus();
						}
						else if(mobch_warranty.val() == null)
						{
							M.toast({html : 'Please Specify Warranty Period.'});
							mobch_warranty.css("border","2px solid red");
							mobch_warranty.focus();
						}
						else
						{
							$.ajax({
								type : "ajax",
								method : "POST",
								url : "MobChargerDetailInsert",
								data : {prod_title : prod_title.val(), model_name : model_name.val(), prod_color:prod_color.val(), ch_brand:ch_brand.val(), usb_port:usb_port.val(), mch_comptmob:mch_comptmob.val(), mobch_warranty:mobch_warranty.val(),listing_dur:listing_dur.val(), discount:discount.val(), ret_policy:ret_policy.val(), ship_charge:ship_charge.val(), prod_price:prod_price.val(), listingfee:listingfee},
								success : function(data){
									$('#mobchid').text(data);
									$('#mobch_id').val(data);
									$('.modal').modal({dismissible:false});
									$('#mobch_image_upload').modal('open');
									console.log('Mobile Charger Details Inserted Successfully!');
								},
								error : function(){
									console.log("Ajax Request Error : MobChargerDetailInsert");
								}
							});
						}

					}
					else 
					{
						console.log('Invalid accessory type selection.');
					}
				});

			//Power Bank Image Upload
			$('#image_upload_form').on('submit',function(e){
				e.preventDefault();
				var img1 = $('#img1').val();
				var img2 = $('#img2').val();
				var img3 = $('#img3').val();
				var img4 = $('#img4').val();
				if(img1 == "")
				{
					M.toast({html:'Please Select Image 1'});
				}
				else if(img2 == "")
				{
					M.toast({html:'Please Select Image 2'});
				}
				else if(img3 == "")
				{
					M.toast({html:'Please Select Image 3'});
				}
				else if(img4 == "")
				{
					M.toast({html:'Please Select Image 4'});
				}
				else
				{
					$.ajax({
						url : "PowerBankImgUpload",
						method : "POST",
						data : new FormData(this),
						contentType : false,
						cache : false,
						processData : false,
						success : function(data){
							$('#show_imgs').html(data);
							$('#pb_modal_close').remove();
							$('.success').css("display","block");
							console.log("Power Bank uploaded successfully");
						},
						error : function(){
							console.log('Ajax Request Error : PowerBankImgUpload');
						}
					});
				}
			});


			//Memory Card Image Upload
			$('#mc_image_upload_form').on('submit',function(e){
				e.preventDefault();
				var mcimg1 = $('#mcimg1').val();
				var mcimg2 = $('#mcimg2').val();
				var mcimg3 = $('#mcimg3').val();
				var mcimg4 = $('#mcimg4').val();
				if(mcimg1 == "")
				{
					M.toast({html:'Please Select Image 1'});
				}
				else if(mcimg2 == "")
				{
					M.toast({html:'Please Select Image 2'});
				}
				else if(mcimg3 == "")
				{
					M.toast({html:'Please Select Image 3'});
				}
				else if(mcimg4 == "")
				{
					M.toast({html:'Please Select Image 4'});
				}
				else
				{
					$.ajax({
						url : "MemoryCardImgUpload",
						method : "POST",
						data : new FormData(this),
						contentType : false,
						cache : false,
						processData : false,
						success : function(data){
							$('#show_mcimgs').html(data);
							$('#mc_modal_close').remove();
							$('.success').css("display","block");
							console.log("Memory Card Image uploaded successfully");
						},
						error : function(){
							console.log('Ajax Request Error : MemoryCardImgUpload');
						}
					});
				}
			});


			//Screen Guard Image Upload
			$('#sg_image_upload_form').on('submit',function(e){
				e.preventDefault();
				var sgimg1 = $('#sgimg1').val();
				var sgimg2 = $('#sgimg2').val();
				var sgimg3 = $('#sgimg3').val();
				var sgimg4 = $('#sgimg4').val();
				if(sgimg1 == "")
				{
					M.toast({html:'Please Select Image 1'});
				}
				else if(sgimg2 == "")
				{
					M.toast({html:'Please Select Image 2'});
				}
				else if(sgimg3 == "")
				{
					M.toast({html:'Please Select Image 3'});
				}
				else if(sgimg4 == "")
				{
					M.toast({html:'Please Select Image 4'});
				}
				else
				{
					$.ajax({
						url : "ScreenGuardImgUpload",
						method : "POST",
						data : new FormData(this),
						contentType : false,
						cache : false,
						processData : false,
						success : function(data){
							$('#show_sgimgs').html(data);
							$('#sg_modal_close').remove();
							$('.success').css("display","block");
							console.log("Screen Guard Image uploaded successfully");
						},
						error : function(){
							console.log('Ajax Request Error : ScreenGuardImgUpload');
						}
					});
				}
			});

			//Headphones Image Upload
			$('#hp_image_upload_form').on('submit',function(e){
				e.preventDefault();
				var hpimg1 = $('#hpimg1').val();
				var hpimg2 = $('#hpimg2').val();
				var hpimg3 = $('#hpimg3').val();
				var hpimg4 = $('#hpimg4').val();
				if(hpimg1 == "")
				{
					M.toast({html:'Please Select Image 1'});
				}
				else if(hpimg2 == "")
				{
					M.toast({html:'Please Select Image 2'});
				}
				else if(hpimg3 == "")
				{
					M.toast({html:'Please Select Image 3'});
				}
				else if(hpimg4 == "")
				{
					M.toast({html:'Please Select Image 4'});
				}
				else
				{
					$.ajax({
						url : "HeadphonesImgUpload",
						method : "POST",
						data : new FormData(this),
						contentType : false,
						cache : false,
						processData : false,
						success : function(data){
							$('#show_hpimgs').html(data);
							$('#hp_modal_close').remove();
							$('.success').css("display","block");
							console.log("Headphone Image uploaded successfully");
						},
						error : function(){
							console.log('Ajax Request Error : ScreenGuardImgUpload');
						}
					});
				}
			});

			//Mobile Charger Image Upload
			$('#mobch_image_upload_form').on('submit',function(e){
				e.preventDefault();
				var mobchimg1 = $('#mobchimg1').val();
				var mobchimg2 = $('#mobchimg2').val();
				var mobchimg3 = $('#mobchimg3').val();
				var mobchimg4 = $('#mobchimg4').val();
				if(mobchimg1 == "")
				{
					M.toast({html:'Please Select Image 1'});
				}
				else if(mobchimg2 == "")
				{
					M.toast({html:'Please Select Image 2'});
				}
				else if(mobchimg3 == "")
				{
					M.toast({html:'Please Select Image 3'});
				}
				else if(mobchimg4 == "")
				{
					M.toast({html:'Please Select Image 4'});
				}
				else
				{
					$.ajax({
						url : "MobChargerImgUpload",
						method : "POST",
						data : new FormData(this),
						contentType : false,
						cache : false,
						processData : false,
						success : function(data){
							$('#show_mobchimgs').html(data);
							$('#mobch_modal_close').remove();
							$('.success').css("display","block");
							console.log("Mobile Charger Image uploaded successfully");
						},
						error : function(){
							console.log('Ajax Request Error : MobChargerImgUpload');
						}
					});
				}
			});

			//Check Listing
			$('#duration_format').on('change',function(){
				var dur_format = $(this).val();
				$.ajax({
					type : "ajax",
					method : "POST",
					url : "CheckAucFixListFee",
					data : {dur_format:dur_format},
					success : function(data){
						$("#listing_fee").text(data);
						$('#listingfee').val(data);
					},
					error : function(){
						console.log('Ajax Request Error : CheckAucFixListFee');
					}
				});
			});

		});
	</script>
</body>
</html>	