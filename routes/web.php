<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChamadoController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('chamados', ChamadoController::class);
