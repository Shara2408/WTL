<?php
// Handle POST request and display submitted data
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $age = $_POST['age'] ?? '';
    $class = $_POST['class'] ?? '';

    echo "<h3>POST Request Received</h3>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Phone Number: " . htmlspecialchars($phone) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>";
    echo "Class: " . htmlspecialchars($class) . "<br><hr>";
}
?>

<!-- HTML Form -->
<h2>Student Details Form (POST Request)</h2>
<form method="POST" action="post_request.php">
  <label>Name: <input type="text" name="name" required></label><br><br>
  <label>Email: <input type="email" name="email" required></label><br><br>
  <label>Phone Number: <input type="tel" name="phone" required></label><br><br>
  <label>Age: <input type="number" name="age" required></label><br><br>
  <label>Class: <input type="text" name="class" required></label><br><br>
  <input type="submit" name="submit" value="Send via POST">
</form>