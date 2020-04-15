<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Materialize CSS file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/materialize/css/materialize.css">
	<!--font awesome file path-->
	<link rel="stylesheet" href="http://127.0.0.1:8080/shopnet/assets/font/css/font-awesome.css">
	<!--Materialize CSS Icons-->
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<!--Custom CSS files-->
	<style type="text/css">
		#apexbar{background-color: #b96906de;}
		#electronics_menu, #menfashion_menu, #womenfashion_menu, #furniture_menu, #sports_menu{width : 100% !important ;}
		#electronics_menu h6, #menfashion_menu h6, #womenfashion_menu h6, #furniture_menu h6, #sports_menu h6{color : red;}
		#set_ele_menu a{line-height: 20px;padding: 0; color: silver;}
		#set_ele_menu a:hover{background-color: white; color: black;}
		#menfashion_menu, #womenfashion_menu, #furniture_menu, #sports_menu{left : 1px !important;}
		#set_footer_links li a{color: white; line-height: 30px;}
		#set_footer_links li a:hover{color: black; text-decoration : underline;}
		#set_search{width : 50%; border: 1px solid white; box-shadow: none; margin-left: 16%; background-color: white; padding-left: 20px;}
		#set_search_btn{height: 47px; line-height:45%; margin-top: -5px; margin-left: -4.8px; background-color: white; color: black; box-shadow: none;border-radius: 0px}
		#set_mobile_search{border : 1px solid white;background:white;padding-left: 7px; margin-left: -4px;}
		form{display:inline;}
	</style>
</head>
<body>
	<!--apexbar section begins here-->
	<div id="apexbar" class="hide-on-med-and-down">
		<span class="white-text"><i class="fa fa-phone"></i> : 8200842137 | <i class="fa fa-envelope"></i> : mayur@gmail.com</span>
		<span class="right white-text"><i class="fa fa-gift"></i>&nbsp;Gift Card | Sell on Shop</span>
	</div>
	<!--apexbar section-->
	<nav class="blue">
		<!--Navbar-->
		<div class="nav-wrapper">
			<a href="<?= $_SERVER['PHP_SELF']?>" class="brand-logo left">Shopinet</a>

			<!--Search Box begins here -->
			<?= form_open();?>
			<input type="text" name="" id="set_search" placeholder="Search Products here" class="hide-on-med-and-down">
			<button type="button" id="set_search_btn" class="btn waves-effect waves-light hide-on-med-and-down">Search</button>
			<?= form_close();?>
			<!--/Search Box-->
			<!--Menu button for mobile-->
				<a href="#!" data-target="mobile_menu" class="sidenav-trigger right"><i class="material-icons">menu</i></a>
			<!--/menu button-->

			<!--Mobile menu items-->
			<ul class="sidenav" id="mobile_menu">
				<li><a href="#" class="blue white-text">Product Category</a></li>
				<li><a href="#">Electronics</a></li>
				<li><a href="#!">Men Fashion</a></li>
				<li><a href="#!">Women Fashion</a></li>
				<li><a href="#!">Home & Furniture</a></li>
				<li><a href="#!">Sports & Stationary</a></li>
			</ul>

			<!--menu on the right-->
			<ul class="right hide-on-med-and-down">
				<li><a href="#"> <i class="fa fa-shopping-cart"></i>&nbsp;Cart</a></li>
				<li><a href="#"> <i class="fa fa-sign-in"></i>&nbsp;SignUp</a></li>
				<li><a href="#"> <i class="fa fa-sign-in"></i>&nbsp;Login</a></li>
			</ul>
			<!--/menu-->
		</div>
		<!--Navbar ends here-->
	</nav>
	<!--Category/Items menubar begins-->
	<nav class="blue hide-on-med-and-down" style="height: 35px; line-height: 35px;box-shadow: none">
		<div class="container">
			<div class="nav-wrapper">
				<ul class="left">
					<li><a href="#" class="dropdown-trigger" data-target="electronics_menu">Electronics</a></li>
						<ul id="electronics_menu" class="dropdown-content">
							<!--Electronics items-->
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Mobiles</h6>
									<ul id="set_ele_menu">
										<a href="">Samsung</a>
										<a href="">Sony</a>
										<a href="">Oppo</a>
										<a href="">Vivo</a>
										<a href="">MI</a>
										<a href="">Apple</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Mobile Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">Headphones</a>
										<a href="">Power Bank</a>
										<a href="">Screen Guard</a>
										<a href="">Memory Card</a>
										<a href="">Chargers</a>
										<a href="">Gorilla Glass</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Laptops</h6>
									<ul id="set_ele_menu">
										<a href="">Dell</a>
										<a href="">HP</a>
										<a href="">Lenevo</a>
										<a href="">Acer</a>
										<a href="">Samsung</a>
										<a href="">Sony</a>
										<a href="" class="blue-text">View more</a>
									</ul>
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/1.png" style="margin-top : 10px; width : 100%; height: 100%"; />
								</div> 
								<div class="col l3 m6 s12">
									<h6>Tablets</h6>
									<ul id="set_ele_menu">
										<a href="">Apple</a>
										<a href="">Samsung</a>
										<a href="">Micomax</a>
										<a href="">Lenevo</a>
										<a href="">Asus</a>
										<a href="">iball</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Computers</h6>
									<ul id="set_ele_menu">
										<a href="">Asus</a>
										<a href="">Apple</a>
										<a href="">Dell</a>
										<a href="">HP</a>
										<a href="">Lenevo</a>
										<a href="">iball</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Computer Accessories</h6>
									<ul id="set_ele_menu">
										<a href="">Monitors</a>
										<a href="">Keyboards</a>
										<a href="">Mouse</a>
										<a href="">Hard disks</a>
										<a href="">RAM</a>
										<a href="">Processors</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/2.jpg" style="width : 100%; height: 100%; margin-top : 10px"; />
								</div>
							</div>
						</ul>

					<li><a href="#" class="dropdown-trigger" data-target="menfashion_menu">Men's Fashion</a></li>
						<ul id="menfashion_menu" class="dropdown-content">
							<!--Men fashion items-->
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Footwears</h6>
									<ul id="set_ele_menu">
										<a href="#">Sports shoes</a>
										<a href="#">Formal Shoes</a>
										<a href="#">Office Shoes </a>
										<a href="#">Running Shoes</a>
										<a href="#">Sandals</a>
										<a href="#">Boots</a>
										<a href="#" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Top Wears</h6>
									<ul id="set_ele_menu">
										<a href="#">Shirts</a>
										<a href="#">T-Shirts</a>
										<a href="#">Screen Guard</a>
										<a href="#">Kurtas</a>
										<a href="#">Suits</a>
										<a href="#">Blazzer</a>
										<a href="#" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Bottom Wears</h6>
									<ul id="set_ele_menu">
										<a href="#">Trousers</a>
										<a href="#">Jeans</a>
										<a href="#">Shorts</a>
										<a href="#">Pants</a>
										<a href="" class="blue-text">View more</a>
									</ul>
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/3.jpg" class="responsive-img" />
								</div> 
								<div class="col l3 m6 s12">
									<h6>Watches</h6>
									<ul id="set_ele_menu">
										<a href="#">Apple</a>
										<a href="#">Fast Track</a>
										<a href="#">Sonata</a>
										<a href="#">Puma</a>
										<a href="#">Nike</a>
										<a href="#">Smart Watches</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Accessories</h6>
									<ul id="set_ele_menu">
										<a href="#">Belts</a>
										<a href="#">Wallets</a>
										<a href="#">Sun Glasses</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/2.jpg" style="width : 100%; height: 100%; margin-top : 10px"; />
								</div>
							</div>
						</ul>


					<li><a href="" class="dropdown-trigger" data-target="womenfashion_menu">Women's Fashion</a></li>

						<ul id="womenfashion_menu" class="dropdown-content">
							<!--Women fashion items-->
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Ethnic Wears</h6>
									<ul id="set_ele_menu">
										<a href="#">Saree</a>
										<a href="#">Kurti</a>
										<a href="#">Lehenga & Choli</a>
										<a href="#">Blouse</a>
										<a href="#">Suits & Salwar</a>
										<a href="#" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Foot Wears</h6>
									<ul id="set_ele_menu">
										<a href="#">Sandals</a>
										<a href="#">Heels</a>
										<a href="#">Sports Shoes</a>
										<a href="#">Slippers</a>
										<a href="#" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Beauty</h6>
									<ul id="set_ele_menu">
										<a href="#">Make Up</a>
										<a href="#">Skin Care</a>
										<a href="#">Hair Care</a>
										<a href="#">Perfumes</a>
										<a href="" class="blue-text">View more</a>
									</ul>
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/5.jpg" class="responsive-img" style="margin-top : 10px" />
								</div> 
								<div class="col l3 m6 s12">
									<h6>Jewelery</h6>
									<ul id="set_ele_menu">
										<a href="#">Artificial Jewelery</a>
										<a href="#">Silvery Jewelery</a>
										<a href="#">Rings</a>
										<a href="#">Earrings</a>
										<a href="#">Necklace</a>
										<a href="#">Pendent</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Accessories</h6>
									<ul id="set_ele_menu">
										<a href="#">Hand Bags</a>
										<a href="#">Shoulder Bags</a>
										<a href="#">Belts</a>
										<a href="#">Wallets</a>
										<a href="#">Sun Glasses</a>
										<a href="">iball</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/6.jpg" class="responsive-img" />
								</div>
							</div>
						</ul>


					<li><a href="#" class="dropdown-trigger" data-target="furniture_menu">Home & Furniture</a></li>

						<ul id="furniture_menu" class="dropdown-content">
							<!--Home furniture items-->
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Kitchen Storage</h6>
									<ul id="set_ele_menu">
										<a href="#">Water Bottles</a>
										<a href="#">Lunch Box</a>
										<a href="#">Cups</a>
										<a href="#">Plates</a>
										<a href="#" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Furniture</h6>
									<ul id="set_ele_menu">
										<a href="#">Beds</a>
										<a href="#">Sofas</a>
										<a href="#">Dinning Tables</a>
										<a href="#">Chairs</a>
										<a href="#" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Home Decor</h6>
									<ul id="set_ele_menu">
										<a href="#">Painting</a>
										<a href="#">Clock</a>
										<a href="#">Calenders</a>
										<a href="#">Posters</a>
										<a href="#">Photo Frames</a>
										<a href="" class="blue-text">View more</a>
									</ul>
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/7.jpg" class="responsive-img" style="margin-top : 10px" />
								</div> 
								<div class="col l3 m6 s12">
									<h6>Lights</h6>
									<ul id="set_ele_menu">
										<a href="#">LED</a>
										<a href="#">CFL</a>
										<a href="#">Other Bulbs</a>
										<a href="#">Tube-light</a>
										<a href="#">Lamps</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									
								</div>
								<div class="col l3 m6 s12">
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/8.jpg" class="responsive-img" style="height:80%; margin-top : 10px" />
								</div>
							</div>
						</ul>

					<li><a href="" class="dropdown-trigger" data-target="sports_menu">Sports & Stationary</a></li>

						<ul id="sports_menu" class="dropdown-content">
							<!--Sports and Stationary items-->
							<div class="row">
								<div class="col l3 m6 s12">
									<h6>Books</h6>
									<ul id="set_ele_menu">
										<a href="#">Comics</a>
										<a href="#">Business</a>
										<a href="#">Children</a>
										<a href="#">Biography</a>
										<a href="#">Magazines</a>
										<a href="#" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Stationary</h6>
									<ul id="set_ele_menu">
										<a href="#">Pen</a>
										<a href="#">Pencil</a>
										<a href="#">Notebooks</a>
										<a href="#">key Chains</a>
										<a href="#">Calculators</a>
										<a href="#" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Gaming</h6>
									<ul id="set_ele_menu">
										<a href="#">PS4</a>
										<a href="#">Xbox</a>
										<a href="#">Consoles</a>
										<a href="#">Accessories</a>
										<a href="" class="blue-text">View more</a>
									</ul>
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/9.jpg" class="responsive-img" style="margin-top : 10px" />
								</div> 
								<div class="col l3 m6 s12">
									<h6>Sports</h6>
									<ul id="set_ele_menu">
										<a href="#">Cricket</a>
										<a href="#">Football</a>
										<a href="#">Tennis</a>
										<a href="#">Badminton</a>
										<a href="#">Basketball</a>
										<a href="#">Skating</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									<h6>Fitness</h6>
									<ul id="set_ele_menu">
										<a href="#">Dumbles</a>
										<a href="#">Home Gym</a>
										<a href="#">Cycle</a>
										<a href="#">Running Track</a>
										<a href="" class="blue-text">View more</a>
									</ul>
								</div>
								<div class="col l3 m6 s12">
									
								</div>
								<div class="col l3 m6 s12">
									<img src="http://127.0.0.1:8080/shopnet/assets/images/menu-images/10.png" class="responsive-img" style="margin-top : 20px;" />
								</div>
							</div>
						</ul>
				</ul>
			</div>
		</div>
	</nav>
	<!--Category/Items ends-->

	<!--Search button for mobile -->
	<div class="blue hide-on-med-and-up" style="padding: 10px">
		<?= form_open(); ?>
		<input type="text" name="" id="set_mobile_search" placeholder="Search Products here">
		<?= form_close(); ?>
	</div>

	<!--Carousel Section Begins here-->
	<div class="carousel carousel-slider">
    	<a class="carousel-item" href="#one!"><img src="http://127.0.0.1:8080/shopnet/assets/images/sliders/1.jpg" class="responsive-img"></a>
    	<a class="carousel-item" href="#two!"><img src="http://127.0.0.1:8080/shopnet/assets/images/sliders/2.jpg" class="responsive-img"></a>
    	<a class="carousel-item" href="#one!"><img src="http://127.0.0.1:8080/shopnet/assets/images/sliders/3.png" class="responsive-img"></a>
  	</div>
	<!--Carousel section ends-->

	<!--Deal of the day section-->
	<div class="row">
		<h4 class="center">Deals of the day!</h4>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/1.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
				
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/2.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
				
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
				
			</div>
		</div>
		
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/2.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
				
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/1.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
				
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
				
			</div>
		</div>
	</div>

	
	
	<!--Electronics Product Section-->
	<div class="row">
		<h3 class="center">Electronics</h3>
		<!--Banner for Electronics Section-->
		<div class="row">
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/electronics/elec_banner1.jpg" class="responsive-img">
			</div>
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/electronics/elec_banner2.jpg" class="responsive-img">
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>

	<!--Men's Fashion Product Section-->
	<div class="row">
		<h3 class="center">Men's Fashion</h3>
		<!--Banner for Men's fashion Section-->
		<div class="row">
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/men/men_banner1.jpg" class="responsive-img">
			</div>
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/men/men_banner2.jpg" class="responsive-img">
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>

	<!--Women's Fashion Product Section-->
	<div class="row">
		<h3 class="center">Women's Fashion</h3>
		<!--Banner for women fashion Section-->
		<div class="row">
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/women/women_banner1.jpg" class="responsive-img">
			</div>
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/women/women_banner2.jpg" class="responsive-img">
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>

	<!--Home & Furniture Product Section-->
	<div class="row">
		<h3 class="center">Home & Furniture</h3>
		<!--Banner for home & furniture Section-->
		<div class="row">
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/home decor/home_banner1.jpg" class="responsive-img">
			</div>
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/home decor/home_banner2.jpg" class="responsive-img" style="width : 100%">
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>

	<!--Sports & Stationary Product Section-->
	<div class="row">
		<h3 class="center">Sports & Stationary</h3>
		<!--Banner for sports and stationary Section-->
		<div class="row">
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/sports/sports_banner1.png" class="responsive-img" style="height: 100%">
			</div>
			<div class="col l6 m6 s12">
				<img src="http://127.0.0.1:8080//shopnet/assets/images/sports/sports_banner2.jpg" class="responsive-img" style="height: 100%">
			</div>
		</div>
		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>

		<div class="col l2 m4 s6">
			<div class="card">
				<div class="card-image">
					<img src="http://127.0.0.1:8080/shopnet/assets/images/deal/3.jpg" class="responsive-img">
				</div>
				<div class="card-content">
					<p>Product Title</p>
					<h6><span class="fa fa-inr"></span>150/-</h6>
					<p>70% Off</p>
				</div>
			</div>
		</div>
	</div>

	<!--Footer Section-->
	<footer class="page-footer blue">
			<div class="row">
				<div class="col l3 m4 s6">
					<h5>About Us</h5>
					<p style="text-align: justify;">To change the overall look of your document, choose new Theme elements on the Page Layout tab. To change the looks available in the Quick Style gallery, use the Change Current Quick Style Set command.</p>
					<p style="text-align: justify"> Both the Themes gallery and the Quick Styles gallery provide reset commands so that you can always restore the look of your document to the original contained in your current template.</p>
				</div>
				<div class="col l3 m4 s6">
					<h5>Categories</h5>
					<ul id="set_footer_links">
						<li><a href="#">Electronics</a></li>
						<li><a href="#">Men's Fashion</a></li>
						<li><a href="#">Women's Fashion</a></li>
						<li><a href="#">Home & Furniture</a></li>
						<li><a href="#">Sports & Stationary</a></li>
					</ul>
				</div>
				<div class="col l3 m4 s6">
					<h5>Important Links</h5>
					<ul id="set_footer_links">
						<li><a href="#">Home</a></li>
						<li><a href="#">Create Account</a></li>
						<li><a href="#">Login</a></li>
						<li><a href="#">Cart</a></li>
						<li><a href="#">Offers</a></li>
						<li><a href="<?= base_url('index.php/seller/index');?>">Seller Account</a></li>

					</ul>
				</div>
				<div class="col l3 m4 s6">
					<h5>Developer Address</h5>
					<p><span class="fa fa-map-marker"></span> xyz, Galaxy Apartment, Andheri,<br/> <span style="padding-left: 12px;"></span>Mumbai-400202.</p>
					<p><span class="fa fa-phone"></span> +91 - 8200842137</p>
					<p><span class="fa fa-envelope"></span>mayur123a@gmail.com</p>
				</div>
			</div>
          <div class="footer-copyright" style="background-color: #b96906de">
            <div class="container">
            © 2020 to <?= date('Y');?> &nbsp;Copyright recieved
            <a class="grey-text text-lighten-4 right" href="#!">Designed by xyz</a>
            </div>
          </div>
    </footer>
	<!--JQuery JS file path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/jquery/jquery.js"></script>
	<!--Materialize JS File Path-->
	<script type="text/javascript" src="http://127.0.0.1:8080/shopnet/assets/materialize/js/materialize.js"></script>
	<!--Custom JS-->
	<script type="text/javascript">
		$('document').ready(function(){
			$('.dropdown-trigger').dropdown({
				coverTrigger : false
			});
			$('.sidenav').sidenav();
			$('.carousel.carousel-slider').carousel({
				fullWidth : true
			});
		});
	</script>
	<?php //echo $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'/mElectronicMenu'?>
</body>
</html>