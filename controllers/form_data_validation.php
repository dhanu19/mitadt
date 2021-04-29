<!-- DATABASE CONNECTION CODE-->
<?php
session_start();
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'mitadt';

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

    $_SESSION['userName'] = $name;
    $_SESSION['userEmail'] = $email;
	
    // echo $name;
    $varUserId = $_SESSION['userId'];

	$query = " insert into personaldetails(Userid,NameOfFacultyMember,FatherName, DOB,Gender,Email,MaritalStatus,NoOfDependent,Nationality,Religion) values 
    ('$varUserId','$name','$fatherName', '$dob','$gender','$email','$maritalStatus','$dependents','$nationality','$religion') ";

	mysqli_query($conn,$query);
    $updateLoginStatusQuery = "UPDATE login set LoginStatus = 1 where id = '$varUserId'";
    mysqli_query($conn,$updateLoginStatusQuery);

    $insertStatusQuery = "Insert into status(Userid,SectionI,SectionII,SectionIII,SectionIV,SectionV) VALUES('$varUserId',0,0,0,0,0)";
    mysqli_query($conn,$insertStatusQuery);

    // header('location:../formB1self.php');
    $selectDesignationQuery = "SELECT * from login where id = '$varUserId'";
    $executeSelectDesignationQuery = mysqli_query($conn, $selectDesignationQuery);
    $rowDesignation = mysqli_fetch_assoc($executeSelectDesignationQuery);
    if($rowDesignation['Designation'] == 'Admin'){
                //redirect to admin dashboard
                header('location:../dashboardsuperadmin.php'); // redirect to registration page //tell to add designation
            }elseif($rowDesignation['Designation'] == 'Principal Dean (R&D)'){
                //redirect to principal dashboard
                header('location:../principal.php'); // redirect to registration page //tell to add designation
            }elseif($rowDesignation['Designation'] == 'Professor (HOD)'){
                //redirect to hod dashboard
                header('location:../dashboardHOD.php'); // redirect to registration page //tell to add designation
            }else{
                //redirect to assistant professor dashboard
                header('location:../dashboardself.php'); // redirect to registration page //tell to add designation
            }
}else{
    header('location:../index.php');
}



?>
<!-- INSERT CODE END-->