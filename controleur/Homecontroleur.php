<?php

use App\Controller\AbstractController;
class Homecontroleur extends AbstractController
{

    public function index() {
        $this->render('public/home');
    }

}