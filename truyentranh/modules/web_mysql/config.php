<?php
$servername = "localhost";
$username = "root";
$password = "";
$mysql ="web_mysql";
// Create connection
$conn = new mysqli($servername, $username, $password, $mysql );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>