<?php
$cookie_name = "user";
$cookie_value = "Prabin";

// Set cookie for 1 hour
setcookie($cookie_name, $cookie_value, time() + 3600);

// Check if cookie exists
if (isset($_COOKIE[$cookie_name])) {
    echo "Cookie Value: " . $_COOKIE[$cookie_name];
} else {
    echo "Cookie is not set yet (refresh page).";
}

// Delete cookie (optional test)
if (isset($_GET['delete'])) {
    setcookie($cookie_name, "", time() - 3600);
    echo "<br>Cookie is deleted";
}
?>

<a href="?delete=1">Delete Cookie</a>