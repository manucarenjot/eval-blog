<?php
use App\Routeur\AbstractRouteur;
use App\Routeur\ArticleRouteur;
use App\Routeur\RouteurHome;

require '../require.php';

$page = AbstractRouteur::secure($_GET['c']) ??'home';

//TODO
switch ($page) {
    case 'home':
    RouteurHome::route();
    break;
    case 'article':
        ArticleRouteur::route();
        break;
    default:
        (new ErrorControler())->error404($page);
}



