<?php

include '../inc/autoloader.php';

use DAO\UserDao;
use Domain\User;

$config = include '../inc/config.inc';

$usersDao = new UserDao($config);

if (isset($_GET['id'])) {
    $id = $_GET['id'];


    require "../view/deletedUser.php";
    $usersDao->deleteUser($id);
}