<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elearn";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
$email=$_POST['email'];
$pwd=$_POST['password'];
$sql = "select * from register where email='$email' and password='$pwd'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
            echo "<script>window.location.href='index.html';</script>";
    }
} 
else{
    echo "<script>alert('Invalid email or password');</script>";
    echo "<script>window.location.href='login.html';</script>";
}
$conn->close();
?>