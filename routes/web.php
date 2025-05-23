<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CarController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

// Route::get('carselect', function () {
//     return view('carselect');
// })->name('carselect');


Route::get('carsearch', function () {
    return view('carsearch');
})->name('carsearch');

Route::get('home', function(){
    return view('home');
})->name('home');

Route::get('/', function () {
    return view('landing');
})->name('landing');

Route::get('/contents/aboutus', function(){
    return view('/contents/aboutus');
})->name('aboutus');

Route::get('/contents/termsOfServices', function(){
    return view('/contents/termsOfServices');
})->name('termsOfServices');

Route::get('/contents/privacyPolicy', function(){
    return view('/contents/privacyPolicy');
})->name('privacyPolicy');

Route::get('/contents/supportRequest', function(){
    return view('/contents/supportRequest');
})->name('supportRequest');

Route::get('/contents/carListingTips', function(){
    return view('/contents/carListingTips');
})->name('carListingTips');

Route::get('/contents/beOurPartner', function(){
    return view('/contents/beOurPartner');
})->name('beOurPartner');

Route::get('/contents/helpDesk', function(){
    return view('/contents/helpDesk');
})->name('helpDesk');





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
// Route::middleware('auth')->group(function () {
//     Route::get('browse', function(){
//         return view('browse');
 
//     })->name("browse");
// });

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


// Car routes for authenticated users
Route::middleware(['auth'])->group(function () {
    Route::post('/sell/sellmain', [CarController::class, 'store'])->name('user.sell');
    // Route::get('/sell/sellmain', [CarController::class, 'create'])->name('cars.create');
    Route::get('/sell/sellmain', [CarController::class, 'create'])->name('user.store');
    // Route::get('/profile-test', [CarController::class, 'myListings'])->name('cars.my-listings');
    Route::get('/cars/{car}/edit', [CarController::class, 'edit'])->name('cars.edit');
    Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
    Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');
    Route::post('/cars/{car}/mark-sold', [CarController::class, 'markAsSold'])->name('cars.mark-sold');
    Route::get('/browse', [CarController::class, 'index'])->name('browse');
});

// Public routes that don't require authentication
Route::get('/cars/{car}', [CarController::class, 'show'])->name('cars.show');

Route::post('/cars/{car}/quotes', [QuoteController::class, 'submit'])
    ->name('quotes.submit');

require __DIR__.'/auth.php';
