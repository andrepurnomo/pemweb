<?php
$mysqli = new mysqli("mysqldb","root","root","ardan");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo "Berhasil konek";
}

$sql = "INSERT INTO MyGuest (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";
// $sql = "create table MyGuest(
//     firstname varchar(255),
//     lastname varchar(255),
//     email varchar(255)
// )";

if ($mysqli->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
?>