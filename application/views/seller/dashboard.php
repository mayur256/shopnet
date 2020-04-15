
<!DOCTYPE html>
<html>
<head>
	<title>Seller | Dashboard</title>
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
		#profile_menu{width : 20% !important;}
		nav{height: 40px; line-height: 40px;}
		#profile_menu li a{color:black;}
		#profile_menu li a:hover{color:white; background-color: black;}
		#menu_items li a{color:gray;}
		#menu_items li a:hover{background : rgb(33,150,243); color: white;}
		#order_menu, #list_menu, #marketing_menu{width : 13% !important;}
		div.col h6 {padding: 3px; margin-top: 0px; font-size: 16px;font-weight:450; letter-spacing: -0.9px; color: gray}
		div.col h5{font-size: 30px;}
		#tasklist li, #feedback li {padding: 8px 20px 8px 20px;}
		#tasklist li a, #feedback li a{font-size: 16px;font-family: "Georgia"; color: gray;}
		#selltools li{padding: 8px 20px 8px 20px;}
		#selltools li a{font-size: 16px;font-family: "Georgia"; color: gray;}
	</style>
</head>
<body>
	<!--apexbar begins-->
	<nav class="blue">
		<div class="container">
			<div class="nav-wrapper">
				<ul class="left">
					<li><a href="#" class="dropdown-trigger" data-target="profile_menu"><span class="fa fa-user"></span>&nbsp;&nbsp;Hello User</a></li>
					<ul id="profile_menu" class="dropdown-content">
						<li><a href="#"><span class="fa fa-picture-o"></span>&nbsp;&nbsp;Company Profile</a></li>
						<li><a href="#"><span class="fa fa-cog"></span>&nbsp;&nbsp;Account Settings</a></li>
						<li><a href="<?=base_url('index.php/Seller/Logout');?>"><span class="fa fa-user"></span>&nbsp;&nbsp;Logout</a></li>
					</ul>
					<li><a href="#"><span class="fa fa-phone"></span>&nbsp;&nbsp;Help & Contact</a></li>
				</ul>
				<ul class="right">
					<li><a href="#"><span class="fa fa-cube"></span>&nbsp;&nbsp;Sell</a></li>
					<li><a href="#"><span class="fa fa-bell"></span>&nbsp;&nbsp;Notifications</a></li>
					<li><a href="#"><span class="fa fa-shopping-cart"></span>&nbsp;&nbsp;Cart</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<!--/apexbar-->

	<h4 style="margin-left: 10px;">Shopinet</h4>
	<h5 style="margin : 18px 0px 2px 10px">Seller Hub &nbsp;&nbsp;<span style="font-size: 18px"><a href="#"><?=ucfirst($seller_info->sfname." ".$seller_info->slname); ?></a></span></h5>

	<nav style="background-color: rgba(0,0,0, 0.05); box-shadow: none;">
		<div class="nav-wrapper">
			<ul class="left" id="menu_items">
				<li><a href="#">Overview</a></li>
				<li><a href="#" class="dropdown-trigger" data-target="order_menu">Orders</a></li>
				<!-- Order Dropdown Menu -->
				<ul class="dropdown-content" id="order_menu">
					<li><a href="#">All Orders</a></li>
					<li><a href="#">Awaiting Payment</a></li>
					<li><a href="#">Awaiting Shipment</a></li>
					<li><a href="#">Paid and Shipped</a></li>
					<li><a href="#">Cancellations</a></li>
					<li><a href="#">Returns</a></li>
				</ul>
				<!--/Order Dropdown-->
				<li><a href="#" class="dropdown-trigger" data-target="list_menu">Listings</a></li>
				<!--Listing Dropdown Menu-->
					<ul class="dropdown-content" id="list_menu">
						<li><a href="<?= base_url('index.php/Seller/CreateListing');?>">Create Listing</a></li>
						<li><a href="#">Active</a></li>
						<li><a href="#">Unsold</a></li>
						
					</ul>
				<!--/Listing Dropdown menu-->
				<li><a href="#" class="dropdown-trigger" data-target="marketing_menu">Marketing</a></li>
				<!-- Marketing Dropdown Menu -->
				<ul class="dropdown-content" id="marketing_menu">
					<li><a href="#">Price Offers</a></li>
					<li><a href="#">Quantity Offers</a></li>
					<li><a href="#">Create Sale</a></li>
				</ul>
				<!--/Marketing Dropdown-->
				<li><a href="3">Performance</a></li>
			</ul>
			<ul class="right" id="menu_items">
				<li><a href="">Messages</a></li>
				<li><a href="">Comments</a></li>
			</ul>			
		</div>
	</nav>

	<div class="row" style="margin-top: 20px;">
		<div class="col l2 m4 s12" style="padding: 15px;">
			<div id="box" style="border-bottom: 1px solid black;">
				<h6>Unread Messages</h6>
				<h5 style="margin-bottom: 0px;">0</h5>
			</div>			
		</div>
		<div class="col l2 m4 s12" style="padding: 15px;">
			<div id="box" style="border-bottom: 1px solid black;">
				<h6>Awaiting Shipment</h6>
				<h5 style="margin-bottom: 0px;">0</h5>
			</div>			
		</div>
		<div class="col l2 m4 s12" style="padding: 15px;">
			<div id="box" style="border-bottom: 1px solid black;">
				<h6>Sales(30 days)</h6>
				<h5 style="margin-bottom: 0px;">INR 5000</h5>
			</div>			
		</div>
		<div class="col l2 m4 s12" style="padding: 15px;">
			<div id="box" style="border-bottom: 1px solid black">
				<h6>Account Balance</h6>
				<h5 style="margin-bottom: 0px;">INR 10000.45</h5>
			</div>			
		</div>
		<div class="col l2 m4 s12" style="padding: 15px;">
			<div id="box" style="border-bottom: 1px solid black;">
				<h6>Today's Feedback</h6>
				<h5 style="margin-bottom: 0px;">0</h5>
			</div>			
		</div>
		<div class="col l2 m4 s12" style="padding: 15px;">
			<div id="box" style="border-bottom: 1px solid black;">
				<h6>Seller level forecast</h6>
				<h5 style="margin-bottom: 0px; font-size: 27px; padding-bottom: 3px;">Above Standard</h5>
			</div>			
		</div>
	</div>

	<!-- Tasks and Sales Section -->
	<div class="row">
		<div class="col l4 m4 s12">
			<div style="border : 1px solid gray;">
				<h6 style="border-bottom : 1px solid gray; font-size: 20px; color:black; padding: 10px 8px 10px 8px">Tasks</h6>
				<ul id="tasklist">
					<li><a href="#">Messages<span class="badge red white-text">5</span></a></li>
					<li><a href="#">Shipments<span class="badge red white-text">5</span></a></li>
					<li><a href="#">Feedback<span class="badge red white-text">5</span></a></li>
				</ul>
			</div>
		</div>
		<div class="col l8 m8 s12">
			<div style="border : 1px solid gray">
				<h6 style="border-bottom : 1px solid gray; font-size: 20px; color:black; padding: 10px 8px 10px 8px">Sales</h6>
				<div class="row">
					<div class="col l3 m3 s6">
						<h6 style="color: gray; font-size: 18px;text-align: center">Today</h6>
						<h5 style="margin-top : 0px; text-align: center"><i class="fa fa-rupee">25000</i></h5>
					</div>
					<div class="col l3 m3 s6">
						<h6 style="color: gray; font-size: 18px;text-align: center">Last 7 days</h6>
						<h5 style="margin-top : 0px; text-align: center"><i class="fa fa-rupee">25000</i></h5>
					</div>
					<div class="col l3 m3 s6">
						<h6 style="color: gray; font-size: 18px;text-align: center">Last 31 days</h6>
						<h5 style="margin-top : 0px; text-align: center"><i class="fa fa-rupee">25000</i></h5>
					</div>
					<div class="col l3 m3 s6">
						<h6 style="color: gray; font-size: 18px;text-align: center">Last 90 days</h6>
						<h5 style="margin-top : 0px; text-align: center"><i class="fa fa-rupee">25000</i></h5>
					</div>
				</div>
				<div class="row">
					<div class="col l3 m3 s6">
						<div class="progress">
							<div class="determinate" style="width: 50%;"></div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="progress">
							<div class="determinate" style="width: 50%;"></div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="progress">
							<div class="determinate" style="width: 50%;"></div>
						</div>
					</div>
					<div class="col l3 m3 s6">
						<div class="progress">
							<div class="determinate" style="width: 50%;"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<!--Selling tools section-->
		<div class="col l4 m4 s12">
			<div style="border:1px solid gray;">
				<h6 style="color : black; font-size: 20px; border-bottom: 1px solid gray;padding: 8px 6px 8px 6px;">Selling Tools</h6>
				<ul id="selltools">
					<li><a href="#">My Profile(profile name)</a></li>
					<li><a href="#">View listings</a></li>
					<li><a href="#">Manage Profile</a></li>
					<li><a href="#">Create Sale</a></li>
					<li><a href="#">My Peformance</a></li>
				</ul>
			</div>
		</div>
		<div class="col l4 m4 s12">
			<div style="border:1px solid gray;">
				<h6 style="color : black; font-size: 20px; border-bottom: 1px solid gray; padding: 8px 6px 8px 6px;">Seller Level</h6>
				<ul id="selltools">
					<li><a href="#">Current Seller Level<span class="right blue-text">Above Standard</span></a></li>
					<li><a href="#">Transactions (Last 12 months) <span class="right blue-text">250</span></a></li>
					<li><a href="#">Sales (Last 12 months) <span class="right blue-text">25000</span></a></li>
					<li><a href="#">&nbsp;</a></li>
					<li><a href="#">&nbsp;</a></li>
				</ul>
			</div>
		</div>
		<div class="col l4 m4 s12">
			<div style="border:1px solid gray;">
				<h6 style="color : black; font-size: 20px; border-bottom: 1px solid gray; padding: 8px 6px 8px 6px;">Listing Offers</h6>
				<h6 style="margin-left: 10px; font-weight: 600; color: black; font-size: 17px;">Fixed Price Listings</h6>
				<p style="margin-left: 10px; color: gray">
					Start Date - <?= date('d-M-Y',strtotime($fixlst_data->sl_stdate));?> <br>
					End Date - <?= date('d-M-Y',strtotime($fixlst_data->sl_ldate)); ?>
				</p>
				<p style="padding-left: 10px; border-bottom: 1px solid gray; color: gray">Used/Left : <span class="blue-text"><?= count($used_fixlist); ?></span>/<?= $fixlst_data->sl_num - count($used_fixlist) ;?></p>
				<h6 style="margin-left: 10px; font-weight: 600; color: black; font-size: 17px;">Auction Price Listings</h6>
				<p style="margin-left: 10px;color: gray">
					Start Date - <?= date('d-M-Y',strtotime($auc_data->sl_stdate));?> <br>
					End Date - <?= date('d-M-Y',strtotime($auc_data->sl_ldate)); ?>
				</p>
				<p style="padding-left: 10px;color: gray">Used/Left : <span class="blue-text"><?= count($used_auclst);?></span>/<?= $auc_data->sl_num - count($used_auclst); ?></p>
			</div>
		</div>
	</div>

	<div class="row">
		<!--Feedback section-->
		<div class="col l4 m4 s6">
			<div style="border : 1px solid gray">
				<h6 style="color : black; font-size: 20px; border-bottom: 1px solid gray; padding: 8px 6px 8px 6px;">Feedbacks</h6>
				<ul id="feedback">
					<li><a href="#">Positive<span class="badge red white-text">100</span></a></li>
					<li style="border-bottom : 1px solid gray"><a href="#">Negative<span class="badge red white-text">80</span></a></li>
					<li><a href="#">Feedback 1</a></li>
					<li><a href="#">Feedback 2</a></li>
					<li><a href="#">Feedback 3</a></li>
				</ul>
			</div>
		</div>
		<!--Account Summary-->
		<div class="col l4 m4 s12">
			<div style="border:1px solid gray;">
				<h6 style="color : black; font-size: 20px; border-bottom: 1px solid gray; padding: 8px 6px 8px 6px;">Account Summary</h6>
				<h6 style="margin-left: 10px; font-weight: 600; color: black; font-size: 17px;">Invoice</h6>
				<p style="margin-left: 10px;color: gray">
					Last Invoice - <i class="fa fa-inr"></i>&nbsp;3,250 <br>
					New Invoice - <i class="fa fa-inr"></i>&nbsp;550
				</p>
				<hr>
				<h6 style="margin-left: 10px; font-weight: 600; color: black; font-size: 17px;"> Our Balance</h6>
				<p style="margin-left: 10px;color: gray">
					Balance - <i class="fa fa-inr">&nbsp;2,580</i>
				</p>
			</div>
		</div>
	</div>

	<!--IsVerified Modal-->
	<div class="modal" id="is_verified_modal">
		<div class="modal-content">
			<h6 style="color: red">Account Not Verified! <span class="right fa fa-exclamation-circle"></span></h6>
			<p style="font-size:18px;color:#26a2de">Please get your Account Verified first.</p>
		</div>
	</div>
	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Ajax File Include-->
	<script type="text/javascript" src="<?= base_url('assets/ajax/ajax.js');?>"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>

	<!--custom JS-->
	<script type="text/javascript">
		$('document').ready(function(){
			$('.dropdown-trigger').dropdown({coverTrigger : false, hover:true});

			//Verify Seller Script
			$.ajax({
				type : "ajax",
				method : "POST",
				url : "CheckIsVerifiedSeller",
				success : function(data){
					if(data == "true")
					{
						/* Nothing to do here....*/
					}
					else
					{
						$('.modal').modal({dismissible:false});
						$('#is_verified_modal').modal('open');
					}
				},
				error : function(){
					console.log("Ajax Request Error : ");
				}
			});
		});
	</script>
</body>
</html>

<?php
	if($msg = $this->session->flashdata('msg'))
	{
		echo "<script>M.toast({html : '$msg'});</script>";
	}
?>