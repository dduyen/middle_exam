<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dhtl";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name_office = $_POST['name'];

$sql = "INSERT INTO office (name)
VALUES ('" . $name_office . "')";
if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: http://localhost/test/admin.php');
?>