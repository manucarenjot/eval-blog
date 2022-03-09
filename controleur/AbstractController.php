<?php
namespace APP\Controller;

abstract class AbstractController
{
abstract public function index();


    /**
     * @param string $param
     */
    public static function render(string $param) {
        ob_start();
        require __DIR__. '/../view/' . $param . '.php';
    }
}