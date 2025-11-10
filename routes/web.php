<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home']) ->name('home');

Route::get('sobre-nosotros',[\App\Http\Controllers\HomeController::class, 'about']) ->name('about');

Route::get('comentarios', [\App\Http\Controllers\HomeController::class, 'opinions'])->name('opinions');

Route::get('membresias', [\App\Http\Controllers\MembershipsController::class, 'memberships']) ->name('memberships');

