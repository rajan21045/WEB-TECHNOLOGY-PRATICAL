<?php
$servername = "localhost";
$username = "root";
$password = "*rajan12345#";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST['name'];
$email = $_POST['email'];
$roll = $_POST['roll'];

$sql = "INSERT INTO students (name, email, roll) VALUES ('$name', '$email', '$roll')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
