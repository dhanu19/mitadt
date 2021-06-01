<?php
session_start();
$servername = 'localhost:3307';
$username = 'root';
$password = '';
$dbname = 'mitadt';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$aadharno = $institute = $designation = $exampleFormControlSelect1 = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $aadharno = $_POST["aadharno"];
    $institute = $_POST["institute"];
    $designation= $_POST["designation"];
    $exampleFormControlSelect1 = $_POST["exampleFormControlSelect1"];
    $password = $_POST['password'];

	$query = " insert into login(AdharCard,Designation,Branch,institution,Password ) values('$aadharno','$designation', '$exampleFormControlSelect1','$institute','$password') ";

    

    if(mysqli_query($conn,$query)){
        header('location:../login.php');
        // alert("Success");
    }
    else{
        // alert("Error");
        header('location:../login.php');
    }
}
?>