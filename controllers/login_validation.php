<!-- DATABASE CONNECTION CODE-->
<?php
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

?>
<!-- DATABASE CONNECTION CODE END-->




<!-- LOGIN CREDENTIALS CHECK  -->
<?php

$aadharno = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
	$aadharno = $_POST["aadharno"];
	$password = $_POST["password"]; 

    $sql = "select * from login where AdharCard = '$aadharno' AND Password = '$password' ";

	$result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)){
        //succesfull
        $row = mysqli_fetch_assoc($result);
        if($row['LoginStatus'] == 0){
            /*header('location:../index.php');*/
    
                //all forms are filled
            if($row['Designation'] == 'Admin'){
                //redirect to admin dashboard
                header('location:../dashboardsuperadmin.php'); // redirect to registration page //tell to add designation
            }elseif($row['Designation'] == 'Principal'){
                //redirect to principal dashboard
                header('location:../principal.php'); // redirect to registration page //tell to add designation
            }elseif($row['Designation'] == 'HOD'){
                //redirect to hod dashboard
                header('location:../dashboardHOD.php'); // redirect to registration page //tell to add designation
            }elseif($row['Designation'] == 'Assistant Professor'){
                //redirect to assistant professor dashboard
                header('location:../dashboardself.php'); // redirect to registration page //tell to add designation
            }else{
                error('404'); // redirect to registration page //tell to add designation
            
            }
            
        }else{ //forms not filled fully
            /*
            if($row['Designation'] == 'Admin'){
                //redirect to admin dashboard
                header('location:../dashboardsuperadmin.php'); // redirect to registration page //tell to add designation
            }elseif($row['Designation'] == 'Principal'){
                //redirect to principal form
                header('location:../principal.php'); // redirect to registration page //tell to add designation
            }elseif($row['Designation'] == 'HOD'){
                //redirect to hod form
                header('location:../dashboardHOD.php'); // redirect to registration page //tell to add designation
            }elseif($row['Designation'] == 'Assistant Professor'){
                //redirect to assistant professor form
                header('location:../dashboardself.php'); // redirect to registration page //tell to add designation
            }else{
                error('404'); // redirect to registration page //tell to add designation
            }*/
            header('location:../index.php'); // redirect to index i.e. dashboard
        }
    }
    else{
        //unsuccessfull
        header('location:../login.php'); //redirect to login page
    }

}
?>
<!-- LOGIN CREDENTIALS CHECK END -->


<!-- INSERT CODE-->
<?php
/*
$aadharno = $password = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    
	$aadharno = $_POST["aadharno"];
	$password = md5($_POST["password"]); //encrypt the password

	$query = " insert into login(AdharCard,Password) values ('$aadharno','$password') ";

	mysqli_query($conn,$query);

}

header('location:../index.php');
*/
?>
<!-- INSERT CODE END-->