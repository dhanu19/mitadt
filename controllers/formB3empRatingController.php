<?php
//  EMPLOYEE RATING 3

session_start();
require_once('../connection.php');

$varA1ER = $_POST['Activity1ER'];
$varA2ER = $_POST['Activity2ER'];
$varA3ER = $_POST['Activity3ER'];
$varA4ER = $_POST['Activity4ER'];

$varUserId = $_SESSION['userId'];
$varTotalEmpRating = ($varA1ER + $varA2ER + $varA3ER + $varA4ER );

$insertEmpRatingsQuery = "INSERT into section_iii(Userid,Activity1,Activity2,Activity3,Activity4,TotalSelfRating) VALUES('$varUserId','$varA1ER','$varA2ER','$varA3ER','$varA4ER','$varTotalEmpRating')";

// $updateEmpRatingsQuery = "UPDATE section_iii set Activity1 = '$varA1ER',Activity2 = '$varA2ER',Activity3 = '$varA3ER',Activity4 = '$varA4ER',TotalSelfRating = '$varTotalEmpRating' where Userid = '$varUserId' ";
$executeInsertEmpRatingsQuery = mysqli_query($con,$insertEmpRatingsQuery);

if($executeInsertEmpRatingsQuery){
     $updateStatusQuery = "Update status set SectionIII = 1 where Userid = '$varUserId'";
     $executeUpdateStatusQuery = mysqli_query($con,$updateStatusQuery);
     header('Location:../Form_B4_self.php?userId='.$varUserId);
}
?>