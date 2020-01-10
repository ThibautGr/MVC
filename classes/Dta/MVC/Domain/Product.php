<?php
namespace Dta\MVC\Domain;

class Product
{
    public $ididProduct;
    public $nameProduct;
    public $priceProduct;
    public $description;
    public $popularity;

    public function __construct($ididProduct, $nameProduct, $priceProduct, $description, $popularity)
    {
        $ididProduct = $this->$ididProduct;
        $nameProduct = $this->$nameProduct;
        $priceProduct = $this->$priceProduct;
        $description = $this->$description;
        $popularity = $this->$popularity;
    }
}