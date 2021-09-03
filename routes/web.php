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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::get('/our_mission', [App\Http\Controllers\HomeController::class, 'our_mission'])->name('our_mission');
Route::get('/specialists', [App\Http\Controllers\HomeController::class, 'specialists'])->name('specialists');
Route::get('/testimonials', [App\Http\Controllers\HomeController::class, 'testimonials'])->name('testimonials');
Route::get('/md_in_office', [App\Http\Controllers\HomeController::class, 'md_in_office'])->name('md_in_office');
Route::get('/excursions', [App\Http\Controllers\HomeController::class, 'excursions'])->name('excursions');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

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

Route::prefix('dashboard')
    ->middleware(['dashboard','auth'])
    ->group(function(){

    Route::get('/index', [App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');

});

// DASHBOARD
