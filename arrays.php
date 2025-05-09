<!DOCTYPE html>
<html>
<body>

<?php
echo "<h2>Array Functions</h2>";

$arr = array(10, 20, 30, 40, 50);

echo "Original Array: ";
print_r($arr);

// 1. count()
echo "<br><br>1. Count: " . count($arr);

// 2. array_sum()
echo "<br>2. Sum: " . array_sum($arr);

// 3. array_reverse()
echo "<br>3. Reverse: ";
print_r(array_reverse($arr));

// 4. sort()
echo "<br>4. Sorted: ";
sort($arr);
print_r($arr);

// 5. array_search()
echo "<br>5. Array Search (30): " . array_search(30, $arr);

// 6. in_array()
echo "<br>6. In Array (40): " . (in_array(40, $arr) ? 'Yes' : 'No');

// 7. array_push()
array_push($arr, 60);
echo "<br>7. After Push (60): ";
print_r($arr);

// 8. array_pop()
$popped = array_pop($arr);
echo "<br>8. Popped Element: $popped <br>Array after pop: ";
print_r($arr);

// 9. array_merge()
$extra = array(70, 80);
$merged = array_merge($arr, $extra);
echo "<br>9. Merged Array: ";
print_r($merged);

// 10. array_unique()
$dupArray = array(10, 20, 20, 30, 30, 40);
$unique = array_unique($dupArray);
echo "<br>10. Unique Elements: ";
print_r($unique);
?>


</body>
</html>