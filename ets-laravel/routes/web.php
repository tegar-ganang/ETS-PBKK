<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\ArticleController;
use App\Models\Category;
use App\Models\User;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/form', [FormController::class, 'form']);
Route::post('/proses', [FormController::class, 'proses']);

Route::get('/authors/{author:username}', function(User $author){
    return view('article',[
        'title' => 'User Article',
        'name' => $author->name,
        'email' => $author->email,
        'articles' => $author->articles,
    ]);
});
Route::get('/article', [ArticleController::class, 'index'])
    ->middleware(['auth'])->name('article');
    Route::get('/article/{article:slug}', [ArticleController::class, 'content']);

Route::get('/categories', function(){
    return view('categories', [
        'title' => 'Categories',
        'categories' => Article::all()
    ]);
});

Route::get('/categories/{category:slug}', function(Article $category){
    return view('category',[
        'title' => $category->name,
        'articles' => $category->articles,
        'category' => $category->name
    ]);
});