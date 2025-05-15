<!-- <?php
$connection = mysqli_connect("localhost", "root", "*rajan12345#", "student_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM students";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

// Start HTML table
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Age</th>
        <th>Phone Number</th>
      </tr>";

// Loop through each row and display in table
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["course"] . "</td>
            <td>" . $row["age"] . "</td>
            <td>" . $row["phone_number"] . "</td>
          </tr>";
}

echo "</table>";
?> -->

<?php
$connection = mysqli_connect("localhost", "root", "*rajan12345#", "student_db");

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM students";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}

// Start HTML table
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
        <th>ID</th>
        <th>Name</th>
        <th>Course</th>
        <th>Age</th>
        <th>Phone Number</th>
        <th>Actions</th>
      </tr>";

// Loop through each row and display in table
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<tr>
            <td>" . $row["id"] . "</td>
            <td>" . $row["name"] . "</td>
            <td>" . $row["course"] . "</td>
            <td>" . $row["age"] . "</td>
            <td>" . $row["phone_number"] . "</td>
            <td>
                <a href='edit.php?sid=" . $row["id"] . "'>Edit</a> |
                <a href='delete.php?sid=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
            </td>
          </tr>";
}

echo "</table>";
?>

