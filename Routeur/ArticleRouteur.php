<?php
namespace App\Routeur;

use ArticleControler;


class ArticleRouteur extends AbstractRouteur
{
    public static function route(?string $action = null) {
        (new ArticleControler())->index();
    }
}