<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard</title>
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
		body{background-color: rgb(236,236,236,1);}
		nav{height : 40px; line-height: 40px; background-color: rgba(84,138,231); box-shadow: none;}
		#welcome{background-color: rgb(235, 240, 239); padding: 1px 0px 1px 20px;}
		div.modal-content h6{font-family: "Impact";}
		#prod_modal, #brand_modal{width : 30%;}
		select{display: block; border : 1px solid silver; outline: none; margin-top : 20px;}
		#dash-box{outline:none;padding: 20px;padding: 0px 20px 0px 20px;color:white; border : 2px solid none; border-radius:5px;}
	</style>
</head>
<body>
	<!--Apexbar-->
		<nav>
			<div class="nav-wrapper">
				<ul class="right">
					<li><a href="#"><span class="fa fa-envelope"></span> &nbsp;Message </a></li>
					<li><a href="#"><span class="fa fa-cog"></span> &nbsp;Settings </a></li>
					<li><a href="#" class="dropdown-trigger" data-target="profile_menu"><span class="fa fa-user"></span> &nbsp;Profile </a></li>
					<ul class="dropdown-content" id="profile_menu">
						<li><a href="<?= base_url('index.php/Admin/logout');?>">Logout</a></li>
					</ul>
				</ul>
			</div>
		</nav>
	<!--/Apexbar-->

	<!--Welcome Section-->
	<div id="welcome">
		<h4>Admin Control</h4>
		<h6>Welcome to Admin Dashboard</h6>
	</div>

	<nav>
		<div class="nav-wrapper">
			<ul>
				<li><a href="#">Overview</a></li>
				<li><a href="#" class="modal-trigger" data-target="prod_modal">Product</a></li>
				<li><a href="#" class="modal-trigger" data-target="brand_modal">Brand</a></li>
				<li><a href="#">one</a></li>
			</ul>
		</div>
	</nav>

	<!--Product Modal-->
	<div class="modal" id="prod_modal">
		<div class="modal-content">
			<h6><span class="fa fa-cubes"></span>&nbsp; Add Product <span class="right modal-close"><b>X</b></span></h6>
			<div class="input-field">
				<input type="text" name="prod_name" id="prod_name"/>
				<label for="prod_name">Product Name</label>
			</div>
			<button type="button" class="btn waves-effects waves-light" id="save_prod">SAVE</button>
		</div>
	</div>


	<!--Brand Modal-->
	<div class="modal" id="brand_modal">
		<div class="modal-content">
			<h6><span class="fa fa-cubes"></span>&nbsp; Add Brand <span class="right modal-close"><b>X</b></span></h6>
			<div id="select_item_div"></div>
			<div class="input-field">
				<input type="text" name="brand_name" id="brand_name"/>
				<label for="brand_name">Brand Name</label>
			</div>
			<button type="button" class="btn waves-effects waves-light" id="save_brand">SAVE</button>
		</div>
	</div>
	

	<!---->
	<div class="row" style="margin:30px 20px 0px 20px">
		<div class="col l3 m3 s12">
			<div id="dash-box" style="background : linear-gradient(to bottom left,rgb(93,123,233),rgb(25,230,217));">
				<div class="row" style="margin:0;padding: 0px 0px 15px 0px">
					<div class="col l8 m8 s8" style="padding: 0px 0px 0px 20px">
						<h4 id="all_sellers">0</h4>
						<h5><a href="<?= base_url('index.php/Admin/Sellers');?>" style="color:white;">Sellers</a></h5>						
					</div>
					<div class="col l4 m4 s4">
						<h3 class="center" style="margin-top: 50%;"><i class="fa fa-users"></i></h3>
					</div>
				</div>
			</div>
		</div>

		<div class="col l3 m3 s12">
			<div id="dash-box" style="background : linear-gradient(to bottom left,rgb(256,116,118),rgb(245,73,158));">
				<div class="row" style="margin:0;padding: 0px 0px 15px 0px">
					<div class="col l8 m8 s8" style="padding: 0px 0px 0px 20px">
						<h4>102000</h4>
						<h5>Products</h5>						
					</div>
					<div class="col l4 m4 s4">
						<h3 class="center" style="margin-top: 50%;"><i class="fa fa-cubes"></i></h3>
					</div>
				</div>
			</div>
		</div>

		<div class="col l3 m3 s12">
			<div id="dash-box" style="background : linear-gradient(to bottom left,rgb(59,178,182),rgb(65,227,150));">
				<div class="row" style="margin:0;padding: 0px 0px 15px 0px">
					<div class="col l8 m8 s8" style="padding: 0px 0px 0px 20px">
						<h4>102000</h4>
						<h5>Users</h5>						
					</div>
					<div class="col l4 m4 s4">
						<h3 class="center" style="margin-top: 50%;"><i class="fa fa-users"></i></h3>
					</div>
				</div>
			</div>
		</div>

		<div class="col l3 m3 s12">
			<div id="dash-box" style="background : linear-gradient(to bottom left,rgb(255,135,87),rgb(255,218,62));">
				<div class="row" style="margin:0;padding: 0px 0px 15px 0px">
					<div class="col l8 m8 s8" style="padding: 0px 0px 0px 20px">
						<h4>102000</h4>
						<h5>Income</h5>						
					</div>
					<div class="col l4 m4 s4">
						<h3 class="center" style="margin-top: 50%;"><i class="fa fa-inr"></i></h3>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Ajax JS File Include-->
	<script type="text/javascript" src="<?= base_url('/assets/ajax/ajax.js');?>"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>

	<!--Custom JS-->
	<script type="text/javascript">
		$('document').ready(function(){
			$('.dropdown-trigger').dropdown({coverTrigger : false, hover:true});
			$('.modal').modal({dismissible : false});
			});
	</script>

	<!--Ajax Code goes here-->
	<script type="text/javascript">
		$(function(){
			//Add Product
			$('#save_prod').click(function(){
				var prod_name = $('#prod_name').val();
				//console.log(brand_name);
				if(prod_name == '')
				{
					M.toast({html : 'Product name cannot be empty!'});
				}
				else
				{
					$.ajax({
						type : 'ajax',
						method : 'POST',
						url : 'InsertProductName',
						data : {prod_name : prod_name},
						success: function(data){
							if(data == 1)
							{
								alert('Product Successfully Inserted');
							}	
							if(data == 45)
							{
								alert('Product exists already!');
							}
						},
						error : function(){
							alert('Product Insertion Error!');
						}
					});
				}
			});

			//Get Items
			GetItems();
			function GetItems()
			{
				$.ajax({
					type : 'ajax',
					method : 'POST',
					url : 'GetAllItems',
					success : function(data){
						$('#select_item_div').html(data);
					},
					error : function(){
						console.log('No Items for GetItems!');
					}
				});
			}


			//Add Brand to the Item
			$('#save_brand').click(function(){
				var item = $('#item_select').val();
				var brand = $('#brand_name').val();
				if(brand == '')
				{
					M.toast({html : 'Please Enter Brand Name'});
				}
				else
				{
					$.ajax({
						type : 'ajax',
						method : 'POST',
						url : 'ItemBrandInsert',
						dataType : 'json',
						data : {item_id:item, brand_name:brand },
						success : function(data){
							if(data == 1)
							{
								alert("Brand Inserted Successfully!");
							}
							else if(data == 45)
							{
								alert("Brand and Item already Exists!");
							}
						},
						error : function(){
							console.log('Ajax Request Error');
						}
					});
				}
			});

			//Get All Sellers
			GetAllSellers();
			function GetAllSellers()
			{
				$.ajax({
					type : "ajax",
					url : "GetAllSellers",
					beforeSend : function(data){
						$('#all_sellers').text("Waiting...");
					},
					success : function(data){
						$('#all_sellers').html(data);
					},
					error : function(){
						console.log('Ajax Request Error : Cannot fetch all sellers.');
					}
				});
			}
		})
	</script>
</body>
</html>