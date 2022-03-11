<?php

use App\Connect\Connect;

class UserManager
{
    public static function add() {

        //TODO

        $add = Connect::getPDO()->prepare("INSERT INTO user (firstname, lastname, mail, username, password) 
                                    VALUES (:firstname, :lastname, :mail, :username, :password)
                                    ");

        $add->execute(
            ':firstname' =>

        );

    }
}