<?php

namespace OOP\interfaces;

use OOP\Product;

interface IProductService {
    public function getAll(): array;
    public function getById(int $id): Product;
    public function add(Product $product): void;
    public function update(Product $product): void;
    public function delete(int $id): void;
}
