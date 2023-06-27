<?php
  // Database credentials
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "project";

  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);

  // Check connection
  if ($conn->connect_error) {
    // If connection fails, display an error message and terminate the script
    die("Connection failed: " . $conn->connect_error);
  }
?>
