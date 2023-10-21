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

// Route::get('/regis', function () {
//     return view('register');
// });

// Route::get('/login', function(){
//     return view('login');
// });

// Route::get('/menu', function(){
//     return view('menu');
// });

// Route::get('/cart', function(){
//     return view('shoppingcart');
// });

// Route::get('/new', function(){
// return view('newpassword');
// });
//

Route::get('/home', [NewPageController::class, 'home'])->name('home');
Route::get('/login', [NewPageController::class, 'login'])->name('login');
Route::get('/register', [NewPageController::class, 'register'])->name('register');
Route::get('/menu', [NewPageController::class, 'menu'])->name('menu');
Route::get('/forgotpassword', [NewPageController::class, 'forgotpassword'])->name('forgotpassword');
Route::get('/newpassword', [NewPageController::class, 'newpassword'])->name('newpassword');

