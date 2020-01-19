<?php


namespace DAO;

use Domain\Product;

class ProductDao extends DAOBase
{

    public function __construct($config) {
        parent::__construct($config);
    }
    /*
    idProduct
    nameProduct
    priceProduct
    description
    popularity
    */

    public function getProductByIdUser($id){
        $result = [];
        $query = $this->bdd->prepare("SELECT product.idProduct, nameProduct, priceProduct, product.description, popularity from product
                                                INNER JOIN favorite on product.idProduct = favorite.idProduct 
                                                INNER JOIN users on favorite.idUser = users.idUser
                                                WHERE users.idUser = :id");
        $query->bindParam(":id",$id);
        if($query->execute()){
            while($data = $query->fetch()){
                    $product = new Product($data["idProduct"],
                    $data["nameProduct"],
                    $data["priceProduct"],
                    $data["description"],
                    $data["popularity"]
                );
                $result[] = $product;
                var_dump($result);
            }
            $query->closeCursor();
        }
        return $result;
    }


}