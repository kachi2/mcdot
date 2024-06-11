<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\ClientJobController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ManagePagesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ClientLogoController;
use App\Http\Controllers\FaqContoller;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\MenuController as MenuPage;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\Check2faController;
use App\Http\Controllers\Controller;


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


require __DIR__.'/admin.php';




Route::get('/', [DashboardController::class, 'Index'])->name('index');
Route::get('/index', [DashboardController::class, 'Index'])->name('index');

Route::controller(PagesController::class)->group(function(){
    Route::get('/page/{slug}', 'Pages')->name('pages');
    Route::get('/pages/{slug}/{submenu}',  "SubPages")->name('subpages');
    Route::get('/blog/details/{id}',  'BlogDetails')->name('blog.details');
    Route::get('/jobs/industries/{id}',  'JobCategory')->name('industries-category');
    Route::post('/contactus/request', 'ContactEmails')->name('contact-email');
    });

    Route::controller(JobsController::class)->group(function() {
        Route::get('jobs/details/{job_id}', 'Details')->name('job-details');
    });


require __DIR__.'/auth.php';
