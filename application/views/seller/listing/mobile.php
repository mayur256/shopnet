
<!DOCTYPE html>
<html>
<head>
	<title>Upload Mobile Products</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Materialize CSS file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/materialize/css/materialize.css">
	<!--font awesome file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/font/css/font-awesome.css">
	<!--Materialize CSS Icons-->
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<style >
		body{padding: 10px; background-color: rgba(0,0,0, 0.06);}
		select{display: block; border : 2px solid rgba(0,0,0, 0.06);}
		p{font-weight : 600;}
		#sp{color : rgba(33,150,243,1); font-size: 15px; font-weight: 500}
		#mobile_title, #mob_brand, #model-no, #mob-name, #mob_resolution, #mob_size, #mob_os, #os_version, #rom_size, #ram_size, #card_type, #network_type, #battery, #offers, #duration, #ret_policy, #shipping_charge, #price, #primary_size, #secondary_size{border : 2px solid gray; padding: 1px 0px 1px 3px; }
		#mobile_title:focus, #mob_brand:focus, #model-no:focus, #mob-name:focus, #mob_resolution:focus, #mob_size:focus, #mob_os:focus, #os_version:focus, #ram_size:focus, #rom_size:focus, #card_type:focus, #network_type:focus, #battery:focus, #ret_policy:focus, #offers:focus, #duration:focus, #shipping_charge:focus, #price:focus, #primary_size:focus, #secondary_size:focus{border : 2px solid rgba(33,150,243, 1); padding: 1px 0px 1px 3px;box-shadow: none; outline : none;}

		#show-img{border : 2px solid blue; height: 225px; width: 225px;}
		#img_text{padding: 20px 1px 0px 0px;}

		/*.inputfile {width: 0.1px;height: 0.1px;opacity: 0;overflow: hidden;position:absolute;z-index: -1;}
		.inputfile + label{font-size: 1.25em;font-weight: 500;color: black;display: inline-block; padding: 5px;}
		.inputfile:focus + label,.inputfile + label:hover{text-decoration: underline; cursor: pointer}*/

	</style>
</head>
<body>
	<!--Hidden Field for last insert id-->
	<input type="hidden" name="mobileid" id="mobileid" disabled />
	<input type="hidden" name="sellerid" id="sellerid" value="<?php echo $seller_id; ?>" disabled />
	<!---->
	<!--General Deatils-->
	<div style="padding: 10px 0px 10px 0px;">
		<h5 style="font-family: 'Times New Roman';margin-left:12px; display : inline;">Mobile Details</h5>
		<h5 style="font-family: 'Times New Roman';display:inline;margin-left : 740px;"> <span class="fa fa-eye"></span>&nbsp;Preview</h5>
	</div>
	<div class="row">
		<div class="col l8 m8 s12">
			<div style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
				<h6 style="font-size: 25px;font-family: 'Times New Roman'">General Details</h6> <br>
				<div id="section1">
					<h6 style="font-size: 18px;font-family: 'Georgia'; font-weight: 800;">Mobile title</h6>
					<input type="text" name="mobile_title" id="mobile_title" maxlength="80" title="Maximum 80 Characters allowed" />
					<div class="row">
						<div class="col l4 m4 s4">
							<p style=>Mobile Brand</p>
							<select name="mob_brand" id="mob_brand">
								<option selected>Select Mobile Brand</option>
							</select>
						</div>
						<div class="col l4 m4 s4">
							<p>Mobile Model No.</p>
							<input type="text" name="model-no" id="model-no" />
						</div>
						<div class="col l4 m4 s4">
							<p>Mobile Name</p>
							<input type="text" name="mob-name" id="mob-name" />
						</div>
					</div>
					<div class="row">
						<div style="padding-left: 10px;"><p>Mobile Colour</p></div>
						
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="color" value="white">
								<span id="sp">White</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="color" value="black">
								<span id="sp">Black</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="color" value="blue">
								<span id="sp">Blue</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="color" value="gray">
								<span id="sp">Gray</span>
							</label>
						</div>
					</div>


					<div class="row">
						<div style="padding-left: 10px;"><p>Number of Sims</p></div>
						
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="noofsims" value="singlesim">
								<span id="sp">Single Sim</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="noofsims" value="dbsim">
								<span id="sp">Double Sim</span>
							</label>
						</div>
					</div>


					<div class="row">
						<div style="padding-left: 10px;"><p>Sim Configuration type</p></div>
						
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="simconfig" value="micro">
								<span id="sp">Micro</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="simconfig" value="nano">
								<span id="sp">Nano</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="simconfig" value="pico">
								<span id="sp">Pico</span>
							</label>
						</div>
						
					</div>


					<div class="row">
						<div style="padding-left: 10px;"><p>OTG Support</p></div>
						
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="otg" value="yes">
								<span id="sp">Yes</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="otg" value="no">
								<span id="sp">No</span>
							</label>
						</div>
						
					</div>
					<button type="button" class="btn waves-effects waves-light blue" id="btn_general_info">Save and Continue</button>
				</div>
			</div>
		</div>
		<div class="col l4 m4 s12">
			<div style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
				<p>Title : <span id="title"></span></p>
				<p>Brand : <span id="brand"></span></p>
				<p>Model no : <span id="modelno"></span></p>
				<p>Model Name : <span id="modelnm"></span></p>
				<p>Mobile Colour : <span id="mobcolor"></span></p>
				<p>No. of Sims : <span id="simnum"></span></p>
				<p>Sim Type : <span id="simtype"></span></p>
				<p>OTG Support : <span id="otgsup"></span></p>

			</div>
		</div>
	</div>
	<!-- /General Details -->

	<!-- Display Details -->
	<div class="row">
		<div class="col l8 m8 s12">
			<div style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
				<h6 style="font-size: 25px;font-family: 'Times New Roman'">Display Features</h6> <br>
				<div id="section2">
					
					<div class="row">
						<div class="col l4 m4 s4">
							<p style=>Display Resolution</p>
							<select name="disp_resolution" id="disp_resolution">
								<option selected disabled>Select Mobile Resolution</option>
								<option>4.00 In</option>
								<option>5.00 In</option>
								<option>6.00 In</option>
							</select>
						</div> 
						<div class="col l4 m4 s4">
							<p style=>Display Size</p>
							<select name="disp_size" id="disp_size">
								<option selected disabled>Select Mobile Size</option>
								<option>4.00 In</option>							
								<option>5.00 In</option>
								<option>6.00 In</option>
							</select>	
						</div>
						<div class="col l4 m4 s4">
							
						</div>
					</div>
					<div class="row">
						<div style="padding-left: 10px;"><p>Resolution Type</p></div>
						
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="restype" value="hd">
								<span id="sp">HD</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="restype" value="fullhd">
								<span id="sp">Full HD</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="restype" value="2k">
								<span id="sp">2K</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="restype" value="4k">
								<span id="sp">4K</span>
							</label>
						</div>
					</div>


					<div class="row">
						<div style="padding-left: 10px;"><p>Display Type</p></div>
						
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="disp_type" value="lcd">
								<span id="sp">LCD</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="disp_type" value="led">
								<span id="sp">LED</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="disp_type" value="tfd">
								<span id="sp">TFD</span>
							</label>
						</div>
						
					</div>

					<button type="button" class="btn waves-effects waves-light blue" id="btn_display_info">Save and Continue</button>
				</div>
			</div>
		</div>
			<div class="col l4 m4 s12">
				<div id="disp_preview" style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
					<p>Display Resolution : <span id="dispreso"></span></p>
					<p>Display Size : <span id="dispsize"></span></p>
					<p>Resolution Type : <span id="restype"></span></p>
					<p>Display Type : <span id="disptype"></span></p>
				</div>
			</div>
	</div>

	<!--Processing Features-->
		<div class="row">
		<div class="col l8 m8 s12">
			<div style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
				<h6 style="font-size: 25px;font-family: 'Times New Roman'">Processing Features</h6> <br>
				<div id="section3">
					<div class="row">
						<div class="col l4 m4 s4">
							<p>Operating System</p>
							<select name="mob_os" id="mob_os">
								<option selected>Android</option>
								<option>iOS</option>
								<option>Windows</option>
							</select>
						</div>
						<div class="col l4 m4 s4">
							
							<p> OS Version</p>
							<input type="text" name="os_version" id="os_version" />
						</div>
						<div class="col l4 m4 s4">
							
						</div>
					</div>


					

					<div class="row">
						<div style="padding-left: 10px;"><p>Processor type</p></div>
						
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="processor_type" value="dual">
								<span id="sp">Dual</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="processor_type" value="quad">
								<span id="sp">Quad</span>
							</label>
						</div>
						<div class="col l3 m3 s3">
							<p></p>
							<label>
								<input type="radio" name="processor_type" value="octa">
								<span id="sp">Octa</span>
							</label>
						</div>
						
					</div>
					<button type="button" class="btn waves-effects waves-light blue" id="btn_processor_info">Save and Continue</button>
				</div>
			</div>
		</div>
		<div class="col l4 m4 s12">
			<div id="pro_preview"style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
					<p>OS : <span id="os"></span></p>
					<p>OS Version : <span id="osver"></span></p>
					<p>Processor Type : <span id="pro_type"></span></p>
			</div>
		</div>
	</div>


	<!--Storage Details-->
		<div class="row">
		<div class="col l8 m8 s12">
			<div style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
				<h6 style="font-size: 25px;font-family: 'Times New Roman'">Storage Details</h6> <br>
				<div id="section4">
					<div class="row">
						<div class="col l4 m4 s4">
							<p>ROM Size</p>
							<select name="rom_size" id="rom_size">
								<option selected> 32 GB</option>
								<option>64 GB</option>
								<option>128 GB</option>
								<option>256 GB</option>
								<option>1 TB</option>
							</select>
						</div>
						<div class="col l4 m4 s4">
							<p>RAM Size</p>
							<select name="ram_size" id="ram_size">
								<option selected>2 GB</option>
								<option>3 GB</option>
								<option>4 GB</option>
								<option>8 GB</option>
							</select>
						</div>
						<div class="col l4 m4 s4">
							
						</div>
					</div>


					

					<div class="row">
						<div style="padding-left: 10px;"><p>Expandable Storage</p></div>
						
						<div class="col l4 m4 s6">
							<p></p>
							<label>
								<input type="radio" name="expandable" value="yes">
								<span id="sp">Yes</span>
							</label>
						</div>
						<div class="col l4 m4 s6">
							<p></p>
							<label>
								<input type="radio" name="expandable" value="no">
								<span id="sp">No</span>
							</label>
						</div>
						<div class="col l4 m4 s6">
							
						</div>
						
					</div>

					<div class="row">
						<div style="padding-left: 10px;"><p>Memory Card Slot</p></div>
						
						<div class="col l4 m4 s6">
							<p></p>
							<label>
								<input type="radio" name="memory_card" value="yes">
								<span id="sp">Yes</span>
							</label>
						</div>
						<div class="col l4 m4 s6">
							<p></p>
							<label>
								<input type="radio" name="memory_card" value="no">
								<span id="sp">No</span>
							</label>
						</div>
						<div class="col l4 m4 s6" style="margin-top : -7%;">
							<p> Memory Card Type</p>
							<select name="card_type" id="card_type">
								<option>SD</option>
								<option>SDHC</option>
								<option>SDXC</option>
							</select>
						</div>
						
					</div>

					<button type="button" class="btn waves-effects waves-light blue" id="btn_storage_info">Save and Continue</button>
				</div>
			</div>
		</div>
		<div class="col l4 m4 s12">
			<div id="store_preview" style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
					<p>Rom Size : <span id="romsize"></span></p>
					<p>Ram Size : <span id="ramsize"></span></p>
					<p>Expandable : <span id="expand_able"></span></p>
					<p>Memory Card Slot : <span id="mem_slot"></span></p>
					<p>Memory Card Type : <span id="mem_type"></span></p>
			</div>
		</div>
	</div>


	<!--Camera Details-->

	<div class="row">
		<div class="col l8 m8 s12">
			<div style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
				<h6 style="font-size: 25px;font-family: 'Times New Roman'">Camera Features</h6> <br>
				<div id="section5">

					<div class="row">
						<div class="col l6 m6 s6">
							<div class="row">
								<p style="margin-left: 10px;">Primary Camera</p>
								<div class="col l6 m6 s6">
									<label>
										<input type="radio" name="primary_camera" value="yes">
										<span id="sp">Yes</span>
									</label>		
								</div>
								<div class="col l6 m6 s6">
									<label>
										<input type="radio" name="primary_camera" value="no">
										<span id="sp">No</span>
									</label>
								</div>
							</div>
						</div>
						<div class="col l6 m6 s6">
							<p>Primary Camera size</p>
							<select name="primary_size" id="primary_size" style="width : 60%">
								<option selected disabled>Select Primary Cam Size</option>
								<option>8 MP</option>
								<option>10 MP</option>
								<option>12 MP</option>
								<option>14 MP</option>
								<option>16 MP</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col l6 m6 s6">
							<div class="row">
								<p style="margin-left: 15px;">Secondary Camera</p>
								<div class="col l6 m6 s6">
									<label>
										<input type="radio" name="secondary_camera" value="yes">
										<span id="sp">Yes</span>
									</label>
								</div>
								<div class="col l6 m6 s6">
									<label>
										<input type="radio" name="secondary_camera" value="no">
										<span id="sp">No</span>
									</label>	
								</div>
							</div>
						</div>
						<div class="col l6 m6 s6">
							<p>Secondary Camera size</p>
							<select name="secondary_size" id="secondary_size" style="width: 60%;">
								<option selected disabled>Select Primary Cam Size</option>
								<option>12 MP</option>
								<option>14 MP</option>
								<option>16 MP</option>
								<option>18 MP</option>
								<option>20 MP</option>
							</select>
							
						</div>
						
					</div>
					
					<div class="row">
						<div style="padding-left: 10px;"><p>Flash</p></div>
						
						<div class="col l4 m4 s6">
							<p></p>
							<label>
								<input type="radio" name="flash" value="yes">
								<span id="sp">Yes</span>
							</label>
						</div>
						<div class="col l4 m4 s6">
							<p></p>
							<label>
								<input type="radio" name="flash" value="no">
								<span id="sp">No</span>
							</label>
						</div>
						<div class="col l4 m4 s6">
							
						</div>
						
					</div>	
					
					<button type="button" class="btn waves-effects waves-light blue" id="btn_camera_info">Save and Continue</button>
				</div>
			</div>
		</div>
		<div class="col l4 m4 s12">
			<div id="cam_preview" style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
					<p>Primary Camera Size : <span id="pricam_size"></span></p>
					<p>Secondary Camera Size : <span id="seccam_size"></span></p>
					<p>Flash : <span id="flsh"></span></p>
			</div>
		</div>
	</div>
	</div>

	<!--Connectivity Details-->
	<div class="row">
		<div class="col l8 m8 s12">
			<div style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
				<h6 style="font-size: 25px;font-family: 'Times New Roman'">Connectivity Features</h6> <br>
				<div id="section6">
					<div class="row">
						<p>Network Type</p>
						<input type="text" name="network_type" id="network_type" style="width : 60%">
					</div>
					<div class="row">
						<p>Micro USB Slot</p>
						<div class="col l6 m6 s6">
							<label>
								<input type="radio" name="usbslot" value="yes">
								<span id="sp">Yes</span>
							</label>
						</div>
						<div class="col l6 m6 s6">
							<label>
								<input type="radio" name="usbslot" value="no">
								<span id="sp">No</span>
							</label>
						</div>
					</div>
					<div class="row">
						<p>Bluetooth</p>
						<div class="col l6 m6 s6">
							<label>
								<input type="radio" name="bluetooth" value="yes">
								<span id="sp">Yes</span>
							</label>
						</div>
						<div class="col l6 m6 s6">
							<label>
								<input type="radio" name="bluetooth" value="no">
								<span id="sp">No</span>
							</label>
						</div>
					</div>
					<div class="row">
						<p>Wifi</p>
						<div class="col l6 m6 s6">
							<label>
								<input type="radio" name="wifi" value="yes">
								<span id="sp">Yes</span>
							</label>
						</div>
						<div class="col l6 m6 s6">
							<label>
								<input type="radio" name="wifi" value="no">
								<span id="sp">No</span>
							</label>
						</div>
					</div>
					<div class="row">
						<p>Battery</p>
						<input type="text" name="battery" id="battery" style="width : 60%;">
					</div>

					<button type="button" class="btn waves-effects waves-light blue" id="btn_connectivity_info">Save and Continue</button>
				</div>
			</div>
		</div>
		<div class="col l4 m4 s12">
			<div id="connect_preview" style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
					<p>Network Type : <span id="ntype"></span></p>
					<p>USB slot : <span id="usb_slot"></span></p>
					<p>Bluetooth : <span id="btooth"></span></p>
					<p>Wifi : <span id="wi_fi"></span></p>					
					<p>Battery Capacity : <span id="bat"></span></p>
			</div>
		</div>
	</div>


	<!--Listing Details-->
	<div class="row">
		<div class="col l8 m8 s12">
			<div style="border : 2px solid gray; background-color: white; padding: 50px; border-radius: 5px;">
				<h6 style="font-size: 25px;font-family: 'Times New Roman'">Listing Details</h6> <br>
				<div id="section7">
					<div class="row">
						<div class="col l6 m6 s6">
							<p>Duration Format</p>
							<select name="duration" id="duration">
								<option selected disabled>Select Duration</option>
								<option> 7 days</option>
								<option> 10 days</option>
								<option> 15 days</option>
								<option> 30 days</option>
							</select>
						</div>
						<div class="col l6 m6 s6">
							<p>Offer</p>
							<select name="offers" id="offers">
								<option selected disabled>Select Offers</option>
								<option> 5% Off</option>
								<option> 10% Off</option>
								<option> 15% Off</option>
								<option> 30% Off</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col l6 m6 s6">
							<p>Return Policy</p>
							<select name="ret_policy" id="ret_policy">
								<option selected disabled>Select Return Policy</option>
								<option> 7 days</option>
								<option> 10 days</option>
								<option> 15 days</option>
								<option> 30 days</option>
							</select>
						</div>
						<div class="col l6 m6 s6">
							<p>Shipping Charge</p>
							<input type="text" name="shipping_charge" id="shipping_charge">
						</div>
					</div>
					<div class="row">
						<div class="col l6 m6 s6">
							<p>Price</p>
							<input type="text" name="price" id="price">
						</div>
						<div class="col l6 m6 s6">
							
						</div>
					</div>
					<button type="button" class="btn waves-effects waves-light blue" id="btn_listing_info">Save and Continue</button>
				</div>
			</div>
		</div>	
		<div class="col l4 m4 s12">
			
		</div>
	</div>


	<!--Image Upload-->
	<div class="row">

		<div class="col l12 m12 s12">
			<div  style="border : 2px solid gray;border-radius: 5px; background-color: white; padding: 40px;">
				<h6 style="font-size : 24px;font-family: 'Times New Roman'">Image Upload</h6> <br>		
				<form method="post" id="imgupload_form" enctype="multipart/form-data">
				<div class="row" id="section8">
					<div class="col l3 m3 s12">
						<div id="show-img">
							<img src=""/>
						</div>
						<div id="img_text">
							<input type="file" name="img_one" id="img_one" class="inputfile" />
							<label for="img_one" id="img_label1">Choose a file</label>
						</div>
					</div>
					<div class="col l3 m3 s12">
						<div id="show-img"></div>
						<div id="img_text">
							<input type="file" name="img_two" id="img_two" class="inputfile" />
							<label for="img_two" id="img_label2">Choose a file</label>
						</div>
					</div>
					<div class="col l3 m3 s12">
						<div id="show-img"></div>
						<div id="img_text">
							<input type="file" name="img_three" id="img_three" class="inputfile" />
							<label for="img_three" id="img_label3">Choose a file</label>
						</div>
					</div>
					<div class="col l3 m3 s12">
						<div id="show-img"></div>
						<div id="img_text">
							<input type="file" name="img_four" id="img_four" class="inputfile" />
							<label for="img_four" id="img_label4">Choose a file</label>
						</div>
					</div>
					<input type="hidden" name="mob_id" id="mob_id">
					<button type="submit" class="btn waves-effects waves-light blue" id="btn_upload_img">Save and Upload</button>
				</div>
				</form>
			</div>
		</div>
	</div>



	<!--Listing Fee -->
	<div class="row">
		<div class="col l8 m8 s12">
			<div style="border : 2px solid gray;border-radius: 5px; background-color: white; padding: 50px;">
				<h6 style="font-size : 20px;font-family: 'Times New Roman'">Listing Fee</h6> <br>
				<div id="section9" style="margin-bottom: -10px;">
					<h5> Fee <i class="fa fa-inr">
						<span id="listing-fee"></span>
					</i> </h5>
					<input type="hidden" name="fee" id="fee">
				</div>		
			</div>
			<div id="button" style="padding: 20px;">
				<button type="button" id="btn_submit" class="btn waves-effects waves-light" style="margin-left: 39%;">SUBMIT LISTING</button>
				<button type="button" id="btn_preview" class="btn waves-effects waves-light">preview</button>
			</div>
		</div>


		<!--Success Modal-->
		<div class="modal" id="success-modal">
			<div class="modal-content">
				<h6>Listing Successfull<span class="right modal-close">X</span></h6>
				<h3 style="color:green">SUCCESS! <span class="fa fa-check right"></span></h3>
				<br/>
				<a href="<?= base_url('index.php/Seller/MobileUpload'); ?>" class="btn waves-effects waves-light">Create New Listing</a>
				<a href="<?= base_url('index.php/Seller/Dashboard'); ?>" class="btn waves-effects waves-light right">Dashboard</a>
			</div>
		</div>
		<!--/Success Modal-->
	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--JQuery Ajax-->
	<script type="text/javascript" src="<?= base_url('assets/ajax/ajax.js'); ?>"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>
	<!--Custom JS-->
	<script type="text/javascript">
		//Ajax Code goes here
		$(function(){

			
			//Get Brand Name
			GetMobileBrand();
			function GetMobileBrand()
			{
				$.ajax({
					type : 'ajax',
					method : 'POST',
					url : '../Admin/GetMobileBrand',
					success : function(data){
						$('#mob_brand').html(data);
					},
					error : function(){
						console.log('Ajax Request Error!');
					}
				});
			}
			//Hide other Sections
			$('#section2').hide(); 	$('#disp_preview').hide();
			$('#section3').hide();	$('#pro_preview').hide();
			$('#section4').hide();	$('#store_preview').hide();
			$('#section5').hide();	$('#cam_preview').hide();
			$('#section6').hide();	$('#connect_preview').hide();
			$('#section7').hide();
			$('#section8').hide();
			$('#section9').hide();

			//button hide
			$('#btn_submit').hide();
			$('#btn_preview').hide();

			$('#btn_general_info').click(function(){
				var sellerid = $('#sellerid');
				var mobile_title = $('#mobile_title');
				var mob_brand = $('#mob_brand');
				var model_no = $('#model-no');
				var mob_name = $('#mob-name');
				var color = $('input[name=color]:checked');
				var simno = $('input[name=noofsims]:checked');
				var sim_config = $('input[name=simconfig]:checked');
				var otg = $('input[name=otg]:checked'); 
				if(mobile_title.val() == '')
				{
					mobile_title.css("border-color","red");
					mobile_title.focus();
					M.toast({html : 'Mobile Title cannot be empty.'});
				}
				else if(model_no.val() == '')
				{
					model_no.css("border-color","red");
					model_no.focus();
					M.toast({html : 'Model number cannot be empty.'});
				}
				else if(mob_name.val() == '')
				{
					mob_name.css("border-color","red");
					mob_name.focus();
					M.toast({html : 'Mobile Name cannot be empty.'});
				}
				else if(color.val() == null)
				{
					M.toast({html : 'Please Select appropriate Colour'});
				}
				else if(simno.val() == null)
				{
					M.toast({html : 'Please Select appropriate number of Sims'});
				}
				else if(sim_config.val() == null)
				{
					M.toast({html : 'Please Select appropriate Sim Configuration'});
				}
				else if(otg.val() == null)
				{
					M.toast({html : 'Please Select OTG Support'});
				}
				else
				{
					$.ajax({
						type : 'ajax',
						method : 'POST',
						data : {mobile_title : mobile_title.val(), model_no : model_no.val(), mob_name : mob_name.val(), color : color.val(), simno : simno.val(), sim_config : sim_config.val(), otg : otg.val(), mob_brand : mob_brand.val(), sellerid : sellerid.val()},
						url : 'InsertMobGenInfo',
						success: function(data){
							var id = data;
							$('#mobileid').val(id);
							mobile_title.prop("disabled",true);
							mob_brand.prop("disabled",true);
							model_no.prop("disabled",true);
							mob_name.prop("disabled",true);
							color.prop("disabled",true);
							simno.prop("disabled",true);
							sim_config.prop("disabled",true);
							otg.prop("disabled",true);
							$('#btn_general_info').prop("disabled",true);
							$('body, html').animate({scrollTop : $('#section1').height() + 200},200);
							$('#section2').show();
							$('#disp_preview').show();
							console.log(data);
						},
						error : function(){
							console.log('Ajax Request Error!');
						}
					});
				}
			});

			//Insert Display Info
			$('#btn_display_info').click(function(){
				var insertid = $('#mobileid').val();
				var disp_resolution = $('#disp_resolution');
				var disp_size = $('#disp_size');
				var reso_type = $('input[name=restype]:checked');
				var disp_type = $('input[name=disp_type]:checked');
				if(disp_resolution.val() == null)
				{
					M.toast({html : 'Please Select appropriate display resolution'});
				}
				else if(disp_size.val() == null)
				{
					M.toast({html : 'Please Select appropriate display size'});
				}
				else if(reso_type.val() == null)
				{
					M.toast({html : 'Please Select appropriate resolution type'});
				}
				else if(disp_type.val() == null)
				{
					M.toast({html : 'Please Select appropriate display type'});
				}
				else
				{
					$.ajax({
						type : 'ajax',
						method : 'POST',
						url : 'InsertMobDispInfo',
						data : {insertid : insertid, disp_resolution : disp_resolution.val(), disp_size : disp_size.val(), reso_type : reso_type.val(), disp_type : disp_type.val()},
						success : function(data){
							disp_resolution.prop("disabled",true);
							disp_size.prop("disabled",true);
							reso_type.prop("disabled",true);
							disp_type.prop("disabled",true);
							$('#btn_display_info').prop("disabled",true);
							$('body, html').animate({scrollTop : $('#section1').height() + $('#section2').height() + 120},200);
							$('#section3').show();
							$('#pro_preview').show();
							console.log('Display Info added!');
							console.log(data);
						},
						error : function(){
							console.log('Ajax Request Error!');
						}
					});
				}
			});

			//Insert Processor Info
			$('#btn_processor_info').click(function(){
				var insertid = $('#mobileid').val();
				var os_ver = $('#os_version');
				var os = $('#mob_os');
				var processor_type = $('input[name=processor_type]:checked');
				if(os_ver.val() == '')
				{
					os_ver.css("border-color","red");
					os_ver.focus();
					M.toast({html : 'Processor Version cannt be empty!'});
				}
				else if(os.val() == null)
				{
					M.toast({html : 'Please Select appropriate Mobile OS!'});
				}
				else if(processor_type.val() == null)
				{
					M.toast({html : 'Please Select appropriate Processor Type!'});
				}
				else
				{
					$.ajax({
						type : 'ajax',
						method : 'POST',
						url : 'InsertMobProcessorInfo',
						data : {os_ver : os_ver.val(), os : os.val(), processor_type : processor_type.val(), insertid : insertid},
						success : function(data){
							os_ver.prop("disabled",true);
							os.prop("disabled",true);
							processor_type.prop("disabled",true);
							$('#btn_processor_info').prop("disabled",true);
							$('body, html').animate({scrollTop : $('#section1').height() + $('#section2').height() + $('#section3').height() + 200},200);
							$('#section4').show();
							$('#store_preview').show();
							console.log(data);
							console.log("Processor Info updated!");
						},
						error : function(){
							console.log("AJAX Request Error");
						}
					});
				}
			});

			//Insert Storage Details
			$('#btn_storage_info').click(function(){
				var rom_size = $('#rom_size');
				var ram_size = $('#ram_size');
				var expandable = $('input[name=expandable]:checked');
				var memory_card = $('input[name=memory_card]:checked');
				var card_type = $('#card_type');
				var insertid = $('#mobileid').val();
				if(rom_size.val() == null)
				{
					M.toast({html : 'Please Select ROM size'});
				}
				else if(ram_size.val() == null)
				{
					M.toast({html : 'Please Select RAM size'});
				}
				else if(expandable.val() == null)
				{
					M.toast({html : 'Please specify if exapndable or not'});
				}
				else if(memory_card.val() == null)
				{
					M.toast({html : 'Please specify if there is a memory card slot.'});
				}
				else if(card_type.val() == null)
				{
					M.toast({html : 'Please specify type of memory card'});
				}
				else
				{
					$.ajax({
						type : 'ajax',
						method : 'POST',
						url : 'InsertMobStorageInfo',
						data : {insertid : insertid, rom_size : rom_size.val(), ram_size : ram_size.val(), expandable : expandable.val(), memory_card : memory_card.val(), card_type : card_type.val()},
						success : function(data){
							rom_size.prop("disabled",true);
							ram_size.prop("disabled", true);
							expandable.prop("disabled", true);
							memory_card.prop("disabled", true);
							card_type.prop("disabled", true);
							$('#btn_storage_info').prop("disabled",true);
							$('body, html').animate({scrollTop : $('#section1').height() + $('#section2').height() + $('#section3').height() + $('#section4').height() + 500},200);
							$('#section5').show();
							$('#cam_preview').show();
							console.log('Storage Details Inserted.');
							console.log(data);
						},
						error : function(){}
					});
				}
			});


			//Insert Camera Features
			$('#btn_camera_info').click(function(){
				var primary_camera = $('input[name=primary_camera]:checked');
				var secondary_camera = $('input[name=secondary_camera]:checked');
				var flash = $('input[name=flash]:checked');
				var prim_size = $('#primary_size');
				var sec_size = $('#secondary_size');
				var insertid = $('#mobileid').val();
				if(primary_camera.val() == null)
				{
					M.toast({html : 'Please specify does your device have primary camera'});
				}
				else if(secondary_camera.val() == null)
				{
					M.toast({html : 'Please specify does your device have secondary camera.'});
				} 
				else if(flash.val() == null)
				{
					M.toast({html : 'Please specify does your device have flash.'});
				}
				else if(prim_size.val() == null)
				{
					M.toast({html : 'Please specify size of primary camera.'});
					prim_size.css("border-color","red");
					prim_size.focus();
				}
				else if(sec_size.val() == null)
				{
					M.toast({html : 'Please specify size of secondary camera.'});
					sec_size.css("border-color","red");
					sec_size.focus();
				}
				else
				{
					$.ajax({
						type : 'ajax',
						method : 'POST',
						url : 'InsertMobCameraInfo',
						data : {insertid : insertid, primary_cam : primary_camera.val(), secondary_cam : secondary_camera.val(), flash : flash.val(), prim_size : prim_size.val(), sec_size : sec_size.val()},
						success : function(data){
							primary_camera.prop("disabled",true);
							secondary_camera.prop("disabled",true);
							flash.prop("disabled",true);
							prim_size.prop("disabled",true);
							sec_size.prop("disabled",true);
							$('#btn_camera_info').prop("disabled",true);
							$('body, html').animate({scrollTop : $('#section1').height() + $('#section2').height() + $('#section3').height() + $('#section4').height() + $('#section5').height() + 1200},200);
							$('#section6').show();
							$('#connect_preview').show();
							console.log(data);
							console.log('Camera features inserted in database.');
						},
						error : function(){
							console.log('Ajax Request Error!');
						}
					});	
				}
			});


			//Insert Connectivity features
					$('#btn_connectivity_info').click(function(){
						var network_type = $('#network_type');
						var usbslot = $('input[name=usbslot]:checked');
						var bluetooth = $('input[name=bluetooth]:checked');
						var wifi = $('input[name=wifi]:checked');
						var battery = $('#battery');
						var insertid = $('#mobileid').val();
						if(network_type.val() == '')
						{
							M.toast({html : 'Please enter type of network.'});
							network_type.css("border-color","red");
							network_type.focus();
						}
						else if(usbslot.val() == null)
						{
							M.toast({html : 'Please specify does your device have usbslot.'});
						}
						else if(bluetooth.val() == null)
						{
							M.toast({html : 'Please specify does your device have bluetooth services.'});
						}
						else if(wifi.val() == null)
						{
							M.toast({html : 'Please specify does your device have wifi.'});
						}
						else if(battery.val() == '')
						{
							M.toast({html : 'Please enter Battery Capacity.'});
							battery.css("border-color","red");
							battery.focus();
						}
						else
						{
							$.ajax({
								type : 'ajax',
								method : 'POST',
								url : 'InsertMobConnectivityInfo',
								data : {insertid : insertid, net_type : network_type.val(), usbslot : usbslot.val(), bluetooth : bluetooth.val(), wifi : wifi.val(), battery : battery.val()},
								success : function(data){
									network_type.prop("disabled",true);
									usbslot.prop("disabled",true);
									bluetooth.prop("disabled",true);
									wifi.prop("disabled",true);
									battery.prop("disabled",true);
									$('#btn_connectivity_info').prop("disabled",true);
									$('body, html').animate({scrollTop : $('#section1').height() + $('#section2').height() + $('#section3').height() + $('#section4').height() + $('#section5').height() + $('#section6').height() + 1000},200);
									$('#section7').show();						
									console.log(data);
									console.log("Connectivity Info inserted to database.");
								},
								error : function(){
									console.log("Ajax Request Error!");
								}
							});
						}
					});


			//Insert Listing Details
			$('#btn_listing_info').click(function(){
				var duration = $('#duration');
				var offers = $('#offers');
				var ret_policy = $('#ret_policy');
				var ship_charge = $('#shipping_charge');
				var price = $('#price');
				var insertid = $('#mobileid').val();
				
				if(duration.val() == null)
				{
					M.toast({html : 'Please Select the duration.'});
					duration.css("border-color","red");
				}
				else if(offers.val() == null)
				{
					M.toast({html : 'Please Select Offers.'});
					offers.css("border-color","red");
				} 
				else if(ret_policy.val() == null)
				{
					M.toast({html : 'Please Select return policy.'});
					ret_policy.css("border-color","red");
				}
				else if(ship_charge.val() == '')
				{
					M.toast({html : 'Please enter shippping charge.'});
					ship_charge.ss("border-color","red");
					ship_charge.focus();
				}
				else if(price.val() == '')
				{
					M.toast({html : 'Please enter the price of the mobile.'});
					price.css("border-color","red");
				}
				else
				{
					$.ajax({
						type : 'ajax',
						method : 'POST',
						url : 'InsertMobListingInfo',
						data : {duration : duration.val(), offers : offers.val(), ret_policy : ret_policy.val(), ship_charge : ship_charge.val(), price : price.val(), insertid : insertid},
						success : function(data){
							$('#mob_id').val(insertid);
							duration.prop("disabled",true);
							offers.prop("disabled",true);
							ret_policy.prop("disabled",true);
							ship_charge.prop("disabled",true);
							price.prop("disabled",true);
							$('#btn_listing_info').prop("disabled",true);
							$('body, html').animate({scrollTop : $('#section1').height() + $('#section2').height() + $('#section3').height() + $('#section4').height() + $('#section5').height() + $('#section6').height() + $('#section7').height() + 1200},200); 
							$('#section8').show();
							console.log(data);
							console.log('Listing Inof inserted in database.');
						},
						error : function(){
							console.log("Ajax Request Error!");
						}
					});
				}
			});

			//Image Upload using AJAX
			$('#imgupload_form').on("submit", function(e){
				e.preventDefault();
				var img1 = $("#img_one").val();
				var img2 = $("#img_two").val();
				var img3 = $("#img_three").val();
				var img4 = $("#img_four").val();

				if(img1 == '')
				{
					M.toast({html : 'Please Select first image.'});
				}
				else if(img2 == '')
				{
					M.toast({html : 'Please Select second image.'});
				}
				else if(img3 == '')
				{
					M.toast({html : 'Please Select third image.'});
				}
				else if(img4 == '')
				{
					M.toast({html : 'Please Select first image.'});
				}
				else
				{
					$.ajax({
						url : "MobileImgUpload",
						method : "POST",
						data : new FormData(this),
						contentType : false,
						cache : false,
						processData : false,
						success : function(data){
							$('#section8').html(data);
							$('#section9').show();
							$('#btn_submit').show();
							$('#btn_preview').show();
							console.log("Image Uploaded Successfully!");
						},
						error : function(){
							console.log("Ajax Request Error for Mobile Image Upload!");
						}
					});
				}
			});

		
			//Preview Section code
			//General details preview
			$('#mobile_title').keyup(function(){
				var title = $(this).val();
				$('#title').text(title);
			});
			$('#mob_brand').on("change",function(){
				var brd = $(this).val();
				$('#brand').text(brd);
			});
			$('#model-no').keyup(function(){
				var modelno = $(this).val();
				$('#modelno').text(modelno);
			});
			$('#mob-name').keyup(function(){
				var mobnm = $(this).val();
				$('#modelnm').text(mobnm);
			});
			$("input[name='color']").click(function(){
				var colour = $("input[name='color']:checked").val();
				$('#mobcolor').text(colour);
			});
			$("input[name='noofsims']").click(function(){
				var simnum = $("input[name='noofsims']:checked").val();
				$('#simnum').text(simnum);
			});
			$("input[name='simconfig']").click(function(){
				var simtype = $("input[name='simconfig']:checked").val();
				$('#simtype').text(simtype);
			});
			$("input[name='otg']").click(function(){
				var otgsup = $("input[name='otg']:checked").val();
				$('#otgsup').text(otgsup);
			});

			//Display Info Preview
			$('#disp_resolution').on("change",function(){
				var dr = $(this).val();
				$('#dispreso').text(dr);
			});

			$('#disp_size').on("change",function(){
				var ds = $(this).val();
				$('#dispsize').text(ds);
			});

			$("input[name='restype']").click(function(){
				var restype = $("input[name='restype']:checked").val();
				$('#restype').text(restype);
			});

			$("input[name='disp_type']").click(function(){
				var disptype = $("input[name='disp_type']:checked").val();
				$('#disptype').text(disptype);
			});

			//Processing Info Preview
			$('#mob_os').on("change",function(){
				var os = $(this).val();
				$('#os').text(os);
			});

			$('#os_version').keyup(function(){
				var osver = $(this).val();
				$('#osver').text(osver);
			});

			$("input[name='processor_type']").click(function(){
				var protype = $("input[name='processor_type']:checked").val();
				$('#pro_type').text(protype);
			});

			//Storage Info Preview
			$('#rom_size').on("change",function(){
				var rom = $(this).val();
				$('#romsize').text(rom);
			});

			$('#ram_size').on("change",function(){
				var ram = $(this).val();
				$('#ramsize').text(ram);
			});

			$("input[name='expandable']").click(function(){
				var expandable = $("input[name='expandable']:checked").val();
				$('#expand_able').text(expandable);
			});

			$("input[name='memory_card']").click(function(){
				var memcard = $("input[name='memory_card']:checked").val();
				$('#mem_slot').text(memcard);
			});

			$('#card_type').on("change",function(){
				var ct = $(this).val();
				$('#mem_type').text(ct);
			});


			//Camera Info Review
			$('#primary_size').on("change",function(){
				var s = $(this).val();
				$('#pricam_size').text(s);
			});

			$('#secondary_size').on("change",function(){
				var s = $(this).val();
				$('#seccam_size').text(s);
			});

			$("input[name='flash']").click(function(){
				var f = $("input[name='flash']:checked").val();
				$('#flsh').text(f);
			});			

			//Connectivity Features
			$('#network_type').keyup(function(){
				var nt = $(this).val();
				$('#ntype').text(nt);
			});

			$("input[name='usbslot']").click(function(){
				var usb = $("input[name='usbslot']:checked").val();
				$('#usb_slot').text(usb);
			});

			$("input[name='bluetooth']").click(function(){
				var b = $("input[name='bluetooth']:checked").val();
				$('#btooth').text(b);
			});

			$("input[name='wifi']").click(function(){
				var w = $("input[name='wifi']:checked").val();
				$('#wi_fi').text(w);
			});

			$('#battery').keyup(function(){
				var batt = $(this).val();
				$('#bat').text(batt);
			});


			//Check Auction and Fixed price listing fees

			$("#duration").on("change",function(){
				var dur_format = $(this).val();
				$.ajax({
					type : "ajax",
					method : "POST",
					url : "CheckAucFixListFee",
					data : {dur_format:dur_format},
					success : function(data){
						$('#listing-fee').html(data);
						$('#fee').val(data);				
					},
					error : function(){
						console.log("Ajax Error : CheckAucFixListFee");
					}
				});
			});

			$('#btn_preview').click(function(){
				var mob_id = $('#mobileid').val();
				var mobpreview_url = '<?= base_url("index.php/Seller/MobilePreview/");?>'+mob_id;
				window.open(mobpreview_url);

			});

			$('#btn_submit').click(function(){
				var fee = $('#fee').val();
				var mobid = $('#mobileid').val();
				$.ajax({
					type : "ajax",
					url : "InsertMobListFee",
					method : "POST",
					data : {fee : fee, mobid : mobid},
					success : function(data){
						if(data == "true")
						{
							$('.modal').modal();
							$('#success-modal').modal('open');
						}
					},
					error : function(){
						console.log("Ajax Request Error : Cannot submit listing.");
					}
				});
			});
		})
	</script>


	
</body>
</html>