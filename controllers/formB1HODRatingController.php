<?php

session_start();
require_once('../connection.php');

$varA1HR = $_POST['Activity1HR'];
$varA2HR = $_POST['Activity2HR'];
$varA3HR = $_POST['Activity3HR'];
$varA4HR = $_POST['Activity4HR'];
$varA5HR = $_POST['Activity5HR'];
$varA6HR = $_POST['Activity6HR'];
$varUserId = $_GET['userId'];
$varTotalHodRating = ($varA1HR + $varA2HR + $varA3HR + $varA4HR + $varA5HR + $varA6HR);

$updateHODRatingsQuery = "UPDATE section_i set Activity1HR = '$varA1HR',Activity2HR = '$varA2HR',Activity3HR = '$varA3HR',Activity4HR = '$varA4HR',Activity5HR = '$varA5HR',Activity6HR = '$varA6HR',TotalHodRating = '$varTotalHodRating' where Userid = '$varUserId' ";
$executeUpdateHODRatingsQuery = mysqli_query($con,$updateHODRatingsQuery);

if($executeUpdateHODRatingsQuery){
     header('Location:../researchhod1.php?userId='.$varUserId);
}
?>