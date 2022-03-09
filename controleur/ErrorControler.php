<?php
class ErrorControler
{
    public function error404(string $askpage)
    {
        require __DIR__. '/../view/error/error404.html.php';
    }
}