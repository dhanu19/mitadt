<?php

// session_start();
require_once('../connection.php');

$varA1HR = $_POST['Activity1HR'];
$varA2HR = $_POST['Activity2HR'];
$varA3HR = $_POST['Activity3HR'];
$varA4HR = $_POST['Activity4HR'];
$varUserId = $_GET['userId'];
$varTotalHodRating = ($varA1HR + $varA2HR + $varA3HR + $varA4HR);

$updateHODRatingsQuery = "UPDATE section_iv set Activity1HR = '$varA1HR',Activity2HR = '$varA2HR',Activity3HR = '$varA3HR',Activity4HR = '$varA4HR',TotalHodRating = '$varTotalHodRating' where Userid = '$varUserId' ";
$executeUpdateHODRatingsQuery = mysqli_query($con,$updateHODRatingsQuery);

if($executeUpdateHODRatingsQuery){
     header('Location:../form4director1.php?userId='.$varUserId);
}
?>