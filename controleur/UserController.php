<?php


use APP\Controller\AbstractController;
use App\Entity\User\User;


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

    /*
     *
     */
    public function addUser() {
        if ($this->getPost()) {
            $firstname = strip_tags($_POST['firstname']);
            $lastname = strip_tags($_POST['lastname']);
            $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
            $username = trim(htmlentities($_POST['username']));
            $password = $_POST['password'];

            //Faire les verifications du formulaire

            $user = new User();
            $user
                ->setFirstname($firstname)
                ->setLastname($lastname)
                ->setMail($mail)
                ->setUsername($username)
                ->setPassword($password)
                ;

            UserManager::add($user);
        }
        $this->render('user/inscription');
    }
}
