<?php

use App\Connect\Connect;

class UserManager
{
    public static function add( $firstname,  $lastname,  $mail,  $username, $password) {



        $add = Connect::getPDO()->prepare("INSERT INTO user (firstname, lastname, mail, username, password) 
                                    VALUES (?, ?, ?, ?, ?)
                                    ");

        $add->execute($firstname, $lastname, $mail, $username, $password);

    }
}