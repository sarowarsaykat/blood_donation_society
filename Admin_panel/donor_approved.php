<?php
include "../db_connect/db_connect.php";
$id = $_GET['id'];
$sql ="update donor_registrations set is_approved ='1' where id='$id'";
$result = mysqli_query($con, $sql);
if($result){
    echo "<script>alert('Donor has been approved'); location.replace('donors.php');</script>";
}
?>