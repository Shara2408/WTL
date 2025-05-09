<!DOCTYPE html>
<html>
<body>

<?php

$file = fopen("example.txt", "a"); 

if ($file) {
    fwrite($file, "This is a new line added at the end.\n");
    fclose($file);
    echo "appended successfully!";
} else {
    echo "Unable to open file!";
}
?>

</body>
</html>