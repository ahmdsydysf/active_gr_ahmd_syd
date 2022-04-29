<?php

use App\Http\Controllers\Dashboard\CompanyServiceController;
use App\Http\Controllers\Dashboard\FarmerAdvicesController;
use App\Http\Controllers\Dashboard\GeneralAdvicesController;
use App\Http\Controllers\Dashboard\TechnicalAdvicesController;
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

    Route::resource('mobedat_category', 'Dashboard\MobedatCategoryController');
    Route::resource('asmeda_category', 'Dashboard\AsmedaCategoryController');
    Route::resource('monzmat_category', 'Dashboard\MonzmatCategoryController');

    Route::resource('product', 'Dashboard\ProductController');

    Route::resource('factory', 'Dashboard\FactoryController');

    Route::resource('partner', 'Dashboard\PartnerController');

    Route::resource('service', 'Dashboard\ServiceController');

    Route::resource('team_member', 'Dashboard\TeamMemberController');

    Route::resource('gallary_category', 'Dashboard\GallaryCategoryController');

    Route::resource('gallary', 'Dashboard\GallaryController');

    Route::resource('contract', 'Dashboard\ContractController');

    Route::resource('feedback', 'Dashboard\FeedbackController');

    Route::resource('newsletter', 'Dashboard\NewsletterController');
    //sabreen
    Route::resource('company-service', 'Dashboard\CompanyServiceController');
    Route::resource('general-advices', 'Dashboard\GeneralAdvicesController');
    Route::resource('farmer-advices', 'Dashboard\FarmerAdvicesController');
    Route::resource('technical-advices', 'Dashboard\TechnicalAdvicesController');
    Route::resource('pro-types', 'Dashboard\ProductTypeController');
});

require __DIR__ . '/auth.php';
