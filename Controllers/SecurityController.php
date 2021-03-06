<?php

require_once 'AppController.php';
require_once __DIR__.'//..//Models//User.php';
require_once 'Database.php';

class SecurityController extends AppController {

    public function login()
    {   
       $user = new User('adam@email.com', 'admin', 'Johnny', 'Snow');
        
        
        if ($this->isPost()) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            if ($user->getEmail() !== $email) {
                $this->render('login', ['messages' => ['User with this email not exist!']]);
                return;
            }

            if ($user->getPassword() !== $password) {
                $this->render('login', ['messages' => ['Wrong password!']]);
                return;
            }

            $_SESSION["id"] = $user->getEmail();
            $_SESSION["role"] = $user->getRole();

            $url = "http://$_SERVER[HTTP_HOST]/";
            header("Location: {$url}?page=board");
            return;
        }

        $this->render('login');
    }

    public function logout()
    {
        session_unset();
        session_destroy();

        $this->render('login', ['messages' => ['You have been successfully logged out!']]);
    }
}