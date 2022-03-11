<?php


use APP\Controller\AbstractController;
use App\Model\Entity\User\User;


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
            $firstname = strip_tags($this->getFormField('firstname'));
            $lastname = strip_tags($this->getFormField('lastname'));
            $mail = filter_var($this->getFormField('mail'), FILTER_VALIDATE_EMAIL);
            $username = trim(htmlentities($this->getFormField('username')));
            $password = $this->getFormField('password');


            //Faire les verifications du formulaire

            $user = new User();

            $user
                ->setFirstname($firstname)
                ->setLastname($lastname)
                ->setMail($mail)
                ->setUsername($username)
                ->setPassword(password_hash($password, PASSWORD_DEFAULT))
                ;

            UserManager::add($user);
        }
        $this->render('user/inscription');
    }
}
