<?php
// Xử lý form trong PHP
// Giao tiếp với HTTP thông qua phương thức GET và POST
// GET: Dữ liệu truyền qua URL (không bảo mật, giới hạn kích thước)
$parameter = $_GET['param']; // Lấy tham số từ URL
// POST: Dữ liệu gửi thông qua HTTP POST (bảo mật hơn, không giới hạn kích thước)
$value = $_POST['inputName']; // Lấy giá trị từ form

// Upload file lên server
$targetDir = "uploads/";
$targetFile = $targetDir . basename($_FILES['file']['name']);
move_uploaded_file($_FILES['file']['tmp_name'], $targetFile);

// Vai trò và sự khác nhau giữa Session và Cookie
// Cookie: Lưu trên máy khách, thông tin ít nhạy cảm, hạn chế kích thước
setcookie("username", "tuneofcode", time() + 3600); // Tạo cookie
$username = $_COOKIE["username"]; // Đọc cookie

// Session: Lưu trên máy chủ, thông tin nhạy cảm, không giới hạn kích thước
session_start(); // Khởi tạo session
$_SESSION["user_id"] = 123; // Gán giá trị cho session
$user_id = $_SESSION["user_id"]; // Đọc session

// Hàm kiểm tra dữ liệu đầu vào: isset() và empty()
if (isset($_POST['username']) && !empty($_POST['username'])) {
    $username = $_POST['username'];
}

// Import file với hàm require, require_once, include, include_once
require("functions.php"); // Import file và bắt buộc nếu lỗi
require_once("config.php"); // Import duy nhất và bắt buộc nếu lỗi
include("helpers.php"); // Import file và tiếp tục thực hiện nếu lỗi
include_once("constants.php"); // Import duy nhất và tiếp tục thực hiện nếu lỗi

// Chuyển hướng trang với hàm Header
header("Location: index.php"); // Chuyển hướng đến trang index.php
exit(); // Dừng thực hiện script sau khi chuyển hướng
?>
