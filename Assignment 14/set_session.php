<?php
session_start();

$_SESSION['username'] = 'Nandini Babar';
$_SESSION['email'] = 'nandini@gmail.com';


setcookie('user_theme', 'dark', time() + 3600, "/");

echo "Session and cookie data have been set.";
echo "<br><a href='index.php'>Go back to the homepage</a>";
?>
