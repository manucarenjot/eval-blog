<?php
use App\Routeur\Routeur;
require '../require.php';

if (null === $_GET['c']) {
    $_GET['c'] = 'home';
    header('LOCATION: ?c');
};
$page = isset($_GET['c']);


if (null === $_GET['a']) {
    $_GET['a'] = '';

};
$action = isset($_GET['a']);
//$page = Routeur::secure($_GET['c']) ??'home';
//$action = Routeur::secure($_GET['a']) ??'';

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



