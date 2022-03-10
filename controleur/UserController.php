<?php


use APP\Controller\AbstractController;

class UserController extends AbstractController
{

    public function index() {
        //$this->render('user/user');
    }

    public function userRegister()
    {
        $this->render('user/inscription');
    }

    public function userLogin()
    {
        $this->render('user/login');
    }

    public function addUser() {
        if ($this->getPost()) {

        }
    }
}
