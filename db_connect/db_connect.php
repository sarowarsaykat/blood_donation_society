<?php
session_start();
$con = mysqli_connect("localhost","root","","blood_donation_society");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
?>