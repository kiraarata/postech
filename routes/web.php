<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HaiController;

route:: get('/pontech/{alamat}/cek',[HaiController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

