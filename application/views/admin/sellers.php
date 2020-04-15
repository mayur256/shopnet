<!DOCTYPE html>
<html>
<head>
	<title>Sellers | Admin</title>
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
		body{background-color: rgba(238,238,238,1);}
		nav{height:40px;line-height: 40px;background-color:white;box-shadow: none}
		#seller_table{margin:10px 50px 0px 50px;background-color: rgba(255,255,255,1);text-align:left;}
		#seller_table p{padding: 2px; font-weight:600; font-size:15px;}
	</style>
</head>
<body>
	<nav>
		<div class="nav-wrapper">
			<ul>
				<li><a href="#" class="brand-logo" style="font-size : 23px;margin:0px 0px 0px 10px;color : hsl(218,75%,62%);font-family: Impact">Sellers</a></li>
			</ul>
			<ul class="right">
				<li style="background-color: hsl(218,75%,62%);"><a href="<?=base_url('index.php/Admin'); ?>"> <span class="fa fa-reply"></span> &nbsp;Back to Dashboard</a></li>
			</ul>
		</div>
	</nav>

	<div id="seller_banner" style="padding: 5px 0px 5px 30px">
		<h4 style="font-family: 'Sans-Serif'">Sellers' Overview (<?php echo count($allseller_data);?>)</h4>
	</div>
	<div id="seller_table">
		<div class="row" style="background-color: black;color: white;">
			<div class="col l2 m2 s2">
				<p>Seller Name</p>
			</div>
			<div class="col l2 m2 s2">
				<p>Company Name</p>
			</div>
			<div class="col l2 m2 s2">
				<p>Email ID</p>
			</div>
			<div class="col l2 m2 s2">
				<p>GST No.</p>
			</div>
			<div class="col l2 m2 s2">
				<p>Registered On</p>
			</div>
			<div class="col l1 m1 s1">
				<p>Verified</p>
			</div>
			<div class="col l1 m1 s1">
				<p>Action</p>
			</div>
		</div>
			<?php if(count($allseller_data)):?>
				<?php foreach($allseller_data as $sel_data): ?>
					<div class="row">
						<div class="col l2 m2 s2">
							<p><?= $sel_data->sfname." ".$sel_data->slname ;?></p>
						</div>
						<div class="col l2 m2 s2">
							<p><?= $sel_data->comp_name;?></p>
						</div>
						<div class="col l2 m2 s2">
							<p><?= $sel_data->semail;?></p>
						</div>
						<div class="col l2 m2 s2">
							<p><?= $sel_data->sgst;?></p>
						</div>
						<div class="col l2 m2 s2">
							<p><?= $sel_data->screate_date;?></p>
						</div>
						<div class="col l1 m1 s1">
							<?php if($sel_data->verified !== "yes"): ?>
								<a href='<?= base_url("index.php/Admin/VerifySeller/{$sel_data->sid}");?>'><button type="button" class="btn waves-effect waves-light blue">Verify</button></a>
							<?php else:?>
								<p><span style="background-color: green;color: white;padding: 5px;">Verified</span></p>
							<?php endif;?>
						</div>
						<div class="col l1 m1 s1">
							<?php if($sel_data->verified !== "yes"):?>
								<button type="button" class="btn waves-effect waves-light blue" disabled>more</button>
							<?php else: ?>
								<button type="button" class="btn waves-effect waves-light blue">more</button>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach;?>
			<?php endif;?>
	</div>

	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Ajax JS File Include-->
	<script type="text/javascript" src="<?= base_url('/assets/ajax/ajax.js');?>"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>
</body>
</html>

<?php
	if($msg = $this->session->flashdata('msg'))
	{
		echo "<script>M.toast({html : '$msg'})</script>";
	} 
?>