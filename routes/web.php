<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MemberController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/register', function () {
    return view('auth.register');
});

// Route::get('/login', function () {
//     return view('auth.login');
// });

// Route::get('/member', function () {
//     return view('member');
// });

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Auth::routes();

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/',[RegisterController::class,'register'])->name('register');



Route::get('/member', [MemberController::class, 'show'])->name('member');
route::get('/logout',[LoginController::class,'logout'])->name('logout');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
