<?php


namespace DAO;
use Domain\User;

class UserDao extends DAOBase {
    public function __construct($config) {
        parent::__construct($config);
    }

 public function findAllUsers() {

    $result = [];

    $reponse = $this->bdd->query("SELECT idUser, firstNameUser, lastNameUer, mailUser FROM users order by idUser");

    while ($donnees = $reponse->fetch()) {

        $idUser = $donnees["idUser"];
        $firstNameUser = $donnees["firstNameUser"];
        $lastNameUer = $donnees["lastNameUer"];
        $mailUser = $donnees["mailUser"];

        $user = new User($idUser, $firstNameUser, $lastNameUer,$mailUser);

        $result[] = $user;
    }

    $reponse->closeCursor();

    return $result;
}

    public function findUserById($id) {
        $user = null;
        $query = $this->bdd->prepare("SELECT idUser, firstNameUser, lastNameUer FROM user where idUser = :id");

        $query->bindParam(":id", $id);

        if ($query->execute()) {

            if ($donnees = $query->fetch()) {
            $user = new User();
            $user->idUser = $donnees["idUser"];
            $user->firstNameUser = $donnees["firstNameUser"];
            $user->lastNameUer = $donnees["lastNameUer"];


            }
        }

        $query->closeCursor();

        return $user;
    }

    public function insertUser($user) {

        $result;

        $query = $this->bdd->prepare("INSERT INTO user (firstname, lastname) VALUES (:firstName, :lastName)");

        $query->bindParam(":firstName", $user->firstName);
        $query->bindParam(":lastName", $user->lastName);

        $query->execute();

        $id = $this->bdd->lastInsertId();

        $user->id = $id;

        return $id;
    }

    public function deleteUser($id) {

        $query = $this->bdd->prepare("DELETE FROM user WHERE id = :id");

        $query->bindParam(":id", $id);

        $query->execute();
    }

    public function updateUser($user) {

        $result;

        $query = $this->bdd->prepare("UPDATE user SET firstname = :firstName, lastname = :lastName WHERE id = :id");

        $query->bindParam(":firstName", $user->firstName);

        $query->bindParam(":lastName", $user->lastName);

        $query->bindParam(":id", $user->id);

        $query->execute();
    }

}