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
$varUserId = $_SESSION['userId'];
$vartitleCourses = $_POST['titleCourses'];
$varAssignedLectures = $_POST['a_lectures'];
$varTakenLectures = $_POST['t_lectures'];
$vartitlePracticals = $_POST['titlePractical'];
$varAssignedPracticals = $_POST['a_practicals'];
$varTakenPracticals = $_POST['t_practicals'];
$varTotalEmpRating = ($varA1ER + $varA2ER + $varA3ER + $varA4ER + $varA5ER + $varA6ER);

if (isset($_POST['save'])) {
    
    $insertEmpRatingsQuery = "INSERT into section_i(Userid,Activity1,Activity2,Activity3,Activity4,Activity5,Activity6,titleCourses,lectures,takenLectures,titlePractical,practicals,takenPracticals,TotalSelfRating) VALUES('$varUserId','$varA1ER','$varA2ER','$varA3ER','$varA4ER','$varA5ER','$varA6ER','$vartitleCourses','$varAssignedLectures','$varTakenLectures','$vartitlePracticals','$varAssignedPracticals','$varTakenPracticals','$varTotalEmpRating')";

    $executeInsertEmpRatingsQuery = mysqli_query($con, $insertEmpRatingsQuery);

    if ($executeInsertEmpRatingsQuery) {
        header('Location:../Form_B2_self.php?userId='.$varUserId);
    }
}
else if(isset($_POST['submit'])){
    $updateEmpRatingsQuery = "UPDATE section_i set Activity1 = '$varA1ER',Activity2 = '$varA2ER',Activity3 = '$varA3ER',Activity4 = '$varA4ER',Activity5 = '$varA5ER',Activity6 = '$varA6ER',titleCourses = '$vartitleCourses',lectures = '$varAssignedLectures',takenLectures = '$varTakenLectures',titlePractical = '$vartitlePracticals',practicals = '$varAssignedPracticals',takenPracticals = '$varTakenPracticals',TotalSelfRating = '$varTotalEmpRating' where Userid = '$varUserId' ";
    
    $executeUpdateEmpRatingsQuery = mysqli_query($con, $updateEmpRatingsQuery);

    if ($executeUpdateEmpRatingsQuery) {
        $updateStatusQuery = "Update status set SectionI = 1 where Userid = '$varUserId'";
        $executeUpdateStatusQuery = mysqli_query($con, $updateStatusQuery);
        echo $updateStatusQuery;
        if ($executeUpdateStatusQuery) {
            header('Location:../Form_B2_self.php?userId='.$varUserId);
        }
    }
}
?>