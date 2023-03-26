<?php

namespace OOP;

class Product {
    private int $id;
    private string $name;
    private string $description;
    private int $price;
    private int $quantity;
    private string $unit;
    // constructor
    public function __construct(int $id, string $name, string $description, int $price, int $quantity, string $unit = "USD") {
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->unit = $unit;
    }
    // getters    
    public function getId(): int {
        return $this->id;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getDescription(): string {
        return $this->description;
    }

    public function getPrice(): int {
        return $this->price;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    // setters
    public function setId(int $id): void {
        $this->id = $id;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function setDescription(string $description): void {
        $this->description = $description;
    }

    public function setPrice(int $price): void {
        $this->price = $price;
    }

    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }

    // other methods
    public function getCost(): int {
        return $this->price * $this->quantity;
    }

    public function getSummaryLine(): string {
        $base = "{$this->name} ({$this->id}): {$this->description}";
        $cost = $this->getCost();
        if ($cost > 0) {
            $base .= " : cost {$cost}";
        }
        return $base;
    }
}
