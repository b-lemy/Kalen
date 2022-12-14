<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DoctorContoller;
use App\Http\Controllers\UserContoller;
use Illuminate\Support\Facades\Route;

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

//Route::get('/dashboard', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
              return view('dashboard');
    })->name('dashboard');

    Route::get('/',[UserContoller::class,'index'])->name('user');
    Route::get('/appointment',[AppointmentController::class,'index'])->name('appointment');
    Route::post('/create-appointment',[AppointmentController::class,'create'])->name('create-appointment');
    Route::get('/doctor',[DoctorContoller::class,'index'])->name('doctor');
    Route::delete('/appointment-destroy',[AppointmentController::class,'destroy'])->name('appointment-destroy');
    Route::get('/admin',[AdminController::class,'index'])->name('admin');

});





