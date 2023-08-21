<?php
// Cấu trúc cú pháp
// Mọi mã PHP đều phải nằm trong thẻ <?php ... 

// Comment trong PHP
// Dùng // cho comment 1 dòng và /* ... */ cho comment nhiều dòng

// Hàm hiển thị: echo, print. Phân biệt hai loại này
echo "Hello, world!"; // Hiển thị văn bản
print("Welcome to PHP!"); // Hiển thị và trả về 1

// Biến
$variableName = "Hello, PHP"; // Khai báo biến với $

// Kiểu dữ liệu
$integerVar = 123; // Số nguyên
$floatVar = 3.14; // Số thực
$stringVar = "PHP is fun!"; // Chuỗi
$boolVar = true; // Boolean

// Toán tử và biểu thức
$sum = $integerVar + $floatVar;
$subtraction = $integerVar - $floatVar;
$mul = $integerVar * $floatVar;
$div = $integerVar / $floatVar;

// Cấu trúc rẽ nhánh: if - else, switch - case
if ($integerVar > 0) {
    echo "Positive number";
} else {
    echo "Non-positive number";
}

switch ($integerVar) {
    case 1:
        echo "One";
        break;
    case 2:
        echo "Two";
        break;
    default:
        echo "Other";
}

// Cấu trúc lặp: for, while, do - while, foreach
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}

$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 5);

$numbers = array(1, 2, 3, 4, 5);
foreach ($numbers as $number) {
    echo $number;
}

// Cấu trúc hàm
function greet($name) {
    echo "Hello, $name!";
}

// Chuỗi và các hàm xử lý chuỗi
$phrase = "I love PHP";
$length = strlen($phrase); // Độ dài chuỗi
$uppercase = strtoupper($phrase); // Chuyển thành chữ hoa

// Biểu thức chính quy
$pattern = "/[0-9]+/";
$text = "There are 123 apples.";
preg_match($pattern, $text, $matches); // Tìm số trong chuỗi

// Mảng và các hàm xử lý mảng
$colors = array("red", "green", "blue");
$size = count($colors); // Số phần tử trong mảng

// Xử lý với kiểu dữ liệu thời gian
$currentDate = date("Y-m-d"); // Ngày hiện tại

// Xử lý file
$fileContent = file_get_contents("file.txt"); // Đọc nội dung từ file
file_put_contents("newfile.txt", $fileContent); // Ghi nội dung vào file mới
?>
