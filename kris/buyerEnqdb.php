<?php

include 'db_connect.php';
$farming_type = $_POST['farming_type'];
$companyName = $_POST['companyName'];
$email = $_POST['email'];
$bankName = $_POST['bankName'];
$ifsc = $_POST['ifsc'];
$accountNumber = $_POST['accountNumber'];
$tan=$_POST['tan'];
$pan=$_POST['pan'];
$gst=$_POST['gst'];
$deliveryAddress = $_POST['deliveryAddress'];
$message= $_POST['message'];
$BX_Item = $_POST['BX_Item'];
$BX_type = $_POST['BX_type'];
$BX_units = $_POST['BX_units'];
$BX_duration = $_POST['BX_duration'];

$query="INSERT INTO buyerenq(userid,category,farming_type,companyName,email,bankName,IFSC,accountNumber,deliveryAddress,gst,tan,pan,message) VALUES('".$_SESSION['login_user']."','".$_SESSION['category']."','".$farming_type."','".$companyName."','".$email."','".$bankName."','".$ifsc."','".$accountNumber."','".$deliveryAddress."','".$gst."','".$tan."','".$pan."','".$message."')";
mysqli_query($connection,$query);

foreach ($BX_Item as $key => $value) {
  $item = $BX_Item[$key];
  $unit = $BX_units[$key];
  $type = $BX_type[$key];
  $duration = $BX_duration[$key];

    $sql = "INSERT INTO buyerproduct(userid,category,item,unit,type,duration)  values('".$_SESSION['login_user']."','".$_SESSION['category']."','".$item."','".$unit."','".$type."','".$duration."')";
     mysqli_query($connection,$sql);
}
header("Location:enquiryFormSuccess.php");
 ?>
