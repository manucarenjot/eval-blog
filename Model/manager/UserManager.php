<?php

use App\Connect\Connect;
use App\Model\Entity\User\User;



class UserManager extends User
{
    public static function add(User $user) {

        //TODO à améliorer

        $add = Connect::getPDO()->prepare("INSERT INTO user (firstname, lastname, mail, username, password) 
                                    VALUES (:firstname, :lastname, :mail, :username, :password)
                                    ");


        $add->bindValue(':firstname', $user->getFirstname());
        $add->bindValue(':lastname', $user->getLastname());
        $add->bindValue(':mail', $user->getMail());
        $add->bindValue(':username', $user->getUsername());
        $add->bindValue(':password', $user->getPassword());
        $add->execute();



        return $add;

    }


    public function mailExist($user) {

        //todo à vérifier
        $search = Connect::getPDO()->query("SELECT COUNT(*) FROM user WHERE mail = {$user}");

        if ($user->getMail() == $search->fetch()) {
            $_SESSION['errors'] = ['Cette adresse mail existe déjà'];
        }


    }
}


