<?php
$servername = "www.myexamportals.com";
$username = "myexampo_users";
$password = "{%@j+H7fhnW^";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  ?>