<?php
$mysqli = new mysqli("mysqldb","root","root","data_smp");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>