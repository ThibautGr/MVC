<?php

$title = 'Users';
ob_start();

echo "<ul>";
foreach ($users as  $user){
    echo "<li><a href='../controller/userController.php?id=' ".$user->idUser." >". $user->firstNameUser." ".$user->lastNameUer."</a> </li>";
}

echo "</ul>";


$content = ob_get_clean();
require('../view/template.php');
?>