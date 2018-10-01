<!DOCTYPE HTML>
<?php
session_start();
if(!isset($_SESSION['login_user']));
  //header("Location: login.php");//redirect to login page to secure the welcome page without login access.

?>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Krishiyog Naturals &mdash;Seed to wellness</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">




  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- <link href='https://fonts.googleapis.com/css?family=Work+Sans:400,300,600,400italic,700' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123909367-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123909367-1');
</script>

	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">
		<nav class="gtco-nav" role="navigation">
			<div class="gtco-container">
				<div class="row">
					<div class="col-xs-2">
						<div id="gtco-logo"><a href="index.php"><img src="images/logo0.jpg" style="max-width:300px;max-height: 100px;margin-top:-15px;margin-left:-30px"/></a></div>
					</div>
					<div class="col-xs-10 text-center menu-1">
						<ul>

					<!--	<li ><a class="about-mob"  ><b>About</a></b></li> -->

						<span class="icon">
							<li><a class="active" href="index.php"><i class="icon-home"></i></a></li>
						</span>
							<li><a href="about.php"><b>About</a></b></li>
							<li><a href="index.php#natural farming?"><b>Natural Farming</a></b></li>
							<li><a href="resource.php"><b>Resources</a></b></li>
	            <li><a href="contact.php"><b>Contact us</a></b></li>

							<!--<li class="has-dropdown">
								<a href="#">Services</a>
								<ul class="dropdown">
									<li><a href="#">Shop</a></li>
									<li><a href="#">Discussion forum</a></li>
									<li><a href="#">Sell/Support</a></li>
								</ul>
							</li>-->
							<!--<li class="has-dropdown">
								<a href="#">Tools</a>
								<ul class="dropdown">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Sass</a></li>
									<li><a href="#">jQuery</a></li>
								</ul>
							</li>-->
							<!--<li><a href="contact.php">Contact</a></li>-->
				<!--<li class="has-dropdown">
								<a href="services.html">Services</a>
								<ul class="dropdown">
									<li><a href="#">Web Design</a></li>
									<li><a href="#">eCommerce</a></li>
									<li><a href="#">Branding</a></li>
									<li><a href="#">API</a></li>
								</ul>
							</li>-->
							<li class="has-dropdown">
	              <a ><b>Account</b></a>
	              <ul class="dropdown">
									<li><?php if(!isset($_SESSION['login_user']) && !isset($_SESSION['category']))
												{
													echo "<li><a href='login.php'><b>LOGIN</b></a></li>";
													echo "<li><a href='signup2.php'><b>REGISTER</b></a></li>";
												}
											  if(isset($_SESSION['login_user']) && isset($_SESSION['category']))
												{
												    echo "<li><b>Welcome ".$_SESSION['fname']."!!</b></li>";
													if($_SESSION['category']=='aggregator' || $_SESSION['category']=='buyerdb'||$_SESSION['category']=='communorg'||$_SESSION['category']=='medexpertdb')
														echo "<li><a href='enquiry.php'><b>Enquiry<b></a></li>";
													if($_SESSION['category']=='sellerdb')
														echo "<li><a href='#'><b>Enquiry</b></a></li>";
													echo "<li><a href='logout.php'><b>Logout</b></a></li>";
													
												}
									?></li>
	              </ul>
	            </li>
						</ul>




				</div>



			</div>
		</nav>

<div style="padding-top:100px;"></div>
	<div id="gtco-section" >
		<div class="gtco-container">


			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2>News Corner</h2>
				</div>

				<div class="gtco-tabs">
			<div class="gtco-tab-content tab-content" data-tab-content="4">

				<div class="col-md-12">


							<ol>
							<li><a href="https://www.theguardian.com/business/2018/aug/10/monsanto-trial-cancer-dewayne-johnson-ruling?CMP=Share_AndroidApp_WhatsApp">Monsanto ordered to pay $289m as jury rules weedkiller caused man's cancer.</a></li>


							<li><a href="http://apzbnf.in/shri-subhash-palekar-mega-zbnf-training-december-2018/">Training Programm from Government of Andra Pradesh.</a></li>


							<li><a href="http://www.palekarzerobudgetspiritualfarming.org/">All about Zero Budget Natural / Spiritual farming,by Padma shri Shri Subhash Palekar.</a></li>


							<li><a href="http://zbnfkarnataka.org/b2nblr.html">Back to Nature Training Program Bangalore,Karnataka</a></li>
							<li><a href=" http://apzbnf.in/">All about Andra pradesh ZBNF</a></li>

							<li><a href="https://timesofindia.indiatimes.com/city/chennai/anyone-with-half-an-acre-of-land-can-start-natural-farming/articleshow/62366568.cms">	Anyone with half an acre of land can start natural farming </a></li>
							<li><a href="https://www.hixic.com/sreenivasayadati/karnataka-chief-minister-hd-kumaraswamy-introduces-zero-budget-natural-farming">Karnataka Chief Minister HD Kumaraswamy Introduces Zero Budget Natural Farming</a></li>
						</ol>


				</div>
			</div>

		</div>
	</div>
	<hr>
	</div>
	</div>

		<div id="gtco-section" >
			<div class="gtco-container">


				<div class="row animate-box">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
						<h2>Reports</h2>
					</div>

					<div class="gtco-tabs">
				<div class="gtco-tab-content tab-content" data-tab-content="4">

					<div class="col-md-12">


								<ol>
									<li><a href="http://www.fao.org/3/a-bl990e.pdf">Food and Agriculture Organisation of the United Nations Report on ZBNF </a></li>
									<li><a href="http://ncds.nic.in/sites/default/files/WorkingandOccasionalPapers/WP70NCDS.pdf">Detailed report on ZBNF model by Srijit Mishra, Nabakrushna Choudhury Centre for Development Studies </a></li>
									<li><a href="http://apzbnf.in/about/ceew-apzbnf-sdg-report/">Zero Budget Natural Farming for the Sustainable Development Goals Andhra Pradesh, India</a></li>



							</ol>


					</div>
				</div>

			</div>
		</div>
		<hr>
		</div>
		</div>

<!--	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row animate-box ">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2>Reports</h2>
				</div>
			</div>
			<div class="row ">
				<ol>
					<li><a href="http://www.fao.org/3/a-bl990e.pdf">Food and Agriculture Organisation of the United Nations Report on ZBNF </a></li>
					<li><a href="http://ncds.nic.in/sites/default/files/WorkingandOccasionalPapers/WP70NCDS.pdf">Detailed report on ZBNF model by Srijit Mishra, Nabakrushna Choudhury Centre for Development Studies </a></li>
					<li><a href="http://apzbnf.in/about/ceew-apzbnf-sdg-report/">Zero Budget Natural Farming for the Sustainable Development Goals Andhra Pradesh, India</a></li>



					</ol>

			</div><hr>
		</div>
	</div> -->

	<div id="gtco-section" >
		<div class="gtco-container">


			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2>Success Stories</h2>
				</div>

				<div class="gtco-tabs">
			<div class="gtco-tab-content tab-content" data-tab-content="4">

				<div class="col-md-12">


							<ol>

								<li><a href="http://www.indiawaterportal.org/news/inspired-palekar-model-zero-budget-natural-farming-gt-satish-today-successful-farmer">Inspired by the Palekar model of 'zero-budget natural farming' , GT Satish today, is a successful farmer in Chitradurga taluk, Karnataka </a></li>



						</ol>


				</div>
			</div>

		</div>
	</div>
	<hr>
	</div>
	</div>
<!--	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row ">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2>Success Stories</h2>
				</div>
			</div>
			<div class="row ">
				<ol>
					<li><a href="http://www.indiawaterportal.org/news/inspired-palekar-model-zero-budget-natural-farming-gt-satish-today-successful-farmer">Inspired by the Palekar model of 'zero-budget natural farming' , GT Satish today, is a successful farmer in Chitradurga taluk, Karnataka </a></li>



					</ol>

			</div><hr>
		</div>
	</div> -->

	<div class="gtco-section">
		<div class="gtco-container">

			<div class="row ">


			</div>
		</div>
	</div>




	<footer id="gtco-footer" class="gtco-brown" role="contentinfo" >
		<div class="gtco-container">
			<!--<div class="row row-pb-md">



				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">Shop</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<ul class="gtco-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Deelopers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>-->

			<div class="row copyright">
				<div class="col-md-12">
					<!--<p class="pull-left">



					</p> -->

					<p>
						<ul class="gtco-social-icons">
							<center>
							<li><a href="https://www.facebook.com/krishiyognatural/?hc_ref=ARSUcxlZqdJSeiRcJYY2UUZRD7gjadyyI2B-G5iwxXDBe8YJLtgksUXtKBdzvV5ON8w"><i class="icon-facebook"></i></a></li>
							<li><a href="https://www.instagram.com/krishiyog/"><i class="icon-instagram"></i></a></li>
								<small class="block">  Email : enquiry@krishiyog.com </small>
								<small class="block"> <a href="contact.php">Contact Us</a> </small>
								<a href="https://play.google.com/store/apps/details?id=com.krishiyog.krishi_udyog"><img src="images1\google-play-badge.png" width="140px"></img></a>
							</center>
						</ul>
					</p>
					<small><p><center>Copyright &copy; 2018. &nbsp; Nisarga Krishiyog Ventures OPC Pvt Limited.&nbsp;&nbsp;All Rights Reserved  <br> &nbsp;&nbsp;   <a href="privacy.php">Privacy Policy</a> &nbsp;&nbsp; |&nbsp;&nbsp; <a href="terms.php">Terms of services</a>&nbsp;&nbsp;   |&nbsp;&nbsp;   <a href="refund.php">Refunds &amp; Returns&nbsp;&nbsp; </a></center></p></small>


				</div>
			</div>

		</div>

	</footer>
  </div>

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
  </div>

  <!-- jQuery -->
  <script src="js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="js/jquery.waypoints.min.js"></script>
  <!-- Carousel -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- countTo -->
  <script src="js/jquery.countTo.js"></script>
  <!-- Magnific Popup -->
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/magnific-popup-options.js"></script>
  <!-- Main -->
  <script src="js/main.js"></script>

  </body>
</html>
