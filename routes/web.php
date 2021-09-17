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

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/our_mission', [App\Http\Controllers\HomeController::class, 'our_mission'])->name('our_mission');
Route::get('/specialists', [App\Http\Controllers\HomeController::class, 'specialists'])->name('specialists');
Route::get('/testimonials', [App\Http\Controllers\HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/md_in_office', [App\Http\Controllers\HomeController::class, 'md_in_office'])->name('md_in_office');
Route::get('/excursions', [App\Http\Controllers\HomeController::class, 'excursions'])->name('excursions');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::post('/contact-form', [App\Http\Controllers\HomeController::class, 'contactForm'])->name('contact-form');

Route::get('/services', [App\Http\Controllers\HomeController::class, 'services'])->name('services');
Route::get('/service_page', [App\Http\Controllers\HomeController::class, 'service_page'])->name('service_page');
Route::get('/prices', [App\Http\Controllers\HomeController::class, 'prices'])->name('prices');
Route::get('/shop_listing', [App\Http\Controllers\HomeController::class, 'shop_listing'])->name('shop_listing');

Route::get('/why_dr_brenes', [App\Http\Controllers\HomeController::class, 'why_dr_brenes'])->name('why_dr_brenes');
Route::get('/brenes_gallery', [App\Http\Controllers\HomeController::class, 'brenes_gallery'])->name('brenes_gallery');
Route::get('/brenes_gallery_simple', [App\Http\Controllers\HomeController::class, 'brenes_gallery_simple'])->name('brenes_gallery_simple');

Route::get('/our_specialist', [App\Http\Controllers\HomeController::class, 'our_specialist'])->name('our_specialist');
Route::get('/doctor_page', [App\Http\Controllers\HomeController::class, 'doctor_page'])->name('doctor_page');
Route::get('/schedule', [App\Http\Controllers\HomeController::class, 'schedule'])->name('schedule');

Route::get('/testimonials', [App\Http\Controllers\HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');

Route::get('/blog', [App\Http\Controllers\HomeController::class, 'blog'])->name('blog');
Route::get('/blog_grid', [App\Http\Controllers\HomeController::class, 'blog_grid'])->name('blog_grid');
Route::get('/blog_post_page', [App\Http\Controllers\HomeController::class, 'blog_post_page'])->name('blog_post_page');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



// DASHBOARD

Route::get('/settings', [\App\Http\Controllers\Dashboard\MainController::class, 'settings'])->name('main.settings');
Route::post('/settings', [\App\Http\Controllers\Dashboard\MainController::class, 'settings_store'])->name('main.settings_store');
Route::post('/admin_back', [\App\Http\Controllers\Dashboard\MainController::class, 'admin_back'])->name('main.admin_back');

Route::prefix('dashboard')
    ->middleware(['superAdmin','auth'])
    ->group(function(){

    Route::get('/index', [\App\Http\Controllers\Dashboard\SuperAdmin\DashboardController::class, 'index'])->name('dashboard.index');
    Route::post('/user_log_in', [\App\Http\Controllers\Dashboard\SuperAdmin\DashboardController::class, 'user_log_in'])->name('dashboard.user_log_in');
    Route::resource('users', '\App\Http\Controllers\Dashboard\SuperAdmin\UserController', ['as' => 'dashboard']);

    Route::resource('contact', '\App\Http\Controllers\Dashboard\SuperAdmin\ContactController', ['as' => 'dashboard']);

});

Route::prefix('coordinator')
    ->middleware(['coordinator','auth'])
    ->group(function(){

        Route::get('/index', [\App\Http\Controllers\Dashboard\Coordinator\DashboardController::class, 'index'])->name('coordinator.index');

});

Route::prefix('accounting')
    ->middleware(['accounting','auth'])
    ->group(function(){

        Route::get('/index', [\App\Http\Controllers\Dashboard\Accounting\DashboardController::class, 'index'])->name('accounting.index');


});

Route::prefix('dental_assistant')
    ->middleware(['dental_assistant','auth'])
    ->group(function(){

        Route::get('/index', [\App\Http\Controllers\Dashboard\DentalAssistant\DashboardController::class, 'index'])->name('dental_assistant.index');

});

Route::prefix('travel_coordinator')
    ->middleware(['travel_coordinator','auth'])
    ->group(function(){

        Route::get('/index', [\App\Http\Controllers\Dashboard\TravelCoordinator\DashboardController::class, 'index'])->name('travel_coordinator.index');

    });

Route::prefix('media_relations')
    ->middleware(['media_relations','auth'])
    ->group(function(){

        Route::get('/index', [\App\Http\Controllers\Dashboard\MediaRelations\DashboardController::class, 'index'])->name('media_relations.index');

    });

Route::prefix('operation_manager_and_doctor')
    ->middleware(['operation_manager_and_doctor','auth'])
    ->group(function(){

        Route::get('/index', [\App\Http\Controllers\Dashboard\OperationManagerAndDoctor\DashboardController::class, 'index'])->name('operation_manager_and_doctor.index');

    });



