<!-- DATABASE CONNECTION CODE-->
<?php
$servername = 'localhost:3307';
$username = 'root';
$password = '';
$dbname = 'mit';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>
<!-- DATABASE CONNECTION CODE END-->







<!-- INSERT CODE-->
<?php

$firstName = $lastName = $name = $fatherName = $age = $dob = $gender = $dependents = $maritalStatus = $nationality = $religion = $email = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $name = $firstName.' '.$lastName;
    $fatherName = $_POST["fatherName"];
    //$age = $_POST["age"];
    $dob= $_POST["dob"];
    $gender = $_POST["gender"];
    $dependents = $_POST["dependents"];
    $maritalStatus = $_POST["maritalStatus"];
    $nationality = $_POST["nationality"];
    $religion = $_POST["religion"];
    $caste = $_POST["caste"];
    $subCategory = $_POST["subCategory"];
    $schoolDeptName = $_POST["schoolDeptName"];
    $permanentAddress = $_POST["permanentAddress"];
    $correspondentAddress = $_POST["correspondentAddress"];
    $designation = $_POST["designation"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
	

	$query = " insert into personaldetails(NameOfFacultyMember,FatherName, Age,DOB,Gender,Email,MaritalStatus,NoOfDependent,Nationality,Religion) values 
    ('$name','$fatherName', '$age','$dob','$gender','$email','$maritalStatus','$dependents','$nationality','$religion') ";

	mysqli_query($conn,$query);

    header('location:../formB1self.php');
}else{
    header('location:../index.php');
}



?>
<!-- INSERT CODE END-->