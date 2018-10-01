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
					<h2>Privacy</h2>
				</div>

				<div class="gtco-tabs">
			<div class="gtco-tab-content tab-content" data-tab-content="4">
			<!--	<div class="col-md-6">
					<div class="icon icon-xlg">
						<i class="icon-news"></i>
					</div>
				</div> -->
				<div class="col-md-12">
          This notice describes the privacy policy of Nisarga Krishiyog Ventures OPC Private Limited and its assets namely Krishiyog.com and Krishiyog Mobile Application.  By visiting Krishiyog.com, you are accepting and consenting to the practices described in this Privacy Policy. This privacy policy governs your use of the mobile software application [Krishiyog] (“Application”) for mobile devices. The Application is android app that enables farmers to sell their natural, chemical free farm produce directly to consumers, traders and wholesalers. We care about the information you share with us and we appreciate your trust in us to use your information to the best of our knowledge, carefully and sensibly.



				</div>
        <hr>
        <div class="col-md-12">
          <center><p>What information does the Application obtain and how is it used?</p></center>
          <center><p>User Provided Information </center></p>
          The Application obtains the information you provide when you download and register the Application. Registration with us is mandatory to use the application.
When you register with us and use the Application, you generally provide (a) your name, email address, age, user name, password and other registration information; (b) transaction-related information, such as when you make purchases, respond to any offers, or download or use applications from us; (c) information you provide us when you contact us for help; (d) credit card, bank account information for purchase and use of the Application, and; (e) information you enter into our system when using the Application, such as contact information and any other information solicited by our application to deliver you the services which you have subscribed for.
We may also use the information you provided us to contact you from time to time to provide you with important information, required notices and marketing promotions.

        </div>
        <hr>
        <div class="col-md-12">
          <center><p>Automatically Collected Information </p></center>
          In addition, the Application may collect certain information automatically, including, but not limited to, the type of mobile device you use, your mobile devices unique device ID, the IP address of your mobile device, your mobile operating system, the type of mobile Internet browsers you use, and information about the way you use the Application.
			</div>
      <hr>
      <div class="col-md-12">
        <center><p>Does the Application collect precise real time location information of the device?</p></center>
        When you visit the mobile application, we may use GPS technology (or other similar technology) to determine your current location in order to determine the city you are located within and display a location map with relevant advertisements. We will not share your current location with other users or partners.
If you do not want us to use your location for the purposes set forth above, you should turn off the location services for the mobile application located in your account settings or in your mobile phone settings and/or within the mobile application.

        </div>
      <hr>
      <div class="col-md-12">
        <center><p>Do third parties see and/or have access to information obtained by the Application?</p></center>
        We will not use your financial information for any purpose other than to complete a transaction with you. We will not rent, sell or share your personal information and will not disclose any of your personally identifiable information to third parties. In cases where it has your permission to provide products or services you've requested and such information is necessary to provide these products or services the information may be shared with Nisarga Krishiyog Ventures OPC business associates and partners.  may, however, share consumer information on an aggregate with its partners or third parties where it deems necessary. Krishiyog may use your personal information to provide personalized features to you on the application and to provide for promotional offers to you through the mobile application and other channels. Krishiyog will use this information to preserve transaction history as governed by existing law or policy. Krishiyog may also use contact information internally to direct its efforts for product improvement, to contact you as a survey respondent, to notify you if you win any contest; and to send you promotional materials from its contest sponsors or advertisers. Krishiyog will also use this information to serve various promotional and advertising materials to you via display advertisements through the Google Ad network on third party websites. You can opt out of Google Analytics for Display Advertising and customize Google Display network ads using the Ads Preferences Manager. Information about Customers on an aggregate (excluding any information that may identify you specifically) covering Customer transaction data and Customer demographic and location data may be provided to partners of Krishiyog for the purpose of creating additional features on the website, creating appropriate merchandising or creating new products and services and conducting marketing research and statistical analysis of customer behaviour and transactions.
        In addition Krishiyog may use this information for promotional offers, to help investigate, prevent or take action regarding unlawful and illegal activities, suspected fraud, potential threat to the safety or security of any person, violations of the Site’s terms of use or to defend against legal claims; special circumstances such as compliance with subpoenas, court orders, requests/order from legal authorities or law enforcement agencies requiring such disclosure.
        <p>We may disclose User Provided and Automatically Collected Information:</p>
        <ul>
          <li>as required by law, such as to comply with a subpoena, or similar legal process;</li>
          <li>when we believe in good faith that disclosure is necessary to protect our rights, protect your safety or the safety of others, investigate fraud, or respond to a government request;</li>
          <li>with our trusted services providers who work on our behalf, do not have an independent use of the information we disclose to them, and have agreed to adhere to the rules set forth in this privacy statement.</li>
          <li>if [Krishiyog] is involved in a merger, acquisition, or sale of all or a portion of its assets, you will be notified via email and/or a prominent notice on our Web site of any change in ownership or uses of this information, as well as any choices you may have regarding this information.</li>

        </ul>

      </div>
      <hr>
      <div class="col-md-12">
        <center><p>What are my opt-out rights?</p></center>
      You can stop all collection of information by the Application easily by uninstalling the Application. You may use the standard uninstall processes as may be available as part of your mobile device or via the mobile application marketplace or network. You can also request to opt-out via email, at [privacy@krishiyog.com].

		</div>
    <hr>
    <div class="col-md-12">
      <center><p>Data Retention Policy, Managing Your Information</p></center>
      We will retain User Provided data for as long as you use the Application and for a reasonable time thereafter. We will retain Automatically Collected information for up to 24 months and thereafter may store it in aggregate. If you’d like us to delete User Provided Data that you have provided via the Application, please contact us at privacy@krishiyog.com and we will respond in a reasonable time. Please note that some or all of the User Provided Data may be required in order for the Application to function properly.

	   </div>
	<hr>

  <div class="col-md-12">
    <center><p>Children</p></center>
    We do not use the Application to knowingly solicit data from or market to children under the age of 13. If a parent or guardian becomes aware that his or her child has provided us with information without their consent, he or she should contact us at privacy@krishiyog.com. We will delete such information from our files within a reasonable time.

   </div>
   <hr>

   <div class="col-md-12">
     <center><p>Security</p></center>
     We are concerned about safeguarding the confidentiality of your information. We provide physical, electronic, and procedural safeguards to protect information we process and maintain. For example, we limit access to this information to authorized employees and contractors who need to know that information in order to operate, develop or improve our Application. Please be aware that, although we endeavor provide reasonable security for information we process and maintain, no security system can prevent all potential security breaches.
    </div>
    <hr>

    <div class="col-md-12">
      <center><p>Changes</p></center>
      This Privacy Policy may be updated from time to time for any reason and the company/developers of this application reserves the right to change or update this policy at any time without any prior notification or intimation. Such changes made shall be immediately application upon posting here. We might also notify you of any changes to our Privacy Policy by posting the new Privacy Policy here and informing you via email or text message if required. You are advised to consult this Privacy Policy regularly for any changes, as continued use is deemed approval of all changes.
     </div>
     <hr>

     <div class="col-md-12">
       <center><p>Your Consent</p></center>
       By using the Application, you are consenting to our processing of your information as set forth in this Privacy Policy now and as amended by us. "Processing,” means using cookies on a computer/hand held device or using or touching information in any way, including, but not limited to, collecting, storing, deleting, using, combining and disclosing information, all of which activities will take place in the India. If you reside outside India your information will be transferred, processed and stored under Indian privacy standards.
     </div>
     <hr>

      <div class="col-md-12">
        <center><p>Contact us</p></center>
If you have any questions regarding privacy while using the Application, or have questions about our practices, please contact us via email at privacy@krishiyog.com
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
