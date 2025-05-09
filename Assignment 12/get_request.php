<?php
// Handle GET request and display submitted data
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['submit'])) {
    $name = $_GET['name'] ?? '';
    $email = $_GET['email'] ?? '';
    $phone = $_GET['phone'] ?? '';
    $age = $_GET['age'] ?? '';
    $class = $_GET['class'] ?? '';

    echo "<h3>GET Request Received</h3>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone Number: " . htmlspecialchars($phone) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>";
    echo "Class: " . htmlspecialchars($class) . "<br><hr>";
}
?>

<!-- HTML Form -->
<h2>Student Details Form (GET Request)</h2>
<form method="GET" action="get_request.php">
  <label>Name: <input type="text" name="name" required></label><br><br>
  <label>Email: <input type="email" name="email" required></label><br><br>
  <label>Phone Number: <input type="tel" name="phone" required></label><br><br>
  <label>Age: <input type="number" name="age" required></label><br><br>
  <label>Class: <input type="text" name="class" required></label><br><br>
  <input type="submit" name="submit" value="Send via GET">
</form>