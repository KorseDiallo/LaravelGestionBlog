<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorie', [CategorieController::class,"index"]);

Route::get('/categorie/ajouter', [CategorieController::class,"create"]);

Route::post('/categorie/ajouterCategorie', [CategorieController::class,"store"]);

Route::get('/article', [ArticleController::class,"index"]);

Route::get('/article/ajouter', [ArticleController::class,"create"]);

Route::post('/categorie/ajouterArticle', [ArticleController::class,"store"]);

Route::get('/article/{id}', [ArticleController::class,"show"]);

Route::get('/article/modifier/{id}', [ArticleController::class,"edit"]);

Route::post('/article/modifierArticle/{id}', [ArticleController::class,"update"]);