-- Tạo CSDL
CREATE DATABASE TestMySQL;

-- Sử dụng CSDL
USE TestMySQL;

-- Tạo bảng "Users"
CREATE TABLE Users (
    UserID INT PRIMARY KEY AUTO_INCREMENT,
    FirstName VARCHAR(50),
    LastName VARCHAR(50),
    Email VARCHAR(100)
);

-- Tạo bảng "Orders"
CREATE TABLE Orders (
    OrderID INT PRIMARY KEY AUTO_INCREMENT,
    UserID INT,
    OrderDate DATE,
    -- một người dùng có nhiều đơn đặt hàng
    FOREIGN KEY (UserID) REFERENCES Users(UserID) 
);

-- Tạo bảng "Products"
CREATE TABLE Products (
    ProductID INT PRIMARY KEY AUTO_INCREMENT,
    ProductName VARCHAR(100)
);

-- Tạo bảng "OrderProducts"
CREATE TABLE OrderProducts (
    OrderID INT,
    ProductID INT,
    PRIMARY KEY (OrderID, ProductID),
    -- Nhiều đơn đặt hàng chứa nhiều sản phẩm
    FOREIGN KEY (OrderID) REFERENCES Orders(OrderID),
    FOREIGN KEY (ProductID) REFERENCES Products(ProductID)
);

-- Đặt lại trường ID tự tăng trong "Users"
ALTER TABLE Users AUTO_INCREMENT=1;

-- Thêm dữ liệu vào bảng "Users"
INSERT INTO Users (FirstName, LastName, Email) 
VALUES ('Trần', 'Tú', '20T1080009@husc.edu.vn');


-- Đọc dữ liệu từ bảng "Users"
SELECT * FROM Users;

-- Đọc dữ liệu có điều kiện từ bảng "Orders"
SELECT * FROM Orders AS o 
WHERE o.UserID = 1;

-- Cập nhật dữ liệu trong bảng "Users"
UPDATE Users 
SET FirstName = 'Trần Thanh' 
WHERE UserID = 1;

-- Xoá dữ liệu khỏi bảng "Users"
DELETE FROM Users WHERE UserID = 1;

-- Sử dụng JOIN
SELECT u.FirstName, u.LastName, o.OrderDate 
FROM Users AS u
    INNER JOIN Orders AS o 
    ON u.UserID = o.UserID;

SELECT u.FirstName, u.LastName, o.OrderDate  
FROM Users AS u
    LEFT JOIN Orders AS o 
    ON u.UserID = o.UserID;

-- Sử dụng GROUP BY và HAVING
SELECT  u.FirstName, u.LastName, o.OrderDate,
        COUNT(o.OrderID) AS TotalOrders 
FROM Users AS u
    JOIN Orders AS o 
    ON u.UserID = o.UserID;
GROUP BY UserID
HAVING TotalOrders > 2;

-- Truy vấn con
SELECT u.FirstName 
FROM Users AS u
WHERE u.UserID IN (
                    SELECT o.UserID 
                    FROM Orders AS o
                );
