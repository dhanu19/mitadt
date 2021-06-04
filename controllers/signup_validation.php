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
$aadharno = $institute = $designation = $exampleFormControlSelect1 = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){


    $aadharno = $_POST["aadharno"];
    $institute = $_POST["institute"];
    $designation= $_POST["designation"];
    $exampleFormControlSelect1 = $_POST["exampleFormControlSelect1"];
    //$password = $_POST['password'];
    $empid = $_POST['empid'];



    // create function for generate random password
    function generate_password($len = 4){
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $password = substr( str_shuffle( $chars ), 0, $len );
        return $password;
       }
        
       // insert into database
       if(isset($_POST['signup'])) {
        
        $password_new = generate_password();
        $encpt_password= sha1($password);
        
        echo "Your Password Is : ".$password_new;
   
   
       }

       //enter generated password in database
       $password = $password_new;
    

	$query = " insert into login(AdharCard,Empid,Designation,Branch,institution,Password ) values('$aadharno','$empid','$designation', '$exampleFormControlSelect1','$institute','$password') ";

    

    
    








    
    if(mysqli_query($conn,$query)){
        echo '
        <script type="text/javascript">
        alert("signed up");
        location="../login.php";
        </script> ';

        //header('location:../login.php');
        // alert("Success");
    }
    else{
        // alert("Error");
        header('location:../login.php');
    }
}
?>