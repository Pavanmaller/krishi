<?php
session_start();
include 'loggedInCheck.php';
include 'db_connect.php';
 ?>
 <br>
 <br>
 <br>
 <br>
 <form action="sellerslist.php" method="post">
  <table width='100%' border='0' style='border:none;'>
    <h1>Search For Seller</h1>
    <tr>
      <td><label>First Name:&nbsp;</label><input type='text' name='by_fname' /></td>
      <td><label>Last Name:&nbsp;</label><input type='text' name='by_lname' /></td>
      <td><label>City:&nbsp;</label><input type='text' name='by_city' /></td>
  <!--    <td><label>Phone_Number:&nbsp;</label><input type='text' name='by_Phone_Number' /></td>
      <td><label>Type:&nbsp;</label><input type='text' name='by_type' /></td>-->
      <td><input type='submit' name='submit' value='Search' /></td>
    </tr>
  </table>
  </form>

 <?php
 function search_seller() {
     $by_fname = $_POST['by_fname'];
     $by_lname = $_POST['by_lname'];
     $by_city = $_POST['by_city'];
     //    $by_Phone_Number = $_POST['by_Phone_Number'];
   //  $by_type = $_POST['by_type'];

     //Do real escaping here

     $query = "SELECT * FROM sellerdb";
     $conditions = array();

     if(! empty($by_fname)) {
       $conditions[] = "firstName='$by_fname'";
     }
     if(! empty($by_lname)) {
       $conditions[] = "lastName='$by_lname'";
     }
     if(! empty($by_city)) {
       $conditions[] = "city='$by_city'";
     }
   //  if(! empty($by_PhoneNumber)) {
     //  $conditions[] = "sMobNo='$by_Phone_Number'";
   //  }
   /*  if(! empty($by_type)) {
       $conditions[] = "e_type='$by_type'";
     }*/

     $sql = $query;
     if (count($conditions) > 0) {
       $sql .= " WHERE " . implode(' AND ', $conditions);
     }
    include 'db_connect.php';
     $result = mysqli_query($connection, $sql);
     return $result;

 }
 if(isset($_POST['submit'])) {

   $count = mysqli_num_rows(search_seller($_POST));
 //  echo $count;
     if($count>0)
     {

         $res1=mysqli_fetch_all(search_seller($_POST),MYSQLI_ASSOC);
         //var_dump($res1);
         $fName=array_column($res1,'firstName');
         $lName=array_column($res1,'lastName');
         $mobno=array_column($res1,'sMobNo');
         //var_dump($fn);
         ?>
         <div class="container">

                                    <div class="table-responsive" style="background-color:white;">
                                        <table class="table table-top-campaign">
                                            <tbody>

                       <tr>
                         <th><h1>Seller Name</h1></th>
                         <th><h1>Mobile Number</h1></th>
                       </tr>
                       <?php
         for($i=0;$i<count($fName);$i++)
         {?>
           <form action= "sprofile.php" method="POST">

             <input type="hidden" name="fname" value="<?php echo $fName[$i]; ?>">
             <input type="hidden" name="lname" value="<?php echo $lName[$i]; ?>">
             <tr>
               <td>
           <button type="submit" value="submit"> <?php echo "".$fName[$i]." ".$lName[$i];
         echo "\n";?></button>
       </td>
                              <td onclick='window.open("tel:<?php echo $mobno[$i]; ?>");'><?php echo $mobno[$i];?></td>

                          </tr>

         </form>
         <?php
 }
       //  {
       //    echo $fn[$i]." ".$fn2[$i];

       //    echo "\n";
       //  }
                   //echo $retrived_result['firstName']." ";
           //echo $retrived_result['lastName']." ";
           //echo $retrived_result['sMobNo'];
          //echo $res1;

     }

 }
 ?>
</tbody>
</table>
</div>
</div>

<!DOCTYPE HTML>
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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

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
<style>
button {
  background-color: transparent;
  background-repeat:no-repeat;
  border: none;
  cursor:pointer;
  overflow: hidden;
  outline:none;
}
.control-label{
  float:left;

  margin-top: 10px;
}
</style>

</head>
<body>
  <nav class="gtco-nav fixed-top" role="navigation">
    <div class="gtco-container">
      <div class="row">
        <div class="col-xs-2">
          <div id="gtco-logo"><a href="index.php"><img src="images/logo0.jpg" style="max-width:300px;max-height: 100px;margin-top:-15px;margin-left:-30px"/></a></div>
        </div>
        <div class="col-xs-10 text-center menu-1 ">
          <ul>
            <span class="icon">
              <li><a class="active" href="index.php"><i class="icon-home"></i></a></li>
            </span>
              <li><a href="about.php"><b>About</a></b></li>
              <li><a class="nat-farm"><b>Natural Farming</a></b></li>
              <li><a href="resource.php"><b>Resources</a></b></li>
              <li><a href="contact.php"><b>Contact us</a></b></li>
              <li><?php if(!isset($_SESSION['login_user']) && !isset($_SESSION['category']))
                    {

                      echo "<li><a href='login.php'><b>LOGIN</b></a></li>";
                      echo "<li><a href='signup2.php'><b>REGISTER</b></a></li>";
                    }
                    else if(isset($_SESSION['login_user']) && isset($_SESSION['category']))
                    {

                      echo "<li><a href='logout.php'><b>Logout</b></a></li>";

                      echo "<li><b>Welcome ".$_SESSION['fname']."!!</b></li>";
                    }
              ?></li>
            </ul>




        </div>


  </div>
      </div>
			</nav>


			<br/><br/><br/><br/>
     <div class="container">

                                <div class="table-responsive" style="background-color:white;">
                                    <table class="table table-top-campaign">
                                        <tbody>

										<tr>
											<th><h1>Seller Name</h1></th>
											<th><h1>Mobile Number</h1></th>
										</tr>

                <?php

				$sql = "SELECT *
				FROM sellerdb";
				//echo "$sql";
				$result = mysqli_query($connection,$sql);
			//	$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
				///echo $result;
				$count = mysqli_num_rows($result);
        $count1=1;
				if($count>0)
				{
					while($res=mysqli_fetch_assoc($result))
					{

              $fName =$res['firstName'];
              $lName =$res['lastName'];

              ?>

             <form action= "sprofile.php" method="post">

                  <input type="hidden" name="fname" value="<?php echo $fName; ?>">
                  <input type="hidden" name="lname" value="<?php echo $lName; ?>">






											<tr>
                                                 <td>
													<button type="submit" value="submit"><?php echo $res['firstName']." ".$res['lastName'];?></button>
												 </td>
                                                <td onclick='window.open("tel:<?php echo $res['sMobNo']; ?>");'><?php echo $res['sMobNo'];?></td>

                                            </tr>




              </form>
              <?php
              $count1++;

					}
				}
			//	echo $row['firstName'];
			/*	foreach($row as $value){
				echo $value;

				}
			/*	for ($x=0; $x<=$count; $x++){
					echo "<div>".$row['firstName']." ".$row['lastName']."</div>";
				}

				echo "fkjdnflskdvn";*/


				?>

        </div>



			</div>

			    </tbody>
                                    </table>
                                </div>
                                </div>






	  </body>
	</html>
