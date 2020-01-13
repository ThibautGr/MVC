<?php
namespace Domain;


class User
{
    public $idUser;
    public $lastNameUer;
    public $firstNameUser;
    public $mailUser;
    public function __construct($idUser,$firstNameUser, $lastNameUer, $mailUser)
    {
        $this->idUser = $idUser;
        $this->firstNameUser = $firstNameUser;
        $this->lastNameUer = $lastNameUer;
        $this->mailUser = $mailUser;
    }
}