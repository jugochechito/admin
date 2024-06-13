<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\HomeController;

// Rutas de autenticación
Auth::routes();

// Ruta para la página de bienvenida con las noticias
Route::get('/', [NewsController::class, 'welcome'])->name('welcome');

// Rutas protegidas por el middleware 'auth'

    // Ruta para la página principal del usuario autenticado
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    
    // Rutas para la administración de noticias
    Route::resource('admin/noticias', NewsController::class);
