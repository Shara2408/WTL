<!DOCTYPE html>
<html>
<body>

<?php
echo "<h2>Calculations</h2>";

// Add three numbers
$a = 5; $b = 10; $c = 15;
$sum = $a + $b + $c;
echo "Sum of $a, $b, and $c is $sum <br>";

// Factorial
$num = 5;
$fact = 1;
for ($i = 1; $i <= $num; $i++) $fact *= $i;
echo "Factorial of $num is $fact <br>";

// Greatest of three
$max = max($a, $b, $c);
echo "Greatest number is $max <br>";

// Conditional Statement
if ($sum > 20) {
    echo "Sum is greater than 20<br><br>";
} else {
    echo "Sum is 20 or less<br><br>";
}
?>


</body>
</html>