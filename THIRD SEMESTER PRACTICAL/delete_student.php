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

$sql = "DELETE FROM students WHERE roll='$roll'";

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully!";
} 

else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
