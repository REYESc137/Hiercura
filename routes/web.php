<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::post('/set-password', [AuthController::class, 'setPassword'])->name('set.password');


Route::get('/', function () {
    return view('welcome');
});

Route::get('/Adminpan', function () {
    return 'welcome';
});

// Rutas del PageController
Route::get('/plantas-medicinales', [PageController::class, 'plantasMedicinales'])->name('plantas.medicinales');
Route::get('/descubridores', [PageController::class, 'descubridores'])->name('descubridores');
Route::get('/metodos-elaboracion', [PageController::class, 'metodosElaboracion'])->name('metodos.elaboracion');

// Rutas de perfil
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Ruta del Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas de autenticación con Google
Route::get('auth/google', [AuthController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [AuthController::class, 'handleGoogleCallback']);

// Ruta para el inicio de sesión manual
Route::post('/login', [AuthController::class, 'login'])->name('login');

// Ruta para cerrar sesión
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

require __DIR__.'/auth.php';
