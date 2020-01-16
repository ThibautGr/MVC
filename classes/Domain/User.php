<?php
namespace Domain;


class User
{
    public $idUser;
    public $lastNameUer;
    public $firstNameUser;
    public $passwordUser;
    public $mailUser;
    public function __construct($idUser,$firstNameUser,$lastNameUer ,$passwordUser,$mailUser)
    {
        $this->idUser = $idUser;
        $this->firstNameUser = $firstNameUser;
        $this->lastNameUer = $lastNameUer;
        $this->passwordUser = $passwordUser;
        $this->mailUser = $mailUser;
    }
}