<?php
namespace App\Routeur;


abstract class AbstractRouteur
{
    abstract public static function route(?string $action = null);


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