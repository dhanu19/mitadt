<?php

session_start();


$servername = 'localhost:3307';
$username = 'root';
$password = '';
$dbname = 'mitadt';

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($con->connect_error) {
  die("Connection failed: " . $con->connect_error);
}


/*
$con = mysqli_connect('localhost:3307','root','');


if(!$con)
{
    echo 'Not Connected';
}
// $hdp = $_SESSION['dptname'];
mysqli_select_db($con, 'mitadt');

// $query="SELECT Faculty from cocurricular WHERE Facultydep = '$hdp'";
// $result = mysqli_query($con,$query);
*/


?>