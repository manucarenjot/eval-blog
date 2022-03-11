<?php

use App\Connect\Connect;
use App\Entity\User\User;


class UserManager extends User
{
    public static function add(User $user): bool {

        //TODO

        $add = Connect::getPDO()->prepare("INSERT INTO user (firstname, lastname, mail, username, password) 
                                    VALUES (:firstname, :lastname, :mail, :username, :password)
                                    ");

        $add->bindValue(':firstname', $user->getFirstname());
        $add->bindValue(':lastname', $user->getLastname());
        $add->bindValue(':email', $user->getMail());
        $add->bindValue(':username', $user->getUsername());
        $add->bindValue(':password', $user->getPassword());

        $addPrepared = $add->execute();

        return $addPrepared;

    }
}



/**
    public static function addUser(\App\Model\Entity\User &$user): bool
    {
        $stmt = DB::getPDO()->prepare("
            INSERT INTO ".self::TABLE." (email, firstname, lastname, password, age)
            VALUES (:email, :firstname, :lastname, :password, :age)
        ");

        $stmt->bindValue(':email', $user->getEmail());
        $stmt->bindValue(':firstname', $user->getFirstname());
        $stmt->bindValue(':lastname', $user->getLastname());
        $stmt->bindValue(':password', $user->getPassword());
        $stmt->bindValue(':age', $user->getAge());

        $result = $stmt->execute();
        $user->setId(DB::getPDO()->lastInsertId());
        if($result) {
            $role = RoleManager::getRoleByName(RoleManager::ROLE_USER);
            $resultRole = DB::getPDO()->exec("
                INSERT INTO ".self::TABLE_USER_ROLE. " (user_fk, role_fk) VALUES (".$user->getId().", ".$role->getId().")
            ");

        }
        return $result && $resultRole;
    }
}
 **/