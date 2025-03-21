<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
| Aquí es donde puedes registrar las rutas web para tu aplicación.        |
| Estas rutas son cargadas por el RouteServiceProvider y todas estarán     |
| asignadas al grupo de middleware "web". ¡Haz algo grandioso!              |
*/

// Ruta principal de la página de inicio
Route::get('/', function () {
    return view('home');
})->name('home');

// Ruta para la vista de Login
Route::view('/login', 'login')->name('login');

// Ruta para la vista de Registro
Route::view('/register', 'register')->name('register');

// Rutas para el login y registro
Route::post('/inicia-sesion', [LoginController::class, 'login'])->name('inicia-sesion');
Route::post('/validar-registro', [LoginController::class, 'register'])->name('validar-registro');

// Ruta para cerrar sesión
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Rutas protegidas (solo accesibles con autenticación)
Route::middleware(['auth'])->group(function () {
    Route::view('/homeLog', 'homeLog')->name('privada'); 
    Route::view('/categorias', 'categorias')->name('categorias');
    Route::view('/prestamos', 'prestamos')->name('prestamos');
    Route::view('/usuarios', 'usuarios')->name('usuarios');

    // Rutas para las categorías
    Route::view('/mobiliario', 'mobiliario')->name('mobiliario');
    Route::view('/electronicos', 'electronicos')->name('electronicos');
    Route::view('/papel', 'papel')->name('papel');
    Route::view('/herramientas', 'herramientas')->name('herramientas');
});

// Rutas adicionales (no requieren autenticación)
Route::view('/us', 'us')->name('us');
Route::view('/contact', 'contact')->name('contact');

// Ruta para la página de error, redirige según autenticación
Route::get('/error', function () {
    // Verificar si el usuario está autenticado
    if (Auth::check()) {
        return redirect()->route('privada'); // Redirige a homeLog si está autenticado
    }
    return redirect()->route('home'); // Redirige a home si no está autenticado
})->name('error');
