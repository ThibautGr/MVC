<?php
require "../loader/autoloader.php";
use  Dta\MVC\Model\ProductModel;

$ProductModel = new ProductModel();
$products = $ProductModel->getProduct();

require "../view/ProductView.php";
