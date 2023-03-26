<?php

namespace OOP\interfaces;

use OOP\Product;

interface IProductRepository {
    public function findAll(): array;
    public function findById(int $id): Product;
    public function create(Product $product): int;
    public function update(Product $product): int;
    public function delete(int $id): void;
}
