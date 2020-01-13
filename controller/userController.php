<?php
include '../inc/autoloader.php';
use DAO\UserDao;
use Domain\User;



// use Domain\User;

$config = include '../inc/config.inc';

$usersDao = new UserDao($config);
$users = $usersDao->findAllUsers();


require "../view/listUser.php";