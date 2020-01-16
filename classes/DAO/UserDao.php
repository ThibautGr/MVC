<?php


namespace DAO;
use Domain\User;

class UserDao extends DAOBase {
    public function __construct($config) {
        parent::__construct($config);
    }

 public function findAllUsers() {

    $result = [];

    $reponse = $this->bdd->query("SELECT idUser, firstNameUser, lastNameUer,passwordUser ,mailUser FROM users order by idUser");

    while ($donnees = $reponse->fetch()) {
        $idUser = $donnees["idUser"];
        $firstNameUser = $donnees["firstNameUser"];
        $lastNameUer = $donnees["lastNameUer"];
        $passwordUser = $donnees["passwordUser"];
        $mailUser = $donnees["mailUser"];

        $user = new User($idUser, $firstNameUser, $lastNameUer,$passwordUser,$mailUser);

        $result[] = $user;
    }

    $reponse->closeCursor();

    return $result;
}

    public function findUserById($id) {
        $user = null;
        $query = $this->bdd->prepare("SELECT idUser, firstNameUser, lastNameUer,passwordUser,mailUser FROM users where idUser = :id");

        $query->bindParam(":id", $id);

        if ($query->execute()) {

            if ($donnees = $query->fetch()) {
            $user = new User(
            $donnees["idUser"],
            $donnees["firstNameUser"],
            $donnees["lastNameUer"],
            $donnees["passwordUser"],
            $donnees["mailUser"]
            );

            }
        }
        $query->closeCursor();

        return $user;
    }
    function getUser($id){
        $user = null;

        $req = $this->bdd->prepare("SELECT idUser,firstNameUser,lastNameUer,passwordUser,mailUser FROM users WHERE idUser=:id");
        $req->bindParam(":id",$id);
        if($req->execute()){
            if ($data = $req ->fetch()){
                $user = new User($data["idUser"],
                    $data["firstNameUser"],
                    $data["lastNameUer"],
                    $data["passwordUser"],
                    $data["mailUser"]
                );

            }

        }
        return $user;
    }
    public function insertUser($user) {

        $query = $this->bdd->prepare("INSERT INTO users (idUser, firstNameUser, lastNameUer, passwordUser, mailUser) VALUES (null, :firstName, :lastName,:passwordUser, :mailUser)");

        $query->bindParam(":firstName", $user->firstNameUser);
        $query->bindParam(":lastName", $user->lastNameUer);
        $query->bindParam(":mailUser", $user->mailUser);
        $query->bindParam(":passwordUser", $user->passwordUser);

        $query->execute();

        $id = $this->bdd->lastInsertId();

        $user->id = $id;

        return $id;
    }

    public function deleteUser($id) {
        $result = null;
        $query = $this->bdd->prepare("DELETE FROM users WHERE idUser = :id");

        $query->bindParam(":id", $id);

        $result = $query->execute();


        // Modifie les id de la table en partant de 1.
        $req = $this->bdd->prepare('SET @count = 0;
        UPDATE users SET users.idUser = @count:= @count + 1;');
        $req->execute();

        // Redéfinit l'auto incrémentation de la table.
        $req = $this->bdd->prepare('ALTER TABLE users AUTO_INCREMENT = 1;');
        $req->execute();

        return $result;
    }

    public function updateUser($user) {

        $query = $this->bdd->prepare("UPDATE users SET  firstNameUser=:firstNameUser, lastNameUer=:lastNameUer, mailUser = :mailUser, passwordUser=:passwordUser WHERE idUser = :id");

        $query->bindParam(":id", $user->idUser);

        $query->bindParam(":firstNameUser", $user->firstNameUser);

        $query->bindParam(":lastNameUer", $user->lastNameUer);

        $query->bindParam(":passwordUser", $user->passwordUser);

        $query->bindParam(":mailUser", $user->mailUser);

        $query->execute();
    }

}