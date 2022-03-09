<?php

use APP\Controller\AbstractController;

class ArticleController extends AbstractController
{
    public function index() {
        $this->render('article/article');
    }
}