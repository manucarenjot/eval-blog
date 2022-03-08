<?php

use App\Connect\Connect;

class UserManager
{
    public static function add() {

        $firstname = trim(strip_tags($_POST['firstname']));
        $lastname = trim(strip_tags($_POST['lastname']));
        $mail = trim(strip_tags($_POST['mail']));
        $username = trim(strip_tags($_POST['username']));
        $password = password_hash($_POST['password'], PASSWORD_ARGON2I);

        Connect::getPDO()->exec("INSERT INTO user (firstname, lastname, mail, username, password) 
                                    VALUE ($firstname, $lastname, $mail, $username, $password)
                                    ");
    }
}