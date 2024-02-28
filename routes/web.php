<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('webpage/welcome');
// });

Route::get('/', [WebPageController::class, 'home'])->name('home');
Route::get('/about', [WebPageController::class, 'about'])->name('about');
Route::get('/products', [WebPageController::class, 'products'])->name('products');
// Route::get('/articles', [WebPageController::class, 'articles'])->name('articles');
// create group route for list articles and single article
Route::group(['prefix' => 'articles'], function () {
    Route::get('/', [WebPageController::class, 'articles'])->name('articles');
    Route::get('/{slug}', [WebPageController::class, 'article'])->name('article');
});
Route::get('/contact', [WebPageController::class, 'contact'])->name('contact');

// change content
Route::post('/save-about-content', [AboutController::class, 'saveContent'])->name('saveAboutContent');
