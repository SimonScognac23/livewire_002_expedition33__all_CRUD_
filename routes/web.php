<?php


use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController; 
use App\Http\Controllers\ArticleController;



Route::get('/', [PublicController::class, 'homepage'] )->name('homepage');  
// spostiamo la vista welcome da qui e voglio che sia restituita da PublicController



// Rotta CREATE adibita a portarci nel form di creazione di un articolo
// Route::get  --> mostrami una risorsa 
Route::get('/create' ,  [ArticleController::class, 'create'] )->name('article.create')->middleware('auth');
