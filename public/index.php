<?php
use App\Routeur\Routeur;

require '../require.php';

$page = Routeur::secure($_GET['c']) ??'home';
$action = Routeur::secure($_GET['a']) ??'';
//TODO
switch ($page) {
    case 'home':
        Routeur::route('HomeController');
        break;
    case 'article':
        Routeur::route('ArticleController');
        break;
    case 'inscription':
        Routeur::route('InscriptionController');
        break;
    case 'user':
        Routeur::route('UserController', $action);
        break;
    default:
        (new ErrorControler())->error404($page);
}



