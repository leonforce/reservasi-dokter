<?php

use App\Http\Controllers\ReservasiController;
use Illuminate\Support\Facades\Route;

//
//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/',[ReservasiController::class, 'index']);
