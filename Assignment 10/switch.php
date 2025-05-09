<!DOCTYPE html>
<html>
<body>

<?php
$dayNumber = 5;

echo "Day Number: $dayNumber<br>";

switch ($dayNumber) {
    case 1:
        echo "It's Monday";
        break;
    case 2:
        echo "It's Tuesday";
        break;
    case 3:
        echo "It's Wednesday";
        break;
    case 4:
        echo "It's Thursday";
        break;
    case 5:
        echo "It's Friday";
        break;
    case 6:
        echo "It's Saturday";
        break;
    case 7:
        echo "It's Sunday";
        break;
    default:
        echo "Invalid day number!";
}
?>


</body>
</html>