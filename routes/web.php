<?php

use App\Http\Controllers\CarController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/car/create', [CarController::class, 'create'])->name('car.create');

Route::post('/car/store', [CarController::class, 'store'])->name('car.store');

Route::get('/car', [CarController::class, 'index'])->name('car.index');

Route::get('/car/edit/{id}', [CarController::class, 'edit'])->name('car.edit');
Route::post('/car/save/{id}', [CarController::class, 'save'])->name('car.save');
Route::get('/car/delete/{id}', [CarController::class, 'delete'])->name('car.delete');
