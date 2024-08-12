<?php

phpinfo(); 
$servername =getenv('DB_HOST');
$username = 'avnadmin';
$password = getenv('DB_PASSWORD');
$dbname = 'defaultdb';
$port =26663;
// Create connection
$conn =mysqli_connect($servername, $username, $password,$dbname,$port);

// Check connection
echo "connection susseccfuk";
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Create database

?>