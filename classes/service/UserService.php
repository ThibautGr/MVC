<?php
namespace service;

class UserService
{
    public function __construct()
    {
    }
    public function isValid($user){
        $result = [];
        session_start();
        if($user->firstNameUser == ''){
            $result['user.firstNameUser'] = "need a firsname";
            $_SESSION['lastNameUer'] = $_POST['lastNameUer'];
            $_SESSION['passwordUser'] = $_POST['passwordUser'];
            $_SESSION['mailUser'] = $_POST['mailUser'];
            var_dump($_SESSION['mailUser']);
        }
        if($user->lastNameUer == ''){
            $result['user.lastNameUer'] = "need a last name";
            $_SESSION['firstNameUser'] = $_POST['firstNameUser'];
            $_SESSION['passwordUser'] = $_POST['passwordUser'];
            $_SESSION['mailUser'] = $_POST['mailUser'];
        }
        if($user->passwordUser == ''){
            $result['user.passwordUser'] = "need a  password";
            $_SESSION['lastNameUer'] = $_POST['lastNameUer'];
            $_SESSION['firstNameUser'] = $_POST['firstNameUser'];
            $_SESSION['mailUser'] = $_POST['mailUser'];
        }
        if($user->mailUser == ''){
            $result['user.mailUser'] = "need a  mail";
            $_SESSION['lastNameUer'] = $_POST['lastNameUer'];
            $_SESSION['firstNameUser'] = $_POST['firstNameUser'];
            $_SESSION['passwordUser'] = $_POST['passwordUser'];
        }
        return $result;
    }
}