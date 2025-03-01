<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('cartest', function () {
    return view('cartest');
});

Route::get('footer', function () {
    return view('footer');
});

Route::get('test', function () {
    return view('test');

});

Route::get('header', function(){
    return view('header');
});

Route::get('carselect', function(){
    return view('carselect');
});

Route::get('practice', function(){
    return view('practice');
});

Route::get('landing', function(){
    return view('landing');

});


Route::post('/userLogin', [AuthController::class, 'login'])->name('users.login');
Route::post('/userRegister', [AuthController::class, 'register'])->name('users.register');


//Fix middleware redirection
Route::middleware('auth')->group(function () {
    Route::get('browse', function(){
        return view('browse');

});

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
