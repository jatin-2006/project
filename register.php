<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dasu";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$number = $_POST['number'];
$password = $_POST['password'];

$sql = "INSERT INTO data (name, number, password) VALUES ('$name', '$number', '$password')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Registration successful!'); window.location.href='index.php';</script>";
} else {
  echo "Error: " . $conn->error;
}

$conn->close();
?>