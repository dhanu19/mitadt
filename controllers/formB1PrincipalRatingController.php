<?php

session_start();
require_once('../connection.php');

$varA1PR = $_POST['Activity1PR'];
$varA2PR = $_POST['Activity2PR'];
$varA3PR = $_POST['Activity3PR'];
$varA4PR = $_POST['Activity4PR'];
$varA5PR = $_POST['Activity5PR'];
$varA6PR = $_POST['Activity6PR'];
$varUserId = $_GET['userId'];
$varTotalPrincipalRating = ($varA1PR + $varA2PR + $varA3PR + $varA4PR + $varA5PR + $varA6PR);

if (isset($_POST['save'])) {
    $updatePrincipalRatingsQuery = "UPDATE section_i set Activity1PR = '$varA1PR',Activity2PR = '$varA2PR',Activity3PR = '$varA3PR',Activity4PR = '$varA4PR',Activity5PR = '$varA5PR',Activity6PR = '$varA6PR',TotalDirectorPrincipalRating = '$varTotalPrincipalRating' where Userid = '$varUserId' ";
    $executeUpdatePrincipalRatingsQuery = mysqli_query($con, $updatePrincipalRatingsQuery);

    if ($executeUpdatePrincipalRatingsQuery) {
        header('Location:../Form_B2_director.php?userId='.$varUserId);
    }
}
else if (isset($_POST['submit'])) {
    $updatePrincipalRatingsQuery = "UPDATE section_i set Activity1PR = '$varA1PR',Activity2PR = '$varA2PR',Activity3PR = '$varA3PR',Activity4PR = '$varA4PR',Activity5PR = '$varA5PR',Activity6PR = '$varA6PR',TotalDirectorPrincipalRating = '$varTotalPrincipalRating' where Userid = '$varUserId' ";
    $executeUpdatePrincipalRatingsQuery = mysqli_query($con, $updatePrincipalRatingsQuery);

    if ($executeUpdatePrincipalRatingsQuery) {
        header('Location:../Form_B2_director.php?userId='.$varUserId);
    }
}
?>