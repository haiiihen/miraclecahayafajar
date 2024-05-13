<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebPageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

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

// guest routes
Route::get('/home', [WebPageController::class, 'home'])->name('home');
Route::get('/about', [AboutController::class, 'getContent'])->name('about');
// Route::get('/products', [ProductController::class, 'getProducts'])->name('products');
// Route::get('/articles', [WebPageController::class, 'articles'])->name('articles');

// group route for products
Route::group(['prefix' => 'products'], function () {
    Route::get('/', [ProductController::class, 'getProducts'])->name('products');
    Route::get('/add', [ProductController::class, 'addProduct'])->name('add.product');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class, 'editProduct'])->name('edit.product');
    Route::post('/update/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::get('/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
    Route::get('/detail/{id}', [ProductController::class, 'detail'])->name('product.detail');
});

// create group route for list articles and single article
Route::group(['prefix' => 'articles'], function () {
    Route::get('/', [ArticleController::class, 'articles'])->name('articles');
    Route::get('/load-more-data', [ArticleController::class,'loadMoreData'])->name('load.more');
    Route::get('/{slug}', [ArticleController::class, 'article'])->name('article');
    Route::post('/store', [ArticleController::class, 'store'])->name('article.store');
    Route::get('/more-detail', [ArticleController::class, 'moreDetail'])->name('article.detail');
});

// Route::get('/contact', [WebPageController::class, 'contact'])->name('contact');
Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'contact'])->name('contact');
    Route::post('/send-message', [ContactController::class, 'sendMessage'])->name('contact.sendMessage');
});

// change content
Route::post('/save-about-content', [AboutController::class, 'saveContent'])->name('saveAboutContent');

// login routes group
Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/post-login', [AuthController::class, 'authenticate'])->name('authenticate');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// admin routes
Route::get('/admin', function () {
    return view('dashboard/home');
});
