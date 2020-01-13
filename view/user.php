<?php


$title = 'User';
ob_start();

echo "<ul>";

    echo "<li> " . $userr->firstNameUser . " " . $userr->lastNameUer . "</li>";
    var_dump($usersDao);

echo "</ul>";


$content = ob_get_clean();
require('../view/template.php');
