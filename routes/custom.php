<?php

use App\Http\Controllers\web\AboutController;
use App\Http\Controllers\web\BlogController;
use App\Http\Controllers\web\ContactController;
use App\Http\Controllers\web\GalleryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\web\IndexController;
use App\Http\Controllers\web\PartnerController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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
// ----------------------------------------------------------
// ----------------------------------------------------------
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () { //...


Route::get('/', [IndexController::class,'index']);
Route::get('/about', [AboutController::class,'index'])->name('about');
Route::post('/contact-message', [AboutController::class,'sendMessage']);
Route::get('/contact', [ContactController::class,'index'])->name('contact');
Route::get('/blog', [BlogController::class,'index']);
Route::get('/single-blog/{id}/{slug?}',[BlogController::class,'singleBlog']);
Route::get('blog/fetch_data', [BlogController::class, 'fetch_data']);
Route::get('/partners', [PartnerController::class,'index']);
Route::get('/gallery', [GalleryController::class,'index']);

    });
