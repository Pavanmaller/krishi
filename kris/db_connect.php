<?php
$connection = mysqli_connect("localhost", "krishddw_user_kr", "K@devopsku@2020","krishddw_krishiyog"); // Establishing Connection with Server


// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>
