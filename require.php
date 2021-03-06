<?php
require __DIR__ . '/view/public/index.php';

require __DIR__ . '/db/Config.php';
require __DIR__ . '/db/Connect.php';

require __DIR__ . '/Model/entity/User.php';

require __DIR__ . '/Model/manager/UserManager.php';
require __DIR__ . '/Model/manager/CategoryManager.php';
require __DIR__ . '/Model/manager/CommentManager.php';
require __DIR__ . '/Model/manager/RoleManager.php';
require __DIR__ . '/Model/manager/ArticleManager.php';

require __DIR__ . '/controleur/AbstractController.php';
require __DIR__ . '/controleur/HomeController.php';
require __DIR__ . '/controleur/ArticleController.php';
require __DIR__ . '/controleur/UserController.php';
require __DIR__ . '/controleur/ErrorControler.php';

require __DIR__ . '/Routeur/Routeur.php';