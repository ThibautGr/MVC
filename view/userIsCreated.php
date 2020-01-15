<?php
$title = 'Add a user';
ob_start();


?>

<?php
$content = ob_get_clean();

require('../view/template.php');
echo "<a class='btn btn-primary' href='userController.php'>back</a>";
?>