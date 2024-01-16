<?php

class Auth {
   

    const SESSION_KEY = 'current_user_id';

    
        private static ?array $user = null;
    
        public static function getCurrentUser(): ?array
        {
            $id = self::getSessionUserId();
    
            if (self::$user === null && $id) {
                self::$user = DB::fetch(

                    "SELECT * FROM utilisateur WHERE idUtilisateur = :idUtilisateur LIMIT 1",
                    ['idUtilisateur' => $id]

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
        
        // if the user is connected
        public static function isAuthOrRedirect() : void
        {
            // Check user is auth
            if (!Auth::getCurrentUser()) {
                // Not Auth Or account not exists
                errors('Vous devez être connecté pour accèder à cette page.');
                redirectAndExit(\App\Controllers\AuthController::URL_LOGIN);
            }
        }
        
        // if the user is not connected
        public static function isGuestOrRedirect() : void
        {
            // Check user is guest (invité)
            if (Auth::getCurrentUser()) {
                redirectAndExit('/');
            }
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
    }
    
        
