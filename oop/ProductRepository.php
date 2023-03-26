<?php

namespace OOP\interfaces;

use OOP\Product;

class ProductRepository implements IProductRepository {
    private array $products;

    public function __construct(Product $product) {
        array_push($this->products, $product);
    }

    /**
     * @return array
     */
    public function findAll(): array {
        return $this->products;
    }

    /**
     *
     * @param int $id
     * @return Product
     */
    public function findById(int $id): Product {
        return new Product(0, "", "", 0, 0);
    }

    /**
     *
     * @param Product $product
     * @return int
     */
    public function create(Product $product): int {
        return 0;
    }

    /**
     *
     * @param Product $product
     * @return int
     */
    public function update(Product $product): int {
        return 0;
    }

    /**
     *
     * @param int $id
     */
    public function delete(int $id): void {
        return;
    }
}
