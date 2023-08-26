<?php
$servername = "";
$username = "";
$password = "";
$dbname = "";

// Create connection
$connMySql = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($connMySql->connect_error) {
  die("Connection failed: " . $connMySql->connect_error);
}
// echo "Connected successfully";

// Close the connection
// $connMySql->close();
?>

