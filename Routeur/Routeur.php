<?php
namespace App\Routeur;




class Routeur
{
    public static function route(string $controller, ?string $action = null) {
        (new $controller())->index();
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