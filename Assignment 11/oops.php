<!DOCTYPE html>
<html>
<body>

<?php
echo "<h2>OOP Concepts</h2>";

// Basic class
class Student {
    public $name, $age, $marks;
    private $cgpa;

    function __construct($name, $age, $marks, $cgpa) {
        $this->name = $name;
        $this->age = $age;
        $this->marks = $marks;
        $this->cgpa = $cgpa;
    }

    public function display() {
        echo "Student Name: $this->name <br>Age: $this->age <br>Marks: $this->marks <br>CGPA: $this->cgpa <br><br>";
    }
}
// Static
class College {
    public static $collegeName = "D.Y.Patil Kasaba Bawada";
    public static function displayCollege() {
        echo "College Name: " . self::$collegeName . "<br>";
    }
}

// Interface
interface Greetable {
    public function greet();
}

// Inheritance + Polymorphism
abstract class Person {
    abstract public function role();
}

class Teacher extends Person implements Greetable {
    public function role() {
        echo "Role: Teaching<br>";
    }

    public function greet() {
        echo "Hello, I'm your Teacher.<br><br>";
    }
}

// Using it
$student = new Student("Shara", 21, 90, 9.4);
$student->display();

College::displayCollege();

$teacher = new Teacher();
$teacher->role();
$teacher->greet();
?>


</body>
</html>