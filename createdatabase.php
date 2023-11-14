<?php 
require "config.php"; 






// Create database
$sql = "CREATE DATABASE test6";
if ($conn->query($sql) === TRUE) {
  echo "Database created successfully";
} else {
  echo "Error creating database: " ;
}
$conn->close();
?>

