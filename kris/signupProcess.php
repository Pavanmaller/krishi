<?php
 include 'db_connect.php';

function Validate($data){
  $data= trim($data);
  $data = stripslashes($data);
  $data=htmlspecialchars($data);

  return $data;
}
$typeReg=$_POST['typeReg'];
if ($typeReg==2) {
  $firstName=Validate($_POST['firstName']);
  $lastName=Validate($_POST['lastName']);
  $sellOrgName=Validate($_POST['sellOrgName']);
  $sellerType=Validate($_POST['typeSeller']);

  $sMobNo=Validate($_POST['sellMbNo']);
  $WhatsApp=Validate($_POST['WhatsApp']);

  $addressSeller=Validate($_POST['ownPlacesSell']);
  $city=Validate($_POST['ownCitySell']);
  $state=Validate($_POST['ownStateSell']);
  $district=Validate($_POST['ownDistrictSell']);
  $zipcode=Validate($_POST['ownPinCodeSell']);

  $orgMobNo=Validate($_POST['orgMobNoSell']);
  $addressOrg=Validate($_POST['orgAddressSell']);
  $orgCity=Validate($_POST['ownOrgCitySell']);
  $orgState=Validate($_POST['ownOrgStateSell']);
  $orgDistrict=Validate($_POST['ownOrgDistrictSell']);
  $orgZipcode=Validate($_POST['ownOrgPinCodeSell']);

  $email=Validate($_POST['email']);
  $webAddress=Validate($_POST['webAddress']);
  $desc=Validate($_POST['desc']);
  $GST=Validate($_POST['GST']);
  $PAN=Validate($_POST['pan']);
  $TAN=Validate($_POST['tan']);

  $password=md5($_POST['password']);

    $query = "INSERT INTO sellerdb(firstName,lastName,sellOrgName,email,password,sMobNo,WhatsApp,orgMobNo,GST,PAN,TANo,addressSeller,addressOrg,city,state,district,zipcode,sellerType,orgCity,orgState,orgDistrict,orgZipcode,webAddress,descr) VALUES('".$firstName."','".$lastName."','".$sellOrgName."','".$email."','".$password."','".$sMobNo."','".$WhatsApp."','".$orgMobNo."','".$GST."','".$PAN."','".$TAN."','".$addressSeller."','".$addressOrg."','".$city."','".$state."','".$district."','".$zipcode."','".$sellerType."','".$orgCity."','".$orgState."','".$orgDistrict."','".$orgZipcode."','".$webAddress."','".$desc."')";
  mysqli_query($connection,$query);
  redirect();

}elseif ($typeReg==1) {

  $firstName=Validate($_POST['firstName']);
  $lastName=Validate($_POST['lastName']);
  $sellOrgName=Validate($_POST['buyOrgName']);
  $sellerType=Validate($_POST['typeBuyer']);

  $sMobNo=Validate($_POST['BuyMbNo']);
  $WhatsApp=Validate($_POST['WhatsApp']);

  $addressSeller=Validate($_POST['ownPlacesBuy']);
  $city=Validate($_POST['ownCityBuy']);
  $state=Validate($_POST['ownStateBuy']);
  $district=Validate($_POST['ownDistrictBuy']);
  $zipcode=Validate($_POST['ownPinCodeBuy']);

  $orgMobNo=Validate($_POST['orgMobNoBuy']);
  $addressOrg=Validate($_POST['orgAddressBuy']);
  $orgCity=Validate($_POST['ownOrgCityBuy']);
  $orgState=Validate($_POST['ownOrgStateBuy']);
  $orgDistrict=Validate($_POST['ownOrgDistrictBuy']);
  $orgZipcode=Validate($_POST['ownOrgPinCodeBuy']);

  $email=Validate($_POST['email']);
  $webAddress=Validate($_POST['webAddress']);
  $desc=Validate($_POST['desc']);
  $GST=Validate($_POST['GST']);
  $PAN=Validate($_POST['pan']);
  $TAN=Validate($_POST['tan']);
  $password=md5($_POST['password']);

    $query = "INSERT INTO buyerdb(firstName,lastName,orgName,email,password,bMobNo,WhatsApp,orgMobNo,GST,PAN,TANo,addressBuyer,addressOrg,city,state,district,zipcode,buyerType,orgCity,orgState,orgDistrict,orgZipcode,webAddress,descr) VALUES('".$firstName."','".$lastName."','".$sellOrgName."','".$email."','".$password."','".$sMobNo."','".$WhatsApp."','".$orgMobNo."','".$GST."','".$PAN."','".$TAN."','".$addressSeller."','".$addressOrg."','".$city."','".$state."','".$district."','".$zipcode."','".$sellerType."','".$orgCity."','".$orgState."','".$orgDistrict."','".$orgZipcode."','".$webAddress."','".$desc."')";
mysqli_query($connection,$query);
redirect();

}elseif ($typeReg==3) {
  $MobNo=Validate($_POST['MbNo']);
  $mName=Validate($_POST['cName']);
  $specialization=Validate($_POST['specialization']);
  $WhatsApp=Validate($_POST['WhatsApp']);

  $password=md5($_POST['password']);
  $email=Validate($_POST['email']);
  $query="INSERT INTO medexpertdb(firstName,lastName,specialization,email,WhatsApp,mbNo,password) VALUES('".$firstName."','".$lastName."','".$specialization."','".$email."','".$WhatsApp."','".$MobNo."','".$password."')";
mysqli_query($connection,$query);
redirect();

}elseif ($typeReg==4) {
  $MobNo=Validate($_POST['MbNo']);
  $firstName=Validate($_POST['firstName']);
  $lastName=Validate($_POST['lastName']);
  $type=Validate($_POST['typeOrg']);
  $orgName=Validate($_POST['orgName']);
  $WhatsApp=Validate($_POST['WhatsApp']);
  $password=md5($_POST['password']);
  $email=Validate($_POST['email']);
  $query="INSERT INTO communorg(firstName,lastName,type,orgName,email,WhatsApp,mbNo,password) VALUES('".$firstName."','".$lastName."','".$type."','".$orgName."','".$email."','".$WhatsApp."','".$MobNo."','".$password."')";
  mysqli_query($connection,$query);
  redirect();
}elseif ($typeReg==5) {
  $firstName=Validate($_POST['firstName']);
  $lastName=Validate($_POST['lastName']);
  $sellOrgName=Validate($_POST['buyOrgName']);
  $sellerType=Validate($_POST['typeBuyer']);

  $sMobNo=Validate($_POST['BuyMbNo']);
  $WhatsApp=Validate($_POST['WhatsApp']);

  $addressSeller=Validate($_POST['ownPlacesBuy']);
  $city=Validate($_POST['ownCityBuy']);
  $state=Validate($_POST['ownStateBuy']);
  $district=Validate($_POST['ownDistrictBuy']);
  $zipcode=Validate($_POST['ownPinCodeBuy']);

  $orgMobNo=Validate($_POST['orgMobNoBuy']);
  $addressOrg=Validate($_POST['orgAddressBuy']);
  $orgCity=Validate($_POST['ownOrgCityBuy']);
  $orgState=Validate($_POST['ownOrgStateBuy']);
  $orgDistrict=Validate($_POST['ownOrgDistrictBuy']);
  $orgZipcode=Validate($_POST['ownOrgPinCodeBuy']);

  $email=Validate($_POST['email']);
  $webAddress=Validate($_POST['webAddress']);
  $desc=Validate($_POST['desc']);
  $GST=Validate($_POST['GST']);
  $PAN=Validate($_POST['pan']);
  $TAN=Validate($_POST['tan']);
  $password=md5($_POST['password']);

    $query = "INSERT INTO aggregator(firstName,lastName,orgName,email,password,bMobNo,WhatsApp,orgMobNo,GST,PAN,TANo,addressBuyer,addressOrg,city,state,district,zipcode,buyerType,orgCity,orgState,orgDistrict,orgZipcode,webAddress,descr) VALUES('".$firstName."','".$lastName."','".$sellOrgName."','".$email."','".$password."','".$sMobNo."','".$WhatsApp."','".$orgMobNo."','".$GST."','".$PAN."','".$TAN."','".$addressSeller."','".$addressOrg."','".$city."','".$state."','".$district."','".$zipcode."','".$sellerType."','".$orgCity."','".$orgState."','".$orgDistrict."','".$orgZipcode."','".$webAddress."','".$desc."')";
mysqli_query($connection,$query);
redirect();

}



function redirect()
{
  header("Location:registerSuccess.php");
}



 ?>
