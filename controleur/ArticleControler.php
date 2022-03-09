<?php

use APP\Controller\AbstractController;

class ArticleControler extends AbstractController
{
    public function index() {
        $this->render('article/article');
    }
}