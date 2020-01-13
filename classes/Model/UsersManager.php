<?php
namespace Model;
use Domain\User;


class UsersManager extends Manager
{
    public function getUsers(){
        $users=[];
        $bdd =$this->dbConnect();
        $req = $bdd->query('SELECT idUser ,firstNameUser, lastNameUer, mailUser FROM users');

        while ($data = $req ->fetch()){
            $user = new User($data["idUser"],
                            $data["firstNameUser"],
                            $data["lastNameUer"],
                            $data["mailUser"]
            );
            $users[] = $user;
        }
        $req->closeCursor();
        return $users;
    }
    //methodes rajouter pour effectuer la récupere l'id de l'utilsateur
    // ce a quoi on va faire un requette SQl pour faire la comparaison

    function getUser($id){
        $user = null;
        $bdd = $this->dbConnect();
        $req = $bdd->prepare("SELECT idUser,firstNameUser,lastNameUer,mailUser FROM users WHERE idUser=:id");
        $req->bindParam(":id",$id);
        if($req->execute()){
            if ($data = $req ->fetch()){
                $user = new User($data["idUser"],
                    $data["firstNameUser"],
                    $data["lastNameUer"],
                    $data["mailUser"]
                );

            }

        }
        return $user;
    }
}