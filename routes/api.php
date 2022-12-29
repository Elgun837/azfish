<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Catalog\SliderController;
use App\Http\Controllers\Catalog\ProductController;
use App\Http\Controllers\Catalog\CategoryController;
use App\Http\Controllers\Catalog\ManufacturerController;
use App\Http\Controllers\Modules\PopularCategoryController;
use App\Http\Controllers\Modules\PartnersController;
use App\Http\Controllers\SearchController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware' => 'apichecker'], function(): void {

    Route::get('slider', [SliderController::class, 'index']);

    Route::get('product/{id}', [ProductController::class, 'show'])->name('product');

    Route::get('category/{id}', [CategoryController::class, 'show'])->name('category');

    Route::get('manufacturer', [ManufacturerController::class, 'index'])->name('manufacturer.index');

    Route::get('manufacturer/{id}', [ManufacturerController::class, 'show'])->name('manufacturer.show');

    Route::get('popular_category', [PopularCategoryController::class, 'index'])->name('popular_category');

    Route::get('partners', [PartnersController::class, 'index'])->name('partners');

    Route::post('newsletter', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

    Route::post('search', [SearchController::class, 'index'])->name('search.index');

});