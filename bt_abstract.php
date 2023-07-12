<?php
//Tạo một class trừu tượng "Shape" (Hình dạng) có một phương thức trừu tượng là "calculateArea". Tạo các lớp con "Circle" (Hình tròn) và "Rectangle" (Hình chữ nhật) kế thừa từ lớp Shape và triển khai phương thức calculateArea cho từng hình.
echo "câu 1: ";
abstract class Shape {
    abstract public function calculateArea();
}

class Circle extends Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * $this->radius**2;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function calculateArea() {
        return $this->width * $this->height;
    }
}
$circle = new Circle(5);
echo "Diện tích hình tròn: " . $circle->calculateArea() . "<br>";

$rectangle = new Rectangle(4, 6);
echo "Diện tích hình chữ nhật: " . $rectangle->calculateArea();
echo "<br> câu 2: ";
abstract class Animal {
    abstract public function makeSound();
}

class Dog extends Animal {
    public function makeSound() {
       return "Woof! Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        return "Meow! Meow!";
    }
}
$dog = new Dog();
$cat = new Cat();
echo $dog->makeSound(); 

echo $cat->makeSound();

//Tạo một abstract class "Employee" (Nhân viên) với các thuộc tính trừu tượng như "name" (tên) và "salary" (mức lương). 
//Tạo các lớp con "Manager" (Quản lý) và "Staff" (Nhân viên) kế thừa từ lớp Employee và triển khai các thuộc tính và phương thức theo cách riêng của từng lớp.
echo "<br> câu 3: ";
abstract class Employee {
        protected $name;
        protected $salary;
    
         public function __construct($name, $salary) {
             $this->name = $name;
             $this->salary = $salary;
         }
    
         abstract public function bonusSales();
    
         public function getDetails() {
             return "Name: " . $this->name . ", Salary: " . $this->salary;
         }
     }
    
     class Manager extends Employee {
        private $allowance;

        public function __construct($name, $salary, $allowance) {
             parent::__construct($name, $salary);
             $this->allowance = $allowance;
         }
    
         public function bonusSales() {
             return $this->salary * 0.2;
         }
    
         public function getDetails() {
             return parent::getDetails() . ", Allowance: " . $this->allowance;
         }
     }
    
     class Staff extends Employee {
         public function bonusSales() {
             return $this->salary * 0.1;
         }
     }
    
     $manager = new Manager("A", 500, 1000);
     echo $manager->getDetails() . "\n";
     echo "Bonus: " . $manager->bonusSales() . "<br />";
    
     $staff = new Staff("B", 3000);
     echo $staff->getDetails() . "\n";
     echo "Bonus: " . $staff->bonusSales();
//Tạo một abstract class "Vehicle" (Phương tiện) với một phương thức trừu tượng là "start". Tạo các lớp con "Car" (Xe hơi) và "Motorcycle" (Xe máy) kế thừa từ lớp Vehicle và triển khai phương thức start theo cách riêng của từng loại phương tiện.
echo "<br> câu 4: ";
abstract class Vehicle {
    abstract public function start();
}

class Car extends Vehicle {
    public function start() {
        return "Car is starting";
    }
}

class Motorcycle extends Vehicle {
    public function start() {
        return "Motorcycle is starting";
    }
}

$vehicles = [new Car(), new Motorcycle()];

foreach ($vehicles as $vehicle) {
    echo $vehicle->start() . "<br />";
}
//Tạo một abstract class "Database" (Cơ sở dữ liệu) với các phương thức trừu tượng như "connect", "query" và "disconnect". Tạo các lớp con "MySQLDatabase" và "PostgreSQLDatabase" kế thừa từ lớp Database và triển khai các phương thức theo cách riêng của từng loại cơ sở dữ liệu.
echo "<br> câu 5: ";
abstract class Database {
    abstract public function connect();
    abstract public function query($sql);
    abstract public function disconnect();
}

class MySQLDatabase extends Database {
    public function connect() {
        echo "Kết nối thành công .<br>";
    }

    public function query($sql) {
        echo "Thực hiện truy vấn: " . $sql . "<br>";
    }

    public function disconnect() {
        echo "Không kết nối được.<br>";
    }
}

class PostgreSQLDatabase extends Database {
    public function connect() {
        echo "Kết nối thành công với P.<br>";
    }

    public function query($sql) {
        echo "Thực hiện truy vấn P: " . $sql . "<br>";
    }

    public function disconnect() {
        echo "Kết nói không thành công với P.<br>";
    }
}
$mysql = new MySQLDatabase();
$mysql->connect();
$mysql->query("SELECT * FROM users"); 