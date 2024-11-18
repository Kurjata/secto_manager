<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Rota para exibir o formulário de login (GET)
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');

// Rota para processar o formulário de login (POST)
Route::post('/login', [AuthController::class, 'login'])->name('login.post');

// Rota para logout (GET ou POST, conforme sua preferência)
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Rotas protegidas (requer autenticação)
Route::middleware('auth')->group(function () {
    Route::resource('chamados', App\Http\Controllers\ChamadoController::class);
});
