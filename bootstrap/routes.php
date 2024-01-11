<?php

use \App\Controllers\{
    AdsController,
    HomeController,
    AuthController,
    CategorieController,
    ContactController,
    UserController,
};

Route::new('/', HomeController::class, 'index', ' ');

// Auth
Route::new('/inscription', AuthController::class, 'register', 'register');
Route::new('/inscription/store', AuthController::class, 'store', 'register.store');
Route::new('/connexion', AuthController::class, 'login', 'login');
Route::new('/connexion/check', AuthController::class, 'check', 'login.check');
Route::new('/logout', AuthController::class, 'logout', 'logout');

// Home
Route::new('/dashboard', HomeController::class, 'index', '');



Route::auto(AdsController::class, [
    'index', 
    'getAll',
    '',
    'show',
    'edit',
    'update',
    'delete',
]);
