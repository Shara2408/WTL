<!DOCTYPE html>
<html>
<body>

<?php

$file = fopen("example.txt", "r"); 

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo $line . "<br>";  
    }
    fclose($file);  
} else {
    echo "Unable to open file!";
}
?>


</body>
</html>