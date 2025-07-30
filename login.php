<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "dasu";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$number = $_POST['number'];
$password = $_POST['password'];

$sql = "SELECT * FROM data WHERE number='$number' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
  session_start();
  $_SESSION['number'] = $number;
  header("Location: booking.html");
} else {
  echo "<script>alert('Invalid login details'); window.location.href='index.php';</script>";
}

$conn->close();
?>