<?php
$servername = "localhost";
$username = "root";
$password = "*rajan12345#";
$dbname = "college";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Make sure form input names match these
$name = $_POST['name'];
$email = $_POST['email'];
$roll = $_POST['roll'];
$department = $_POST['department'];

// Insert into students table
$sql = "INSERT INTO students (name, email, roll, department) VALUES ('$name', '$email', '$roll', '$department')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
