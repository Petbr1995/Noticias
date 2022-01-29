<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoticiaController;


Auth::routes();

Route::get('/', function () {
    return redirect('/home');
});

Route::middleware('auth')->group(function() {
    Route::resource('noticias', NoticiaController::class);
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
