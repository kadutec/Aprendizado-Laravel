<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blog/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blog/edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
Route::put('/blog/update/{blog}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blog/delete/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
