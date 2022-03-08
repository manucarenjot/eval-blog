<?php

class AbstractController
{
    public static function render(string $param) {
        ob_start();
        require __DIR__. '/../view/public/' . $param . '.php';
    }
}