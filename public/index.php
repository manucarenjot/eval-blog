<?php
require '../require.php';

$page = isset($_GET['c'])?: 'home';

//TODO
switch ($page) {
    case 'home';
    Homecontroleur::route();
    break;
}



