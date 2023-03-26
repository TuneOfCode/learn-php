<?php

// FIXME: Chưa chạy được
use OOP\interfaces\ProductRepository;
use OOP\Product;

include_once __DIR__ . "/autoload.php";

$productRepo = new ProductRepository(new Product(1, "Laptop Dell G3", "Loại tốt nhất", 100, 10));
echo $productRepo->findAll();
