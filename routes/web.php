<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('carselect', function () {
    return view('carselect');
})->name('carselect');

Route::get('sell/sellmain', function () {
    return view('sell.sellmain'); 
})->name('sell/sellmain');

Route::get('carsearch', function () {
    return view('carsearch');
})->name('carsearch');

Route::get('aboutus', function(){
    return view('aboutus');
})->name('aboutus');


Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('carsearch', function(){
    return view('carsearch');
})->name('carsearch');


Route::get('landing', function(){
    if(Auth::check()){
        return redirect()->route('browse');
    }
    return view('landing');
});


Route::post('/userLogin', [AuthController::class, 'login'])->name('users.login');
Route::post('/userRegister', [AuthController::class, 'register'])->name('users.register');

// Route::get('browse', function(){
//     return view('browse');

// })->name("browse");


//TODO: Create a section in profile page that shows the user's cars 


// Fix middleware redirection
Route::middleware('auth')->group(function () {
    Route::get('browse', function(){
        return view('browse');
 
    })->name("browse");
});

Route::post('/', [AuthController::class, 'logout'])->name('users.logout');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile-test', [ProfileController::class, 'user'])->name('show.profile');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::patch('/profile-test', [ProfileController::class, 'updateProfilePicture'])->name('profile.updateProfilePicture');    
});

require __DIR__.'/auth.php';
