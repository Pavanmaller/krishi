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
	<link rel="shortcut icon" href="http://www.krishiyog.com/images/logo0.jpg" type="image/x-icon" />

	<title>Krishiyog Naturals &mdash;Seed to wellness</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="	We are India’s first and foremost platform for natural farming. We are community of natural farmers engaged in growing, producing and processing natural produce and products.  Our community objectives are to empower farmers and enrich lives by improving health and nutrition of every Indian. We are a community of responsible farmers guided by Padma Shri Subhash Palekarji who has pioneered the technique of “Zero Budget Natural Farming”. Today, on the occasion of India’s 72nd Independence Day Celebration 2018 with his guidance, direction and blessing we dedicate Krishiyog Digital Platform to one and all.
" />
	<meta name="keywords" content="farmers,e-commerce,shop,discussion forum,Natural farming, ZBNF, natural products,retail" />
	<!--<meta name="author" content="" />-->



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
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-123990231-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-123990231-1');
</script>


	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style type="text/css">


	</style>
	</head>
	<body>

	<div class="gtco-loader"></div>

	<div id="page">


	<header id="gtco-header" class="gtco-cover gtco-cover-sm" role="banner" >


		<div class="bss-slides demo1" tabindex="1" autofocus="autofocus">
			<figure>

				 <img src="images1\slide1.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
				 <img src="images1\slide2.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>

			<figure>
					 <img src="images1\slide3.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide4.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide5.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide6.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide7.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide8.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide9.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide10.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide11.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>
			<figure>
					 <img src="images1\slide12.jpg" width="100%" /><figcaption>""</figcaption>
			</figure>

		</div> <!-- // bss-slides -->


		</header>
	</header>
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
						<li><a class="nat-farm" href="#NaturalFarming"><b>Natural Farming</a></b></li>
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
								<li><?php

								if(!isset($_SESSION['login_user']) && !isset($_SESSION['category']))
											{
												echo "<li><a href='login.php'><b>LOGIN</b></a></li>";
												echo "<li><a href='signup2.php'><b>REGISTER</b></a></li>";
											}
										  if(isset($_SESSION['login_user']) && isset($_SESSION['category']))
											{
												echo "<li><a><b>Welcome ".$_SESSION['fname']."</b></a></li>";
												if($_SESSION['category']=='aggregator' || $_SESSION['category']=='buyerdb'||$_SESSION['category']=='communorg'||$_SESSION['category']=='medexpertdb')
													echo "<li><a href='enquiry.php'><b>Enquiry<b></a></li>";
												if($_SESSION['category']=='sellerdb')
													echo "<li><a href='#'><b>Enquiry</b></a></li>";
												echo "<li><a href='logout.php' ><b>Logout</b></a></li>";

											}
								?></li>
              </ul>
            </li>
 					</ul>




			</div>



		</div>
	</nav>


<!--	<div id="gtco-started">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading" id="about">
					<a name="about?"></a>
					<h2> About Us</h2>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-12 about-us">
					<p >
					Today, on the occasion of India’s 72nd Independence Day we are humbled to dedicate India's first and foremost mobile app "Krishiyog" and website "Krishiyog.com" for the benefit of all natural farmers, food processors, food producers, wellness seekers and most importantly health conscious consumers.
</p><p>
Our aim is to provide every Indian with access to 100% chemical, pesticide and poison free food grains, vegetables, fruits, homemade products made/grown using natural methods. In addition, leveraging our platform we hope to create rural employment in villages by providing opportunities for agri and food business leveraging our digital platforms.
</p><p>
We draw our inspiration by adopting and promoting  Zero Budget Natural Farming (ZBNF) techniques as pioneered by Padma Shri Subhash Palekar ji over the last couple of decades
					</p>
				</div>
			</div>
		</div>
	</div> -->
	<div class="col-md-8 col-md-offset-2 text-center gtco-heading">

	</div>
	<div id="gtco-mission">
		<div class="gtco-container">

			<div class="row animate-box">
			<div class="col-md-12  text-center gtco-heading">
				<br>
					<h2>Vision</h2>
					<p>Our vision is to support natural farmers in selling their healthy, nutritious and fresh produce directly to consumers at fair prices. For consumers, we provide direct access to 100% chemical, pesticide and poison free food grains, vegetables, fruits, homemade products, that support employment and support community of marginal farmers and producers
 </p>
				</div>
			</div>
				<div class="row animate-box">
				<div class="col-md-12 text-center gtco-heading">
					<h2>Mission</h2>
					<p>Today, majority of farmers don’t get a fair price for their farm products and don’t have a market reach to sell their produce directly to consumers. Additionally, they are following unsustainable, high input cost, chemical farming practices which has increased their cost and burden along with low yield and unpredictable market prices which are decided by traders, commission agents and middlemen. Our mission is to provide farmers a technology enabled formidable marketplace to promote and sell their produce at a fair price for the quality and nutritional value they bring to consumers. </p>
				</div>
			</div>
			<div class="row animate-box">



				<div class="col-md-12 text-center gtco-heading">
					<h2>Products &amp; Services</h2>
					<p>“Krishiyog” is our mobile platform for buying and selling 💯 natural farm produce and products directly from farmers to producers, processors, buyers, value added aggregators, community supporters. </p>
				</div>
			</div>


</div>

</div>
<div id="gtco-login" style="  background-image:url(images1/sld1.jpg); background-attachment:fixed;" >
	<div class="gtco-container">
		<div class="row ">
			<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
				<h2>Welcome to Krishiyog family.</h2>
			</div>
		</div>
		<div class="row ">

				<div class="col-md-12">
					<form class="form-inline">
								<div class="col-md-4 "></div>
						<div class="col-md-4 col-sm-4">
							<?php
							if(!isset($_SESSION['login_user']) && !isset($_SESSION['category']))
							{
									echo "<a href='signup2.php' class='btn btn-default btn-block'>Register</a>";
							}
							else
							{
								if($_SESSION['category']=='aggregator' || $_SESSION['category']=='buyerdb'||$_SESSION['category']=='communorg'||$_SESSION['category']=='medexpertdb')
									echo "<a href='enquiry.php'class='btn btn-default btn-block'>Enquiry</a>";
								if($_SESSION['category']=='sellerdb')
									echo "<a href='#'class='btn btn-default btn-block'>Enquiry</a>";
							}
							?>
						</div>
					</form>
				</div>
		</div>
	</div>
</div>

	<div id="gtco-features">
		<div class="gtco-container">

			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-tree"></i>
						</span>
						<h2>Natural Farming</h2>
						<p>Natural farming is the first step that needs to be adopted to improvise heath and nutrition of every Indian. Our community farmers are guided by Padma Shri Shubash Palakerji who dedicated his life for pioneering the technique of “Zero Buget Natural Farming". </p>
						<!--<p><a href="#" class="btn btn-primary">Learn More</a></p>-->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-shopping-cart"></i>
						</span>
						<h2>Natural Products</h2>
						<p>Many consumers aren’t aware of the benefits of natural farming products. Additionally most certifications don’t assure nutritional value of products and its safe use. At Krishiyog, our responsible farming community and Krishiyog Natural Farming Field Supervisors ensures that every farmer in their region is verified and validated for the methods adopted in farming and producing the products. We onboard farmers who are reliable and have built trust with their consumers.</p>
						<!--<p><a href="#" class="btn btn-primary">Learn More</a></p>-->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
							<i class="icon-add-user"></i>
						</span>
						<h2>Join Us</h2>
						<p>We welcome every stakeholder to be part of our journey. We encourage you to join our community today and be part of a safer and healthier tomorrow. </p>
						<!--<p><a href="#" class="btn btn-primary">Learn More</a></p>-->
					</div>
				</div>
			</div>
<hr>
		</div>
	</div>
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">

							<img src="images1\cereals.jpg" width="220px" height="150px" style="border-radius:20%;"/>


						<h2>Nutri Cereals</h2>
						<p class="info">
							They are highly nutritious and are known to have high nutrient content which includes protein,
							 essential fatty acids, dietary fibre, B-Vitamins, minerals such as calcium, iron, zinc, potassium and magnesium.


						</p>
				<!--		<p><a href="#" class="btn btn-primary">Learn More</a></p> -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">

						<img src="images1\veg.jpeg" width="220px" height="150px" style="border-radius:20%;"/>

						<h2>Vegetables</h2>
						<p class="info">

					Dietary fiber from vegetables helps reduce blood cholesterol levels and may lower risk of heart disease.
					Folate (folic acid) helps the body form healthy red blood cells.

					 </p>
					<!--	<p><a href="#" class="btn btn-primary">Learn More</a></p>  -->
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">

						<img src="images1\fruits.jpg" width="220px" height="150px" style="border-radius:20%;"/>

						<h2>Fruits</h2>
						<p class="info">
							Most fruits are naturally low in fat, sodium, and calories. Fruits are sources of many essential nutrients
							 that are under consumed, including potassium, dietary fiber, vitamin C, and folate (folic acid).

						 </p>
					<!--	<p><a href="#" class="btn btn-primary">Learn More</a></p> -->
					</div>
				</div>

			</div>


		</div>
	</div>


	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">

				<div class="col-md-6 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">

						<img src="images1/jaggery.jpg" width="220px" height="150px" style="border-radius:20%;"/>

						<h2>Jaggery</h2>
						<p class="info">
							Jaggery is good for Skin, Hair, weight loss,ear pain, controls body temperature and reduces PMS.It acts as a detox, as it helps cleanse the liver by flushing out nasty toxins from the body. Jaggery is loaded with antioxidants and minerals like zinc and selenium, which help prevent free-radicals (responsible for early ageing). It helps boost resistance against infections, hence building stronger immunity.

					 </p>
					<!--	<p><a href="#" class="btn btn-primary">Learn More</a></p> -->
					</div>
				</div>
				<div class="col-md-6 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">

						<img src="images1/termeric.jpg" width="220px" height="150px" style="border-radius:20%;"/>

						<h2>Turmeric</h2>
						<p class="info">
							Curcumin is the main active ingredient in turmeric. it has powerful anti-inflammatory effects and is a very strong antioxidant. curcumin boosts brain-derived neurotrophic factor, linked to improved brain function and a lower risk of brain disease.
							 Most of the studies on this herb are using turmeric extracts that contain mostly curcumin itself, with dosages usually exceeding 1 gram per day.


						 </p>
					<!--	<p><a href="#" class="btn btn-primary">Learn More</a></p>  -->
					</div>
				</div>
			</div>

<hr>
		</div>
	</div>

	<!--<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
		<h2>Quotes</h2>
		<p>"The ultimate goal of farming is not the growing of crops, but the cultivation and perfection of human beings."
		- Masanobu Fukuoka</p>
		<p>"Natural farming if cultivated then it'll save the millions and if ignored it'll cause destruction" </p>
	</div>-->

	<div id="gtco-services">
		<div class="gtco-container">



			<div class="row">

				<div class="gtco-tabs">
					<ul class="gtco-tab-nav">
						<li class="active"><a href="#" data-tab="1"><span class="icon visible-xs"><i class="icon-bag"></i></span><span class="hidden-xs">Natural farming</span></a></li>
						<li><a href="#" data-tab="2"><span class="icon visible-xs"><i class="icon-bar-graph"></i></span><span class="hidden-xs">Community</span></a></li>
						<li><a href="#" data-tab="3"><span class="icon visible-xs"><i class="icon-command"></i></span><span class="hidden-xs">How it works?</span></a></li>

					</ul>

					<!-- Tabs -->
					<div class="gtco-tab-content-wrap">
						<div class="gtco-tab-content tab-content active" data-tab-content="1">
							<div class="col-md-6">
								<!--<div class="icon icon-xlg">
									<i class="icon-tree"></i>
								</div> -->
								<img src="images1/natural farming.jpg" width="100%" height="350px" style="border-radius:10%;"/>

							</div>
							<div class="col-md-6">
								<a name="natural farming?"></a>
								<h2 id="NaturalFarming">Natural Farming - Five Pillars</h2>
								<ul>
									<li>	<strong>Envisions</strong> a way of life and source for healthier and nutritional food</li>
									<li><strong>Ensures</strong> “Zero” use of chemicals and fertilizers</li>
									<li><strong>Enables</strong> farmers to recover input costs with cover crop and continuous income all through the year</li>
									<li><strong>Environmentally</strong> safe method of farming that promotes use of indigenous seeds of our nation and most importantly least
										use of resources : water, electricity</li>
										<li><strong>Empowers farmers</strong> with a debt free, dignified life.</li>

								</ul>
									<!--<div class="col-md-6">
										<h2 class="uppercase">Easy to shop</h2>
										<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
									</div>
									<div class="col-md-6">
										<h2 class="uppercase">No credit card required</h2>
										<p>Ullam dolorum iure dolore dicta fuga ipsa velit veritatis</p>
									</div>
								</div> -->

							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="2">
							<div class="col-md-6 col-sm-4">
							<!--	<div class="icon icon-xlg">
									<i class="icon-shop"></i>

								</div> -->
								<img src="images/community supporters.jpeg"
								width="100%" height="350px" style="border-radius:10%;"/>

							</div>
							<div class="col-md-6">
								<h2>Welcome to our Community</h2>
								<ol>
									<li> Our platform is a is dream of many natural famers and is conceived and developed “By natural famers“ for the benefit of natural farmers and consumers”.. </li>
									<li>On this occasion of freedom, we welcome every natural farmer and consumer to be part of this community. We encourage you to join our community and be the driver for a healthier transformation.</li>
									<li>Our motto is simple —“Safe food for a Healthier World”</li>
									<li>Do join our community and we would be happy to include in our all programs going forward in pursuit of healthy India.  </li>
								<ol>


							</div>
						</div>
						<div class="gtco-tab-content tab-content" data-tab-content="3">
							<div class="col-md-6 col-sm-12">
							<!--	<div class="icon icon-xlg">
									<i class="icon-info-with-circle"></i>
								</div> -->

									<img src="images1/howitworks.jpg" width="100%" height="350px" style="border-radius:10%;"/>


							</div>
							<div class="col-md-6">

                                <h2>How it Works?</h2>
								<ol>
									<li>Get started by downloading our beta app “Krishiyog” from Google Play Store using the link provides.</li>

									<li>Login in using your name and mobile number and authenticate yourself using OPT generated.</li>

									<li>Login in using your name and mobile number and authenticate yourself using OPT generated. </li>
									<ol type="a">
										<li>Terms of Use and End User Agreement</li>
										<li>Privacy Policy</li>
									</ol>
									<li>In the “Farmer module” create your own detailed farmer profile, company profile and brand. Add your image and being with adding produce in the “Sell Produce” section. </li>

									<li>Promote your produce directly to your contacts and buyers, using any digital media sharing the Krishiyog App link.</li>

									<li> Start receiving orders, confirm order by providing shipping cost and availability. </li>
									<li>Ship your produce directly to consumers using good packing material</li>
									<li>One goods are received by consumers receive payments directly from Krishiyog.</li>
									</ol>


							</div>
						</div>






					</div>

				</div>
			</div>
		</div>
	</div>




		<!--<div id="gtco-login" style="  background-image:url(images1/sld1.jpg); background-attachment:fixed;" >
			<div class="gtco-container">
				<div class="row ">
					<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
						<h2>Welcome to Krishiyog family.</h2>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-12">
						<form class="form-inline">
                            <div class="col-md-4 "></div>
							<div class="col-md-4 col-sm-4">
								<a href="signup2.php"class="btn btn-default btn-block">Register</a>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div> -->

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
