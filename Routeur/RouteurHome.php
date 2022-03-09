<?php
namespace App\Routeur;

use Homecontroleur;

class RouteurHome extends AbstractRouteur
{
public static function route(?string $action = null) {
    (new Homecontroleur())->index();
}
}