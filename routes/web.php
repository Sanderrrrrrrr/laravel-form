
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\theController;

Route::get('/', [theController::class, 'sessioner']);
Route::post('/logIn', [theController::class, 'validator']);
Route::get('/del', [theController::class, 'sessionCleaner']);
Route::get('/home', [theController::class, 'homePage']);
