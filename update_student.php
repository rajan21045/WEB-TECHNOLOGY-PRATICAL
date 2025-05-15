<?php
$servername = "localhost";
$username = "root";
$password = "*rajan12345#";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$roll = $_POST['roll'];
$new_name = $_POST['new_name'];

$sql = "UPDATE students SET name='$new_name' WHERE roll='$roll'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully!";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
