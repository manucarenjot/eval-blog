<?php

use App\Controller\AbstractController;
class HomeController extends AbstractController
{

    public function index() {
        $this->render('public/home');
    }

}