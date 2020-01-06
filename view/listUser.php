<?php

$title = 'Users';
ob_start();

echo "<ul>";
foreach ($req as $user){
    echo "<li>".$user["firstNameUser"]." ". $user["lastNameUer"]." ".$user["mailUser"]." </li>";
}
$req->closeCursor();
echo "</ul>";


$content = ob_get_clean();
require('view/template.php');
?>