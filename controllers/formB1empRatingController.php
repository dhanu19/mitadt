!-- DATABASE CONNECTION CODE-->
<?php
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
