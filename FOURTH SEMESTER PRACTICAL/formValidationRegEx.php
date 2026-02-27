<?php
echo "<h2>Email Validation:</h2>";
echo "Email: test@gmail.com<br>";
$email = "test@gmail.com";
if (preg_match("/^[^ ]+@[^ ]+\.[a-z]{2,3}$/", $email)) {
    echo "Valid Email";
} else {
    echo "Invalid Email";
}

echo "<h2>Password Validation:</h2>";
echo "Password: Test@123<br>";
$password = "Test@123";
if (preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/", $password)) {
    echo "Valid Password";
} else {
    echo "Invalid Password";
}

?>