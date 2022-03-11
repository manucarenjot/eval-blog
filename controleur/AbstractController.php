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

    public function getFormField(string $field, $default = null)
    {
        if (!isset($_POST[$field])) {
            return (null === $default) ? '' : $default;
        }

        return $_POST[$field];
    }

    //$lastname = trim(strip_tags($_POST['lastname']));
    //$mail = trim(strip_tags($_POST['mail']));
    //$username = trim(strip_tags($_POST['username']));
    //$password = password_hash($_POST['password'], PASSWORD_ARGON2I);
}