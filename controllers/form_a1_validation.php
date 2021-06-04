<?php
session_start();

require_once('..\connection.php');
/*
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
*/
$firstName = $lastName = $name = $fatherName = $age = $dob = $gender = $dependents = $maritalStatus = $nationality = $religion = $email = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name = $_POST["empName"];
    $fatherName = $_POST["fatherName"];
    
    $dob= $_POST["dob"];
    $gender = $_POST["gender"];
    $dependents = $_POST["dependents"];
    $maritalStatus = $_POST["maritalStatus"];
    $nationality = $_POST["nationality"];
    $religion = $_POST["religion"];
    //$designation = $_POST["designation"];
    $email = $_POST["email"];
    //$mobile = $_POST["mobile"];

    $varUserId = $_SESSION['userId'];
    
    

    $query ="update personaldetails set NameOfFacultyMember = '$name' , FatherName = '$fatherName', DOB = '$dob',Gender = '$gender',Email = '$email',MaritalStatus = '$maritalStatus',NoOfDependent = '$dependents',Nationality = '$nationality',Religion = '$religion' where Userid = '$varUserId' " ;
    
	if(mysqli_query($conn,$query)){
        
        //header('location:../Form_A1_self.php');
        header('location:../Form_A2_self.php');
    }
    
}
?>