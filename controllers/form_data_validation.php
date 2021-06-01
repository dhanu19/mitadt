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

$firstName = $lastName = $name = $fatherName = $age = $dob = $gender = $dependents = $maritalStatus = $nationality = $religion = $email = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $name = $firstName.' '.$lastName;
    $fatherName = $_POST["fatherName"];
    $age = $_POST["age"];
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

    $file=$_FILES["profilePhoto"];
    
    $fileName = $_FILES['profilePhoto']['name'];
    $fileTmpName = $_FILES['profilePhoto']['tmp_name'];
    $fileSize = $_FILES['profilePhoto']['size'];
    $fileErro = $_FILES['profilePhoto']['error'];
    $fileType = $_FILES['profilePhoto']['type'];

    $fileExtTmp=explode('.',$fileName);
    $fileExt= strtolower(end($fileExtTmp));
    $allow = array('jpg','jpeg','png','svg');
    $str = "";

    $_SESSION['userName'] = $name;
    $_SESSION['userEmail'] = $email;
	
    // echo $name;
    $varUserId = $_SESSION['userId'];

    if (!empty($fileExt)) {
        if (in_array($fileExt,$allow)) {
            if ($fileErro === 0) {
                
                    $fileNewName = $varUserId.'_'.$name.".".$fileExt;
                    $path = "../assets/images/profile";
                    if (!file_exists($path)) {
                        mkdir($path, 0777, true);
                    }
                    $fileDestination = '../assets/images/profile/'.$fileNewName;
                    move_uploaded_file($fileTmpName,$fileDestination);
                    $str=substr($fileDestination,3);
                
            }
            else {
                // $_SESSION['msg']="There is error while uploading a image!";
                // header("Location: ../subject.php?class=$varClass&subject=$varSubject");
                return;
            }
        }
        else {
            // $_SESSION['msg']="file with this extension is not allowed!!";
            // header("Location: ../subject.php?class=$varClass&subject=$varSubject");
            return;
        }
    }
    else{
        // $_SESSION["return"] = "Error! Please Select Logo File!";
        // header("Location: ../subject.php?class=$varClass&subject=$varSubject");
        return;
    }

	$query = " insert into personaldetails(Userid,NameOfFacultyMember,FatherName,DOB,Gender,Email,MaritalStatus,NoOfDependent,Nationality,Religion,profilePhoto,Age) values('$varUserId','$name','$fatherName', '$dob','$gender','$email','$maritalStatus','$dependents','$nationality','$religion','$str',$age) ";

	
    $updateLoginStatusQuery = "UPDATE login set LoginStatus = 1 where id = '$varUserId'";
    

    $insertStatusQuery = "Insert into status(Userid,SectionI,SectionII,SectionIII,SectionIV,SectionIHOD,SectionIIHOD,SectionIIIHOD,SectionIVHOD,SectionVHOD,SectionIPrincipal,SectionIIPrincipal,SectionIIIPrincipal,SectionIVPrincipal,SectionVPrincipal) VALUES('$varUserId',0,0,0,0,0,0,0,0,0,0,0,0,0,0)";
    

    if(mysqli_query($conn,$query) AND mysqli_query($conn,$updateLoginStatusQuery) AND mysqli_query($conn,$insertStatusQuery)){
        header('location:../register2.php');
        // alert("Success");
    }
    else{
        // alert("Error");
        header('location:../register.php');
    }
}
?>