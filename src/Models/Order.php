<?php

namespace Models;

class Order
{
    private $products = [];
    private $total = 0;

    public function addProduct(Product $product, int $quantity)
    {
        $this->products[] = ['product' => $product, 'quantity' => $quantity];
        $this->total += $product->getPrice() * $quantity;
    }

    public function getTotal(): float
    {
        return $this->total;
    }

    public function getProducts(): array
    {
        return $this->products;
    }
}
