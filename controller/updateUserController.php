<?php

include '../inc/autoloader.php';

use DAO\UserDao;
use Domain\User;
use service\UserService;
$config = include '../inc/config.inc';
$userService = new UserService();

$validationError = [];

$usersDao = new UserDao($config);

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $userr = $usersDao->getUser($id);
    }

if(!empty($_POST)){

    $idUser = $_POST["idUser"];
    $lastNameUer =$_POST['firstNameUser'];
    $firstNameUer=$_POST['lastNameUer'];
    $passwordUser = $_POST['passwordUser'];
    $mailUser=$_POST['mailUser'];

    $user =new User($idUser, $lastNameUer, $firstNameUer, $passwordUser, $mailUser);
    var_dump($user);
    $validationError = $userService->isValid($user);

   if (empty($validationError)){
        $usersDao->updateUser($user);
        session_destroy();
        $usersDao->close();
        header("Location: userController.php") ;
    }

}
    require "../view/updateUser.php";

