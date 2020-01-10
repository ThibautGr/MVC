<?php
$title = "Listes des 2 meillieurs produits :";
ob_start();
echo "<ul>";
foreach ($products as  $product){
    echo "<li>".$product["nameProduct"]." ". $product["priceProduct"]." € ".$product["description"]." Cote de popularité".$product["popularity"]." </li>";
}

echo "</ul>";


$content = ob_get_clean();
require('../view/template.php');
?>