<?php

session_start();
require_once('../connection.php');

$varA1HR = $_POST['Activity1HR'];
$varA2HR = $_POST['Activity2HR'];
$varA3HR = $_POST['Activity3HR'];
$varA4HR = $_POST['Activity4HR'];
$varA5HR = $_POST['Activity5HR'];
$varUserId = $_GET['userId'];
$varTotalHodRating = ($varA1HR + $varA2HR + $varA3HR + $varA4HR + $varA5HR);

$updateHODRatingsQuery = "UPDATE section_ii set Activity1HR = '$varA1HR',Activity2HR = '$varA2HR',Activity3HR = '$varA3HR',Activity4HR = '$varA4HR',Activity5HR = '$varA5HR',TotalHodRating = '$varTotalHodRating' where Userid = '$varUserId' ";
$executeUpdateHODRatingsQuery = mysqli_query($con,$updateHODRatingsQuery);

if($executeUpdateHODRatingsQuery){
     header('Location:../Form_B3_hod.php?userId='.$varUserId);
}
?>