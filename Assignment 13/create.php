<!DOCTYPE html>
<html>
<body>

<?php

$file = fopen("example.txt", "w"); 

if ($file) {
    fwrite($file, "This is a test file.\n");  
    fwrite($file, "Second line of text.\n");
    fclose($file);  
    echo "File created succesfully";
} else {
    echo "Unable to open file!";
}
?>

</body>
</html>