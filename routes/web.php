<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DoctorController;
use App\Http\Controllers\user\PatientController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
Route::get('/doctor',[PatientController::class,'index']);
Route::get('docDetail/{doctor}',[PatientController::class,'docDetail'])->name('docDetail');
Route::get('/blogList',[PatientController::class,'blogList'])->name('blogList');
Route::get('/blogDetail',[PatientController::class,'blogDetail'])->name('blogDetail');

Route::prefix('admin')->group(function () {
    Route::prefix('doctor')->group(function () {
        Route::get('/list',[DoctorController::class,'index'])->name('doctor.list');
        Route::get('/add',[DoctorController::class,'add']);
        Route::post('/addDoctor',[DoctorController::class,'addDoctor'])->name('doctor.store');
        Route::get('/details/{doctor}',[DoctorController::class,'details'])->name('doctor.details');
        Route::get('/edit/{doctor}',[DoctorController::class,'edit'])->name('doctor.edit');
        Route::post('/update/{doctor}',[DoctorController::class,'update'])->name('doctor.update');
    });
});



