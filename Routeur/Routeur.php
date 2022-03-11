<?php
namespace App\Routeur;




class Routeur
{
    public static function route(string $controller, ?string $action = null) {
        $control = new $controller();
        $control->index();
        switch ($action) {
            case 'inscription':
        $control->addUser();
            break;
            case 'login':
        $control->userLogin();
            break;
        }
    }


    public static function secure(?string $param): ?string
    {
        if (null === $param) {
            return null;
        }

        $param = strip_tags($param);
        $param = trim($param);
        return strtolower($param);
    }
}