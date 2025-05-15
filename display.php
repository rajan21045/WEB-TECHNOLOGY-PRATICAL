<?php
$servername = "localhost";
$username = "root";
$password = "*rajan12345#";
$dbname = "college";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students";
$result = $conn->query($sql);

echo "<table border='1'>
<tr><th>Name</th><th>Email</th><th>Roll</th></tr>";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['roll']}</td></tr>";
    }
} else {
    echo "<tr><td colspan='3'>No records found</td></tr>";
}
echo "</table>";

$conn->close();
?>
