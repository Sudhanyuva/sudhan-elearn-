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
$lname=$_POST['fname'];
$email=$_POST['mail'];
$query=$_POST['queries'];
$sql = "INSERT INTO contact (fname,lname, email,queries)
VALUES ('$fname','$lname', '$email', '$query')";

if ($conn->query($sql) === TRUE) {
  echo "<script>window.location.href='index.html';</script>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>