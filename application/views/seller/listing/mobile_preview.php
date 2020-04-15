<!DOCTYPE html>
<html>
<head>
	<title>Mobile Preview | <?= $mob_preview_data->mob_title;?></title>
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
		body{background : hsl(0,0%,100%);}
		.tdleft{font-size:15px;color:gray;width:30%;}
		.tdright{font-size:15px;width:100%;}
		table.mytable tr{border-bottom : none;}
		table.mytable tr td{padding : 5px 0px 5px 10px;background: rgba(242,242,242,1);font-size:18px; font-family: "Palatino"}
		#product_image_section{border:2px solid rgba(0,0,0,0.2);}
		#product_specifications{border : 2px solid rgba(0,0,0,0.2)}
		#img_list{height:100px;width:100px;border:2px solid rgba(0,0,0,0.2);margin-bottom: 8px; }
		#img_item{max-width:100%;height:100%;object-fit: contain;display: block; margin:0 auto;}
		.active{border : 2px solid #2196F3 !important;}
		#buttons{padding: 10px 0 0 0}
		#btn_addtocart,#btn_buynow{width:49.5%;height :60px;font-size:17px;}
		#product_links p a{font-size:12px; color:gray;}
		#mob_title_head{font-size: 20px;margin:0;}
		#product_highlight_list,#sellerinfo_list{margin:8px 0 0 0;}
		#product_highlight_list_item,#sellerinfo_list_item{font-size:16px;font-weight: 600;list-style-type: disc}
		#specification_header{border-bottom: 2px solid rgba(0,0,0,0.2);font-family: "Arial"}
		#general_header, #camera_header, #display_header, #connectivity_header, #os_processor_header, #battery_header{font-family: "Roboto"}
	</style>
</head>
<body>

	<div class="row" style="margin: 2% 0 0 0">
		<div class="col l1 m1 s12">
			<div id="img_list" class="active">
				<img src="<?= base_url('MobileImages/').$mob_preview_data->mob_img1?>" class="responsive-img"/ id="img_item">
			</div>
			<div id="img_list">
				<img src="<?= base_url('MobileImages/').$mob_preview_data->mob_img2?>" class="responsive-img"/ id="img_item">
			</div>
			<div id="img_list">
				<img src="<?= base_url('MobileImages/').$mob_preview_data->mob_img3?>" class="responsive-img"/ id="img_item">
			</div>
			<div id="img_list">
				<img src="<?= base_url('MobileImages/').$mob_preview_data->mob_img4?>" class="responsive-img"/ id="img_item">
			</div>
		</div>
		<div class="col l4 m6 s12">
			<div id="product_image_section">
				<!--Mobile Images-->
				<div>
				<img src="<?= base_url('MobileImages/').$mob_preview_data->mob_img1?>" class="responsive-img"/>
				</div>
			</div>
			<div id="buttons">
				<button type="button" class="btn waves-effect waves-light" id="btn_addtocart" style="background: rgba(255,159,0,0.9);"><span class="fa fa-shopping-cart">&nbsp;&nbsp;add to cart</span></button>
				<button type="button" class="btn waves-effect waves-light" id="btn_buynow" style="background: rgba(251,100,27,0.9);"><span class="fa fa-flash">&nbsp;&nbsp;buy now</span></button>
			</div>
		</div>
		<div class="col l7 m6 s12">
			<div id="product_detail_section">
				<div id="product_links">
				<p>
					<a href="#">Home</a>&nbsp;&nbsp;<span class="fa fa-angle-right">&nbsp;</span>
					<a href="#">Mobiles</a>&nbsp;&nbsp;<span class="fa fa-angle-right">&nbsp;</span>
					<a href="#"><?= $mob_preview_data->mob_brand?></a>&nbsp;&nbsp;<span class="fa fa-angle-right">&nbsp;</span>
					<a href="#" style="color:black;font-weight:600"><?= $mob_preview_data->mob_title?></a>
				</p>
				</div>
				<div id="product-title">
					<h1 id="mob_title_head">
					<?= $mob_preview_data->mob_title?>
					</h1>
				</div>
				<div id="discount_offer">
					<h6><span class="badge green white-text left" style="margin:0;padding: 0"><?= $mob_preview_data->discount_offer;?>% OFF</span></h6><br>
				</div>	
				<div id="product_price">
					<h4 style="margin-top:1%"><span class="fa fa-inr">&nbsp;<?= number_format($mob_preview_data->mob_price);?></span></h4>
				</div>
				<div id="product_highlights">
					<div class="row">
						<div class="col l2 m2 s3">
							<h6 style="color:gray;font-size:16px;font-weight:600">Highlights</h6>
						</div>
						<div class="col l5 m6 s6">
							<ul id="product_highlight_list">
								<li id="product_highlight_list_item"><?=$mob_preview_data->mob_ramsize;?> RAM | <?= $mob_preview_data->mob_romsize?> ROM | Expandable : <?= strtoupper($mob_preview_data->mob_isexpandable);?> </li>
								<li id="product_highlight_list_item"><?=$mob_preview_data->disp_size;?> | <?= strtoupper($mob_preview_data->reso_type);?> </li>
								<li id="product_highlight_list_item"><?=$mob_preview_data->primary_camsize;?> Rear Camera | <?= $mob_preview_data->secondary_camsize?> Front Camera </li>
								<li id="product_highlight_list_item">
									<?=$mob_preview_data->battery_capacity;?> Battery
								</li>
								<li id="product_highlight_list_item">
									<?= ucfirst($mob_preview_data->processor_type);?> Core Processor
								</li>
							</ul>
						</div>
					</div>					
				</div>
				<div id="seller_info_section">
					<div class="row">
						<div class="col l2 m2 s3">
							<h6 style="color:gray;font-size:16px;font-weight:600">Seller</h6>
						</div>
						<div class="col l5 m6 s6">
							<ul id="sellerinfo_list">
								<li id="sellerinfo_list_item"><?= strtoupper($sellerinfo->comp_name);?></li>
								<li id="sellerinfo_list_item"><?= ucfirst($sellerinfo->scity);?></li>
								<li id="sellerinfo_list_item"><?= $mob_preview_data->return_policy?> Return Policy</li>
							</ul>
						</div>
					</div>					
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col l7 m7 s12 offset-l5">
			<div id="product_specifications">
				<div id="specification_header">
					<h4 style="padding: 0px 0px 0px 10px">Product Specifications</h4>
				</div>
				<div id="general_details" style="border-bottom: 2px solid rgba(0,0,0,0.2);">
					<div id="general_header">
						<h5 style="padding: 0px 0px 0px 10px">General</h5>
					</div>
					<div>
						<table class="mytable">
							<tr style="border-bottom: none;">
								<td class="tdleft">Model Number</td>
								<td class="tdright"><?= $mob_preview_data->model_no?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Model Name</td>
								<td class="tdright"><?= $mob_preview_data->mob_name?></td>
							</tr>
							<tr>
								<td class="tdleft">Color</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->mob_color);?></td>
							</tr>
							<tr>
								<td class="tdleft">SIM Type</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->sim_type);?></td>
							</tr>
							<tr>
								<td class="tdleft">OTG Support</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->otg_sup);?></td>
							</tr>

						</table>
					</div>
				</div>

				<div id="display_details" style="border-bottom: 2px solid rgba(0,0,0,0.2)">
					<div id="display_header">
						<h5 style="padding: 0px 0px 0px 10px">Display Features</h5>
					</div>
					<div>
						<table class="mytable">
							<tr style="border-bottom: none;">
								<td class="tdleft">Display Size</td>
								<td class="tdright"><?= $mob_preview_data->disp_size; ?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Resolution Size</td>
								<td class="tdright"><?= $mob_preview_data->disp_reso; ?></td>
							</tr>
							<tr>
								<td class="tdleft">Resolution Type</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->reso_type);?></td>
							</tr>
							<tr>
								<td class="tdleft">Display Type</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->disp_type);?></td>
							</tr>
						</table>
					</div>
				</div>

				<div id="os_processor_details" style="border-bottom: 2px solid rgba(0,0,0,0.2)">
					<div id="os_processor_header">
						<h5 style="padding: 0px 0px 0px 10px">OS & Processor Features</h5>
					</div>
					<div>
						<table class="mytable">
							<tr style="border-bottom: none;">
								<td class="tdleft">Operating System</td>
								<td class="tdright"><?= $mob_preview_data->mob_os." ".$mob_preview_data->os_ver; ?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Processor Core</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->processor_type); ?> Core</td>
							</tr>
						</table>
					</div>
				</div>

				<div id="os_processor_details" style="border-bottom: 2px solid rgba(0,0,0,0.2)">
					<div id="os_processor_header">
						<h5 style="padding: 0px 0px 0px 10px">Memory & Storage Features</h5>
					</div>
					<div>
						<table class="mytable">
							<tr style="border-bottom: none;">
								<td class="tdleft">Internal Storage</td>
								<td class="tdright"><?= $mob_preview_data->mob_romsize; ?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">RAM</td>
								<td class="tdright"><?= $mob_preview_data->mob_ramsize ;?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Supported Memory card type</td>
								<td class="tdright"><?= $mob_preview_data->mob_memorytype ;?></td>
							</tr>
						</table>
					</div>
				</div>
				<div id="camera_details" style="border-bottom: 2px solid rgba(0,0,0,0.2)">
					<div id="camera_header">
						<h5 style="padding: 0px 0px 0px 10px">Camera Features</h5>
					</div>
					<div>
						<table class="mytable">
							<tr style="border-bottom: none;">
								<td class="tdleft">Primary Camera Available</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->primary_cam); ?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Primary Camera</td>
								<td class="tdright"><?= $mob_preview_data->primary_camsize ;?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Secondary Camera Available</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->secondary_cam) ;?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Secondary Camera</td>
								<td class="tdright"><?= $mob_preview_data->secondary_camsize ;?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Flash Available</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->flash) ;?></td>
							</tr>
						</table>
					</div>
				</div>

				<div id="connectivity_details" style="border-bottom: 2px solid rgba(0,0,0,0.2)">
					<div id="connectivity_header">
						<h5 style="padding: 0px 0px 0px 10px">Connectivity Features</h5>
					</div>
					<div>
						<table class="mytable">
							<tr style="border-bottom: none;">
								<td class="tdleft">Network Type</td>
								<td class="tdright"><?= $mob_preview_data->network_type; ?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Micro USB Port</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->mob_usbslot) ;?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Bluetooth</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->mob_bluetooth);?></td>
							</tr>
							<tr style="border-bottom: none;padding: 0;margin:0">
								<td class="tdleft">Wifi</td>
								<td class="tdright"><?= ucfirst($mob_preview_data->mob_wifi) ;?></td>
							</tr>
						</table>
					</div>
				</div>

				<div id="battery_details" style="border-bottom: 2px solid rgba(0,0,0,0.2)">
					<div id="battery_header">
						<h5 style="padding: 0px 0px 0px 10px">Battery & Power Features</h5>
					</div>
					<div>
						<table class="mytable">
							<tr style="border-bottom: none;">
								<td class="tdleft">Battery Capacity</td>
								<td class="tdright"><?= $mob_preview_data->battery_capacity; ?></td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>
	<!--JQuery Ajax-->
	<script type="text/javascript" src="<?= base_url('assets/ajax/ajax.js'); ?>"></script>
</body>
</html>