<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearn";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$fname=$_POST['fname'];
$email=$_POST['email'];
$pwd=$_POST['psame'];
$sql = "INSERT INTO register (name, email, password)
VALUES ('$fname', '$email', '$pwd')";

if ($conn->query($sql) === TRUE) {
  echo "<script>window.location.href='login.html';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>