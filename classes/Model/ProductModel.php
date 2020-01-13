<?php


namespace Model;
use Domain\Product;
require "Manager.php";
class ProductModel extends Manager
{
    function getProduct(){
;
        $bdd= $this->dbConnect();
        $req = $bdd->query("SELECT `idProduct` ,`nameProduct`,`priceProduct`,`description`,`popularity` FROM `product` ORDER by `popularity` DESC LIMIT 5");
        $result = $req->fetchAll();
        return $result;

        }


}

