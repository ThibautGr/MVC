<?php
include '../inc/autoloader.php';
use DAO\UserDao;
use Domain\User;
use DAO\ProductDao;
$config = include '../inc/config.inc';

$usersDao = new UserDao($config);
$product = new ProductDao($config);
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $userr = $usersDao->findUserById($id);
    $productt = $product->getProductByIdUser($id);
    var_dump($productt);
    require "../view/productByUserView.php";
}
