<?php
use App\Routeur\Routeur;
require '../require.php';

$page = isset($_GET['c'])? Routeur::secure($_GET['c']): 'home';
$action = isset($_GET['a'])? Routeur::secure($_GET['a']): '';

//TODO
switch ($page) {
    case 'home':
        Routeur::route('HomeController');
        break;
    case 'article':
        Routeur::route('ArticleController');
        break;
    case 'user':
        Routeur::route('UserController', $action);
        break;
    default:
        (new ErrorControler())->error404($page);
}



