<?php
//Tạo một interface "Resizable" (Có thể điều chỉnh kích thước) với một phương thức là "resize". Tạo một lớp "Rectangle" (Hình chữ nhật) và triển khai interface Resizable để thay đổi kích thước của hình chữ nhật
echo "Câu 1: ";
interface Resizable {
    public function resize($width, $height);
}
class Rectangle implements Resizable {
    protected $width;
    protected $height;
    public function __construct($width, $height) {
        $this->width=$width;
        $this->height=$height;
    }
    public function resize($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
    public function getWidth(){
        return $this->width;
    }
    public function getHeight(){
        return $this->height;
    }
}
$rectangle = new Rectangle(10, 20);
echo "Kích thước ban đầu: Width = " . $rectangle->getWidth() . ", Height = " . $rectangle->getHeight() . "\n";

$rectangle->resize(15, 25);
echo "<br> Kích thước sau khi thay đổi: Width = " . $rectangle->getWidth() . ", Height = " . $rectangle->getHeight() . "\n";
//Tạo một interface "Logger" với các phương thức "logInfo", "logWarning" và "logError". Tạo một lớp "FileLogger" (Ghi log vào file) và một lớp "DatabaseLogger" (Ghi log vào cơ sở dữ liệu) và triển khai interface Logger cho cả hai lớp.
echo "<br> Câu 2: ";
//Tạo một interface "Drawable" (Có thể vẽ) với phương thức "draw". Tạo một lớp "Circle" (Hình tròn) và một lớp "Square" (Hình vuông) kế thừa từ interface Drawable và triển khai phương thức draw cho mỗi hình.
echo "<br> Câu 3: ";
interface Drawable {
         public function draw();
     }
class Circle implements Drawable {
    protected $radius;

     public function __construct($radius)
     {
         $this -> radius = $radius;
     }

     public function draw(){
         echo "Vẽ đường tròn với bán kính " . $this -> radius . " cm" . "<br>";
     }
 }

 class Square implements Drawable{
     protected $length;
     protected $width;

     public function __construct($length, $width){
         $this -> length = $length;
         $this -> width = $width;
     }

     public function draw(){
         echo "Vẽ hình chữ nhật có chiều dài là " . $this -> length . " cm chiều rộng là " . $this -> width . "cm" ;
     }
 }
 $Circle = new circle(10);
 $Circle -> draw();

 $square = new Square(4,6);
 $square -> draw();
// Tạo một interface "Sortable" với phương thức "sort". Tạo một lớp "ArraySorter" (Sắp xếp mảng) và một lớp "LinkedListSorter" (Sắp xếp danh sách liên kết) và triển khai interface Sortable cho cả hai lớp.
echo "<br> Câu 4: ";
interface Sortable {
    public function sort();
}

class ArraySorter implements Sortable {
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function sort() {
        sort($this->data);
        return $this->data;
    }
}

$arraySorter = new ArraySorter([1,2,3,7,6]);
$sortedArray = $arraySorter->sort();
echo "Mảng sau khi sắp xếp: " . implode(", ", $sortedArray);


