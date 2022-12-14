<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

/**
 * Route::get       |consultar
 * Route::post      |guardar
 * Route::delete    |borrar
 * Route::put       |actualizar
 */

/** 
Route::get('/', [PageController::class,'home'])->name('home');

Route::get('/blog', [PageController::class,'blog'])->name('blog');

Route::get('/blog/{slug}',[PageController::class,'post'])->name('post');
*/

Route::controller(PageController::class)->group(function(){

    Route::get('/',             'home')->name('home');
    Route::get('/blog',         'blog')->name('blog');
    Route::get('/blog/{post:slug}',  'post')->name('post');
});