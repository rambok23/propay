<!DOCTYPE html>
<html lang="EN">

	<head>

		<title> ProPay.com – Simpler. Faster. Friendlier </title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- TAB LOGO LINK-->
		<link rel="shortcut icon" href="image/logo.ico" type="image/png">

		<!-- CSS Link -->
		<link rel="stylesheet" type="text/css" href="./css/temp.css">

		<!-- JAVASCRIPT LINK
		<script src="js/javascript.js"></script> -->

		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
		<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">

		<!-- BOOTSTRAP
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
		<link href="css/bootstrap-select.css" rel="stylesheet" text="text/css" media="all" /> -->

		<!-- BOOTSTRAP  -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		
		<!-- Fonts -->
 	   <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all" />
	</head>

<body>

	<div class="too">

		<div class="topbar">.</div>
			<a href="recharge.php"> <img src="image/logo.png" alt="ProPay"> </a>
			<div class="linkwall">
				<ul>
						<li data-toggle="modal" data-target="#myModal"> <a class="alin" href="#" title="Login"> <i class="fas fa-globe"></i> Login </a></li>
						<li data-toggle="modal" data-target="#myModal1"> <a class="alin" href="#" title="Signup"> <i class="fas fa-user-graduate"></i> Signup </a></li>
		
			<!-- SIGN UP MODAL -->
					<div class="modal fade" id="myModal1" role="dialog">
						<div class="modal-dialog">
						
						<div class="modal-content">
				
							<div class="modal-header">
								<h4 class="modal-title"> SIGN-UP </h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="content login-box">
									<div class="login-main">
										<div class="wrap">
											<div class="login-left">
												<h3> CREATE AN ACCOUNT</h3>

												<form id="signupform" action="sign.php" method="post">

												<div>
													<span>Name<label>*</label></span>
													<input type="text" name="name">
												</div>

												<div>
													<span>Email Address<label>*</label></span>
													<input type="Email" name="email">
												</div>
				
												<div>
													<span>Password<label>*</label></span>
													<input type="Password" name="password"> 
												</div>

												<div class="clearfix"> </div>

													<input type="submit" value="Signup" name="submit1" id="submit1">
												</div>

												</form>

												<div>
													<div class="clearfix"> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div> <!-- Signup -->
		<!-- LOGIN MODAL -->
				
					<div class="modal fade" id="myModal" role="dialog">
						<div class="modal-dialog">
						
						<div class="modal-content">
				
							<div class="modal-header">
								<h4 class="modal-title"> LOG IN </h4>
								<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>

							<div class="modal-body">
								<div class="content login-box">
									<div class="login-main">
										<div class="wrap">
											<div class="login-left">
												<h3> REGISTERED CUSTOMERS</h3>
												<p>If you have an account with us, please log in.</p>

												<form id="myform" action="info.php" method="post">

												<div>
													<span>Email Address<label>*</label></span>
													<input type="Email" name="mail" class="form-control">
												</div>
				
												<div>
													<span >Password<label>*</label></span>
													<input type="Password" name="pass" class="form-control"> 
												</div>

												<div class="clear"> </div>
													<a href="#">Forgot Your Password?</a>
													<input id="submit" name="submit" type="submit" value="Login">
												</div>

												</form>

												<div>
													<div class="clear"> </div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						</div>
					</div>  <!-- LOGIN -->

				</ul>

			</div>
		</div>

			<div class="top_search">
				<input type="text" placeholder="Search for a Product, Brand Or Category">
				<button> <i class='fas fa-search'></i> </button>
			</div>
		<div class="clearfix"></div>
		<div class="topbar" style="margin-top: 1em;">.</div>	
		</div>
<!--	<nav>

			<a class="hvr-shutter-in-vertical" href="recharge.html" title="Recharge"><i class="fas fa-mobile-alt"></i> RECHARGE </a>
			<a class="hvr-shutter-in-vertical" href="shopping.html" title="Shopping"><i class="fas fa-shopping-cart"></i> SHOPPING </a>
			<a class="hvr-shutter-in-vertical" href="bus.html" title="Book Bus Tickets"><i class="fas fa-bus"></i> BUS </a>
			<a class="hvr-shutter-in-vertical" href="train.html" title="Book Train Tickets"><i class="fas fa-train"></i> TRAIN </a>
			<a class="hvr-shutter-in-vertical" href="flights.html" title="Book Flights"><i class="fas fa-plane"></i> FLIGHTS </a>
			<a class="hvr-shutter-in-vertical" href="movies.html" title="Book Movie Tickets"><i class="fas fa-bullhorn"></i> MOVIES </a>
	</nav> -->

	<div class="banner">
	<div class="containerr">
		<div class="banner-info">
			<h3>Get Free Coupons and Discounts on Top Brands With Every Recharge</h3>
		</div>
		<div class="buttons">
			<ul>
				<li><a class="hvr-shutter-in-vertical" href="mobile.html">Mobile</a></li>
				<li><a class="hvr-shutter-in-vertical" href="dth.html">DTH</a></li>
				<li><a class="hvr-shutter-in-vertical" href="datacard.html">Datacard</a></li>
				<li><a class="hvr-shutter-in-vertical" href="electricity.html">Electricity</a></li>
			</ul>
			
		</div>
	</div>
</div>

<div class="content-bottom">
		<div class="btm-grids">
			<div class="col-md-4 btm-grid back-col1">
				<img src="image/bbb5.png" alt="" />
			</div>
			<div class="col-md-4 btm-grid btm-wid">
				<h3>SPECIAL RECHARGE OFFERS</h3>
				<p>	Fast and Easy Recharge
					Your mobile recharge either prepaid or postpaid is just a click away with Propay! <br>
					<!--Trusted by over 27 million users, Propay is your one-stop shop solution for online recharge. <br>
					For every prepaid recharge that you complete on Propay, you may get special rewards that include cashback and exciting coupons.-->
				</p>
			</div>
			<div class="col-md-4 btm-grid back-col2">
				<img src="image/bbb1.png" alt="" />
			</div>
            <div class="clearfix"></div>	
		</div>
</div>

<div class="phone" id="mobileappagileits">
		<div class="containerr">
			<div class="col-md-6">
				<img src="image/ph1.png" class="img-responsive" alt=""/>
			</div>
			<div class="col-md-6 phone-text">
				<h4>Online Payment mobile app on your smartphone!</h4>
                <p class="subtitle">Simple and Fast Payments</p>
					<div class="text-1">
						<h5>Recharge</h5>
						<p>Recharge your Mobile, DTH, Datacard etc...</p>
					</div>
					<div class="text-1">
						<h5>Paybills</h5>
						<p>Pay your Bills(Electricity, Water, Gas, Broadband, Landline etc...)</p>
					</div>
					<div class="text-1">
						<h5>Book Online</h5>
						<p>Book Online Tickets(Movies, Bus, Train etc...)</p>
					</div>
					<div class="agileinfo-dwld-app">
							<h6>Download The App : 
								<a href="#"><i class="fa fa-apple"></i></a>
								<a href="#"><i class="fa fa-windows"></i></a>
								<a href="#"><i class="fa fa-android"></i></a>
							</h6>
						</div>
			</div>
            <div class="clearfix"></div>
            
            <div class="mobile-app">
            		<div class="col-7">
						<form>
							<input class="text" type="tel" value="Enter Your Mobile Number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Your Mobile Number';}" required="">
							<input type="submit" value="Send Download Link">
						</form>
					</div>
			</div>
		</div>
	</div>

<!--footer-->
<footer>
	<div class="containerr-fluid">
		
		<div class="footer-top">
		
			<div class="col-md-2 footer-head">
		
				<h4>Company</h4>
				<ul class="nav-bottom">
					<li><a href="about.html">About Us</a></li>
					<li><a href="support.html">Support</a></li>
					<li><a href="sitemap.html">Sitemap</a></li>
					<li><a href="terms.html">Terms & Conditions</a></li>
					<li><a href="faq.html">Faq</a></li>	
					<li><a href="#mobileappagileits" class="scroll">Mobile</a></li>	
					<li><a href="feedback.html">Feedback</a></li>	
					<li><a href="contact.html">Contact</a></li>
					<li><a href="shortcodes.html">Shortcodes</a></li>
					<li><a href="icons.html">Icons Page</a></li>
					
				</ul>	
			</div>
		
			<div class="col-md-3 footer-head">
				<h4>Mobile Recharges</h4>
					<ul class="nav-bottom">
						<li><a href="#">Airtel</a></li>
						<li><a href="#">Aircel</a></li>
						<li><a href="#">Vodafone</a></li>
						<li><a href="#">BSNL</a></li>
						<li><a href="#">Tata Docomo</a></li>
						<li><a href="#">Reliance GSM</a></li>	
						<li><a href="#">Reliance CDMA</a></li>	
						<li><a href="#">Telenor</a></li>	
						<li><a href="#">MTS</a></li>	
						<li><a href="#">Jio</a></li>	
					</ul>	
			</div>

			<div class="col-md-3 footer-head">
				<h4>DATACARD RECHARGES</h4>
				   <ul class="nav-bottom">
						<li><a href="#">Tata Photon</a></li>
						<li><a href="#">MTS MBlaze</a></li>
						<li><a href="#">MTS MBrowse</a></li>
						<li><a href="#">Airtel</a></li>
						<li><a href="#">Aircel</a></li>
						<li><a href="#">BSNL</a></li>	
						<li><a href="#">MTNL Delhi</a></li>	
						<li><a href="#">Vodafone</a></li>	
						<li><a href="#">Idea</a></li>	
						<li><a href="#">MTNL Mumbai</a></li>
						<li><a href="#">Tata Photon Whiz</a></li>	
					</ul>	
			</div>
		
			<div class="col-md-2 footer-head">
				<h4>DTH Recharges</h4>
				<ul class="nav-bottom">
						<li><a href="#">Airtel Digital TV Recharges</a></li>
						<li><a href="#">Dish TV Recharges</a></li>
						<li><a href="#">Tata Sky Recharges</a></li>
						<li><a href="#">Reliance Digital TV Recharges</a></li>
						<li><a href="#">Sun Direct Recharges</a></li>
						<li><a href="#">Videocon D2H Recharges</a></li>	
					</ul>	
			</div>
        
            <div class="col-md-2 footer-head">
				<h4>Payment Options</h4>
				   <ul class="nav-bottom">
						<li>Credit Cards</li>
						<li>Debit Cards</li>
						<li>Any Visa Debit Card (VBV)</li>
						<li>Direct Bank Debits</li>
						<li>Cash Cards</li>	
					</ul>	
		
			</div>
		<div class="clearfix"> </div>
		</div>
    </div>

	<div class="footer-bottom">
		<div class="containerr-fluid">
	
			<div class="col-md-8 rights">
				<p>© 2019 PROPAY . All Rights Reserved | Design by <h1 class="credit"> <span class="credit_goes" Rohit </h1> </p>
			</div>
	
			<div class="clearfix"> </div>
	
	 	</div>
	</div>
</footer>
<!-- Footer -->




</body>
</html>
