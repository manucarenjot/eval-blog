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
        require __DIR__. '/../view/' . $param . '.html.php';

    }

    public function getPost(): bool {
        return isset($_POST['send']);
    }

    public function secureData(string $var ,string $param) {

        $var = trim(strip_tags($_POST[$param]));
        //$lastname = trim(strip_tags($_POST['lastname']));
        //$mail = trim(strip_tags($_POST['mail']));
        //$username = trim(strip_tags($_POST['username']));
        //$password = password_hash($_POST['password'], PASSWORD_ARGON2I);
    }
}