<?php
// session_cookie.php

// Start session
session_start();

// Set session variable
$_SESSION["username"] = "JohnDoe";
$_SESSION["name"] = "SudeepKhanal";

// Set cookie (expires in 7 days)
setcookie("user", "JohnDoe", time() + (86400 * 7), "/");

echo "Session and cookie have been set.<br>";

// Display session variable
echo "Session variable: " . $_SESSION["username"] . "<br>";
echo "Session variable: " . $_SESSION["name"] . "<br>";

// Display cookie variable (available on the next request)
if (isset($_COOKIE["user"])) {
    echo "Cookie variable: " . $_COOKIE["user"];
} else {
    echo "Cookie variable is not available yet. Reload the page.";
}
?>
