<?php

require_once('model/User.php');

function create()
{

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $email = $_POST['email'];
        $password = $_POST['password'];

        $existingUser = User::getUser($email);
        if ($existingUser) {
            $message = "Le pseudo existe déjà.";
        } else {
            $user = User::insertUser($email, $password);

            if ($user) {
                $_SESSION['signinValidation'] = "Inscription réussie !";
                header('Location: signup');
            } else {
                $message = "Erreur lors de l'incription. Vérifiez que votre mot de passe répond bien aux règles (8 caractères/majuscule/minuscule/chiffre/caractères spéciaux). L'identifiant ne doit pas se retrouver dans le mot de passe";
            }
        }
        $_POST['message'] = $message;
    }
    require_once 'views/forms/signin.php';
}

function signup()
{
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $user = User::getUser($email);
        $message = '';
        if ($user['email'] !== null) {
            if (hash('sha256', $password) == $user['password']) {
                $_SESSION['email'] = $email;
                unset($_SESSION['signinValidation']);
                header('Location: /mvcTest/MovieController/show');
            } else {
                $message = "les logins ne correspondent pas";
            }
        } else {
            $message = 'les logins ne correspondent pas';
        }
        $_POST['message'] = $message;
    }
    require_once 'views/forms/signup.php';
}

function logout()
{
    unset($_SESSION['email']);
    header('Location: /mvcTest/HomeController/show');
}