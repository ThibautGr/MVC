<?php
require "../loader/autoloader.php";
use  Model\ProductModel;

$ProductModel = new ProductModel();
$products = $ProductModel->getProduct();

require "../view/ProductView.php";
