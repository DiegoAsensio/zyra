<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])
->name('home');

Route::get('dashboard', [\App\Http\Controllers\HomeController::class, 'dashboard'])
->name('dashboard')
->middleware(\App\Http\Middleware\EnsureIsAdmin::class);

Route::get('ingresar', [\App\Http\Controllers\AuthController::class, 'show'])
->name('auth.login.show')
->middleware('guest');

Route::post('ingresar', [\App\Http\Controllers\AuthController::class, 'process'])
->name('auth.login.process')
->middleware('guest');

Route::get('registro', [\App\Http\Controllers\AuthController::class, 'registerShow'])
->name('auth.register.show')
->middleware('guest');

Route::post('registro', [\App\Http\Controllers\AuthController::class, 'store'])
->name('auth.store')
->middleware('guest');

Route::post('cerrar-sesion', [\App\Http\Controllers\AuthController::class, 'logout'])
->name('auth.logout')
->middleware('auth');

// Rutas de novedades/articulos

Route::get('novedades', [\App\Http\Controllers\ArticlesController::class, 'articles'])
->name('articles');


Route::middleware(\App\Http\Middleware\EnsureIsAdmin::class)
->controller(App\Http\Controllers\ArticlesController::class)
->group(function(){

    Route::get('novedades/dashboard}',  'index')->name('articles.index');

    Route::get('novedades/agregar}',  'create')->name('articles.create');

    Route::post('novedades/agregar}', 'store')->name('articles.store');

    Route::get('novedades/{id}/editar}', 'edit')->name('articles.edit');

    Route::post('novedades/{id}/editar}', 'update')->name('articles.update');

    Route::get('novedades/{id}/eliminar}', 'delete')->name('articles.delete');

    Route::post('novedades/{id}/eliminar}', 'destroy')->name('articles.destroy');
});

Route::get('novedades/{id}', [\App\Http\Controllers\ArticlesController::class, 'show'])
->name('articles.show');


// Rutas de membresias

Route::get('membresias', [\App\Http\Controllers\MembershipsController::class, 'memberships'])
->name('memberships');

Route::middleware(\App\Http\Middleware\EnsureIsAdmin::class)
->controller(\App\Http\Controllers\MembershipsController::class)
->group(function(){

    Route::get('membresias/dashboard', [\App\Http\Controllers\MembershipsController::class, 'index'])
    ->name('memberships.index');

    Route::get('membresias/nueva', 'create')->name('memberships.create');

    Route::post('membresias/nueva', 'store')->name('memberships.store');

    Route::get('membresias/{id}/editar}', 'edit')->name('memberships.edit');

    Route::post('membresias/{id}/editar}', 'update')->name('memberships.update');

    Route::get('membresias/{id}/eliminar}', 'delete')->name('memberships.delete');

    Route::post('membresias/{id}/eliminar}', 'destroy')->name('memberships.destroy');
});



Route::get('membresias/{id}', [\App\Http\Controllers\MembershipsController::class, 'show'])
->name('memberships.show');

Route::get('finalizar-compra', [\App\Http\Controllers\MercadoPagoController::class, 'index'])
->name('chekout');
