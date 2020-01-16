<?php
$title = 'Add a user';
ob_start();


echo "
<p>success</p>
<a class='btn btn-primary' href='userController.php'>retour à l'écran de sélection</a>
"
;

$content = ob_get_clean();

require('../view/template.php');
echo "<a class='btn btn-primary' href='userController.php'>back</a>";