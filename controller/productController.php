<?php
require "../inc/autoloader.php";
    use  DAO\ProductDao;

$ProductModel = new ProductModel();
$products = $ProductModel->getProduct();

require "../view/ProductView.php";
