<?php
namespace OOP; // Định nghĩa namespace (là tên, đường dẫn file để có thể import qua file khác)

// Định nghĩa lớp Person
class Person {
    // Thuộc tính
    public $name;
    private $age;

    // Constructor (Hàm dựng)
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    // Phương thức setAge
    public function setAge($age) {
        if ($age >= 0) {
            $this->age = $age;
        }
    }

    // Phương thức getAge
    public function getAge() {
        return $this->age;
    }

    // Phương thức sayHello
    public function sayHello() {
        echo "Hello, my name is " . $this->name . ". I am " . $this->age . " years old.";
    }
}

// Kế thừa từ class Person
class Student extends Person {
    private $studentId;

    // Constructor (Hàm dựng)
    public function __construct($name, $age, $studentId) {
        parent::__construct($name, $age);
        $this->studentId = $studentId;
    }

    // Phương thức getStudentId
    public function getStudentId() {
        return $this->studentId;
    }

    // Override phương thức sayHello
    public function sayHello() {
        echo "Hello, I am a student. My name is " . $this->name . ". My student ID is " . $this->studentId . ".";
    }
}

// Tạo đối tượng từ class Person
$person = new Person("Trần Thanh Tú", 21);
$person->sayHello();

echo "<br>";

// Tạo đối tượng từ class Student
$student = new Student("Hoàng Thị Ngọc Yến", 22, "20F7511329");
$student->sayHello();
?>
