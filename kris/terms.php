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
	<div id="gtco-section" style="font-size:14px; font-family:'Poppins',sans-serif;font-style:normal;font-weight:200;color:#000;" >
		<div class="gtco-container">


			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading gtco-heading-sm">
					<h2>Terms of Use</h2>
				</div>

				<div class="gtco-tabs">
			<div class="gtco-tab-content tab-content" data-tab-content="4">
			<!--	<div class="col-md-6">
					<div class="icon icon-xlg">
						<i class="icon-news"></i>
					</div>
				</div> -->
				<div class="col-md-12">
          We are a farmer and consumer centric company and our objective is to make your life healthier and farmer life better. However it is important to abide to the laws of the land and protect the interests of the business stakeholders and society at large. We expect consumers who are looking for healthy products and farmers who expect a fair price for their naturally grown products to accept the terms of use of this mobile application and or the website namely Krishiyog.com and our mobile app “Krishiyog Naturals”. If you don’t understand the terms of this agreement please reach out to us or anyone who can help you out.
It is strongly recommended that you read and understand these ‘Terms of Use’ carefully, as by accessing, installing and using the mobile application, “Krishiyog Naturals”,  (hereinafter the “Online Commerce Platform - Mobile App and Website”), you agree to be bound by the same and acknowledge that it constitutes an agreement between you and Nisarag Krishiyog Ventures OPC Private Limited (hereinafter referred to as the “company”). If you do not agree with this “User Agreement”, you should not use or access the Online Commerce Platform (website and app) for any purpose whatsoever.
This document is published in accordance with the provisions of Rule 3 of the Information Technology (Intermediaries Guidelines) Rules, 2011. The User Agreement may be updated from time to time by the Company without notice. It is therefore strongly recommended that you review the User Agreement, as available on the Online Commerce Platform, each time you access and/or use the Online Commerce Platform.
The terms ‘visitor(s)’, ‘user(s)’, ‘you’ hereunder refer to the person visiting, accessing, browsing through and/or using the Online Commerce Platform at any point in time.
Should you have any clarifications regarding the Terms of Use, please do not hesitate to contact us at admin@krishiyog.com



				</div>
        <hr>
        <div class="col-md-12">
          <center><p>Services Overview</p></center>
          The Online Commerce Platform is a platform for domestic consumers to transact with farmers, who have been granted access to the Online Commerce Platform to display and offer products for sale through the Online Commerce Platform. The Company does not provide any services to users other than providing the Online Commerce Platform as a service to transact business at their own cost and risk, and other services as may be specifically is notified in writing.
          The Company is not and cannot be a party to any transaction between you and the farmers, or have any control, involvement or influence over the products purchased by you from such farmers or the prices of such products charged by such third-party sellers. The Company therefore disclaims all warranties and liabilities associated with any products offered on the Online Commerce Platform.
          Services on the Online Commerce Platform are available to only select geographies in India, and are subject to restrictions based on business hours and days of farmers.
          Transactions through the Online Commerce Platform will be subject to service charges that would be revised from time to time. You will be informed of such charges at the stage of check-out for a transaction through the Online Commerce Platform.

        </div>
        <hr>
        <div class="col-md-12">
          <center><p>Eligibility</p></center>
          Persons who are “incompetent to contract” within the meaning of the Indian Contract Act, 1872 including minors, un-discharged insolvents etc. are not eligible to use/access the Online Commerce Platform.
However, if you are a minor, i.e. under the age of 18 years, you may use/access the Online Commerce Platform under the supervision of an adult parent or legal guardian who agrees to be bound by these Terms of Use. You are however prohibited (even under provision) from purchasing any product(s) which is for adult consumption, the sale of which to minors is prohibited.
The Online Commerce Platform is intended to be a platform for end-consumers desirous of purchasing product(s) for domestic self-consumption from farmers, traders, wholesalers, retailers or any other individual who is interested to sell their natural products on this online commerce platform.
The Company, in its sole discretion and without liability, reserves the right to terminate or refuse your registration, or refuse to permit use/access to the Online Commerce Platform, if: (i) it is discovered or brought to notice that you do not conform to the eligibility criteria, or (ii) the Company has reason to believe (including through evaluating usage patterns) that the eligibility criteria is not met/is violated by a user, or (iii) may breach the terms of this User Agreement.
In order to determine compliance with eligibility criteria, the Company inter alia uses algorithm and/or pre-determined criteria based technology and accordingly, from time to time, your usage may be restricted or blocked on account of overlap with such algorithms/pre-determined criteria. In such cases, if you are a genuine domestic user of the Platform, please contact us for assistance.

			</div>
      <hr>
      <div class="col-md-12">
        <center><p>License & Access</p></center>
        The Company grants you a limited sub-license to access and make personal use of the Online Commerce Platform, but not to download (other than page caching) or modify it, or any portion of it, except with express prior written consent of the Company. Such limited sub – license does not include/permit any resale or commercial use of the Online Commerce Platform or its contents; any collection and use of any product listings, descriptions, or prices; any derivative use of the Online Commerce Platform or its contents; any downloading or copying of information for the benefit of another third party; or any use of data mining, robots, or similar data gathering and extraction tools. The Online Commerce Platform or any portion of the Online Commerce Platform may not be reproduced, duplicated, copied, sold, resold, visited, or otherwise exploited for any commercial purpose without express prior written consent of the Company. You may not frame or utilize framing techniques to enclose any trademark, logo, or other proprietary information (including images, text, page layout, or form) of the Online Commerce Platform or of the Company and/or its affiliates without the express prior written consent of the Company. You may not use any meta tags or any other “hidden text” utilizing the Company’s name or trademarks without the express prior written consent of the Company. You shall not attempt to gain unauthorized access to any portion or feature of the Online Commerce Platform, or any other systems or networks connected to the Online Commerce Platform or to any server, computer, network, or to any of the services offered on or through the Online Commerce Platform, by hacking, ‘password mining’ or any other illegitimate means.
      </div>
      <hr>
      <div class="col-md-12">
        <p>You hereby agree and undertake not to host, display, upload, modify, publish, transmit, update or share any information:</p>
        <ol>
          <li>Belongs to another person and to which you do not have any right</li>
          <li>is grossly harmful, harassing, blasphemous, defamatory, obscene, pornographic, paedophilic, libellous, invasive of another’s privacy, hateful, or racially, ethnically objectionable, disparaging, relating or encouraging money laundering or gambling, or otherwise unlawful in any manner whatever</li>
          <li>harms minors in any way</li>
          <li>infringes any patent, trademark, copyright or other proprietary/intellectual property rights;</li>
          <li>violates any law for the time being in force</li>
          <li>deceives or misleads the addressee about the origin of such messages communicates any information which is grossly offensive or menacing in nature</li>
          <li>impersonates another person</li>
          <li>contains software viruses or any other computer code, files or programs designed to interrupt, destroy or limit the functionality of any computer resource</li>
          <li>threatens the unity, integrity, defence, security or sovereignty of India, friendly relations with foreign states, or public order or causes incitement to the commission of any cognizable offence or prevents investigation of any offence or is insulting any other nation</li>
          <li>is misleading or known to be false in any way</li>
        </ol>
        <p>Any unauthorized use shall automatically terminate the permission or sub-license granted by the Company.</p>
      </div>
      <hr>
      <div class="col-md-12">
        <center><p>Account & Registration Obligations</p></center>
        All users must register and login for placing orders on the Online Commerce Platform. You must keep your account and registration details current and correct for all communications related to your purchases from the Online Commerce Platform. By agreeing to the Terms of Use, the user agrees to receive promotional communication and newsletters from the Company and its partners. The user can opt out from such communication and/or newsletters either by , or by contacting the customer services team of Online Commerce Platform and placing a request for the same.
        As part of the registration process on the Online Commerce Platform, the Company may collect the following personally identifiable information about you, including but not limited to Name , email address, age, address mobile phone number and other contact details, demographic profile (like your age, gender, occupation, education, address etc.) and information about the pages on the Online Commerce Platform you visit/access, the links you click on the Online Commerce Platform, the number of times you access a particular page/feature and any such information. Information collected about you is subject to the Privacy Policy of the Company (https://Krishiyog.com/privacy), which is incorporated in these Terms of Use by reference.

		</div>
    <hr>
    <div class="col-md-12">
      <center><p>Pricing</p></center>
      The Company aims to ensure that prices of all products offered for sale are true and correct. However, from time to time, the prices of certain products may not be current or may be inaccurate on account of technical issues, typographical errors or incorrect product information provided to the Company by third party seller. In each such case, notwithstanding anything to the contrary, the Company reserves the right to cancel the order without any further liability.
      Subject to the foregoing, the price mentioned at the time of ordering a product shall be the price charged at the time of delivery, provided that no product offered for sale on the Online Commerce Platform will be sold at a price higher than its MRP (Maximum Retail Price).

	   </div>
	<hr>
	</div>
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
