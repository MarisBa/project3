<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('welcome');
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


Route::get('/', function(){
    return view('welcome');

});

Route::get('/about-us', [TestController::class, 'index'])->name('about');

Route::group(['prefix' => 'account'], function () {
    Route::get('/register', [TestController::class, 'register'])->name('account.register');
    Route::get('/login', [TestController::class, 'login'])->name('account.login');
});

Route::get('/product', [TestController::class, 'product'])->name('product');