<?php
include 'db_connect.php';
session_start();
$error='';
function Validate($data){
  $data= trim($data);
  $data = stripslashes($data);
  $data=htmlspecialchars($data);
  return $data;
}
if (isset($_POST['login'])) {
  if (empty($_POST['number'] || empty($_POST['password']))) {
    $error = "Name or Password is Not Valid";
  }else {
    $number=Validate($_POST['number']);
    $password=md5($_POST['password']);
    // $password=password_hash($_POST['password'],PASSWORD_DEFAULT);
    $query="SELECT buyerdb.bMobNo,buyerdb.password,sellerdb.sMobNo,sellerdb.password,medexpertdb.mbNo,medexpertdb.password,communorg.mbNo,communorg.password FROM buyerdb,sellerdb,medexpertdb,communorg WHERE buyerdb.bMobNo='$number' AND buyerdb.password='$password' or sellerdb.sMobNo='$number' AND sellerdb.password='$password' ";
    $buyer = mysqli_query($connection,$query);
    if (mysqli_num_rows($buyer) == 1) {
      $rows=mysqli_fetch_assoc($buyer);
      $_SESSION['login_user']=$rows['id'];

    }else {
      $error = "User Name or Password is Invalid or incorrect";
    }
    mysqli_close($connection);
  }
}


 ?>
