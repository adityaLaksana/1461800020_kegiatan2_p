<?php

use App\Http\Controllers\ControllerBaru;
use Illuminate\Support\Facades\Route;

Route::view('/', 'ControllerBaru@home') -> ('home');
Route::view('artikel', 'ControllerBaru::class', 'artikel');