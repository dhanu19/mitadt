<?php

session_start();

$con = mysqli_connect('localhost','root','');


if(!$con)
{
    echo 'Not Connected';
}
// $hdp = $_SESSION['dptname'];
mysqli_select_db($con, 'mitadt');

// $query="SELECT Faculty from cocurricular WHERE Facultydep = '$hdp'";
// $result = mysqli_query($con,$query);



?>