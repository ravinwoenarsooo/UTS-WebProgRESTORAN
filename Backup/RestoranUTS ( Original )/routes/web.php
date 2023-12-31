<?php

use App\Http\Controllers\NewPageController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

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

Route::get('/admin', [NewPageController::class, 'admin'])->name('admin');
Route::get('/adminui', [NewPageController::class, 'adminui'])->name('adminui');
Route::get('/home', [NewPageController::class, 'home'])->name('home');
Route::get('/login', [NewPageController::class, 'login'])->name('login');
Route::get('/register', [NewPageController::class, 'register'])->name('register');

Route::post('/register', function(){
    $user = new User();
    $user->first_name = request('first_name');
    $user->last_name = request('last_name');
    $user->birth_date = request('birth_date');
    $user->gender = request('gender');
    $user->username = request('username');
    $user->email = request('email');
    $user->password = request('password');
    $user->save();
    return redirect('/login');
});

Route::get('/menu', [NewPageController::class, 'menu'])->name('menu');
Route::get('/cart', [NewPageController::class, 'cart'])->name('cart');
Route::get('/forgotpassword', [NewPageController::class, 'forgotpassword'])->name('forgotpassword');
Route::get('/newpassword', [NewPageController::class, 'newpassword'])->name('newpassword');
Route::get('/alacarte', [NewPageController::class, 'alacarte'])->name('alacarte');
Route::get('/beverages', [NewPageController::class, 'beverages'])->name('beverages');
Route::get('/dessert', [NewPageController::class, 'dessert'])->name('dessert');
Route::get('/ramen', [NewPageController::class, 'ramen'])->name('ramen');
Route::get('/rice', [NewPageController::class, 'rice'])->name('rice');
Route::get('/sushi', [NewPageController::class, 'sushi'])->name('sushi');
