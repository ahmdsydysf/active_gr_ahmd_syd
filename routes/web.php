<?php

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
// ----------------------------------------------------------
// ----------------------------------------------------------

Route::get('/', function () {
    return view('main_site.index');
})->name('main_home');
Route::get('/about', function () {
    return view('main_site.about');
});
Route::get('/blog', function () {
    return view('main_site.blog');
});
Route::get('/blog_details', function () {
    return view('main_site.blog_details');
});
Route::get('/contact', function () {
    return view('main_site.contact');
});
Route::get('/experience', function () {
    return view('main_site.experience');
});
Route::get('/gallary', function () {
    return view('main_site.gallary');
});
Route::get('/partners', function () {
    return view('main_site.partners');
});
Route::get('/products', function () {
    return view('main_site.products');
});
Route::get('/services', function () {
    return view('main_site.services');
});


// ----------------------------------------------------------

// ----------------------------------------------------------

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

// Route::prefix('dashboard')->middleware(['auth'])->name('dashboard.')->group(function () {


// });

Route::group(['middleware' => 'auth', 'prefix' => 'dashboard'], function () {
    Route::get('/', function () {
        return view('dashboard');
    })->name('index');

    Route::resource('users', 'Dashboard\UserController');

    Route::resource('slider_images', 'Dashboard\ImagesSliderController');

    Route::resource('company', 'Dashboard\CompanyController');

    Route::resource('company_contact', 'Dashboard\CompanyContactController');

    Route::resource('why_us', 'Dashboard\WhyUsController');

    Route::resource('blog', 'Dashboard\BlogController');

    Route::resource('message_type', 'Dashboard\MessageTypeController');

    Route::resource('message', 'Dashboard\MessageController');

    // Route::get('product_types/{id}', [
    //     'as' => 'product_type.index',
    //     'uses' => 'Dashboard\ProductTypeController@index'
    // ]);

    // Route::resource('product_type', 'Dashboard\ProductTypeController', ['except' => 'index']);

    Route::resource('mobedat_category', 'Dashboard\MobedatCategoryController');
    Route::resource('asmeda_category', 'Dashboard\AsmedaCategoryController');
    Route::resource('monzmat_category', 'Dashboard\MonzmatCategoryController');
});

require __DIR__ . '/auth.php';
