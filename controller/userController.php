<?php

    require "../loader/autoloader.php";

    use  Dta\MVC\Model\UsersManager;

    $managerUser = new UsersManager();
    $users = $managerUser->getUsers();

    require "../view/listUser.php";


/*
    if(isset($_GET[$user->idUser])){

    }
*/
