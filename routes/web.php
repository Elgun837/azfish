<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\Catalog\ProductController;
use App\Http\Controllers\Catalog\CategoryController;
use App\Http\Controllers\Catalog\ManufacturerController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;

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



Route::group(['prefix' => 'fish_backend'], function (): void {
    Voyager::routes();
});

Route::view('/{path?}', 'home')->where('path', '.+');

Auth::routes(['register' => false, 'login' => false]);
/*
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => 'localizationRedirect'], function(): void {
    Route::get('/', function () {
        return view('home');
    })->name('home');

    Route::group(['prefix' => 'catalog'], function() {
        Route::get('', [CategoryController::class, 'index'])->name('catalog');
        
        Route::get('product/{slug}', [ProductController::class, 'show'])->name('product');

        Route::get('category/{slug}', [CategoryController::class, 'show'])->name('category');

        Route::get('manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');

        Route::get('manufacturer/{slug}', [ManufacturerController::class, 'show'])->name('manufacturer.show');

    });

    //Route::get('search', [SearchController::class, 'index'])->name('search');

    //Route::get('search.autocomplete/{name}', [SearchController::class, 'autocomplete']);

    Route::get('page/{slug}', [PageController::class, 'show'])->name('page');

 



    //Route::get('post/{slug}', [PostController::calss, 'show'])->name('post');
    
});
*/




