<?php
//  EMPLOYEE RATING 1

// session_start();
require_once('../connection.php');

$varA1ER = $_POST['Activity1ER'];
$varA2ER = $_POST['Activity2ER'];
$varA3ER = $_POST['Activity3ER'];
$varA4ER = $_POST['Activity4ER'];
$varA5ER = $_POST['Activity5ER'];
$varA6ER = $_POST['Activity6ER'];
$varUserId = $_GET['userId'];
$varTotalEmpRating = ($varA1ER + $varA2ER + $varA3ER + $varA4ER + $varA5ER + $varA6ER);

$insertEmpRatingsQuery = "INSERT into section_i(Userid,Activity1,Activity2,Activity3,Activity4,Activity5,Activity6,TotalSelfRating) VALUES('$varUserId','$varA1ER','$varA2ER','$varA3ER','$varA4ER','$varA5ER','$varA6ER','$varTotalEmpRating')";

// $updateEmpRatingsQuery = "UPDATE section_i set Activity1 = '$varA1ER',Activity2 = '$varA2ER',Activity3 = '$varA3ER',Activity4 = '$varA4ER',Activity5 = '$varA5ER',Activity6 = '$varA6ER',TotalSelfRating = '$varTotalEmpRating' where Userid = '$varUserId' ";
$executeInsertEmpRatingsQuery = mysqli_query($con,$insertEmpRatingsQuery);

if($executeInsertEmpRatingsQuery){
     $updateStatusQuery = "Update Status set SectionI = 1 where Userid = '$varUserId'";
     $executeUpdateStatusQuery = mysqli_query($con,$updateStatusQuery);
     if ($executeUpdateStatusQuery) {
         header('Location:../researchself1.php?userId='.$varUserId);
     }
}
?>