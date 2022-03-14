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


            $errors = [];
            $mailExist = new UserManager();

            $mailExist -> mailExist($_POST['mail']);

            if (empty($_POST['firstname'])) {
                $errors = ['Le champs \'Firstname\' est vide'];
            }
            if (empty($_POST['lastname'])) {
                $errors = ['Le champs \'Lastname\' est vide'];
            }
            if (empty($_POST['mail'])) {
                $errors = ['Le champs \'Mail\' est vide'];
            }
            if (empty($_POST['username'])) {
                $errors = ['Le champs \'Username\' est vide'];
            }
            if (empty($_POST['password'])) {
                $errors = ['Le champs \'Password\' est vide'];
            }
            if (empty($_POST['password-repeat'])) {
                $errors = ['Le champs \'Password-repeat\' est vide'];
            }
            if (!strlen($_POST['firstname']) >= 2) {
                $errors = ['Firstname doit contenir au minimum 2 caractère'];
            }
            if (!strlen($_POST['lastname']) >= 2) {
                $errors = ['Lastname doit contenir au minimum 2 caractère'];
            }
            if (!strlen($_POST['username'] >= '3')) {
                $errors = ['L\'username doit contenir au minimum 4 caractères'];
            }
            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $errors = ['L\'adresse mail n\'est pas valide'];
            }

            if (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $_POST['password'])) {
                $errors = ['Le mot de passe doit contenir au moins une majuscule, une minuscule,
                 un chiffre et doit avoir au minimum 8 caractères'];
            }
            if ($_POST['password'] !== $_POST['password-repeat']) {
                $errors = ['les mots de passe doivent être identiques'];
            }

            if(count($errors) > 0) {
            $_SESSION['errors'] = $errors;
        }


            //Faire les verifications du formulaire
            else {
                $firstname = strip_tags($this->getFormField('firstname'));
                $lastname = strip_tags($this->getFormField('lastname'));
                $mail = $this->getFormField('mail');
                $username = trim(htmlentities($this->getFormField('username')));
                $password = $this->getFormField('password');

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

        }
        $this->render('user/inscription');
    }
}
