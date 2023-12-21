<?php

use App\Http\Controllers\user\PatientController;
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
Route::get('/doctor/add',[PatientController::class,'admin']);
Route::post('/addDoctor',[PatientController::class,'addDoctor'])->name('doctor.store');

