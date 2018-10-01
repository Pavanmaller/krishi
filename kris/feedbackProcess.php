<?php

include 'db_connect.php';
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$query="INSERT INTO feedback(fname,lname,email,subject,message) VALUES('".$fname."','".$lname."','".$email."','".$subject."','".$message."')";
mysqli_query($connection,$query);
header("Location:contact.php");
 ?>
