<?php
require "../inc/autoloader.php";
use DAO\UserDao;
use Domain\User;
use service\UserService;
$config = include '../inc/config.inc';
$usersDao = new UserDao($config);

$userService = new UserService();

$validationError = [];

$lastNameUer ='';
$firstNameUer='';
$passwordUser = '';
$mailUser='';

if(!empty($_POST)){
    $lastNameUer =$_POST['firstNameUser'];
    $firstNameUer=$_POST['lastNameUer'];
    $passwordUser = $_POST['passwordUser'];
    $mailUser=$_POST['mailUser'];

    $user =new User(null, $lastNameUer, $firstNameUer, $passwordUser, $mailUser);
    $validationError = $userService->isValid($user);
    if (empty($validationError)){
        $usersDao->insertUser($user);
        $id = $usersDao;
        session_destroy();
        $usersDao->close();
        header("Location: userController.php?=id") ;
    }
}
require "../view/addUser.php";