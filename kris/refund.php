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
					<h2>Return Terms &amp; Policy</h2>
				</div>
				<div class="gtco-tabs">
			<div class="gtco-tab-content tab-content" data-tab-content="4">
			<!--	<div class="col-md-6">
					<div class="icon icon-xlg">
						<i class="icon-news"></i>
					</div>
				</div> -->
      <div class="col-md-12">
        <ol>
          <li><strong><u>Return Terms and Policy overview :</u></strong></li>
          <p>Sellers on our platform use Krishyog to list their produce and Buyers on our platform buy listed produce. As per our terms, buyers are required to review the product information before making a purchase and the buyer is deemed to have understood the product, price, variety, costs and any other information provided from time to time before making the purchase. While both buyer and seller are expected to provide accurate and correct information, situations may arise when seller is unable to provide the product or the buyer changes their mind and decides to cancel the order or rerun the product. This policy covers the terms and conditions of the below detailed returns, cancellation and refund policy applicable to all types of buyers and sellers who have registered on the app and are using Krishiyog Mobile App or website for their business.</p>
          <li><strong><u>Terms of Cancellation :</u></strong></li>
          <p>If Buyer would like to cancel their order within the first 3 hours of order placement please call our number listed in the contact page.  Any order that has reached and confirmed by the seller and the seller has started with packaging then we would be unable to accept any cancellations. Any cancellation after 3 hours will not be acceptable and no refund will be allowed in any condition.</p>
          <li><strong><u>Terms of Returns :</u></strong></li>
          <p>As most goods sold are of a perishable or editable nature, items once sold cannot be returned under any circumstances. Non edible items may be acceptable based on certain conditions that would be evaluated by Krishiyog and updated to the buyer upon receipt of a complaint or a return request.</p>
          <li><strong><u>Terms of Refunds for defective products :</u></strong></li>
          <p>In the unlikely event of Buyer finding defects in seller  products, our seller will offer a “no questions asked return and refund policy”. Our seller will take the returned product back and grant credit for the value of the returned product or provide a full refund. In this case the buyer has to ship the products to Krishiyog office/warehouse address, where the product would be checked before directing the seller to provide a replacement. Incase replacement is not possible or available a full refund will be provided. All rerun items before shipping will need to be confirmed by sending an email to returns@krishiyog.com.</p>
          <li><strong><u>Terms of refunds for lost items :</u></strong></li>
          <p>If Buyer shipment or package is lost during transit by the shipper or the seller and if the items purchased are not delivered to Buyer, the seller who has arranged for the shipper will re-ship the consignment again within 7 days of such delays post the committed delivery date. Incase the seller is not able to do so, company will refund 100% of the amount received from the purchaser with 10 days from the date when the buyer informs about non receipt of products.</p>
          <li><strong><u>Terms of returns for damaged packaging :</u></strong></li>
          <p>Our sellers take utmost care while packing their products using allowable materials so that they do not get damaged. However in case of such event where the package has been damaged and the product is damaged, soiled, contaminated or recieved is a unusable condition, then sellers will replace such products with 15 days of such notice to Krishiyog. </p>
          <li><strong><u>Terms of Product expiry :</u></strong></li>
          <p>Our sellers take utmost care before dispatch to check the quality of the products and its expiry as mentioned on its package. The seller will mention the expiry date for the products at the time of listing the produce. All natural products will have a higher shelf life than chemical and organic products. For all processed items, the seller will provide with a date of harvesting/processing, date of shipping and date of expiry. Seasonal perishable products will not have any expiry date. However, if by human error such an incident occurs, we resend the new product at no cost to Buyer or refund the amount of such a product.</p>
          <li><strong><u>Terms of Mode of refund :</u></strong></li>
          <p>We refund in the same mode of payment through a payment gateway that was used for making payments or through cheques in certain cases. No refund amount in any case will be paid by cash.</p>
          <li><strong><u>Terms of Product liability :</u></strong></li>
          <p>In no case Krishiyog will be responsible for any liabilities or punitive damages claimed by any person or entity whatsoever. Discretion to buy items on the app is the sole decision of the buyer and the consumer. For any disputes about orders or any other claims the jurisdiction will be in the state of Karnataka, Bangalore</p>
          <li><strong><u>Terms Of Cancellations of orders by Krishiyog :</u></strong></li>
          <p>Krishiyog holds the complete rights to cancel the entire or part order and refund the part or complete amount immediately. Krishiyog is not liable to provide any confirmations, responses or explanations for such cancellations.</p>
          <li><strong><u>Incorrect information :</u></strong></li>
          <p>Buyer agrees and confirm that, in the event any product delivery is delayed or is returned from its destination on account of a mistake by Buyer (e.g. providing the wrong name or address or other incorrect/misleading information), any additional costs incurred by the Company for re-delivery of the product(s) shall be borne by Buyer.</p>
          <li><strong><u>Contact details :</u></strong></li>
          <p>Please send an email to returns@krishiyog.com providing Buyer order ID and Payment ID along with images of the product and the packing. We will look into the returns request and revert back to Buyers at the earliest.</p>
        </ol>

      </div>
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
