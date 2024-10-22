<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Adminpan', function () {
    return 'welcome';
});

use App\Http\Controllers\PageController;

Route::get('/plantas-medicinales', [PageController::class, 'plantasMedicinales'])->name('plantas.medicinales');
Route::get('/descubridores', [PageController::class, 'descubridores'])->name('descubridores');
Route::get('/metodos-elaboracion', [PageController::class, 'metodosElaboracion'])->name('metodos.elaboracion');
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
