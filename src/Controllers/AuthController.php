<?php

namespace App\Controllers;

use Auth;
use DB;

class AuthController extends Controller
{
    public function login() : void
    {
        $this->render('auth/connexion'); // require views/auth/login.php
    }

    public function register() : void
    {
       $this->render('auth/inscription'); // require views/auth/register.php
    }

    public function store() : void
    {
        // Prepare POST
        $name = $_POST['nom'] ?? '';
        $login = $_POST['email'] ?? '';
        $password = $_POST['motdepass'] ?? '';

        $_SESSION['old'] = [
            'nom' => $name,
            'email' => $login,
            'motdepasse' => $password,
        ];

        // Validation
        if (strlen($name) < 2 or !$this->validateCredentials($login, $password)) {
            errors("Le champs nom doit avoir au moins 2 charactères.");
            errors("Le champs d'e-mail doit avoir au moins 6 charactères.");
            errors("Le champs de mot de passe doit avoir au moins 8 charactères");
            redirectToRouteAndExit('inscription');
        }

        // Check User
        $users = DB::fetch("SELECT * FROM utilisateur WHERE email = :login;", ['login' => $login]);
        if ($users === false) {
            errors('Sorry, a error has occurred !');
            redirectToRouteAndExit('inscription');
        } elseif (count($users) >= 1) {
            errors('Cette adresse email est déjà utilisée.');
            redirectToRouteAndExit('inscription');
        }

        // Version 2: Secure password with hash method
        $password = password_hash($password, PASSWORD_DEFAULT);

        // Create new user
        $result = DB::statement(
            "INSERT INTO utilisateur(email, password, nom)"
            ." VALUE(:email, :motdepasse, :nom);",
            [
                'email' => $login,
                'motdepasse' => $password,
                'nom' => $name,
            ]
        );
        if ($result === false) {
            errors('Sorry, a error has occurred !');
            redirectToRouteAndExit('inscription');
        }

        // Auth new user
        $_SESSION[Auth::getSessionUserIdKey()] = DB::getDB()->lastInsertId();

        // Clear old
        unset($_SESSION['old']);

        // Message + Redirection
        success('You are now logged.');
        redirectToRouteAndExit('index');
    }

    public function check() : void
    {
        $login = $_POST['email'] ?? '';
        $password = $_POST['motdepasse'] ?? '';

        // Validation
        if (!$this->validateCredentials($login, $password)) {
            errors("Le champs d'e-mail doit avoir au moins 6 charactères.");
            errors("Le champs de mot de passe doit avoir au moins 8 charactères");
            redirectToRouteAndExit('connextion');
        }

        // Check DB
        $users = DB::fetch("SELECT * FROM utilisateur WHERE email = :login;", ['login' => $login]);
        if ($users === false) {
            errors('Sorry, a error has occurred !');
            redirectToRouteAndExit('connextion');
        }

        // Check user retrieved
        if (count($users) >= 1) {
            $user = $users[0];

            // Version 2: with password hashing
            if (password_verify($password, $user['motdepasse'])) {
                $_SESSION[Auth::getSessionUserIdKey()] = $user['id'];
                redirectToRouteAndExit('index');
            }
        }

        errors("The credentials does not match.");
        redirectToRouteAndExit('connextion');
    }

    public function validateCredentials(string $login, string $password) : bool
    {
        // Validation
        if (strlen($login) < 6 or strlen($password) < 8) {
            return false;
        }

        return true;
    }

    public function logout() : void
    {
        unset($_SESSION);
        session_destroy();
        redirectToRouteAndExit('index');
    }
}
