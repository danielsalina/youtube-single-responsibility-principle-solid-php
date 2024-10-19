<?php

require_once 'vendor/autoload.php';

use Models\Product;
use Models\Order;
use Services\ShipmentService;
use Services\InvoiceService;

// Crear productos
$product1 = new Product(1, "Laptop", 1200);
$product2 = new Product(2, "Mouse", 40);

// Crear pedido
$order = new Order();
$order->addProduct($product1, 1);
$order->addProduct($product2, 2);

// Procesar el envío
$shipmentService = new ShipmentService();
$shipmentService->processShipment($order);

// Enviar factura
$invoiceService = new InvoiceService();
$invoiceService->sendInvoice($order);
