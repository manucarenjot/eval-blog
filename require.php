<?php
require __DIR__ . '/db/Config.php';
require __DIR__ . '/db/Connect.php';

require __DIR__ . '/Model/manager/UserManager.php';
require __DIR__ . '/Model/manager/CategoryManager.php';
require __DIR__ . '/Model/manager/CommentManager.php';
require __DIR__ . '/Model/manager/RoleManager.php';
require __DIR__ . '/Model/manager/ArticleManager.php';

require __DIR__ . '/controleur/AbstractController.php';
require __DIR__ . '/controleur/RouteurHome.php';