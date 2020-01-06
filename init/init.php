
<?php
try {
    $pdo = new PDO("mysql:dbname=MVC; host=localhost", 'root', 'poulet42');
}
catch (PDOException $e){
    die('erreur' .  $e->getMessage());
}
?>
