<?php


namespace Dta\MVC\Domain;


class User
{
    public $idUser;
    public $lastNameUer;
    public $firstNameUser;
    public $passWord;
    public function __construct($idUser,$firstNameUser, $lastNameUer,$passWord)
    {
        $this->idUser = $idUser;
        $this->firstNameUser = $firstNameUser;
        $this->lastNameUer = $lastNameUer;
        $this->passWord = $passWord;
    }
}