<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tsakani_holidays";

try {
  $conn = new PDO("mysql:host=$servername;port=3310;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>
