<?php

phpinfo(); 
$servername =' mysql-276140da-saib85199-41c8.k.aivencloud.com';
$username = 'avnadmin';
$password = getenv('DB_PASSWORD');
$dbname = 'defaultdb';
$port =26663;
// Create connection
$conn = new mysqli_connect($servername, $username, $password,$dbname,$port);

// Check connection
echo "connection susseccfuk";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create database

?>