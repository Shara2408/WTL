<?php
session_start();
session_unset();
session_destroy();

setcookie('user_theme', '', time() - 3600, "/");

echo "Session and cookies have been reset.";
echo "<br><a href='index.php'>Go back to the homepage</a>";
?>
