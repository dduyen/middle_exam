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

$sql = "INSERT INTO position (name, id_company)
VALUES ('Giám Đốc', 1)";

if ($conn->query($sql) === TRUE) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: http://localhost/test/admin.php');
?>