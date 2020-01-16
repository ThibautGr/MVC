<?php


$title = 'Userdeleted';
ob_start();


    echo "sucess user deletes";


echo "<a class='btn btn-primary' href='userController.php'>retour</a>";


$content = ob_get_clean();
require('../view/template.php');
