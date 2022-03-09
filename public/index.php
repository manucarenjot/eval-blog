<?php
use App\Routeur\Routeur;

require '../require.php';

$page = Routeur::secure($_GET['c']) ??'home';

//TODO
switch ($page) {
    case 'home':
        Routeur::route('Homecontroleur');
        break;
    case 'article':
        Routeur::route('ArticleControler');
        break;
    default:
        (new ErrorControler())->error404($page);
}



