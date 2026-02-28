<?php


$servername = "localhost";
$username = "root";
$password = "*rajan12345#";
$dbname = "myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email) VALUES ('Rajan', 'Poudel', 'rajan@example.com'),
('Prabin', 'Poudel', 'prabin@example.com'), ('Sujan', 'Poudel', 'sujan@example.com')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql1 = "Select * from MyGuests";
$result = $conn->query($sql1);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}

$sql2 = "UPDATE MyGuests SET lastname='Shrestha' WHERE id=1";
if ($conn->query($sql2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$sql3 = "DELETE FROM MyGuests WHERE id=2";
if ($conn->query($sql3) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>