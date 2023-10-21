<?php

use App\Http\Controllers\NewPageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/regis', function () {
    return view('register');
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/menu', function(){
    return view('menu');
});

Route::get('/cart', function(){
    return view('shoppingcart');
});

//

Route::get('/home', [NewPageController::class, 'home']);
Route::get('/login', [NewPageController::class, 'login'])->name('login');