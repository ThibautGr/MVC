<?php
include '../inc/autoloader.php';
use DAO\UserDao;
use Domain\User;

$config = include '../inc/config.inc';

$usersDao = new UserDao($config);
$users = $usersDao->findAllUsers();

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $userr = $usersDao->findUserById($id);

    require "../view/user.php";
}
else{
    require '../view/listUser.php';

}

