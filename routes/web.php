<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeveloperController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::POST('/logout',[AuthController::class, 'Logout'])->name('logout');
Route::middleware('guest')->controller(DeveloperController::class)->group(function (){

    Route::get('/register',[AuthController::class, 'showRegister'])->name('show.register');
    Route::get('/login',[AuthController::class, 'showLogin'])->name('show.login');

    Route::POST('/register',[AuthController::class, 'Register'])->name('register');
    Route::POST('/login',[AuthController::class, 'Login'])->name('login');
});




Route::middleware('auth')->controller(DeveloperController::class)->group(function (){

    Route::get('/developers', 'index')->name('developers.index');

    Route::get('/developers/create','create' )->name('developers.create');
    
    Route::get('/developers/{ID}', 'show')->name('developers.show');
    Route::post('/developers','store')->name('developers.store');
    Route::delete('/developers/{id}','destroy')->name('developers.destroy');

});

