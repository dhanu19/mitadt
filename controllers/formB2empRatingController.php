<?php
//  EMPLOYEE RATING 2

// session_start();
require_once('../connection.php');

$varA1ER = $_POST['Activity1ER'];
$varA2ER = $_POST['Activity2ER'];
$varA3ER = $_POST['Activity3ER'];
$varA4ER = $_POST['Activity4ER'];
$varA5ER = $_POST['Activity5ER'];
$varUserId = $_GET['userId'];
$varTotalEmpRating = ($varA1ER + $varA2ER + $varA3ER + $varA4ER + $varA5ER );

$updateEmpRatingsQuery = "UPDATE section_i set Activity1ER = '$varA1ER',Activity2ER = '$varA2ER',Activity3ER = '$varA3ER',Activity4ER = '$varA4ER',Activity5HR = '$varA5ER',TotalHodRating = '$varTotalEmpRating' where Userid = '$varUserId' ";
$executeUpdateEmpRatingsQuery = mysqli_query($con,$updateEmpRatingsQuery);

if($executeUpdateEmpRatingsQuery){
     #header('Location:../researchhod1.php?userId='.$varUserId);
}
?>