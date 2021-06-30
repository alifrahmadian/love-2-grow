<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\MedicineController;
use App\Http\Controllers\MedicineStockController;






/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Member Data API for Dashboard
Route::get('/dashboard/member_data', [RegisterController::class, 'show'])->name('show');
Route::get('/dashboard/member_data/edit_member/{user_id}', [RegisterController::class, 'edit']);
Route::put('/dashboard/member_data/edit_member/{user_id}', [RegisterController::class, 'update']);
Route::delete('/dashboard/member_data/{user_id}', [RegisterController::class, 'destroy']);


// Patient Data API for Dashboard
Route::get('dashboard/patient_data', [PatientController::class, 'showAll']);

// Medicines API
Route::get('dashboard/vaccine_data', [MedicineController::class, 'index']);
Route::get('dashboard/vaccine_data/edit_vaccine/{medicine_id}', [MedicineController::class, 'edit']);
Route::put('dashboard/vaccine_data/edit_vaccine/{medicine_id}', [MedicineController::class, 'update']);
Route::delete('dashboard/vaccine_data/{medicine_id}', [MedicineController::class, 'destroy']);
Route::post('dashboard/vaccine_data/add_vaccine', [MedicineController::class, 'store']);

// Medicine Stocks API
Route::get('dashboard/vaccine_data/edit_vaccine/{medicine_id}/add_vaccine_stock', [MedicineStockController::class, "create"]);
Route::post('dashboard/vaccine_data/edit_vaccine/{medicine_id}/add_vaccine_stock', [MedicineStockController::class, "store"]);



