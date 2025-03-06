<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('landing');


Route::get('landing', function(){
    if(Auth::check()){
        return redirect()->route('browse');
    }
    return view('landing');

});


Route::post('/userLogin', [AuthController::class, 'login'])->name('users.login');
Route::post('/userRegister', [AuthController::class, 'register'])->name('users.register');

Route::get('browse', function(){
    return view('browse');

})->name("browse");

// Fix middleware redirection
// Route::middleware('auth')->group(function () {
//     Route::get('browse', function(){
//         return view('browse');
 
//     })->name("browse");
// });

Route::get('test', function(){
    return view('index');

})->name('index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
