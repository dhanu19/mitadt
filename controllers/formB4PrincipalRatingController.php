<?php

session_start();
require_once('../connection.php');

$varA1PR = $_POST['Activity1PR'];
$varA2PR = $_POST['Activity2PR'];
$varA3PR = $_POST['Activity3PR'];
$varA4PR = $_POST['Activity4PR'];
$varUserId = $_GET['userId'];
$varTotalPrincipalRating = ($varA1PR + $varA2PR + $varA3PR + $varA4PR);

$updatePrincipalRatingsQuery = "UPDATE section_iv set Activity1PR = '$varA1PR',Activity2PR = '$varA2PR',Activity3PR = '$varA3PR',Activity4PR = '$varA4PR',TotalDirectorPrincipalRating = '$varTotalPrincipalRating' where Userid = '$varUserId' ";
$executeUpdatePrincipalRatingsQuery = mysqli_query($con,$updatePrincipalRatingsQuery);

if($executeUpdatePrincipalRatingsQuery){
     header('Location:../form4director1.php?userId='.$varUserId);
}
?>