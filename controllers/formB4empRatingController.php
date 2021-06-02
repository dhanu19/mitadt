<?php
//  EMPLOYEE RATING 4
session_start();
require_once('../connection.php');

$varA1ER = $_POST['Activity1ER'];
$varA2ER = $_POST['Activity2ER'];
$varA3ER = $_POST['Activity3ER'];
$varA4ER = $_POST['Activity4ER'];

$varUserId = $_SESSION['userId'];
$varTotalEmpRating = ($varA1ER + $varA2ER + $varA3ER + $varA4ER );

if (isset($_POST['save'])) {
    $insertEmpRatingsQuery = "INSERT into section_iv(Userid,Activity1,Activity2,Activity3,Activity4,TotalSelfRating) VALUES('$varUserId','$varA1ER','$varA2ER','$varA3ER','$varA4ER','$varTotalEmpRating')";

    $executeInsertEmpRatingsQuery = mysqli_query($con, $insertEmpRatingsQuery);
    $executeInsertEmpRatingsQuery1 = mysqli_query($con,"INSERT INTO section_v(Userid) VALUES('$varUserId')");
    if($executeInsertEmpRatingsQuery && $executeInsertEmpRatingsQuery1){
        header('Location:../Form_C1_self.php');
    }
}
else if(isset($_POST['submit'])){
     $updateEmpRatingsQuery = "UPDATE section_iv set Activity1 = '$varA1ER',Activity2 = '$varA2ER',Activity3 = '$varA3ER',Activity4 = '$varA4ER',TotalSelfRating = '$varTotalEmpRating' where Userid = '$varUserId' ";
     
     if(mysqli_query($con,$updateEmpRatingsQuery)){
          $updateStatusQuery = "Update status set SectionIV = 1 where Userid = '$varUserId'";
          $executeUpdateStatusQuery = mysqli_query($con,$updateStatusQuery);
          if ($updateStatusQuery) {
              header('Location:../Form_C1_self.php');
          }
     }
}
?>