<?php

use App\Http\Controllers\TrooperController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('troopers', TrooperController::class);