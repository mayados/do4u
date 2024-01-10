<?php
namespace helpers\class;

class Auth {
    const URL_HANDLER = '/handlers/auth-handler.php';
    const URL_REGISTER = '/inscription.php';
    const URL_LOGIN = '/connexion.php';
    const URL_AFTER_LOGIN = '/ads.php';
    const URL_AFTER_LOGOUT = '/index.php';

    const SESSION_KEY = 'current_user_id';

    private static ?array $user = null;
    public static function redirect(string $url){
        ("header Location: $url");
    }


        

    public static function redirectAndExit(string $url){
        self::redirect($url);
        exit();
    }
    public static function validateCredentials($login, $password)
    {
        return strlen($login) >= 6 && strlen($password) >= 8;
    }

    public static function getCurrentUser() : ?array
    {
        $id = self::getSessionUserId();

        if (self::$user === null and $id) {
            self::$user = DB::fetch(
                "SELECT * FROM utilisateur WHERE id = :id LIMIT 1",
                ['id' => $id]
            );

            if (self::$user === false) {
                self::$user = null;
            } else if (self::$user) {
                self::$user = self::$user[0] ?? null;

                // Not found in records
                if (empty(self::$user)) {
                    self::removeSessionUserId();
                }
            }
        }

        return self::$user;
    }




    public static function getSessionUserIdKey() : string
    {
        return self::SESSION_KEY;
    }

    public static function getSessionUserId() : ?int
    {
        return $_SESSION[self::getSessionUserIdKey()] ?? null;
    }

    public static function removeSessionUserId() : void
    {
        unset($_SESSION[self::getSessionUserIdKey()]);
    }
    public static function isAuthOrRedirect() 
    {
        // Check user is auth
        if (!self::getCurrentUser()) {
            // Not Auth Or account not exists
            $_SESSION['errors'][] = 'Vous devez être connecté pour accéder à cette page.';
            self::redirectAndExit('/connexion.php');
        }
    }

    public static function isGuestOrRedirect() 
    {
        // Check user is guest (invité)
        if (self::getCurrentUser()) {
            self::redirectAndExit('/index.php');
        }
    }
}
