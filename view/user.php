<?php


$title = 'User';
ob_start();

echo "<ul>";

    echo "<li> " . $user->firstNameUser . " " . $user->lastNameUer . "</li>";


echo "</ul>";


$content = ob_get_clean();
require('../view/template.php');
