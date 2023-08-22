<?php
$host = "localhost";
$username = "root";
$password = "123@"
$dbName = "TestMySQL"

// Kết nối MySQL bằng MySQLi
$mysqli = new mysqli($host, $username, $password, $dbName);
if ($mysqli->connect_error) {
    die("Kết nối thất bại: " . $mysqli->connect_error);
}

// Kết nối MySQL bằng PDO
try {
    $pdo = new PDO("mysql:host=".$host.";dbname=".$dbName, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}

// Truy vấn đọc dữ liệu bằng MySQLi
$query = "SELECT * FROM Users";
$result = $mysqli->query($query);
while ($row = $result->fetch_assoc()) {
    echo "UserID: " . $row["UserID"] . ", FirstName: " . $row["FirstName"] . "<br>";
}

// Truy vấn thêm dữ liệu bằng PDO
$firstName = "Hoàng Thị Ngọc";
$lastName = "Yến";
$email = "htnyen@gmail.com";
$query = "INSERT INTO Users (FirstName, LastName, Email) VALUES (?, ?, ?)";
$stmt = $pdo->prepare($query);
$stmt->execute([$firstName, $lastName, $email]);

// Truy vấn sửa dữ liệu bằng MySQLi
$newFirstName = "Trần";
$userId = 1;
$query = "UPDATE Users SET LastName = '$newFirstName' WHERE UserID = $userId";
$mysqli->query($query);

// Truy vấn xoá dữ liệu bằng PDO
$userId = 1;
$query = "DELETE FROM Users WHERE UserID = ?";
$stmt = $pdo->prepare($query);
$stmt->execute([$userId]);

// Đóng kết nối
$mysqli->close();
$pdo = null;
?>
