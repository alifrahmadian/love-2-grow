<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicineController;





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



Route::get('/member/{user_id}/patient_data', function () {
    return view('member.patient_data');
});

Route::get('/member/{user_id}/patient_data/add_patient', function () {
    return view('member.add_patient');
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

Route::get('/dashboard/member_data', function () {
    return view('dashboard.dashboardPages.member_data');
});

Route::get('/dashboard/member_data/edit_member/{user_id}', function () {
    return view('dashboard.dashboardPages.memberData.edit_member');
});

Route::get('/dashboard/vaccine_data/edit_vaccine/{user_id}', function () {
    return view('dashboard.dashboardPages.vaccineData.edit_vaccine');
});

Route::get('/dashboard/vaccine_data/edit_vaccine/{user_id}/add_vaccine_stock', function () {
    return view('dashboard.dashboardPages.vaccineData.vaccineStockData.add_vaccine_stock');
});


Route::get('/dashboard/patient_data', function () {
    return view('dashboard.dashboardPages.patient_data');
});

Route::get('/dashboard/vaccine_data', function () {
    return view('dashboard.dashboardPages.vaccine_data');
});

Route::get('/dashboard/vaccine_data/add_vaccine', [MedicineController::class, 'create']);






Auth::routes();

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('showLoginForm');
route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/',[RegisterController::class,'register'])->name('register');

// Patient data route
Route::get('/member/{user_id}/patient_data/add_patient', [PatientController::class, 'create']);
Route::get('/member/{user_id}/patient_data', [PatientController::class, 'show']);
Route::post('/member/{user_id}/patient_data', [PatientController::class, 'store'])->name('store');

// Queue Route (Appointment)
Route::get('member/{user_id}/appointment', [QueueController::class, 'create']);






Route::get('/member', [MemberController::class, 'show'])->name('member');
route::get('/logout',[LoginController::class,'logout'])->name('logout');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
