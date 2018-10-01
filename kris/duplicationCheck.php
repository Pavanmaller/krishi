<?php
include 'db_connect.php';

$contact=$_POST['contact'];

$query="SELECT aggregator.bMobNo from aggregator WHERE aggregator.bMobNo='".$contact."' ";
$row=mysqli_query($connection,$query);
 if (mysqli_num_rows($row)==1) {
   echo mysqli_num_rows($row);
 }
 $query="SELECT buyerdb.bMobNo from buyerdb WHERE buyerdb.bMobNo='".$contact."' ";
 $row=mysqli_query($connection,$query);
 if (mysqli_num_rows($row)==1) {
   echo mysqli_num_rows($row);

 }
 $query="SELECT communorg.mbNo from communorg WHERE communorg.mbNo='".$contact."' ";
 $row=mysqli_query($connection,$query);
 if (mysqli_num_rows($row)==1) {
   echo mysqli_num_rows($row);

 }
 $query="SELECT medexpertdb.mbNo from medexpertdb WHERE medexpertdb.mbNo='".$contact."' ";
 $row=mysqli_query($connection,$query);
 if (mysqli_num_rows($row)==1) {
   echo mysqli_num_rows($row);

 }
 $query="SELECT sellerdb.sMobNo from sellerdb WHERE sellerdb.sMobNo='".$contact."' ";
 $row=mysqli_query($connection,$query);
 if (mysqli_num_rows($row)==1) {
   echo mysqli_num_rows($row);

 }
 ?>
