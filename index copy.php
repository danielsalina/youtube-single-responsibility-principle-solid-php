<?php

namespace Ecommerce;

class Order
{
  private $products = [];
  private $total = 0;

  public function addProduct($product, $quantity, $price)
  {
    $this->products[] = ['product' => $product, 'quantity' => $quantity];
    $this->total += $price * $quantity;
  }

  public function calculateTotal()
  {
    return $this->total;
  }

  public function processShipment()
  {
    // Lógica de procesamiento de envío
    echo "Shipment processed for order.\n";
  }

  public function sendInvoice()
  {
    // Lógica de envío de factura
    echo "Invoice sent to customer.\n";
  }
}

$product = new Order();
$product->addProduct("Laptop", 7, 1200);
$product->processShipment();
$product->sendInvoice();
echo $product->calculateTotal() . "\n";
