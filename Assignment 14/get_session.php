<?php
session_start();
$username = isset($_SESSION['username']) ? $_SESSION['username'] : 'Not set';
$email = isset($_SESSION['email']) ? $_SESSION['email'] : 'Not set';

$user_theme = isset($_COOKIE['user_theme']) ? $_COOKIE['user_theme'] : 'Not set';

echo "<h3>Session Data:</h3>";
echo "Username: $username<br>";
echo "Email: $email<br>";

echo "<h3>Cookie Data:</h3>";
echo "User Theme: $user_theme<br>";

echo "<br><a href='index.php'>Go back to the homepage</a>";
?>
