<?php
//  EMPLOYEE RATING 2

session_start();
require_once('../connection.php');

$varA1ER = $_POST['Activity1ER'];
$varA2ER = $_POST['Activity2ER'];
$varA3ER = $_POST['Activity3ER'];
$varA4ER = $_POST['Activity4ER'];
$varA5ER = $_POST['Activity5ER'];
$varUserId = $_SESSION['userId'];
$varTotalEmpRating = ($varA1ER + $varA2ER + $varA3ER + $varA4ER + $varA5ER );

if (isset($_POST['save'])) {
    $insertEmpRatingsQuery = "INSERT into section_ii(Userid,Activity1,Activity2,Activity3,Activity4,Activity5,TotalSelfRating) VALUES('$varUserId','$varA1ER','$varA2ER','$varA3ER','$varA4ER','$varA5ER','$varTotalEmpRating')";
 
    $executeInsertEmpRatingsQuery = mysqli_query($con, $insertEmpRatingsQuery);
    if($executeInsertEmpRatingsQuery){
        header('Location:../Form_B3_self.php?userId='.$varUserId);
    }
}
else if(isset($_POST['submit'])){
    $updateEmpRatingsQuery = "UPDATE section_ii set Activity1 = '$varA1ER',Activity2 = '$varA2ER',Activity3 = '$varA3ER',Activity4 = '$varA4ER',Activity5 = '$varA5ER',TotalSelfRating = '$varTotalEmpRating' where Userid = '$varUserId'";
    
    if (mysqli_query($con,$updateEmpRatingsQuery)) {
        $updateStatusQuery = "Update status set SectionII = '1' where Userid = '$varUserId'";
        $executeUpdateStatusQuery = mysqli_query($con, $updateStatusQuery);
        if ($updateStatusQuery) {
            header('Location:../Form_B3_self.php?userId='.$varUserId);
        }
    }
}
?>