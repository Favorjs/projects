<?php
$servername = "localhost";
$username1 = "root";
$password1 = "";


// Create connection
$conn = mysqli_connect('localhost', 'root', '', 'registration');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo"oops"
?>