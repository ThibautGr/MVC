<?php
namespace Dta\MVC\Model;
class Manager
{
    protected function dbConnect(){
        $bdd = null;
        try{
           $bdd =  new \PDO("mysql:dbname=MVC; host=localhost", 'root', 'poulet42');
        }
        catch (Exception $e){
            die("Erreur : ".$e->getMessage());
        }
        return $bdd;
    }
}