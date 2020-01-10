<?php

require "../loader/autoloader.php";

use  Dta\MVC\Model\UsersManager;

$managerUser = new UsersManager();




if(isset($_GET["id"])){
    $id = ($_GET["id"]);
    $users = $managerUser->getUser($id);
    require "../view/user.php";
}
else{
    $users = $managerUser->getUsers();
    require "../view/listUser.php";
}
