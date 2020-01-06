<?php
echo "<ul>";
foreach ($req as $user){
    echo "<li>".$user["firstNameUser"]." ". $user["lastNameUer"]." ".$user["mailUser"]." </li>";
}
echo "</ul>";