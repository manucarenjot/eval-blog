<?php


use APP\Controller\AbstractController;

class UserController extends AbstractController
{

    public function index() {
        $this->render('user/user');
    }

    public function userStats()
    {
        $this->render('user/statistiques');
    }
}
